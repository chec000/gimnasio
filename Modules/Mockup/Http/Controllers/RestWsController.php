<?php

namespace Modules\Mockup\Http\Controllers;

use Illuminate\Routing\Controller;
use Response;
use View;
use App\Helpers\RestWrapper;
use App\Helpers\SoapWrapper;
use GuzzleHttp\Cookie\SetCookie as CookieParser;

class RestWsController extends Controller
{
    public $ws_country;
    public $country;
    public $lang;

    public function __construct()
    {
        $this->country = 'USA';
        $this->lang = 'ING';
        $this->ws_country = 'http://10.6.20.237:8120/rest/ShoppingCartService/'; //USA
        /*
        $this->ws_country = 'http://10.6.20.237:8110/rest/ShoppingCartService/'; //MEX
        $this->ws_country = 'http://10.1.10.78:8200/rest/ShoppingCartService/'; //BRA
        $this->ws_country = 'http://10.1.10.79:8100/rest/ShoppingCartService/'; //RUS
        */
    }

    public function index()
    {
        //SERVICIOS SOAP
        /*
        $soapWrapper = new SoapWrapper("http://10.1.10.84:8080/wsa/wsa1/wsdl?targetURI=WSShopping_mxqa");
        $params["lch_dist_id"] = "000515vcj";
        $params["lch_password"] = "1234";
        $params["lch_pais"] = "MEX";
        $result = $soapWrapper->call('WS_validaFirmaDmi', $params);
        dd($result);

        $params["xmlINPUT"] = "<xmlinput><process>WSDatosPersonales.r</process><parameters><IdEmpresario>000515vcj</IdEmpresario></parameters></xmlinput>";
        $result = $soapWrapper->call('ejecuta_proceso', $params);
        dd($soapWrapper->XMLToArray((string)$result['result']->xmlOUTPUT));
        */

        return view('mockup::rest_ws.index', ['country' => $this->country, 'lang' => $this->lang, 'urlWs' => $this->ws_country]);
    }

    /*
     *  ============== INICIO ===============
     *  PRIMER ENTREGA
     */

    public function getCountryConfiguration(){
        //getCountryConfiguration
        $restWrapper = new RestWrapper($this->ws_country."getCountryConfiguration?CountryKey=$this->country&Lang=$this->lang");
        $resultConf = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultConf);
    }

    public function getZipCode(){
        //getZipCode
        $restWrapper = new RestWrapper($this->ws_country."getZipCode?CountryKey=$this->country&Lang=$this->lang&ZipCode=01915");
        $resultZipCode = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultZipCode);
    }

    public function getState(){
        //getState
        $restWrapper = new RestWrapper($this->ws_country."getState?CountryKey=$this->country&Lang=$this->lang");
        $resultState = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultState);
    }

    public function getCity(){
        //getCity
        $restWrapper = new RestWrapper($this->ws_country."getCity?CountryKey=$this->country&Lang=$this->lang&StateKey=MA");
        $resultCity = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        foreach($resultCity['responseWS']['response']['City']['dsCity']['ttCity'] as $city){
            echo $city['idCity']." ".$city['cityDescr'].'<br/>';
        }
        dd($resultCity);
    }

    public function getAvailableWH(){
        //getAvailableWH 90210
        $restWrapper = new RestWrapper($this->ws_country."getAvailableWH?CountryKey=$this->country&Lang=$this->lang&StateKey=&CityKey=&ZipCode=77803");
        $resultWH = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultWH);
    }

    public function getCarrerTitle(){
        //getCarrerTitle
        $restWrapper = new RestWrapper($this->ws_country."getCarrerTitle?CountryKey=$this->country&Lang=$this->lang");
        $resultCarrerTitle = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultCarrerTitle);
    }

    public function getShippingCompanies(){
        //getShippingCompanies
        $restWrapper = new RestWrapper($this->ws_country."getShippingCompanies?CountryKey=$this->country&Lang=$this->lang&StateKey=TX&CityKey=BRYAN");
        $resultShippingCompanies = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultShippingCompanies);
    }

    public function getDocumentsId()
    {
        //getDocumentsID
        $restWrapper = new RestWrapper($this->ws_country."getDocumentsId?CountryKey=$this->country&Lang=$this->lang");
        $resultDocuments = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultDocuments);
    }

    public function getDataPassword(){
        //getDataPassword
        $restWrapper = new RestWrapper($this->ws_country."getDataPassword?CountryKey=$this->country&Lang=$this->lang&DistId=000515vcj");
        $resultDataPassword = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultDataPassword);
    }

    public function validateLogin(){
        //validateLogin
        $restWrapper = new RestWrapper($this->ws_country."validateLogin");
        $params = ['request' => [
            'EntrepreneurParams' => [
                'ttEntrepreneurParams' => [
                    [
                        'CountryKey' => $this->country,
                        'Lang' => $this->lang,
                        'DistId' => '000515VCJ',
                        'Password' => '1234'
                    ]
                ]
            ]
        ]];
        $resultLogin = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        dd($resultLogin);
    }

    public function resetPassword(){
        //resetPassword
        $restWrapper = new RestWrapper($this->ws_country."resetPassword");
        $params = ['request' => [
            'EntrepreneurParams' => [
                'ttEntrepreneurParams' => [
                    [
                        'CountryKey' => $this->country,
                        'Lang' => $this->lang,
                        'DistId' => '000515VCJ',
                        'Password' => '1234'
                    ]
                ]
            ]
        ]];
        $resultReset = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        dd($resultReset);
    }

    public function validateSponsor(){
        //ValidateSponsor
        $restWrapper = new RestWrapper($this->ws_country."validateSponsor?CountryKey=$this->country&Lang=$this->lang&SponsorId=000515vcj");
        $resultValidSponsor = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultValidSponsor);
    }

    /*
     *  ============== FIN ===============
     *  PRIMER ENTREGA
     */



    /*
     *  ============== INICIO ===============
     *  SEGUNDA ENTREGA
     */
    public function getShipmentAddress(){
        //getShipmentAddress
        $restWrapper = new RestWrapper($this->ws_country."ShipmentAddress?CountryKey=$this->country&Lang=$this->lang&DistId=000515VCJ");
        $resultShipmentAddress = $restWrapper->call("GET",[],'json', ['http_errors' => false]);
        dd($resultShipmentAddress);
    }

    public function addShipmentAddress(){
        //addShipmentAddress
        $restWrapper = new RestWrapper($this->ws_country."ShipmentAddress");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'UserId' => '',
            'ShipmentAddress' => [
                'ttShipmentAddress' => [
                    [
                        'Dist_id' => '000515VCJ',
                        'Tipo' => 'ALTERNA',
                        'Folio' => '',
                        'Etiqueta' => 'Prueba nueva',
                        'iddireccion' => '',
                        'Nombre' => 'Jose Osuna',
                        'Direccion' => 'calle lol',
                        'Numero' => '',
                        'Complemento' => 'Complemento referencia',
                        'Colonia' => 'Colonia',
                        'CP' => '01915',
                        'Ciudad' => 'BEVERLY',
                        'Nombre_Cd' => 'BEVERLY',
                        'Estado' => 'MA',
                        'Condado' => 'ESSEX',
                        'Clv_pais' => $this->country,
                        'correo' => 'jose.osuna@omnilife.com',
                        'comp_envio' => 'UPS',
                        'telefono' => '1234567890',
                        'incorrecta' => false
                    ]
                ]
            ]

        ]];
        echo json_encode($params);
        $resultAddShipmentAddress = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        dd($resultAddShipmentAddress);
    }

    public function updateShipmentAddress(){
        //updateShipmentAddress
        $restWrapper = new RestWrapper($this->ws_country."ShipmentAddress");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'UserId' => '',
            'ShipmentAddress' => [
                'ttShipmentAddress' => [
                    [
                        'Dist_id' => '000515VCJ',
                        'Tipo' => 'ALTERNA',
                        'Folio' => 10,
                        'Etiqueta' => 'Edición Dirección Alterna (Desarrollo)',
                        'iddireccion' => '000515vcj 010',
                        'Nombre' => 'José Osuna',
                        'Direccion' => 'conocida SSSSSSS',
                        'Numero' => '',
                        'Complemento' => 'Complemento referencia',
                        'Colonia' => 'Colonia referencia',
                        'CP' => '77803',
                        'Ciudad' => 'BRYAN',
                        'Nombre_Cd' => 'BRYAN',
                        'Estado' => 'TX',
                        'Condado' => 'BRAZOS',
                        'Clv_pais' => $this->country,
                        'correo' => 'gmcrdavid@gmail.com',
                        'comp_envio' => 'UPS',
                        'telefono' => '1234567890',
                        'incorrecta' => false,
                    ]

                ]
            ]

        ]];
        $resultUpdateShipmentAddress = $restWrapper->call("PUT",$params,'json', ['http_errors' => false]);
        dd($resultUpdateShipmentAddress);
    }

    public function deleteShipmentAddress(){
        //deleteShipmentAddress
        $restWrapper = new RestWrapper($this->ws_country."ShipmentAddress?CountryKey=$this->country&Lang=$this->lang&DistId=000515VCJ&Folio=10");
        $resultDeleteShipmentAddress = $restWrapper->call("DELETE",[],'json', ['http_errors' => false]);
        dd($resultDeleteShipmentAddress);
    }

    public function addFormSalesTransaction(){
        //AddFormEntrepreneur
        $restWrapper = new RestWrapper($this->ws_country."addFormSalesTransaction");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'SalesWeb' => [
                'ttSalesWeb' => [
                    [
                        'countrysale' => $this->country, //pais de la venta o inscripción
                        'distributor' => '', //código eO cuando es venta si es inscripción enviar vacio
                        'amount' => 569.87, //Valor total del pedido debe ser mayor a CERO
                        'receiver' => 'José Osuna', //nombre de la presona que recibirá la orden
                        'address' => '9089 Av. Inglaterra', //direccion (calle y numero) en caso de USA enviar Numero Calle Ejemplo 36 Maples
                        'number' => '', //aplica para BRA
                        'suburb' => '', //colonia N/A en USA
                        'complement' => 'En la esquina',
                        'state' => 'TX', //clave del estado Corbiz
                        'city' => 'BRYAN', //Ciudad Corbiz
                        'county' => 'BRAZOS', //aplica para USA (condado)
                        'zipcode' => '77803', //debe ser mayor a cero
                        'shippingcompany' => 'UPS', //clave de compañia de envio
                        'altAddress' => 0, //Campo entero que trae el folio de la direccion alterna, si es CERO significa que uso la direccion principal
                        'email' => 'jose.osuna@omnilife.com',
                        'phone' => '3318625201', //telefono
                        'previousperiod' => false, //true o false (lógica del cambio de periodo)
                        'type_mov'=> 'INGRESA', //
                        'source' => 'WEB' //indica que front invoca el WS
                    ]
                ],
            ],
            'SalesWebItems' => [
                'ttSalesWebItems' => [
                    [
                        'numline' => 1, //contador aumenta conforme la cantidad de productos
                        'countrysale' => $this->country, //pais de la venta o inscripción
                        'item' => '9501088', //sku del producto
                        'quantity ' => 1, //cantidad
                        'listPrice' => 370.88, //precio de lista
                        'discPrice' => '', //enviar en blanco /funcionalidad a futuro
                        'points' => 63, //puntos
                        'promo' => false //siempre enviar en false (Aplicará para BRA)
                    ]
                ]
            ]
        ]];

        $resultAddSalesTransaction = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        dd($resultAddSalesTransaction);
    }

    public function addFormEntrepreneur(){
        //AddFormEntrepreneur
        $restWrapper = new RestWrapper($this->ws_country."addFormEntrepreneur");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'AddFormEntrepreneur' => [
                'ttAddFormEntrepreneur' => [
                    [
                        'countrysale' => $this->country, //pais de la venta o inscripción
                        'idtransaction' => '', //solo se envia si el campo zcreate = true  sino enviar en blanco
                        'sponsor' => "000515VCJ", //código de patrocinador
                        'lastnamef' => 'OSUNA',
                        'lastnamem' => 'TIRADO',
                        'names' => 'JOSÉ DE JESÚS',
                        'birthdate' => '1990-08-28', //yyyy-mm-dd
                        'address' => '36 MAPLES', //campo direccion en el caso de USA se envia (Número Calle) Ejemplo: 36 Maples
                        'number' => '', //viaja vacio el valor. Aplica para BRA
                        'suburb' => '', //solo enviar si es obligatorio el campo
                        'complement' => 'EN FRENTE DE LAS VIAS DEL TREN',
                        'phone' => '3336315720',
                        'cellphone' => '3335353536', //Es obligatorio por lo menos un telefono puede ser el fijo o el celular.
                        'country' => $this->country, //clave pais del eO donde esta su contrato
                        'state' => 'TX', //clave corbiz del estado
                        'city' => 'BRYAN', //clave corbiz de la ciudad
                        'county' => 'BRAZOS', //condado Aplica para USA
                        'zipcode' => '77803',
                        'email' => 'jose.osuna@omnilife.com',
                        'sex' => 'M', //Solo acepta valores F y M
                        'idcenter' => 'TELENEV', //clave del centro de distribucion en corbiz
                        'warehouse' => 'TELEGP', //clave del almacen en corbiz
                        'iditem' => '9410322', //código de kit seleccionado
                        'questions' => '1', //id de la pregunta secreta
                        'answer' => 'rojo', //respuesta a la pregunta
                        'receive_adversiting' => true,
                        'zsource' => 'WEB', //indica que front invoca el WS
                        'zcreate' => false, //cuando zcreate = true graba la información en las tablas de corBiz, si es zcreate = false
                        'lang' => $this->lang, //clave de corbiz del idioma
                        'pool' => false, //variable logica que define si el eO fue asignado por pool o no, si es true significa que fue asignado por pool
                        'client_type' => '' //CFINAL si es cliente admirable enviar vacio si es empresario el que se va a registrar
                    ]

                ],
            ],
            'AddFormDoctos' => [
                'ttAddFormDoctos' => [
                    [
                        'countrysale' => '', //clave del pais de la venta/inscripción
                        'idtransaction' => '', //solo se envia si el campo zcreate = true  sino enviar en blanco
                        'countrydoc' => '', //clave del pais del documento
                        'iddocument' => '', //clave del documento
                        'numberdoc' => '', //valor del documento
                        'expirationdate' => '', //fecha de expiración yyyy-mm-dd
                    ]
                ]
            ]
        ]];

        $resultAddFormEntrepreneur = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        dd($resultAddFormEntrepreneur);
    }


    public function addEntrepreneur(){
        //AddFormEntrepreneur
        $restWrapper = new RestWrapper($this->ws_country."addEntrepreneur");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'AddEntrepreneur' => [
                'ttAddEntrepreneur' => [
                    [
                        'countrySale' => $this->country,  //pais de la venta o inscripción
                        'idTransaction' => "00000000000000091949" //transacción devuelta por addSalesTransaction
                    ]
                ],
            ]

        ]];

        $resultAddEntrepreneur = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        dd($resultAddEntrepreneur);
    }

    public function addSalesWeb(){
        //AddSalesWeb
        $restWrapper = new RestWrapper($this->ws_country."addSalesWeb");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'SalesWeb' => [
                'ttSalesWeb' => [
                    [
                        'countrysale' => $this->country, //pais de la venta o inscripción
                        'no_trans' => '', //solo se envia si el campo zcreate = true  sino enviar en blanco
                        'distributor' => '000515VCJ', //código del distribuidor que inicio sesión
                        'amount' => 113.22, //Valor total del pedido debe ser mayor a CERO
                        'receiver' => 'José Osuna', //nombre de la presona que recibirá la orden
                        'address' => '28 Essex Stree', //direccion (calle y numero) en caso de USA enviar Numero Calle Ejemplo 36 Maples
                        'number' => '', //aplica para BRA
                        'suburb' => '', //colonia N/A en USA
                        'complement' => '',
                        'state' => 'MA', //clave del estado Corbiz
                        'city' => 'BEVERLY',  //Ciudad Corbiz
                        'county' => 'ESSEX', //aplica para USA (condado)
                        'zipcode' => '01915', //debe ser mayor a cero
                        'shippingcompany' => 'UPS', //clave de compañia de envio
                        'altAddress' => 0, //Campo entero que trae el folio de la direccion alterna, si es CERO significa que uso la direccion principal
                        'email' => 'jose.osuna@omnilife.com',
                        'phone' => '3318625201', //telefono
                        'previousperiod' => false, //true o false (lógica del cambio de periodo)
                        'source' => 'WEB', //indica que front invoca el WS
                        'type_mov'=> 'VENTA', //indica tipo de movimiento VENTA y para Inscripción sería INGRESA
                        'codepaid' => '03', //Código del Pago en Corbiz (hacer relación en un archivo de Config método de pago por pais y el ID que le corresponde en CORBIZ)
                        'zcreate' => false ////cuando zcreate = true procesa la orden en las tablas de corBiz, si es zcreate = false para COTIZAR
                    ]
                ],
            ],
            'SalesWebItems' => [
                'ttSalesWebItems' => [
                    [
                        'numline' => 0, //contador aumenta conforme la cantidad de productos
                        'countrysale' => $this->country, //pais de la venta o inscripción
                        'item' => '9504033',  //sku del producto
                        'quantity ' => 1, //cantidad
                        'listPrice' => 12.21, //precio de lista
                        'discPrice' => '', //vacio
                        'points' => 19, //puntos
                        'promo' => false //en false para todos los paises (sólo aplicará para BRA)
                    ],
                    [
                        'numline' => 1,
                        'countrysale' => $this->country,
                        'item' => '9501100',
                        'quantity ' => 1,
                        'listPrice' => 33.33,
                        'discPrice' => '',
                        'points' => 60,
                        'promo' => false
                    ],
                    [
                        'numline' => 2,
                        'countrysale' => $this->country,
                        'item' => '9501103',
                        'quantity ' => 1,
                        'listPrice' => 37.74,
                        'discPrice' => '',
                        'points' => 67,
                        'promo' => false
                    ],
                   [
                        'numline' => 3,
                        'countrysale' => $this->country,
                        'item' => '9504034',
                        'quantity ' => 1,
                        'listPrice' => 29.97,
                        'discPrice' => '',
                        'points' => 49,
                        'promo' => false
                    ],
                ]
            ]
        ]];

        $resultAddSalesWeb = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        dd($this->ws_country."addSalesWeb",  $resultAddSalesWeb);
    }

    public function proccessSales(){

        /* PROCESO DE VENTA

        1. Cotizar productos

        Para cotizar se deben enviar los siguientes campos con estos valores:
        ttSalesWeb
        no_trans = '' debe enviarse vacio
        amount = 300 debe ser mayor a 0 y en el caso de la cotización enviariamos el total de la compra con los precios de lista
        previousperiod = false debe enviarse como false
        type_mov = 'VENTA'
        codepaid = '03' A pesar que en la cotización aún no selecciona un pago debemos enviar uno, debemos generar un archivo de configuración con nuestros
                        ids de pago y el id que le corresponde en CorBiz y establecer un id de método de pago nuestro default en la configuración para enviar este en la cotización
        zcreate = false * IMPORTANTE * si se cotiza va en false
        */

        $bquote = false;
        $ztransaction = false;
        $transaction = '';
        $order = '';

        $restWrapper = new RestWrapper($this->ws_country."addSalesWeb");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'SalesWeb' => [
                'ttSalesWeb' => [
                    [
                        'countrysale' => $this->country,
                        'no_trans' => '',
                        'distributor' => '000515VCJ',
                        'amount' => 90,
                        'receiver' => 'José Osuna',
                        'address' => '9089 Av. Inglaterra',
                        'number' => '',
                        'suburb' => '',
                        'complement' => 'En la esquina',
                        'state' => 'TX',
                        'city' => 'BRYAN',
                        'county' => 'BRAZOS',
                        'zipcode' => '77803',
                        'shippingcompany' => 'UPS',
                        'altAddress' => 0,
                        'email' => 'jose.osuna@omnilife.com',
                        'phone' => '3318625201',
                        'previousperiod' => false,
                        'source' => 'WEB',
                        'type_mov'=> 'VENTA',
                        'codepaid' => '03',
                        'zcreate' => false
                    ]
                ],
            ],
            'SalesWebItems' => [
                'ttSalesWebItems' => [
                    [
                        'numline' => 1,
                        'countrysale' => $this->country,
                        'item' => '9501088',
                        'quantity ' => 1,
                        'listPrice' => 50,
                        'discPrice' => '',
                        'points' => 63,
                        'promo' => false
                    ],
                    [
                        'numline' => 2,
                        'countrysale' => $this->country,
                        'item' => '9519033',
                        'quantity ' => 2,
                        'listPrice' => 20,
                        'discPrice' => '',
                        'points' => 63,
                        'promo' => false
                    ]
                ]
            ]
        ]];

        $resultQuoteWeb = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        if($resultQuoteWeb['success'] && $resultQuoteWeb['responseWS']['response']['Success'] == 'true')
        {
            //cotizacion exitosa
            $bquote = true;
        }else if(!$resultQuoteWeb['success']  && $resultQuoteWeb['responseWS']['response']['Success'] == 'false' && isset($resultQuoteWeb['responseWS']['response']['Error']['dsError']['ttError'])){
            //errores del servicio falla al cotizar
            foreach ($resultQuoteWeb['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                echo $err['messUser'].'<br/>';
            }
            dd($resultQuoteWeb['responseWS']['response']['Error']['dsError']['ttError']);
        }else{
            //errores no controlados excepciones
            dd($resultQuoteWeb['message']);
        }

        /*
         *  2. Generar Transacción Corbiz

        Seleccionar Método de Pago y una vez seleccionado debemos generar la Transacción Corbiz con el servicio addFormSalesTransaction
        En caso que el servicio devuelva una transacción, debemos iniciar el proceso de pago con al usuario ya sea redireccionando al banco (depende de la integración del método de pago)

        Para generar la transacción (inscripción) se deben enviar los siguientes campos con estos valores:
        ttSalesWeb
        distributor = '000515VCJ' debe enviarse el código de eo que inicio sesión
        type_mov = 'VENTA'
         */

        if($bquote){
            $restWrapper = new RestWrapper($this->ws_country."addFormSalesTransaction");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'SalesWeb' => [
                    'ttSalesWeb' => [
                        [
                            'countrysale' => $this->country,
                            'distributor' => '000515VCJ',
                            'amount' => 45.86, //monto devuelto por la cotizacion
                            'receiver' => 'Jose Osuna',
                            'address' => '9089 Av. Inglaterra',
                            'number' => '',
                            'suburb' => '',
                            'complement' => 'En la esquina',
                            'state' => 'TX',
                            'city' => 'BRYAN',
                            'county' => 'BRAZOS',
                            'zipcode' => '77803',
                            'shippingcompany' => 'UPS',
                            'altAddress' => 10,
                            'email' => 'jose.osuna@omnilife.com',
                            'phone' => '3318625201',
                            'previousperiod' => false,
                            'source' => 'WEB'
                        ]
                    ],
                ],
                'SalesWebItems' => [
                    'ttSalesWebItems' => [
                        [
                            'numline' => 1,
                            'countrysale' => $this->country,
                            'item' => '9501088',
                            'quantity ' => 1,
                            'listPrice' => 16.5,//precio devuelto por la cotizacion
                            'discPrice' => '',
                            'points' => 32, //puntos devuelto por la cotizacion
                            'promo' => false
                        ],
                        [
                            'numline' => 2,
                            'countrysale' => $this->country,
                            'item' => '9519033',
                            'quantity ' => 1,
                            'listPrice' => 20.0,//precio devuelto por la cotizacion
                            'discPrice' => '',
                            'points' => 33, //puntos devuelto por la cotizacion
                            'promo' => false
                        ]
                    ]
                ]
            ]];

            $resultSalesTransaction = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
            //$transaction = '00000000000000091961';
            //$ztransaction = true;
            if($resultSalesTransaction['success'] && $resultSalesTransaction['responseWS']['response']['Success'] == 'true' || (!$resultSalesTransaction['success'] && $resultSalesTransaction['responseWS']['response']['Success'] == 'false' && $resultSalesTransaction['responseWS']['response']['Transaction'] != ''  ))
            {
                //transaccion exitosa
                $ztransaction = true;
                $transaction = $resultSalesTransaction['responseWS']['response']['Transaction'];
            }else if(!$resultSalesTransaction['success']  && $resultSalesTransaction['responseWS']['response']['Success'] == 'false' && isset($resultSalesTransaction['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al cotizar
                foreach ($resultSalesTransaction['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultSalesTransaction['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultSalesTransaction['message']);
            }
        }

        /*
         *  3. Generar Orden en CorBiz
         *  Si el pago fue exitoso, tendriamos que ejecutar el servicio addSalesWeb

        Para generar el pedido en corbiz se deben enviar los siguientes campos con estos valores:
        ttSalesWeb
        no_trans =  00000000000000091956 debe enviarse el número de transacción devuelto por el servicio addFormSalesTransaction
        amount =  debe enviarse el monto devuelto por la cotización
        previousperiod = false debe enviarse el valor seleccionado por el usuario (Proceso de cambio de periodo)
        type_mov = 'VENTA'
        codepaid = '03' Enviar el id que corresponde a CorBiz de nuestro archivo de configuración (ya el método de pago real seleccionado)
        zcreate = true * IMPORTANTE * si se quiere cerrar el pedido va en true
         */

        if($ztransaction && $transaction!= ''){
            $restWrapper = new RestWrapper($this->ws_country."addSalesWeb");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'SalesWeb' => [
                    'ttSalesWeb' => [
                        [
                            'countrysale' => $this->country, //pais de la venta o inscripción
                            'no_trans' => $transaction, //solo se envia si el campo zcreate = true  sino enviar en blanco
                            'distributor' => '000515VCJ', //código del distribuidor que inicio sesión
                             'amount' => 45.86, //Valor total del pedido debe ser mayor a CERO
                            'receiver' => 'José Osuna', //nombre de la presona que recibirá la orden
                            'address' => '9089 Av. Inglaterra', //direccion (calle y numero) en caso de USA enviar Numero Calle Ejemplo 36 Maples
                            'number' => '', //aplica para BRA
                            'suburb' => '', //colonia N/A en USA
                            'complement' => 'En la esquina',
                            'state' => 'TX', //clave del estado Corbiz
                            'city' => 'BRYAN',  //Ciudad Corbiz
                            'county' => 'BRAZOS', //aplica para USA (condado)
                            'zipcode' => '77803', //debe ser mayor a cero
                            'shippingcompany' => 'UPS', //clave de compañia de envio
                            'altAddress' => 10, //Campo entero que trae el folio de la direccion alterna, si es CERO significa que uso la direccion principal
                            'email' => 'jose.osuna@omnilife.com',
                            'phone' => '3318625201', //telefono
                            'previousperiod' => false, //true o false (lógica del cambio de periodo)
                            'source' => 'WEB', //indica que front invoca el WS
                            'type_mov'=> 'VENTA', //indica tipo de movimiento VENTA y para Inscripción sería INGRESA
                            'codepaid' => '03', //Código del Pago en Corbiz (hacer relación en un archivo de Config método de pago por pais y el ID que le corresponde en CORBIZ)
                            'zcreate' => true ////cuando zcreate = true procesa la orden en las tablas de corBiz, si es zcreate = false para COTIZAR
                        ]
                    ],
                ],
                'SalesWebItems' => [
                    'ttSalesWebItems' => [
                        [
                            'numline' => 1, //contador aumenta conforme la cantidad de productos
                            'countrysale' => $this->country, //pais de la venta o inscripción
                            'item' => '9501088',  //sku del producto
                            'quantity ' => 1, //cantidad
                            'listPrice' => 16.5, //precio de lista
                            'discPrice' => '', //vacio
                            'points' => 32, //puntos
                            'promo' => false //en false para todos los paises (sólo aplicará para BRA)
                        ],
                        [
                            'numline' => 2,
                            'countrysale' => $this->country,
                            'item' => '9519033',
                            'quantity ' => 2,
                            'listPrice' => 20.0,
                            'discPrice' => '',
                            'points' => 33,
                            'promo' => false
                        ]
                    ]
                ]
            ]];

            $resultAddSalesWeb = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);

            if($resultAddSalesWeb['success'] && $resultAddSalesWeb['responseWS']['response']['Success'] == 'true')
            {
                //orden exitosa
                $order = $resultAddSalesWeb['responseWS']['response']['Orden'];
                echo $order.'<br/>';
            }else if(!$resultAddSalesWeb['success']  && $resultAddSalesWeb['responseWS']['response']['Success'] == 'false' && isset($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al cotizar
                foreach ($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultAddSalesWeb['message']);
            }
        }

        dd($resultQuoteWeb, $resultSalesTransaction, $resultAddSalesWeb);
    }

    public function proccessInscription(){

        /* PROCESO DE INSCRIPCIÓN */

        $quoteKit = false;
        $validForm = false;
        $ztransaction = false;
        $transaction = '';
        $saveForm = false;
        $createDistr = false;
        $distr = '';
        $createOrder = false;
        $order = '';

        /* 1. Cotizar Kit de inscripción y productos // Servicio: addSalesWeb

        Para cotizar se deben enviar los siguientes campos con estos valores:
        ttSalesWeb
        no_trans = '' debe enviarse vacio
        distributor = '' el distribuidor debe enviarse vacio
        amount = 300 debe ser mayor a 0 y en el caso de la cotización enviariamos el total de la compra con los precios de lista
        previousperiod = false debe enviarse como false
        type_mov = 'INGRESA'
        codepaid = '03' A pesar que en la cotización aún no selecciona un pago debemos enviar uno, debemos generar un archivo de configuración con nuestros
                        ids de pago y el id que le corresponde en CorBiz y establecer un id de método de pago nuestro default en la configuración para enviar este en la cotización
        zcreate = false * IMPORTANTE * si se cotiza va en false
        */

        $restWrapper = new RestWrapper($this->ws_country."addSalesWeb");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'SalesWeb' => [
                'ttSalesWeb' => [
                    [
                        'countrysale' => $this->country,
                        'no_trans' => '',
                        'distributor' => '000515VCJ',
                        'amount' => 90,
                        'receiver' => 'José Osuna',
                        'address' => '9089 Av. Inglaterra',
                        'number' => '',
                        'suburb' => '',
                        'complement' => 'En la esquina',
                        'state' => 'TX',
                        'city' => 'BRYAN',
                        'county' => 'BRAZOS',
                        'zipcode' => '77803',
                        'shippingcompany' => 'UPS',
                        'altAddress' => 0,
                        'email' => 'jose.osuna@omnilife.com',
                        'phone' => '3318625201',
                        'previousperiod' => false,
                        'source' => 'WEB',
                        'type_mov'=> 'INGRESA',
                        'codepaid' => '03',
                        'zcreate' => false
                    ]
                ],
            ],
            'SalesWebItems' => [
                'ttSalesWebItems' => [ //puede ser solo el kit o el kit + productos de la cesta
                    [
                        'numline' => 1,
                        'countrysale' => $this->country,
                        'item' => '9410322',
                        'quantity ' => 1,
                        'listPrice' => 50,
                        'discPrice' => '',
                        'points' => 0,
                        'promo' => false
                    ],
                    [
                        'numline' => 2,
                        'countrysale' => $this->country,
                        'item' => '9519033',
                        'quantity ' => 2,
                        'listPrice' => 20,
                        'discPrice' => '',
                        'points' => 33,
                        'promo' => false
                    ]
                ]
            ]
        ]];

        $resultQuoteWeb = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        if($resultQuoteWeb['success'] && $resultQuoteWeb['responseWS']['response']['Success'] == 'true')
        {
            //cotizacion exitosa
            $bquote = true;
        }else if(!$resultQuoteWeb['success']  && $resultQuoteWeb['responseWS']['response']['Success'] == 'false' && isset($resultQuoteWeb['responseWS']['response']['Error']['dsError']['ttError'])){
            //errores del servicio falla al cotizar
            foreach ($resultQuoteWeb['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                echo $err['messUser'].'<br/>';
            }
            dd($resultQuoteWeb['responseWS']['response']['Error']['dsError']['ttError']);
        }else{
            //errores no controlados excepciones
            dd($resultQuoteWeb['message']);
        }


        /* 2. Validar Formulario // Servicio: addFormEntrepreneur

       Para validar se deben enviar los siguientes campos con estos valores:
       ttSalesWeb
       idtransaction = '' debe enviarse vacio
       iditem =  '9410322' kit seleccionado por el usuario
       zcreate = false * IMPORTANTE * si se valida va en false
       client_type = '' para empresario
        */

        if($bquote){
            $restWrapper = new RestWrapper($this->ws_country."addFormEntrepreneur");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'AddFormEntrepreneur' => [
                    'ttAddFormEntrepreneur' => [
                        [
                            'countrysale' => $this->country,
                            'idtransaction' => '',
                            'sponsor' => "000515VCJ",
                            'lastnamef' => 'OSUNA',
                            'lastnamem' => 'TIRADO',
                            'names' => 'JOSÉ DE JESÚS',
                            'birthdate' => '1990-08-28',
                            'address' => '36 MAPLES',
                            'number' => '',
                            'suburb' => '',
                            'complement' => 'EN FRENTE DE LAS VIAS DEL TREN',
                            'phone' => '3336315720',
                            'cellphone' => '3335353536',
                            'country' => $this->country,
                            'state' => 'TX',
                            'city' => 'BRYAN',
                            'county' => 'BRAZOS',
                            'zipcode' => '77803',
                            'email' => 'jose.osuna@omnilife.com',
                            'sex' => 'M',
                            'idcenter' => 'TELENEV',
                            'warehouse' => 'TELEGP',
                            'iditem' => '9410322',
                            'questions' => 1,
                            'answer' => 'rojo',
                            'receive_adversiting' => true,
                            'zsource' => 'WEB',
                            'zcreate' => false,
                            'lang' => $this->lang,
                            'pool' => false,
                            'client_type' => ''
                        ]

                    ],
                ],
                'AddFormDoctos' => [
                    'ttAddFormDoctos' => [
                        [
                            'countrysale' => '',
                            'idtransaction' => '',
                            'countrydoc' => '',
                            'iddocument' => '',
                            'numberdoc' => '',
                            'expirationdate' => '',
                        ]
                    ]
                ]
            ]];

            $resultValidFormEntrepreneur = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
            if($resultValidFormEntrepreneur['success'] && $resultValidFormEntrepreneur['responseWS']['response']['Success'] == 'true')
            {
                //validacion correcta
                $validForm = true;
            }else if(!$resultValidFormEntrepreneur['success']  && $resultValidFormEntrepreneur['responseWS']['response']['Success'] == 'false' && isset($resultValidFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al validar formulario
                foreach ($resultValidFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultValidFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultValidFormEntrepreneur['message']);
            }
        }


        /* 3. Generar Transacción Corbiz y Grabrar Informarción del Nuevo eO en tablas Corbiz

        a) Generar Transacción Corbiz //Servicio: addFormSalesTransaction

        *  Seleccionar Método de Pago y una vez seleccionado debemos generar la Transacción Corbiz con el servicio addFormSalesTransaction
        *  En caso que el servicio devuelva una transacción debemos grabar la información del registro en las tablas corbiz con el servicio addFormEntrepreneur
         * Si es exitosa la respuesta, debemos iniciar el proceso de pago con al usuario ya sea redireccionando al banco (depende de la integración del método de pago)

       Para generar la transacción (inscripción) se deben enviar los siguientes campos con estos valores:
       ttSalesWeb
       distributor = '' debe enviarse vacio
       type_mov = 'INGRESA'
        */

        if($validForm){
            //si la validación formulario fue correcta

            $restWrapper = new RestWrapper($this->ws_country."addFormSalesTransaction");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'SalesWeb' => [
                    'ttSalesWeb' => [
                        [
                            'countrysale' => $this->country,
                            'distributor' => '',
                            'amount' => 80.63, //monto devuelto por la cotización
                            'receiver' => 'José Osuna',
                            'address' => '9089 Av. Inglaterra',
                            'number' => '',
                            'suburb' => '',
                            'complement' => 'En la esquina',
                            'state' => 'TX',
                            'city' => 'BRYAN',
                            'county' => 'BRAZOS',
                            'zipcode' => '77803',
                            'shippingcompany' => 'UPS',
                            'altAddress' => 0,
                            'email' => 'jose.osuna@omnilife.com',
                            'phone' => '3318625201',
                            'previousperiod' => false,
                            'type_mov'=> 'INGRESA',
                            'source' => 'WEB'
                        ]
                    ],
                ],
                'SalesWebItems' => [
                    'ttSalesWebItems' => [
                        [
                            'numline' => 1,
                            'countrysale' => $this->country,
                            'item' => '9410322',
                            'quantity ' => 1,
                            'listPrice' => 35.0,
                            'discPrice' => '',
                            'points' => 0,
                            'promo' => false
                        ],
                        [
                            'numline' => 2,
                            'countrysale' => $this->country,
                            'item' => '9519033',
                            'quantity ' => 2,
                            'listPrice' => 20.0,
                            'discPrice' => '',
                            'points' => 33,
                            'promo' => false
                        ]
                    ]
                ]
            ]];

            $resultAddTransaction = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
            //$ztransaction = true;
            //$transaction = '00000000000000091960';
            if($resultAddTransaction['success'] && $resultAddTransaction['responseWS']['response']['Success'] == 'true' || (!$resultAddTransaction['success'] && $resultAddTransaction['responseWS']['response']['Success'] == 'false' && $resultAddTransaction['responseWS']['response']['Transaction'] != ''  ))
            {
                //transaccion exitosa
                $ztransaction = true;
                $transaction = $resultAddTransaction['responseWS']['response']['Transaction'];
            }else if(!$resultAddTransaction['success']  && $resultAddTransaction['responseWS']['response']['Success'] == 'false' && isset($resultAddTransaction['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al realizar transaccion
                foreach ($resultAddTransaction['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultAddTransaction['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultAddTransaction['message']);
            }
        }


        /*
        b) Grabar información del nuevo eO en tablas CorBiz //Servicio: addFormEntrepreneur

       Si tenemos transacción debemos grabar la información del registro en las tablas corbiz
       Si es exitosa la respuesta del addFormEntrepreneur, debemos iniciar el proceso de pago con al usuario ya sea redireccionando al banco (depende de la integración del método de pago)

       Para generar grabar la información de registro se deben enviar los siguientes campos con estos valores:
       ttAddFormEntrepreneur
       idtransaction = '' debe enviarse la que devolvio el servicio addFormSalesTransaction
       zcreate = true  para grabar en tablas corbiz debe ser true
       client_type = '' para empresario
        */

        if($ztransaction){
            //si se genero la transacción

            $restWrapper = new RestWrapper($this->ws_country."addFormEntrepreneur");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'AddFormEntrepreneur' => [
                    'ttAddFormEntrepreneur' => [
                        [
                            'countrysale' => $this->country,
                            'idtransaction' => $transaction,
                            'sponsor' => "000515VCJ",
                            'lastnamef' => 'OSUNA',
                            'lastnamem' => 'TIRADO',
                            'names' => 'JOSÉ DE JESÚS',
                            'birthdate' => '1990-08-28',
                            'address' => '36 MAPLES',
                            'number' => '',
                            'suburb' => '',
                            'complement' => 'EN FRENTE DE LAS VIAS DEL TREN',
                            'phone' => '3336315720',
                            'cellphone' => '3335353536',
                            'country' => $this->country,
                            'state' => 'TX',
                            'city' => 'BRYAN',
                            'county' => 'BRAZOS',
                            'zipcode' => '77803',
                            'email' => 'jose.osuna@omnilife.com',
                            'sex' => 'M',
                            'idcenter' => 'TELENEV',
                            'warehouse' => 'TELEGP',
                            'iditem' => '9410322',
                            'questions' => '1',
                            'answer' => 'rojo',
                            'receive_adversiting' => true,
                            'zsource' => 'WEB',
                            'zcreate' => true,
                            'lang' => $this->lang,
                            'pool' => false,
                            'client_type' => ''
                        ]

                    ],
                ],
                'AddFormDoctos' => [
                    'ttAddFormDoctos' => [
                        [
                            'countrysale' => '',
                            'idtransaction' => '',
                            'countrydoc' => '',
                            'iddocument' => '',
                            'numberdoc' => '',
                            'expirationdate' => '',
                        ]
                    ]
                ]
            ]];

            $resultAddFormEntrepreneur = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
            if($resultAddFormEntrepreneur['success'] && $resultAddFormEntrepreneur['responseWS']['response']['Success'] == 'true')
            {
                //validacion correcta
                $saveForm = true;
            }else if(!$resultAddFormEntrepreneur['success']  && isset($resultAddFormEntrepreneur['responseWS']['response']) && $resultAddFormEntrepreneur['responseWS']['response']['Success'] == 'false' && isset($resultAddFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al validar formulario
                foreach ($resultAddFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultAddFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultAddFormEntrepreneur['message']);
            }
        }


        /*
         *  4. Crear el empresario
         *  Si el pago fue exitoso, tendriamos que ejecutar el servicio addEntrepreneur
         */
        if($saveForm){
            $restWrapper = new RestWrapper($this->ws_country."addEntrepreneur");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'AddEntrepreneur' => [
                    'ttAddEntrepreneur' => [
                        [
                            'countrySale' => $this->country,
                            'idTransaction' => $transaction //transacción devuelta por addSalesTransaction
                        ]
                    ],
                ]

            ]];

            $resultAddEntrepreneur = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);

            if($resultAddEntrepreneur['success'] && $resultAddEntrepreneur['responseWS']['response']['Success'] == 'true')
            {
                //crea el eO
                $createDistr = true;
                $distr = $resultAddEntrepreneur['responseWS']['response']['EntrepreneurId'];
                echo $distr.'<br/>';
            }else if(!$resultAddEntrepreneur['success']  && $resultAddEntrepreneur['responseWS']['response']['Success'] == 'false' && isset($resultAddEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al validar formulario
                foreach ($resultAddEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultAddEntrepreneur['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultAddEntrepreneur['message']);
            }
        }


        /*
         *  5. Crear el pedido en Corbiz
        Si el pago fue exitoso y ya generamos el empresario, tendriamos que ejecutar el servicio addSalesWeb

        Para generar el pedido en corbiz de una inscripción se deben enviar los siguientes campos con estos valores:
        ttSalesWeb
        no_trans =  00000000000000091956 debe enviarse el número de transacción devuelto por el servicio addFormSalesTransaction
        amount =  debe enviarse el monto devuelto por la cotización
        previousperiod = false debe enviarse el valor seleccionado por el usuario (Proceso de cambio de periodo)
        type_mov = 'INGRESA'
        codepaid = '03' Enviar el id que corresponde a CorBiz de nuestro archivo de configuración (ya el método de pago real seleccionado)
        zcreate = true * IMPORTANTE * si se quiere cerrar el pedido va en true
         */


        if($transaction != '' && $distr!= ''){
            $restWrapper = new RestWrapper($this->ws_country."addSalesWeb");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'SalesWeb' => [
                    'ttSalesWeb' => [
                        [
                            'countrysale' => $this->country,
                            'no_trans' => $transaction,
                            'distributor' => $distr,
                            'amount' => 80.63,
                            'receiver' => 'José Osuna',
                            'address' => '9089 Av. Inglaterra',
                            'number' => '',
                            'suburb' => '',
                            'complement' => 'En la esquina',
                            'state' => 'TX',
                            'city' => 'BRYAN',
                            'county' => 'BRAZOS',
                            'zipcode' => '77803',
                            'shippingcompany' => 'UPS',
                            'altAddress' => 0,
                            'email' => 'jose.osuna@omnilife.com',
                            'phone' => '3318625201',
                            'previousperiod' => false,
                            'source' => 'WEB',
                            'type_mov'=> 'INGRESA',
                            'codepaid' => '03',
                            'zcreate' => true
                        ]
                    ],
                ],
                'SalesWebItems' => [
                    'ttSalesWebItems' => [
                        [
                            'numline' => 1,
                            'countrysale' => $this->country,
                            'item' => '9501088',
                            'quantity ' => 1,
                            'listPrice' => 35,
                            'discPrice' => '',
                            'points' => 0,
                            'promo' => false
                        ],
                        [
                            'numline' => 2,
                            'countrysale' => $this->country,
                            'item' => '9519033',
                            'quantity ' => 2,
                            'listPrice' => 20,
                            'discPrice' => '',
                            'points' => 33,
                            'promo' => false
                        ]
                    ]
                ]
            ]];

            $resultAddSalesWeb = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
            dd($params,$resultAddSalesWeb);
            if($resultAddSalesWeb['success'] && $resultAddSalesWeb['responseWS']['response']['Success'] == 'true')
            {
                //orden exitosa
                $order = $resultAddSalesWeb['responseWS']['response']['Orden'];
                echo $order.'<br/>';
            }else if(!$resultAddSalesWeb['success']  && $resultAddSalesWeb['responseWS']['response']['Success'] == 'false' && isset($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al cotizar
                foreach ($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultAddSalesWeb['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultAddSalesWeb['message']);
            }
        }

        dd($resultQuoteWeb, $resultValidFormEntrepreneur, $resultAddTransaction, $resultAddFormEntrepreneur, $resultAddEntrepreneur, $resultAddSalesWeb) ;
    }

    public function proccessCustomer(){
        /* PROCESO DE REGISTRO CLIENTE ADMIRABLE */

        $validForm = false;
        $ztransaction = false;
        $transaction = '';
        $saveForm = false;
        $createDistr = false;
        $distr = '';


        /* 1. Validar Formulario // Servicio: addFormEntrepreneur

      Para validar se deben enviar los siguientes campos con estos valores:
      ttAddFormEntrepreneur
      idtransaction = $transaction debe enviarse la que devolvio el servicio addFormSalesTransaction
       iditem = '' vacia
       zcreate = false  para grabar en tablas corbiz debe ser true
       client_type = 'CFINAL' para cliente admirable
       */

        $restWrapper = new RestWrapper($this->ws_country."addFormEntrepreneur");
        $params = ['request' => [
            'CountryKey' => $this->country,
            'Lang' => $this->lang,
            'AddFormEntrepreneur' => [
                'ttAddFormEntrepreneur' => [
                    [
                        'countrysale' => $this->country,
                        'idtransaction' => '',
                        'sponsor' => "000515VCJ",
                        'lastnamef' => 'TIRADO',
                        'lastnamem' => 'GUERRA',
                        'names' => 'ANA',
                        'birthdate' => '1990-07-18',
                        'address' => '36 MAPLES',
                        'number' => '',
                        'suburb' => '',
                        'complement' => 'EN FRENTE DE LAS VIAS DEL TREN',
                        'phone' => '3336315720',
                        'cellphone' => '3335353536',
                        'country' => $this->country,
                        'state' => 'TX',
                        'city' => 'BRYAN',
                        'county' => 'BRAZOS',
                        'zipcode' => '77803',
                        'email' => 'ana.guerra@gmail.com',
                        'sex' => 'F',
                        'idcenter' => 'TELENEV',
                        'warehouse' => 'TELEGP',
                        'iditem' => '',
                        'questions' => '1',
                        'answer' => 'rojo',
                        'receive_adversiting' => false,
                        'zsource' => 'WEB',
                        'zcreate' => false,
                        'lang' => $this->lang,
                        'pool' => false,
                        'client_type' => 'CFINAL'
                    ]
                ],
            ],
            'AddFormDoctos' => [
                'ttAddFormDoctos' => [
                    [
                        'countrysale' => '',
                        'idtransaction' => '',
                        'countrydoc' => '',
                        'iddocument' => '',
                        'numberdoc' => '',
                        'expirationdate' => '',
                    ]
                ]
            ]
        ]];

        $resultValidFormEntrepreneur = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
        if($resultValidFormEntrepreneur['success'] && $resultValidFormEntrepreneur['responseWS']['response']['Success'] == 'true')
        {
            //validacion correcta
            $validForm = true;
        }else if(!$resultValidFormEntrepreneur['success']  && $resultValidFormEntrepreneur['responseWS']['response']['Success'] == 'false' && isset($resultValidFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'])){
            //errores del servicio falla al validar formulario
            foreach ($resultValidFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                echo $err['messUser'].'<br/>';
            }
            dd($resultValidFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError']);
        }else{
            //errores no controlados excepciones
            dd($resultValidFormEntrepreneur['message']);
        }


        /* 2. Generar Transacción Corbiz y Grabrar Informarción del Nuevo cliente en tablas Corbiz

        a) Generar Transacción Corbiz //Servicio: addFormSalesTransaction

        * Una vez validado el formilario debemos generar la Transacción Corbiz con el servicio addFormSalesTransaction
        *  En caso que el servicio devuelva una transacción debemos grabar la información del registro en las tablas corbiz con el servicio addFormEntrepreneur
         * Si es exitosa la respuesta debemos ejecutar el addEntrepreneur para crear el cliente

       Para generar la transacción (registro cliente) se deben enviar los siguientes campos con estos valores:
       ttSalesWeb
       distributor = '' debe enviarse vacio
       type_mov = 'INGRESA'
        */

        if($validForm){
            //si la validación formulario fue correcta

            $restWrapper = new RestWrapper($this->ws_country."addFormSalesTransaction");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'SalesWeb' => [
                    'ttSalesWeb' => [
                        [
                            'countrysale' => $this->country,
                            'distributor' => '',
                            'amount' => '', //monto devuelto por la cotización
                            'receiver' => 'José Osuna',
                            'address' => '9089 Av. Inglaterra',
                            'number' => '',
                            'suburb' => '',
                            'complement' => 'En la esquina',
                            'state' => 'TX',
                            'city' => 'BRYAN',
                            'county' => 'BRAZOS',
                            'zipcode' => '77803',
                            'shippingcompany' => 'UPS',
                            'altAddress' => 0,
                            'email' => 'jose.osuna@omnilife.com',
                            'phone' => '3318625201',
                            'previousperiod' => false,
                            'type_mov'=> 'INGRESA',
                            'source' => 'WEB'
                        ]
                    ],
                ],
                'SalesWebItems' => [
                    'ttSalesWebItems' => [
                    ]
                ]
            ]];

            $resultAddTransaction = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
            if($resultAddTransaction['success'] && $resultAddTransaction['responseWS']['response']['Success'] == 'true' || (!$resultAddTransaction['success'] && $resultAddTransaction['responseWS']['response']['Success'] == 'false' && $resultAddTransaction['responseWS']['response']['Transaction'] != ''  ))
            {
                //transaccion exitosa
                $ztransaction = true;
                $transaction = $resultAddTransaction['responseWS']['response']['Transaction'];
            }else if(!$resultAddTransaction['success']  && $resultAddTransaction['responseWS']['response']['Success'] == 'false' && isset($resultAddTransaction['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al realizar transaccion
                foreach ($resultAddTransaction['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultAddTransaction['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultAddTransaction['message']);
            }
        }


        /*
        b) Grabar información del nuevo eO en tablas CorBiz //Servicio: addFormEntrepreneur

       Si tenemos transacción debemos grabar la información del registro en las tablas corbiz
       Si es exitosa la respuesta del addFormEntrepreneur, debemos iniciar el proceso de pago con al usuario ya sea redireccionando al banco (depende de la integración del método de pago)

       Para generar grabar la información de registro se deben enviar los siguientes campos con estos valores:
       ttAddFormEntrepreneur
       idtransaction = $transaction debe enviarse la que devolvio el servicio addFormSalesTransaction
       iditem = '' vacia
       zcreate = true  para grabar en tablas corbiz debe ser true
       client_type = 'CFINAL' para cliente admirable
        */

        if($ztransaction){
            //si se genero la transacción

            $restWrapper = new RestWrapper($this->ws_country."addFormEntrepreneur");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'AddFormEntrepreneur' => [
                    'ttAddFormEntrepreneur' => [
                        [
                            'countrysale' => $this->country,
                            'idtransaction' => $transaction,
                            'sponsor' => "000515VCJ",
                            'lastnamef' => 'TIRADO',
                            'lastnamem' => 'GUERRA',
                            'names' => 'ANA',
                            'birthdate' => '1990-07-18',
                            'address' => '36 MAPLES',
                            'number' => '',
                            'suburb' => '',
                            'complement' => 'EN FRENTE DE LAS VIAS DEL TREN',
                            'phone' => '3336315720',
                            'cellphone' => '3335353536',
                            'country' => $this->country,
                            'state' => 'TX',
                            'city' => 'BRYAN',
                            'county' => 'BRAZOS',
                            'zipcode' => '77803',
                            'email' => 'ana.guerra@gmail.com',
                            'sex' => 'F',
                            'idcenter' => 'TELENEV',
                            'warehouse' => 'TELEGP',
                            'iditem' => '',
                            'questions' => '1',
                            'answer' => 'rojo',
                            'receive_adversiting' => true,
                            'zsource' => 'WEB',
                            'zcreate' => true,
                            'lang' => $this->lang,
                            'pool' => false,
                            'client_type' => 'CFINAL'
                        ]
                    ],
                ],
                'AddFormDoctos' => [
                    'ttAddFormDoctos' => [
                        [
                            'countrysale' => '',
                            'idtransaction' => '',
                            'countrydoc' => '',
                            'iddocument' => '',
                            'numberdoc' => '',
                            'expirationdate' => '',
                        ]
                    ]
                ]
            ]];
            $resultAddFormEntrepreneur = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
            if($resultAddFormEntrepreneur['success'] && $resultAddFormEntrepreneur['responseWS']['response']['Success'] == 'true')
            {
                //validacion correcta
                $saveForm = true;
            }else if(!$resultAddFormEntrepreneur['success']  && $resultAddFormEntrepreneur['responseWS']['response']['Success'] == 'false' && isset($resultAddFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al validar formulario
                foreach ($resultAddFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultAddFormEntrepreneur['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultAddFormEntrepreneur['message']);
            }
        }


        /*
         *  3. Crear el cliente
         *  Si se grabo la información en Corbiz, tendriamos que ejecutar el servicio addEntrepreneur
         */
        if($saveForm){
            $restWrapper = new RestWrapper($this->ws_country."addEntrepreneur");
            $params = ['request' => [
                'CountryKey' => $this->country,
                'Lang' => $this->lang,
                'AddEntrepreneur' => [
                    'ttAddEntrepreneur' => [
                        [
                            'countrySale' => $this->country,
                            'idTransaction' => $transaction //transacción devuelta por addSalesTransaction
                        ]
                    ],
                ]

            ]];

            $resultAddEntrepreneur = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);
            if($resultAddEntrepreneur['success'] && $resultAddEntrepreneur['responseWS']['response']['Success'] == 'true')
            {
                //crea el eO
                $createDistr = true;
                $distr = $resultAddEntrepreneur['responseWS']['response']['EntrepreneurId'];
                echo $distr.'<br/>';
            }else if(!$resultAddEntrepreneur['success']  && $resultAddEntrepreneur['responseWS']['response']['Success'] == 'false' && isset($resultAddEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'])){
                //errores del servicio falla al validar formulario
                foreach ($resultAddEntrepreneur['responseWS']['response']['Error']['dsError']['ttError'] as $i => $err){
                    echo $err['messUser'].'<br/>';
                }
                dd($resultAddEntrepreneur['responseWS']['response']['Error']['dsError']['ttError']);
            }else{
                //errores no controlados excepciones
                dd($resultAddEntrepreneur['message']);
            }
        }


        dd($resultValidFormEntrepreneur, $resultAddTransaction, $resultAddFormEntrepreneur, $resultAddEntrepreneur);



    }


    /*
     *  ============== FIN ===============
     *  SEGUNDA ENTREGA
     */

    public function login(){
        //Login
        $cookieParser = new CookieParser;
        $urlWS = "http://10.1.10.79:8100/rest/ShoppingCartService/getShippingCompanies?Lang=ESP&CountryKey=RUS";
        $restWrapper = new RestWrapper($urlWS);
        $resultShippingCompaniesW = $restWrapper->call("GET",[],'json',['allow_redirects' => false], true);

        if(!$resultShippingCompaniesW['success'] && $resultShippingCompaniesW['responseWS']->getStatusCode() == 302 &&  isset($resultShippingCompaniesW['responseWS']->getHeader('Set-Cookie')[0])) {
            $cookieLogin = $cookieParser->fromString($resultShippingCompaniesW['responseWS']->getHeader('Set-Cookie')[0]);
            $cookieLoginR = $cookieLogin->getName() . "=" . $cookieLogin->getValue();

            $urlUSA = "http://10.1.10.79:8100/static/auth/j_spring_security_check";
            $restWrapper = new RestWrapper($urlUSA);
            $params = ['j_username' => 'restomni', 'j_password' => 'Omnilife', 'submit' => 'Login'];
            $resultConf = $restWrapper->call("POST", $params, 'form_params', [
                'headers' => ['Cookie' => $cookieLoginR
                ], 'allow_redirects' => false], true);

            $cookie = $cookieParser->fromString($resultConf['responseWS']->getHeader('Set-Cookie')[0]);

            $params = [
                'headers' => [
                    'Cookie' => $cookie->getName() . "=" . $cookie->getValue()
                ],
                'http_errors' => false,];
            $restWrapper = new RestWrapper($urlWS);
            $resultShippingCompanies = $restWrapper->call("GET", [], 'json', $params);
            dd($resultShippingCompaniesW, $cookieLoginR, $resultConf, $params, $resultShippingCompanies);
        }
    }
}
