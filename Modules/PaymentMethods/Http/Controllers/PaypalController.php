<?php

namespace Modules\PaymentMethods\Http\Controllers;

use App\Helpers\CommonMethods;
use App\Helpers\Paypal;
use App\Helpers\SessionHdl;
use App\Helpers\SessionRegisterHdl;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Modules\Shopping\Entities\Order;
use Modules\Shopping\Entities\OrderDetail;
use Modules\Shopping\Entities\ShippingAddress;

class PaypalController extends Controller {

    private $common;

    public function __construct() {
        $this->common = new CommonMethods();
    }

    public function createPayment(Request $request) {
        $country =  $request->input('type') == 'register' ? SessionRegisterHdl::getCorbizCountryKey() : SessionHdl::getCorbizCountryKey();
        $timezone = $request->input('type') == 'register' ? SessionRegisterHdl::getTimeZone()         : SessionHdl::getTimeZone();
        $countryId = $request->input('type') == 'register' ? SessionRegisterHdl::getCountryID()       : SessionHdl::getCountryID();

        $paypal   = new Paypal(strtolower($country));
        $date     = new \DateTime('now', new \DateTimeZone($timezone));
        $response = ['success' => false];

        if ($request->has('order')) {
            $orderNumber = $request->input('order');

            $order = [];
            $order['order']    = Order::where('order_number', $orderNumber)->first();
            $order['items']    = OrderDetail::where('order_id', $order['order']->id)->get();
            $order['shipping'] = ShippingAddress::where('order_id', $order['order']->id)->first();

            Order::where('order_number', $orderNumber)->update([
                'order_estatus_id' => $this->common->getOrderStatusId('NEW_ORDER', $countryId),
                'updated_at'       => $date->format('Y-m-d H:i:s')
            ]);

            $tokenResponse = $paypal->getAccessToken();
            if ($tokenResponse['success'] && isset($tokenResponse['access_token'])) {
                $payment = $paypal->createPayment($tokenResponse['access_token'], $order);
                if ($payment['success'] && isset($payment['data']->id)) {
                    Order::where('order_number', $orderNumber)->update([
                        'order_estatus_id' => $this->common->getOrderStatusId('REQUEST_PAYMENT_INFORMATION', $countryId),
                        'payment_brand'    => 'PAYPAL',
                        'bank_transaction' => $payment['data']->id,
                        'updated_at'       => $date->format('Y-m-d H:i:s'),
                    ]);

                    $response['paymentId'] = $payment['data']->id;
                    $response['success']   = true;
                } else {
                    if (isset($payment['data']->details[0])) {
                        $response['message'] = $payment['data']->details[0]->issue;
                    } else {
                        $response['message'] = trans('shopping::checkout.payment.errors.sys103');;
                    }

                    Log::error('ERR (SYS101): ' . (isset($payment['error']) ? $payment['error'] : 'Problema al pagar con Paypal'));
                }
            }
        }

        return response()->json($response);
    }

    public function cancelPayment(Request $request) {
        $country =  $request->input('type') == 'register' ? SessionRegisterHdl::getCorbizCountryKey() : SessionHdl::getCorbizCountryKey();
        $timezone = $request->input('type') == 'register' ? SessionRegisterHdl::getTimeZone()         : SessionHdl::getTimeZone();
        $countryId = $request->input('type') == 'register' ? SessionRegisterHdl::getCountryID()       : SessionHdl::getCountryID();

        $response    = ['success' => false];
        $date        = new \DateTime('now', new \DateTimeZone($timezone));
        $orderNumber = $request->input('order', null);

        if (!is_null($orderNumber) && Order::where('order_number', $orderNumber)->count() > 0) {
            Order::where('order_number', $orderNumber)->update([
                'order_estatus_id' => $this->common->getOrderStatusId('PAYMENT_CANCELED', $countryId),
                'updated_at'       => $date->format('Y-m-d H:i:s'),
            ]);
            $response['success'] = true;
        }

        return response()->json($response);
    }

    public function processPayment(Request $request) {

        $country =  $request->input('type') == 'register' ? SessionRegisterHdl::getCorbizCountryKey() : SessionHdl::getCorbizCountryKey();
        $timezone = $request->input('type') == 'register' ? SessionRegisterHdl::getTimeZone()         : SessionHdl::getTimeZone();
        $countryId = $request->input('type') == 'register' ? SessionRegisterHdl::getCountryID()       : SessionHdl::getCountryID();

        $paypal    = new Paypal(strtolower($country));

        $paymentId = $request->input('paymentID');
        $payerId   = $request->input('payerID');
        $response  = ['success' => false];
        $date      = new \DateTime('now', new \DateTimeZone($timezone));

        if ($payerId === null || $paymentId === null || $payerId == 'null' || $paymentId == 'null') {
            $response['errors'] = [trans('shopping::checkout.payment.errors.sys102')];
            Log::error('ERR (SYS102): No se recibieron correctamente las variables $payerId='.((string)$payerId).' y $paymentId='.((string)$payerId));
        }

        $order = Order::where('bank_transaction', $paymentId)->first();
        if (is_null($order)) {
            $response['errors'] = [trans('shopping::checkout.payment.errors.sys004')];
            Log::error('ERR (SYS004): No se encontró la order con el bank_transaction: ' . $paymentId);
        }

        $tokenResponse = $paypal->getAccessToken();
        if ($tokenResponse['success'] && isset($tokenResponse['access_token'])) {
            $responsePayment = $paypal->processPayment($tokenResponse['access_token'], $payerId, $paymentId);

            $newOrderData = [];
            $status       = '';
            $errorMessage = '';

            if ($responsePayment['success'] && isset($responsePayment['data'])) {
                $payTransaction = isset($responsePayment['data']->transactions[0]->related_resources[0]->sale->id)          ? $responsePayment['data']->transactions[0]->related_resources[0]->sale->id          : null;
                $paymentState   = isset($responsePayment['data']->transactions[0]->related_resources[0]->sale->state)       ? $responsePayment['data']->transactions[0]->related_resources[0]->sale->state       : '';
                $reasonCode     = isset($responsePayment['data']->transactions[0]->related_resources[0]->sale->reason_code) ? $responsePayment['data']->transactions[0]->related_resources[0]->sale->reason_code : '';

                if ($paymentState == 'completed' && $responsePayment['data']->state == 'approved') {
                    # PAGO APROBADO
                    $status = 'PAYMENT_SUCCESSFUL';
                    $newOrderData['bank_authorization'] = $payTransaction;
                    $newOrderData['bank_status'] = $paymentState;

                } else {
                    if ($paymentState == 'pending' && $reasonCode == 'PAYMENT_REVIEW') {
                        # PAGO EN REVISIÓN
                        $status = 'PAYMENT_PENDING';
                    } else {
                        # PAGO RECHAZADO
                        $status = 'PAYMENT_REJECTED';
                        $errorMessage = trans('shopping::checkout.payment.errors.payment_rejected');
                    }

                    $newOrderData['bank_status'] = $paymentState;
                }
            } else {
                $status = 'PAYMENT_REJECTED';
                $newOrderData['bank_error'] = isset($responsePayment['data']->name) ? $responsePayment['data']->name : '';

                if (isset($responsePayment['data']->name) && ($responsePayment['data']->name == 'INSTRUMENT_DECLINED' || $responsePayment['data']->name == 'TRANSACTION_REFUSED')) {
                    # PAGO DECLINADO O TRANSACCIÓN RECHAZADA
                    $errorMessage = trans('shopping::checkout.payment.errors.instrument_declined');

                } else if (isset($responsePayment['data']->name) && $responsePayment['data']->name == 'BANK_ACCOUNT_VALIDATION_FAILED') {
                    # ERROR DE VALIDACIÓN DEL BANCO
                    $errorMessage = trans('shopping::checkout.payment.errors.bank_account_validation_failed');

                } else if (isset($responsePayment['data']->name) && $responsePayment['data']->name == 'CREDIT_CARD_CVV_CHECK_FAILED') {
                    # ERROR CON EL CVV
                    $errorMessage = trans('shopping::checkout.payment.errors.credit_card_cvv_check_failed');

                } else if (isset($responsePayment['data']->name) && $responsePayment['data']->name == 'CREDIT_CARD_REFUSED') {
                    # TARJETA DE CRÉDITO RECHAZADA
                    $errorMessage = trans('shopping::checkout.payment.errors.credit_card_refused');

                } else if (isset($responsePayment['data']->name) && $responsePayment['data']->name == 'CREDIT_PAYMENT_NOT_ALLOWED') {
                    # PAGO DE CRÉDITO NO PERMITIDO
                    $errorMessage = trans('shopping::checkout.payment.errors.credit_payment_not_allowed');

                } else if (isset($responsePayment['data']->name) && $responsePayment['data']->name == 'INSUFFICIENT_FUNDS') {
                    # FONDOS INSUFICIENTES
                    $errorMessage = trans('shopping::checkout.payment.errors.insufficient_funds');

                } else if (isset($responsePayment['data']->name) && $responsePayment['data']->name == 'PAYMENT_DENIED') {
                    # PAGO DENEGADO POR PAYPAL
                    $errorMessage = trans('shopping::checkout.payment.errors.payment_denied');

                } else if(isset($responsePayment['data']->name) && $responsePayment['data']->name == 'INTERNAL_SERVICE_ERROR') {
                    # ERROR INTERNO DE PAYPAL
                    $status = 'CONNECTION_ERROR';
                    $errorMessage = trans('shopping::checkout.payment.errors.internal_service_error');

                } else if (isset($responsePayment['data']->name) && $responsePayment['data']->name == 'INTERNAL_SERVICE_ERROR') {
                    # PAGO EXPIRADO
                    $errorMessage = trans('shopping::checkout.payment.errors.payment_expired');

                } else {
                    # OTROS ERRORES
                    $errorMessage = trans('shopping::checkout.payment.errors.sys103');
                }
            }

            # Actualizar la orden
            $this->updateOrderStatus($order->order_number, $status, $countryId, $newOrderData);

            # Información para la vista
            $response['success'] = $responsePayment['success'];
            $response['message'] = $errorMessage;
            $response['type']    = $request->input('type');
            $response['order']   = $order;

            # Email de confirmación de pago
            if ($response['success']) {
                $supportEmails = Config::get('cms.email_send');
                $fromEmail = $supportEmails[$country];

                $shipping = ShippingAddress::where('order_id', $order->id)->first();
                $eo       = SessionHdl::getEo();
                if (!empty($eo['email'])) {
                    $toEmail = $eo['email'];
                    $toName  = $eo['name2'];
                } else {
                    $toEmail = $shipping->email;
                    $toName  = $shipping->eo_name;
                }

                # ToDo Quitar líneas
                $toEmail = 'vicente.gutierrez@omnilife.com';
                $toName  = 'Vicente Gutiérrez';

                Mail::send('shopping::frontend.shopping.includes.'.strtolower($country).'.mails.payment_confirmation', [], function($m) use ($fromEmail, $toEmail, $toName) {
                    $m->from($fromEmail, trans('shopping::register_customer.mail_address.title'));
                    $m->to($toEmail, $toName)->subject(trans('shopping::checkout.confirmation.emails.confirmation_title'));
                });
            }

        } else {
            $this->updateOrderStatus($order->order_number, 'CONNECTION_ERROR', $countryId, ['updated_at' => $date->format('Y-m-d H:i:s')]);
            $response['errors'] = [trans('shopping::checkout.payment.errors.sys103')];

            Log::error('ERR (SYS103): ' . (isset($response['error']) ? $response['error'] : 'Problema al pagar con Paypal'));
        }

        return response()->json($response);
    }

    private function updateOrderStatus($orderNumber, $status, $countryId, $otherFields = []) {
        $newData = ['order_estatus_id' => $this->common->getOrderStatusId($status, $countryId)];

        foreach ($otherFields as $column => $value) {
            $newData[$column] = $value;
        }

        Order::where('order_number', $orderNumber)->update($newData);
    }
}
