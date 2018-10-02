<?php

namespace Modules\Shopping\Http\Controllers;

use App\Helpers\CommonMethods;
use App\Helpers\Paypal;
use App\Helpers\RestWrapper;
use App\Helpers\SessionHdl;
use Carbon\Carbon;
use function Couchbase\defaultDecoder;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;
use Modules\Admin\Entities\Country;
use Modules\Shopping\Entities\Order;
use Modules\Shopping\Entities\OrderDetail;
use Modules\Shopping\Entities\OrderDocument;
use Modules\Shopping\Entities\ShippingAddress;

class CronController extends Controller
{
    public function __construct()
    {
        $this->CommonMethods = new CommonMethods();
    }

    /*
     * 1. Listado de Ordenes.
     * 2. Si la orden es tipo Inscription realizar el proceso processInscriptions y si no el proceso processOrder.
     */
    public function getProcess()
    {
        $orders_types = $this->getOrdersToProcess();

        foreach ($orders_types as $order_type)
        {
            foreach ($order_type as $ot)
            {
                if ($ot->so_shop_type == 'Inscription')
                {
                    $this->processInscriptions($ot);
                }
                else if ($ot->so_shop_type == 'Sell')
                {
                    $this->processOrders($ot);
                }
            }
        }
    }

    /*
     * 1. Obtiene el listado de Ordenes a procesar.
     */
    public function getOrdersToProcess()
    {
        $order = new Order();

        return $order->getOrders();
    }

    /*
     * 1. Proceso para Inscripciones.
     * 2. Obtenemos la info de la orden.
     */
    private function processInscriptions($order_type)
    {
        $data = $this->getOrderInfo($order_type->so_id);

        if ($data)
        {
            $statusAddEntrepreneur = false;
            $statusAddSalesWeb = false;
            $country = Country::find($data->so_country_id);

            /* Consumir Servicios AddFormEntrepreneur, AddEntrepreneur y AddSalesWeb */
            if ($data->so_saved_dataeo == 0)
            {
                $paramsTtAddFormEntrepreneur = $this->getTtAddFormEntrepreneur($data);
                $paramsTtAddFormDoctos = $this->getTtAddFormDoctos($data);

                $restWrapperAddFormEntrepreneur = new RestWrapper($country->webservice . 'addFormEntrepreneur');
                $paramsAddFormEntrepreneur = [
                    'request' => [
                        'CountryKey' => $country->corbiz_key,
                        'Lang' => $country->language->corbiz_key,
                        'AddFormEntrepreneur' => [
                            'ttAddFormEntrepreneur' => $paramsTtAddFormEntrepreneur
                        ],
                        'AddFormDoctos' => [
                            'ttAddFormDoctos' => $paramsTtAddFormDoctos
                        ]
                    ]
                ];

                $resultAddFormEntrepreneur = $restWrapperAddFormEntrepreneur->call('POST', $paramsAddFormEntrepreneur, 'json', ['http_errors' => false]);

                if ($resultAddFormEntrepreneur['success'] && $resultAddFormEntrepreneur['responseWS']['response']['Success'] == 'true')
                {
                    $statusAddEntrepreneur = true;
                    //$this->saveString(json_encode($paramsAddFormEntrepreneur), json_encode($resultAddFormEntrepreneur), 'inscripcion');
                }
                else if (!$resultAddFormEntrepreneur['success'] && isset($resultAddFormEntrepreneur['responseWS']['response']) && $resultAddFormEntrepreneur['responseWS']['response']['Success'] == 'false' && isset($resultAddFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError']))
                {
                    $error_corbiz = '';
                    $error_user = '';

                    foreach ($resultAddFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err)
                    {
                        $error_corbiz .= $err['messTech'] . PHP_EOL;
                        $error_user .= $err['messUser'] . PHP_EOL;
                    }

                    $this->updateOrderStatus($data, 'CORBIZ_ERROR', 0, $error_corbiz, $error_user);
                    //$this->saveString(json_encode($paramsAddFormEntrepreneur), json_encode($resultAddFormEntrepreneur), 'inscripcion');
                }
                else
                {
                    $this->updateOrderStatus($data, 'CORBIZ_ERROR', 0, isset($resultAddFormEntrepreneur['message']), isset($resultAddFormEntrepreneur['responseWS']['_errors'][0]['_errorMsg']));
                    //$this->saveString(json_encode($paramsAddFormEntrepreneur), json_encode($resultAddFormEntrepreneur), 'inscripcion');
                }
            }
            else if ($data->so_saved_dataeo == 1)
            {
                /* Consumir Servicio AddSalesWeb */
                if ($data->so_distributor_number != null || $data->so_distributor_number != '')
                {
                    $statusAddSalesWeb = true;
                }
                /* Consumir Servicios AddEntrepreneur y AddSalesWeb */
                else
                {
                    $statusAddEntrepreneur = true;
                }
            }

            if ($statusAddEntrepreneur)
            {
                $restWrapperAddEntrepreneur = new RestWrapper($country->corbiz_key . 'addEntrepreneur');
                $paramsAddEntrepreneur = [
                    'request' => [
                        'CountryKey' => $country->corbiz_key,
                        'Lang' => $country->language->corbiz_key,
                        'AddEntrepreneur' => [
                            'ttAddEntrepreneur' => [
                                [
                                    'countrySale' => $country->corbiz_key,
                                    'idTransaction' => $data->so_corbiz_transaction
                                ]
                            ],
                        ]
                    ]
                ];

                $resultAddEntrepreneur = $restWrapperAddEntrepreneur->call('POST', $paramsAddEntrepreneur, 'json', ['http_errors' => false]);

                if ($resultAddEntrepreneur['success'] && $resultAddEntrepreneur['responseWS']['response']['Success'] == 'true')
                {
                    $statusAddSalesWeb = true;

                    $this->updateEo($data, $resultAddEntrepreneur['responseWS']['response']['EntrepreneurId']);

                    $emailsSend = Config::get('cms.email_send');
                    $from_email = $emailsSend[$country->corbiz_key];

                    /* Envio de mail sponsor */
                    $data_sponsor = [
                        'view_mail'         => 'shopping::frontend.register.includes.' . strtolower($country->corbiz_key) . '.mails.sponsor',
                        'from_email'        => $from_email,
                        'title'             => trans('shopping::register.mail.sponsor.title'),
                        'to_email'          => 'daniel.herrera@omnilife.com',//$data->ssa_sponsor_email,
                        'name'              => $data->ssa_sponsor_name,
                        'subject'           => trans('shopping::register_customer.mail.sponsor.subject'),
                        'name_customer'     => ($data->ssa_eo_lastname != '' || $data->ssa_eo_lastname != null) ? $data->ssa_eo_name . ' ' . $data->ssa_eo_lastname : $data->ssa_eo_name,
                        'code_customer'     => $resultAddEntrepreneur['responseWS']['response']['EntrepreneurId'],
                        'tel_customer'      => isset($data->ssa_telephone) ? $data->ssa_telephone : $data->ssa_cellphone,
                        'email_customer'    => $data->ssa_email
                    ];

                    if (($from_email != '' || $from_email != null) /*&& ($data->ssa_sponsor_email != '' || $data->ssa_sponsor_email != null)*/)
                    {
                        $this->CommonMethods->getSendMail($data_sponsor);
                    }

                    /* Envio de mail entrepreneur */
                    $data_entrepreneur = [
                        'view_mail'     => 'shopping::frontend.register.includes.' . strtolower($country->corbiz_key) . '.mails.customer',
                        'from_email'    => $from_email,
                        'title'         => trans('shopping::register_customer.mail.customer.title'),
                        'to_email'      => 'daniel.herrera@omnilife.com',//$data->ssa_email,
                        'name'          => ($data->ssa_eo_lastname != '' || $data->ssa_eo_lastname != null) ? $data->ssa_eo_name . ' ' . $data->ssa_eo_lastname : $data->ssa_eo_name,
                        'subject'       => trans('shopping::register_customer.mail.customer.subject'),
                        'code'          => $resultAddEntrepreneur['responseWS']['response']['EntrepreneurId'],
                        'password'      => $resultAddEntrepreneur['responseWS']['response']['Password'],
                        'question'      => $resultAddEntrepreneur['responseWS']['response']['Question'],
                        'name_sponsor'  => $data->ssa_sponsor_name,
                        'email_sponsor' => $data->ssa_sponsor_email,
                    ];

                    if (($from_email != '' || $from_email != null) /*&& ($data->ssa_email != '' || $data->ssa_email != null)*/)
                    {
                        $this->CommonMethods->getSendMail($data_entrepreneur);
                    }
                    //$this->saveString(json_encode($paramsAddEntrepreneur), json_encode($resultAddEntrepreneur), 'inscripcion');
                }
                else if (!$resultAddEntrepreneur['success'] && isset($resultAddEntrepreneur['responseWS']['response']) && $resultAddEntrepreneur['responseWS']['response']['Success'] == 'false' && isset($resultAddEntrepreneur['responseWS']['response']['Error']['dsError']['ttError']))
                {
                    $error_corbiz = '';
                    $error_user = '';

                    foreach ($resultAddEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err)
                    {
                        $error_corbiz .= $err['messTech'] . PHP_EOL;
                        $error_user .= $err['messUser'] . PHP_EOL;
                    }

                    $this->updateOrderStatus($data, 'CORBIZ_ERROR', 0, $error_corbiz, $error_user);
                    //$this->saveString(json_encode($paramsAddEntrepreneur), json_encode($resultAddEntrepreneur), 'inscripcion');
                }
                else
                {
                    $this->updateOrderStatus($data, 'CORBIZ_ERROR', 0, isset($resultAddEntrepreneur['message']), isset($resultAddEntrepreneur['responseWS']['_errors'][0]['_errorMsg']));
                    //$this->saveString(json_encode($paramsAddEntrepreneur), json_encode($resultAddEntrepreneur), 'inscripcion');
                }
            }

            if ($statusAddSalesWeb)
            {
                $data_update = $this->getOrderInfo($data->so_id);

                $paramsTtSalesWeb = $this->getTtSalesWebParams($data_update);
                $paramsTtSalesWebItems = $this->getTtSalesWebItemsParams($data_update);

                $restWrapperAddSalesWeb = new RestWrapper($country->webservice . 'addSalesWeb');
                $paramsAddSalesWeb = [
                    'request' => [
                        'CountryKey' => $country->corbiz_key,
                        'Lang' => $country->language->corbiz_key,
                        'SalesWeb' => [
                            'ttSalesWeb' => [
                                $paramsTtSalesWeb
                            ],
                        ],
                        'SalesWebItems' => [
                            'ttSalesWebItems' => $paramsTtSalesWebItems
                        ]
                    ]
                ];

                $resultAddSalesWeb = $restWrapperAddSalesWeb->call('POST', $paramsAddSalesWeb, 'json', ['http_errors' => false]);

                if ($resultAddSalesWeb['success'] && $resultAddSalesWeb['responseWS']['response']['Success'] == 'true')
                {
                    $this->updateOrderStatus($data_update, 'ORDER_COMPLETE', $resultAddSalesWeb['responseWS']['response']['Orden'], '', '', $resultAddSalesWeb['responseWS']['response']['Discount']);

                    $supportEmails = Config::get('cms.email_send');
                    $from_email = $supportEmails[$country->corbiz_key];

                    $data_email  = [
                        'view_mail'     => 'shopping::frontend.shopping.includes.' . $country->corbiz_key . '.mails.payment_success_order_corbiz',
                        'from_email'    => $from_email,
                        'title'         => trans('shopping::register_customer.mail_address.title'),
                        'to_email'      => 'daniel.herrera@omnilife.com',//$data_update->ssa_email,
                        'name'          => ($data_update->ssa_eo_lastname != '' || $data_update->ssa_eo_lastname != null) ? $data_update->ssa_eo_name . ' ' . $data_update->ssa_eo_lastname : $data_update->ssa_eo_name,
                        'subject'       => trans('shopping::checkout.confirmation.emails.order_success'),
                        'order'         => $resultAddSalesWeb['responseWS']['response']['Orden'],
                    ];

                    if (($from_email != null || $from_email != '') /*&& ($data_update->ssa_email != '' || $data_update->ssa_email != null)*/)
                    {
                        Mail::send($data_email['view_mail'], ['order' => $data_email['order']], function($m) use ($data_email) {
                            $m->from($data_email['from_email'], $data_email['title']);
                            $m->to($data_email['to_email'], $data_email['name'])->subject($data_email['subject']);
                        });
                        //$this->CommonMethods->getSendMail($data_email);
                    }
                    //$this->saveString(json_encode($paramsAddSalesWeb), json_encode($resultAddSalesWeb), 'venta');
                }
                else if (!$resultAddSalesWeb['success'] && isset($resultAddSalesWeb['responseWS']['response']) && $resultAddSalesWeb['responseWS']['response']['Success'] == 'false' && isset($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError']))
                {
                    $error_corbiz = '';
                    $error_user = '';

                    foreach ($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err)
                    {
                        $error_corbiz .= $err['messTech'] . PHP_EOL;
                        $error_user .= $err['messUser'] . PHP_EOL;
                    }

                    $this->updateOrderStatus($data_update, 'CORBIZ_ERROR', 0, $error_corbiz, $error_user);
                    //$this->saveString(json_encode($paramsAddSalesWeb), json_encode($resultAddSalesWeb), 'venta');
                }
                else
                {
                    $this->updateOrderStatus($data_update, 'CORBIZ_ERROR', 0, isset($resultAddSalesWeb['message']), isset($resultAddSalesWeb['responseWS']['_errors'][0]['_errorMsg']));
                    //$this->saveString(json_encode($paramsAddSalesWeb), json_encode($resultAddSalesWeb), 'venta');
                }
            }
        }
        else
        {
            $this->saveString('Sin peticiones por procesar', 'Sin peticiones por procesar', 'inscripcion');
        }
    }

    private function processOrders($order_type)
    {
        $data = $this->getOrderInfo($order_type->so_id);

        if ($data)
        {
            $country = Country::find($data->so_country_id);
            $paramsTtSalesWeb = $this->getTtSalesWebParams($data);
            $paramsTtSalesWebItems = $this->getTtSalesWebItemsParams($data);

            $restWrapperAddSalesWeb = new RestWrapper($country->webservice . 'addSalesWeb');
            $paramsAddSalesWeb = [
                'request' => [
                    'CountryKey' => $country->corbiz_key,
                    'Lang' => $country->language->corbiz_key,
                    'SalesWeb' => [
                        'ttSalesWeb' => [
                            $paramsTtSalesWeb
                        ],
                    ],
                    'SalesWebItems' => [
                        'ttSalesWebItems' => $paramsTtSalesWebItems
                    ]
                ]
            ];

            $resultAddSalesWeb = $restWrapperAddSalesWeb->call('POST', $paramsAddSalesWeb, 'json', ['http_errors' => false]);

            if ($resultAddSalesWeb['success'] && $resultAddSalesWeb['responseWS']['response']['Success'] == 'true')
            {
                $this->updateOrderStatus($data, 'ORDER_COMPLETE', $resultAddSalesWeb['responseWS']['response']['Orden'], '', '', $resultAddSalesWeb['responseWS']['response']['Discount']);

                $supportEmails = Config::get('cms.email_send');
                $from_email = $supportEmails[$country->corbiz_key];

                $data_email  = [
                    'view_mail'     => 'shopping::frontend.shopping.includes.' . $country->corbiz_key . '.mails.payment_success_order_corbiz',
                    'from_email'    => $from_email,
                    'title'         => trans('shopping::register_customer.mail_address.title'),
                    'to_email'      => 'daniel.herrera@omnilife.com',//$data->ssa_email,
                    'name'          => $data->ssa_eo_name . ' ' . $data->ssa_eo_lastname,
                    'subject'       => trans('shopping::checkout.confirmation.emails.order_success'),
                    'order'         => $resultAddSalesWeb['responseWS']['response']['Orden'],
                ];

                if (($from_email != null || $from_email != '') /*&& ($data->ssa_email != '' || $data->ssa_email != null)*/)
                {
                    Mail::send($data_email['view_mail'], ['order' => $data_email['order']], function($m) use ($data_email) {
                        $m->from($data_email['from_email'], $data_email['title']);
                        $m->to($data_email['to_email'], $data_email['name'])->subject($data_email['subject']);
                    });
                    //$this->CommonMethods->getSendMail($data_email);
                }
                //$this->saveString(json_encode($paramsAddSalesWeb), json_encode($resultAddSalesWeb), 'venta');
            }
            else if (!$resultAddSalesWeb['success'] && isset($resultAddSalesWeb['responseWS']['response']) && $resultAddSalesWeb['responseWS']['response']['Success'] == 'false' && isset($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError']))
            {
                $error_corbiz = '';
                $error_user = '';

                foreach ($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err)
                {
                    $error_corbiz .= $err['messTech'] . PHP_EOL;
                    $error_user .= $err['messUser'] . PHP_EOL;
                }

                $this->updateOrderStatus($data, 'CORBIZ_ERROR', 0, $error_corbiz, $error_user);
                //$this->saveString(json_encode($paramsAddSalesWeb), json_encode($resultAddSalesWeb), 'venta');
            }
            else
            {
                $this->updateOrderStatus($data, 'CORBIZ_ERROR', 0, isset($resultAddSalesWeb['message']), isset($resultAddSalesWeb['responseWS']['_errors'][0]['_errorMsg']));
                //$this->saveString(json_encode($paramsAddSalesWeb), json_encode($resultAddSalesWeb), 'venta');
            }
        }
        else
        {
            $this->saveString('Sin peticiones por procesar', 'Sin peticiones por procesar', 'venta');
        }
    }

    /*
     * 1. Obtiene la informacion de la orden.
     */
    private function getOrderInfo($order_type)
    {
        $order = new Order();

        return $order->getOrderInfo($order_type);
    }

    private function getTtAddFormEntrepreneur($data)
    {
        $country = Country::find($data->so_country_id);
        $order_detail = OrderDetail::where([['order_id', '=', $data->so_id], ['is_kit', '=', 1]])->first();

        return [
            [
                'countrysale' => $country->corbiz_key,
                'idtransaction' => $data->so_corbiz_transaction,
                'sponsor' => $data->ssa_sponsor,
                'lastnamef' => $data->ssa_eo_lastnamem,
                'lastnamem' => $data->ssa_eo_lastname,
                'names' => $data->ssa_eo_name,
                'birthdate' => $data->ssa_birthdate,
                'address' => $data->ssa_address,
                'number' => ($data->ssa_number != '' || $data->ssa_numer != null) ? $data->ssa_number : '',
                'suburb' => ($data->ssa_suburb != '' || $data->ssa_suburb != null) ? $data->ssa_suburb : '',
                'complement' => ($data->ssa_complement != '' || $data->ssa_complement != null) ? $data->ssa_complement : '',
                'phone' => ($data->ssa_telephone != '' || $data->ssa_telephone != null) ? $data->ssa_telephone : '',
                'cellphone' => ($data->ssa_cellphone != '' || $data->ssa_cellphone != null) ? $data->ssa_cellphone : '',
                'country' => $country->corbiz_key,
                'state' => ($data->ssa_state != '' || $data->ssa_state != null) ? $data->ssa_state : '',
                'city' => ($data->ssa_city != '' || $data->ssa_city != null) ? $data->ssa_city : '',
                'county' => ($data->ssa_county != '' || $data->ssa_county != null) ? $data->ssa_county : '',
                'zipcode' => ($data->ssa_zip_code != '' || $data->ssa_zip_code != null) ? $data->ssa_zip_code : '',
                'email' => $data->ssa_email,
                'sex' => $data->ssa_gender,
                'idcenter' => $this->CommonMethods->getWarehouseId($country->id, $data->so_warehouse_id),
                'warehouse' => $data->so_warehouse_id,
                'iditem' => $order_detail->countryProduct->product->sku,
                'questions' => $data->ssa_security_question_id,
                'answer' => $data->ssa_answer,
                'receive_adversiting' => ($data->so_advertise_checked != '' || $data->so_advertise_checked != null) ? true : false,
                'zsource' => 'WEB',
                'zcreate' => true,
                'lang' => $country->language->corbiz_key,
                'pool' => false,
                'client_type' => ''
            ]
        ];
    }

    private function getTtAddFormDoctos($data)
    {
        $country = Country::find($data->so_country_id);
        $order_documents = OrderDocument::where([['order_id', '=', $data->so_id]])->get();
        $documents = [];

        if ($order_documents != null || $order_documents != '')
        {
            foreach ($order_documents as $document)
            {
                $documents[] = [
                    'countrysale' => $country->corbiz_key,
                    'idtransaction' => $data->so_corbiz_transaction,
                    'countrydoc' => $country->corbiz_key,
                    'iddocument' => $document->document_key,
                    'numberdoc' => $document->document_number,
                    'expirationdate' => $document->expiration_date,
                ];
            }
        }
        else
        {
            $documents[] = [
                'countrysale' => '',
                'idtransaction' => '',
                'countrydoc' => '',
                'iddocument' => '',
                'numberdoc' => '',
                'expirationdate' => '',
            ];
        }

        return $documents;
    }

    private function getTtSalesWebParams($data)
    {
        $country = Country::find($data->so_country_id);

        return [
            'countrysale' => $country->corbiz_key,
            'no_trans' => $data->so_corbiz_transaction,
            'distributor' => $data->so_distributor_number,
            'amount' => $data->so_total,
            'receiver' => ($data->ssa_eo_lastname != '' || $data->ssa_eo_lastname != null) ? $data->ssa_eo_name . ' ' . $data->ssa_eo_lastname : $data->ssa_eo_name,
            'address' => $data->ssa_address,
            'number' => ($data->ssa_number != '' || $data->ssa_number != null) ? $data->ssa_number : '',
            'suburb' => ($data->ssa_suburb != '' || $data->ssa_suburb != null) ? $data->ssa_suburb : '',
            'complement' => ($data->ssa_complement != '' || $data->ssa_complement != null) ? $data->ssa_complement : '',
            'state' => $data->ssa_state,
            'city' => $data->ssa_city,
            'county' => ($data->ssa_county != '' || $data->ssa_county != null) ? $data->ssa_county : '',
            'zipcode' => ($data->ssa_zip_code != '' || $data->ssa_zip_code != null) ? $data->ssa_zip_code : '',
            'shippingcompany' => $data->so_shipping_company,
            'altAddress' => ($data->ssa_folio_address != 0) ? $data->ssa_folio_address : 0,
            'email' => $data->ssa_email,
            'phone' => ($data->ssa_telephone != '' || $data->ssa_telephone != null) ? $data->ssa_telephone : '',
            'previousperiod' => ($data->so_change_period == 0) ? false : true,
            'source' => 'WEB', /* Pendiente de Validar Jose si sera con BD o archivo config */
            'type_mov'=> 'VENTA',
            'codepaid' => Config::get('shopping.paymentCorbizRelation.' . $country->corbiz_key . '.' . $data->so_bank_id),
            'zcreate' => true
        ];
    }

    private function getTtSalesWebItemsParams($data)
    {
        $country = Country::find($data->so_country_id);
        $order_details = OrderDetail::where([['order_id', '=', $data->so_id], ['active', '=', 1]])->get();
        $items = [];

        foreach ($order_details as $key => $value)
        {
            $sku = '';

            if ($value->is_promo == 1)
            {
                if ($value->promo_prod_id > 0)
                {
                    $sku = $value->productSkuPromo->clv_producto;
                }
                else if ($value->promo_prod_id == 0)
                {
                    $sku = $value->product_code;
                }
            }
            else if ($value->is_special == 1)
            {
                $sku = $value->product_code;
            }
            else
            {
                $sku = $value->countryProduct->product->sku;
            }

            $items[] = [
                'numline' => $key + 1,
                'countrysale' => $country->corbiz_key,
                'item' => $sku,
                'quantity ' => $value->quantity,
                'listPrice' => $value->list_price,
                'discPrice' => $value->final_price,
                'points' => $value->points,
                'promo' => ($value->is_promo == 0) ? false : true
            ];
        }

        return $items;
    }

    private function updateEo($order, $eo_number)
    {
        $update_shipping_address = [
            'eo_number' => $eo_number
        ];

        ShippingAddress::query()->where('order_id', '=', $order->so_id)->update($update_shipping_address);

        $update_order = [
            'distributor_number' => $eo_number
        ];

        Order::query()->where('id', '=', $order->so_id)->update($update_order);
    }

    private function updateOrderStatus($order, $status, $corbiz_order, $error_corbiz, $error_user, $discount = null)
    {
        $order_status = $this->CommonMethods->getOrderStatusId($status, $order->so_country_id);

        $update = [
            'corbiz_order_number' => $corbiz_order,
            'order_estatus_id' => $order_status,
            'error_corbiz' => trim($error_corbiz),
            'error_user' => trim($error_user),
        ];

        if ($discount != null || $discount != '')
        {
            $update['discount'] = $discount;
        }

        Order::query()->where('id', '=', $order->so_id)->update($update);
    }

    /*
     * 1. Escribimos el log en el archivo.
     */
    public function saveString($request, $response, $type)
    {
        try
        {
            $file_path = $this->getFilePath($type);
            $handle = fopen($file_path, 'a+');
            $text = date('H:i:s') . (chr(13) . chr(10));
            $text .= 'REQUEST => ' . ($request . chr(13) . chr(10));
            $text .= 'RESPONSE => ' . ($response . chr(13) . chr(10) . chr(13) . chr(10));
            fwrite($handle, $text);
            fclose($handle);

            return true;
        }
        catch (Exception $e)
        {
            throw new Exception('Ocurrio un problema al guardar el registro ' . $e->getMessage());
        }
    }

    /*
     * 1. Obtenemos el archivo para guardar el log.
     */
    public function getFilePath($type)
    {
        try
        {
            $date = Carbon::now();
            $base_path = $this->getBasePath() . DIRECTORY_SEPARATOR . $type;
            $this->createPath($base_path);

            $path = $base_path . DIRECTORY_SEPARATOR . $date->format('Y');
            $this->createPath($path);

            $path .= DIRECTORY_SEPARATOR . $date->format('m');
            $this->createPath($path);

            $path .= DIRECTORY_SEPARATOR . $date->format('d') . '.txt';

            return $this->createPath($path);
        }
        catch (Exception $e)
        {
            throw new Exception('Ocurrio un problema al guardar el registro ' . $e->getMessage());
        }
    }

    /*
     * 1. Creamos el archivo si no existe.
     */
    private function createPath($path)
    {
        if (!file_exists($path))
        {
            mkdir($path);
        }

        return $path;
    }

    /*
     * 1. Obtenemos la configuracion de la url donde guardar el archivo.
     */
    protected function getBasePath() {
        return Config::get('shopping.cron.base_path');
    }


    /**
     * Cron para procesar los pagos pendientes y/o con error de Paypal
     *
     */
    public function processPaypalPendingOrders() {
        $this->processPendingOrders('PAYMENT_PENDING');
        $this->processPendingOrders('CONNECTION_ERROR');
    }

    private function processPendingOrders($status) {
        $common        = new CommonMethods();
        $ordersPending = Order::getOrdersByStatus($status);

        foreach ($ordersPending as $countryKey => $orders) {
            $country       = Country::where('corbiz_key', $countryKey)->first();
            $date          = new \DateTime('now', new \DateTimeZone($country->timezone));
            $paypal        = new Paypal(strtolower($countryKey));
            $tokenResponse = $paypal->getAccessToken();

            foreach ($orders as $order) {
                $payId = $order->bank_transaction;

                if (!empty($payId)) {
                    if ($tokenResponse['success'] && isset($tokenResponse['access_token'])) {
                        $response = $paypal->getPayment($tokenResponse['access_token'], $payId);

                        if ($response['success'] && isset($response['data'])) {

                            $payTransaction = isset($response['data']->transactions[0]->related_resources[0]->sale->id) ? $response['data']->transactions[0]->related_resources[0]->sale->id : null;
                            $paymentState   = isset($response['data']->transactions[0]->related_resources[0]->sale->state) ? $response['data']->transactions[0]->related_resources[0]->sale->state : '';

                            if ($response['data']->state == 'approved' && $paymentState == 'completed') {
                                Order::where('order_number', $order->order_number)->update([
                                    'order_estatus_id'   => $common->getOrderStatusId('PAYMENT_SUCCESSFUL', $country->id),
                                    'bank_authorization' => $payTransaction,
                                    'bank_status'        => $paymentState,
                                    'updated_at'         => $date->format('Y-m-d H:i:s'),
                                ]);

                            } else if($paymentState == 'refunded') {
                                Order::where('order_number', $order->order_number)->update([
                                    'order_estatus_id'   => $common->getOrderStatusId('PAYMENT_REJECTED', $country->id),
                                    'bank_status'        => $paymentState,
                                    'updated_at'         => $date->format('Y-m-d H:i:s'),
                                ]);
                            } else {
                                Order::where('order_number', $order->order_number)->update([
                                    'order_estatus_id'   => $common->getOrderStatusId('PAYMENT_RETRY', $country->id),
                                    'bank_status'        => $response['data']->state,
                                    'updated_at'         => $date->format('Y-m-d H:i:s'),
                                ]);
                            }
                        }

                    }
                }
            }
        }

        echo "END -> {$status}<br>";
    }
}