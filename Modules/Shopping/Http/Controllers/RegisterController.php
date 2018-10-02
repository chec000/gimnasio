<?php

namespace Modules\Shopping\Http\Controllers;


use App\Helpers\SessionHdl;
use App\Helpers\SessionRegisterHdl;
use App\Helpers\ShoppingCart;
use App\Helpers\RestWrapper;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use App\Helpers\CommonMethods;
use Mockery\Exception;
use Modules\Admin\Entities\Country;
use Modules\Admin\Entities\Language;
use Modules\Shopping\Entities\Bank;
use Modules\Shopping\Entities\Order;
use Modules\Shopping\Entities\OrderDetail;
use Modules\Shopping\Entities\PromoProd;
use Modules\Shopping\Entities\ShippingAddress;
use Modules\Shopping\Entities\CountryProduct;
use Modules\Shopping\Entities\ConfirmationBanner;
use Modules\Shopping\Http\Controllers\traits\Register;
use Carbon\Carbon;
use View;




class RegisterController extends Controller
{

    use Register;

    public function __construct()
    {
        $this->CommonMethods = new CommonMethods();
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function register(Request $request)
    {

        //Generar Sesion para inscription
        $this->generateSession();

        //Validate if webservices are ac    tive
        if(config('settings::frontend.webservices') != 1  || !SessionRegisterHdl::isInscriptionActive() || SessionHdl::hasEo()){

            return redirect('/');
        }

        $codEo = "";
        $numEo ="";


        if(count($request->all()) > 0){
            $numEo = !empty($request->empresario_id) ? $request->empresario_id : '';
            $codEo = 1;

        }


        $months = config('shopping.months');
        $countries = $this->CommonMethods->getCountries();
        $shoppingCart = ShoppingCart::getItems(SessionRegisterHdl::getCorbizCountryKey());
        $points = ShoppingCart::getPointsQuotation(SessionRegisterHdl::getCorbizCountryKey());
        $subtotal = ShoppingCart::getSubtotalFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionRegisterHdl::getCurrencyKey());
        $currency  = Session::get('portal.main.currency_key');



        return View::make('shopping::frontend.register.register',['brand' => Session::get('portal.main.brand.name'),'countries' => $countries['data'],'months' => $months,'codEo' => $codEo,'numEo' => $numEo,'shoppingCart' => $shoppingCart,'currency' => $currency,'points' => $points,'subtotal' => $subtotal]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    /**
     * Genera la sesión para trabajar durante la inscripción para no afectar la sesión global
     * @param
     * @return
     */
    public function generateSession(){
        Session::put('portal.register.time_zone', Session::get('portal.main.time_zone'));
        Session::put('portal.register.webservice',Session::get('portal.main.webservice'));
        Session::put('portal.register.country_id',Session::get('portal.main.country_id'));
        Session::put('portal.register.currency_key',Session::get('portal.main.currency_key'));
        Session::put('portal.register.country_corbiz',Session::get('portal.main.country_corbiz'));
        Session::put('portal.register.language_id',Session::get('portal.main.language_id'));
        Session::put('portal.register.language_name',Session::get('portal.main.language_name'));
        Session::put('portal.register.language_corbiz',Session::get('portal.main.language_corbiz'));



    }

    /**
     * Actualiza los datos de la sesión de registro cuando cambia de país en el formulario.
     * @param  Request $request
     * @return $data
     */
    public function updateSession(Request $request){
        if ($request->ajax()) {
            $glob_country = Country::where(['id' => $request->country, 'active' => 1, 'delete' => 0])->first();

            if (!empty($glob_country)) {
                Session::forget('portal.register');
                Session::put('portal.register.time_zone', $glob_country->timezone);
                Session::put('portal.register.webservice', $glob_country->webservice);
                Session::put('portal.register.country_id', $glob_country->id);
                Session::put('portal.register.currency_key', $glob_country->currency_key);
                Session::put('portal.register.country_corbiz', $glob_country->corbiz_key);


                $lanDefault = Language::where('locale_key', '=', $glob_country->default_locale)->first();

                if ($lanDefault != null) {
                    Session::put('portal.register.language_id', $lanDefault->id);
                    Session::put('portal.register.language_name', $lanDefault->language_country);
                    Session::put('portal.register.language_corbiz', $lanDefault->corbiz_key);
                }


                return $data = array('country_name' => $glob_country->corbiz_key);

            }
        }


    }

    /**
     * Obtiene las referencias de registro de la base de datos.
     * @param  Request $request
     * @return Response
     */
    public function references(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getRegistrationReferences($request->country, Session::get('portal.register.language_corbiz'));
        }
    }

    public function legals(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getLegalDocuments($request->country, Session::get('portal.register.language_corbiz'));
        }
    }

    /**
     * Obtiene la información del pool de empresarios
     * @param  Request $request
     * @return Response
     */
    public function pool(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getPool($request->country);
        }
    }
    /**
     * Obtiene las preguntas de la clase de métodos comunes
     * @param  Request $request
     * @return Response
     */
    public function  questions(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getSecretQuestions($request->country);
        }
    }
    /**
     * valida si existes el empresario ingresado
     * @param  Request $request
     * @return Response
     */
    public function validateEo(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->validateSponsorFromCorbiz(Session::get('portal.register.webservice'), Session::get('portal.register.country_corbiz'), $request->sponsor, Session::get('portal.register.language_corbiz'));
        }
     }
    /**
     * Obtiene los parametros de configuración del pais
     * @param  Request $request
     * @return Response
     */
    public function parameters(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getRegistrationParameters($request->country);
        }
    }
    /**
     * Obtiene los métodos de pago del pais
     * @param  Request $request
     * @return Response
     */
    public function banks(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getBanks($request->country);
        }
    }
    /**
     * Obtiene laos documentos correspondientes al país
     * @param  Request $request
     * @return Response
     */
    public function shippingCompanies(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getShippingCompaniesFromCorbiz(Session::get('portal.register.webservice'), Session::get('portal.register.country_corbiz'), Session::get('portal.register.language_corbiz'), $request->state, $request->city);
        }
    }

    /**
     * Obtiene los documentos correspondientes al país
     * @param  Request $request
     * @return Response
     */
    public function documents(Request $request){

        if ($request->ajax()) {
            return $this->CommonMethods->getDocumentsFromCorbiz(Session::get('portal.register.webservice'), Session::get('portal.register.country_corbiz'), Session::get('portal.register.language_corbiz'));
        }
     }

    public function kits(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getkitsInscription($request->country);
        }
    }



    /**
     * Incluye el formulario en base al pais seleccionado.
     * @param  Request $request
     * @return view
     */
     public function changeViews(Request $request){
         if ($request->ajax()) {
            try{

                $country = strtolower($request->country);


                    $view = 'shopping::frontend.register.includes.'.$country.'.form_'.$country;
                    if(View::exists($view)){
                        return view($view);
                    }




                return "";

            }catch (Exception $e){
                return "";
            }
         }

    }

    /**
     * Elimina de la sesión la transacción actual para que sea generada una nueva debido al cambio o eliminación de Items o información general en la inscripcion
     * @param  Request $request
     * @return array
     */
    public function flushRegisterTransaction(Request $request){
        if ($request->ajax()) {
            $response    = ['status' => false, 'data' => [], 'messages' => []];

            if(SessionRegisterHdl::hasTransaction()){

                Session::forget('portal.register.checkout.'.SessionRegisterHdl::getCorbizCountryKey().'.transaction');
                $response    = ['status' => true, 'data' => [], 'messages' => []];
            }

            return $response;
        }

    }




    /**
     * Valida los campos requeridos por cada paso del registro
     * @param  Request $request
     * @return
     */
    public function postValidateStep1(Request $request)
    {
        if ($request->ajax())
        {

            $key_messages = array();
            $value_messages = array();

            foreach (Config::get('shopping.register.messages.' . Session::get('portal.register.country_corbiz') . '.step1') as $keyMessage => $valueMessage)
            {
                $key_messages[] = $keyMessage;
                $value_messages[] = trans($valueMessage);
            }

            $key_labels = array();
            $value_labels = array();
            foreach (Config::get('shopping.register.labels.' . Session::get('portal.register.country_corbiz') . '.step1') as $keyLabel => $valueLabel)
            {
                $key_labels[] = $keyLabel;
                $value_labels[] = trans($valueLabel);
            }


            $rules = config('shopping.register.rules.' . Session::get('portal.register.country_corbiz') . '.step1');

            $messages   = array_combine($key_messages, $value_messages);

            $labels     = array_combine($key_labels, $value_labels);


            $validator = Validator::make($request->all(), $rules, $messages, $labels);

            if ($validator->fails())
            {
                return response()->json([
                    'success'   => false,
                    'message'   => $validator->getMessageBag()->toArray(),
                ]);
            }

            Session::put('portal.register.steps', $request->all());

            return response()->json([
                'success'   => true,
                'message'   => '',
            ]);
        }
    }

    /**
     * Valida los campos requeridos por cada paso del registro
     * @param  Request $request
     * @return
     */
    public function postValidateStep2(Request $request)
    {
        if ($request->ajax())
        {

            $key_messages = array();
            $value_messages = array();
            foreach (Config::get('shopping.register.messages.' . Session::get('portal.register.country_corbiz') . '.step2') as $keyMessage => $valueMessage)
            {
                $key_messages[] = $keyMessage;
                $value_messages[] = trans($valueMessage);
            }

            $key_labels = array();
            $value_labels = array();
            foreach (Config::get('shopping.register.labels.' . Session::get('portal.register.country_corbiz') . '.step2') as $keyLabel => $valueLabel)
            {
                $key_labels[] = $keyLabel;
                $value_labels[] = trans($valueLabel);
            }
            
            
            $rules = config('shopping.register.rules.' . Session::get('portal.register.country_corbiz') . '.step2');

            $messages   = array_combine($key_messages, $value_messages);

            $labels     = array_combine($key_labels, $value_labels);
           
            $validator = Validator::make($request->all(), $rules, $messages, $labels);

            if ($validator->fails())
            {
                return response()->json([
                    'success'   => false,
                    'message'   => $validator->getMessageBag()->toArray(),
                ]);
            }

            //Validar fecha de nacimiento correcta
            $bornDate = checkdate($request->get('month'), $request->get('day'), $request->get('year'));

            if ($bornDate == false) {
                return response()->json([
                    'success'   => false,
                    'message'   => [
                        'borndate'  => trans('shopping::register.account.borndate.alert'),
                    ],
                ]);
            }


            Session::put('portal.register.steps', $request->all());

            return response()->json([
                'success'   => true,
                'message'   => '',
            ]);
        }
    }

    /**
     * Valida los campos requeridos por cada paso del registro
     * @param  Request $request
     * @return
     */
    public function postValidateStep3(Request $request)
    {
        if ($request->ajax())
        {

            $key_messages = array();
            $value_messages = array();
            foreach (Config::get('shopping.register.messages.' . Session::get('portal.register_customer.country_corbiz') . '.step2') as $keyMessage => $valueMessage)
            {
                $key_messages[] = $keyMessage;
                $value_messages[] = trans($valueMessage);
            }

            $key_labels = array();
            $value_labels = array();
            foreach (Config::get('shopping.register.labels.' . Session::get('portal.register_customer.country_corbiz') . '.step2') as $keyLabel => $valueLabel)
            {
                $key_labels[] = $keyLabel;
                $value_labels[] = trans($valueLabel);
            }

            $rules = config('shopping.register.rules.' . Session::get('portal.register.country_corbiz') . '.step3');

            $messages   = array_combine($key_messages, $value_messages);

            $labels     = array_combine($key_labels, $value_labels);

            $validator = Validator::make($request->all(), $rules, $messages, $labels);

            if ($validator->fails())
            {
                return response()->json([
                    'success'   => false,
                    'message'   => $validator->getMessageBag()->toArray(),
                ]);
            }


            Session::put('portal.register.steps', $request->all());


            return response()->json([
                'success'   => true,
                'message'   => '',
            ]);
        }
    }



    /**
     * Obtiene los estados correspondientes al país
     * @param  Request $request
     * @return Response
     */
    public function states(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getStatesFromCorbiz(Session::get('portal.register.webservice'), Session::get('portal.register.country_corbiz'), Session::get('portal.register.language_corbiz'));
        }
    }
    /**
   * Obtiene las ciudades correspondientes al país y estado
   * @param  Request $request
   * @return Response
   */
    public function cities(Request $request){
        if ($request->ajax()) {
            return $this->CommonMethods->getCitiesFromCorbiz(Session::get('portal.register.webservice'), Session::get('portal.register.country_corbiz'), Session::get('portal.register.language_corbiz'), $request->state);
        }
    }

    public function zipcode(Request $request)
    {
        if ($request->ajax())
        {
            return $this->CommonMethods->getZipCodesFromCorbiz(Session::get('portal.register.webservice'), Session::get('portal.register.country_corbiz'), Session::get('portal.register.language_corbiz'), $request->zipCode);
        }
    }


    /**
     * Obtiene el warehouse correspondiente a la ciudad y estado
     * @param  Request $request
     * @return Response
     */
    public function getWarehouseFromCorbiz(Request $request){

            $steps = SessionRegisterHdl::getSteps();
            $result_wh  = $this->CommonMethods->getAvailableWH(SessionRegisterHdl::getRouteWS(), SessionRegisterHdl::getCorbizCountryKey(), SessionRegisterHdl::getCorbizLanguage(), '', '',$steps['zip']);

            if ($result_wh['success'] == true)
            {
                $response = [
                    'success'   => true,
                    'message'   => '',
                    'data' => $result_wh['message'],
                ];

            }
            else
            {
                $response = [
                    'success'   => false,
                    'message'   => $result_wh['message'],
                    'data'      => ''
                ];
            }

        return $response;
    }
    /**
     * Almacena en sesión la fecha y hora que se da click en aceptar terminos y condiciones
     * @param  Request $request
     * @return Response
     */
    public function checkedterms(Request $request){

        $date     = new \DateTime('now', new \DateTimeZone(SessionRegisterHdl::getTimeZone()));

        if ($request->ajax()) {
            $success = false;
            $message = trans('shopping::register.account.country.emptydata');
            $data = array();

            if (!empty($request->id)) {

                if($request->checkmarked == 'true'){

                    Session::put('portal.register.hour_' . $request->id,$date->format('Y-m-d H:i:s'));
                    $success = true;

                }else{

                    Session::forget('portal.register.hour_' . $request->id.'');
                    $success = true;
                }

                return ['success' => $success, 'message' => '', 'data' => $data];
            } else {
                return ['success' => $success, 'message' => $message, 'data' => $data];
            }
        }
    }

    public function setcompany(Request $request)
    {
        if ($request->ajax()) {
            $success = false;
            $message = trans('shopping::register.account.country.emptydata');
            $data = array();

            if (!empty($request->company)) {


                Session::put('portal.register.steps.shipping_way', $request->input('company'));
                $success = true;
                $message = '';
                return ['success' => $success, 'message' => $message, 'data' => $data];

            } else {
                return ['success' => $success, 'message' => $message, 'data' => $data];
            }
        }
    }




    /* * * Register - Modal Registro Inconcluso * * */
    public function postExit(Request $request)
    {
        if ($request->ajax())
        {
            /* Envio de Correo a Empresario */
            if ($request->name_session == 'register')
            {
                if (Session::get('portal.register.email') != null || Session::get('portal.register.email') != '')
                {
                    $data = [
                        'email'     => Session::get('portal.register.email'),
                        'tel'       => Session::get('portal.register.tel'),
                        'name'      => Session::get('portal.register.name'),
                        'lastname'  => Session::get('portal.register.lastname'),
                        'lastname2' => Session::get('portal.register.lastname2'),
                    ];

                    Mail::send('shopping::frontend.customer.mail_code', ['data' => $data], function($m) use ($data) {
                        $m->from(Session::get('portal.register.email_send'), trans('shopping::register.mail_address.title'));
                        $m->to('daniel.herrera@omnilife.com', $data['name'] . ' ' . $data['lastname'])->subject(trans('shopping::register.mail_address.subject'));
                    });
                }
            }

            /* Eliminamos la Variable de Sesionn */
            Session::forget('portal.' . $request->name_session);

            /* Variable para activar redireccionamiento de registro inconcluso */
            Session::put('portal.unfinished_register', true);

            return response()->json([
                'success'   => true,
                'message'   => url($request->url_next_exit_register),
            ]);
        }
    }

    /**
     * validateRegisterForm
     * Valida si los datos enviados en el formulario son validos para su registro
     *
     * TODO
     *
     * @param Request $request  Petición HTTP
     * @return array
     */
    public function validateFormCorbiz(Request $request) {

        $response = ['status' => false];

        if ($request->ajax()) {


            if (SessionRegisterHdl::hasSteps()) {
                $country = Country::find(SessionRegisterHdl::getCountryID());
                $formEntepreneur = $this->getWSFormEntepreneur();

                $docsEntepreneur = $this->getWSDocsEntepreneur();


                $responseWs = $this->CommonMethods->addFormEntrepreneur($country->webservice, SessionRegisterHdl::getCorbizCountryKey(), SessionRegisterHdl::getCorbizLanguage(), $formEntepreneur, $docsEntepreneur);

                if ($responseWs['status']) {

                    $response['status'] = true;
                    $response['errors'] = '';

                    //$response = $this->processCorbizTransaction();
                } else {
                    $response['status'] = false;
                    $response['errors'] = $responseWs['messages'];
                }
            }else{
                $response['status'] = false;
                $response['errors'] = "no se encontro sesión de steps";
            }

        }

        return $response;
    }

    public function  kitInitQuotation(Request $request){
        Session::forget('portal.register.'.SessionRegisterHdl::getCorbizCountryKey().'.promotionsItemsTemp');

        return $this->initQuotation($request);

    }

    public function getInitQuotationPromos(Request $request){
           return $this->initQuotation($request);
    }

    /*
 * initQuotation()
 * Inicia con el proceso de cotizacion
 *
 * Recibe Request, el cual contiene el kit seleccionado para cotizarlo
 * */
    public function initQuotation(Request $request){
        //dd($request->all());
        $steps = SessionRegisterHdl::getSteps();
        $resultValidateAvailableWH = false;
        $resultASW = false;
        $result = array();
        //obtener almacen de corbiz
        $warehouse = $this->getWarehouseFromCorbiz($request);

        //Proceso para obtener el almacen con el que se realizara la cotizacion
        session()->forget('portal.register.'.SessionRegisterHdl::getCorbizCountryKey().'quotation');


        if(isset($warehouse['data']['warehouse'])){
            Session::put('portal.register.steps.warehouse',$warehouse['data']['warehouse']);
            Session::put('portal.register.steps.distCenter',$warehouse['data']['distCenter']);
            Session::put('portal.register.steps.kitselected',$request->kitselected);
            //Session::forget('portal.register.cart.'.SessionRegisterHdl::getCorbizCountryKey());

            $kitarr = ['kit'=> $request->kitselected,'kitprice' => $request->price,'kitid' => $request->kitid,'kitimage' => $request->kitimage,'iskit' => $request->iskit];

            if(!isset($request->fromChanged)){
                Session::put('portal.register.cart.'.SessionRegisterHdl::getCorbizCountryKey().'.items',$kitarr);
            }


            $countryKey = SessionRegisterHdl::getCorbizCountryKey();
            //validamos si existe cesta, si existe se invocan los métodos para la validar las existencias
            if(Session::has("portal.cart.{$countryKey}.items")){
                ShoppingCart::validateProductWarehouse(SessionRegisterHdl::getCorbizCountryKey(),$warehouse['data']['warehouse']);
                ShoppingCart::validateProductRestrictionState(SessionRegisterHdl::getCorbizCountryKey(), $steps['state_hidden']);
            }
            //procedemos al método de la cotización
            $resultASW = $this->getAddSalesWebWS($steps);


            if($resultASW['success']){
                $result = array(
                    'status' => true,
                    'messages' =>  '',
                    'resultASW' => $resultASW,

                );
            }else{
                $result = array(
                    'status' => false,
                    'messages' =>  $resultASW['response'],
                    'resultASW' => $resultASW,

                );
            }





        } else{
            $result = array(
                'status' => false,
                'messages' =>  trans("shopping::register.warehouse.empty"),
                'resultASW' => '',

            );
        }






        return $result;
    }


    /**
     * processCorbizTransaction
     * Genera un numero de transacción en corbiz
     *
     * TODO
     *
     * @param Request $request  Petición HTTP
     * @return array
     */
    public function transactionFromCorbiz(Request $request) {
        $response = ['status' => false];
        $date     = new \DateTime('now', new \DateTimeZone(SessionRegisterHdl::getTimeZone()));


        if ($request->ajax()) {
            $paymentMethodId = $request->input('paymentMethod');

            if (!SessionHdl::hasPaymentMethod()) {
                Session::put('portal.register.checkout.'.SessionRegisterHdl::getCorbizCountryKey().'.paymentMethod', $paymentMethodId);
            }

            if (!SessionRegisterHdl::hasTransaction()) {

                if (SessionRegisterHdl::hasSteps()) {
                    $country = Country::find(SessionRegisterHdl::getCountryID());
                    $salesWeb = $this->getWSSalesWeb();      # Info para el servicio
                    $salesWebItems = $this->getWSSalesWebItems(); # Info para el servicio
                    //dd($salesWeb,$salesWebItems);

                    $responseWs = $this->CommonMethods->getTransactionFromCorbiz($country->webservice, SessionRegisterHdl::getCorbizCountryKey(), SessionRegisterHdl::getCorbizLanguage(), $salesWeb, $salesWebItems);

                    if ($responseWs['status']) {
                        Session::put('portal.register.checkout.'.SessionRegisterHdl::getCorbizCountryKey().'.transaction', $responseWs['data']['transaction']);
                        $response = $this->saveInscriptionOrder();

                    } else {
                        $response['status'] = false;
                        $response['errors'] = $responseWs['messages'];
                    }
                }
            } else {

                if ($paymentMethodId != SessionRegisterHdl::getPaymentMethod()) {
                    Session::put('portal.register.checkout.'.SessionRegisterHdl::getCorbizCountryKey().'.paymentMethod', $paymentMethodId);
                    Order::where('corbiz_transaction', SessionRegisterHdl::getTransaction())->update(
                        [
                            'bank_id' => $paymentMethodId,
                            'updated_at' => $date->format('Y-m-d H:i:s')
                        ]);
                }


                if (!Order::exists('corbiz_transaction', SessionRegisterHdl::getTransaction())) {

                    $response = $this->saveInscriptionOrder();
                }
                else {

                    $response['status'] = true;
                }

            }


            # Regresamos a la vista la clave del método de pago y el número de orden

            $paymentMethod = Bank::find($paymentMethodId);
            $order         = Order::where('corbiz_transaction', SessionRegisterHdl::getTransaction())->first();


            if ($order != null) {
                $response['method_key'] = $paymentMethod->bank_key;
                $response['order']      = $order->order_number;
            }

        }

        return $response;
    }




    /**
     * getAddSalesWebWS
     * * @param Array $dataAddSalesWeb Contiene los datos necesarios para el WS y los productos del carrito formateados
     * @return mixed            Respuesta del WS
     */

    public function getAddSalesWebWS($steps = array(),$process = 'register') {

        $shoppingCartController = new ShoppingCartController();

        $defaultCodePaid = config('shopping.paymentCorbizRelation.' . SessionRegisterHdl::getCorbizCountryKey() . '.default');
        $arrayItems = $this->getItemsFormatedAddSalesWebWS($process);

        $dataASW = array(
            'dataAddress' => $steps,
            'arrayItems' => $arrayItems,
            'cartResume' => $shoppingCartController->getCartResume(),
            'codePaid' => config('shopping.paymentCorbizRelation.' . SessionRegisterHdl::getCorbizCountryKey() . '.' . $defaultCodePaid)
        );

        $restWrapper = new RestWrapper(SessionRegisterHdl::getRouteWS()."addSalesWeb");
        $params = ['request' => [
            'CountryKey' => SessionRegisterHdl::getCorbizCountryKey(),
            'Lang' => SessionRegisterHdl::getCorbizLanguage(),
            'SalesWeb' => [
                'ttSalesWeb' => [
                    [
                        'countrysale' => SessionRegisterHdl::getCorbizCountryKey(),
                        'no_trans' => '',
                        'distributor' =>  '',
                        'amount' => 70,
                        'receiver' => $dataASW['dataAddress']['name'],
                        'address' => $dataASW['dataAddress']['street'],
                        'number' => '',
                        'suburb' => '',
                        'complement' => $dataASW['dataAddress']['betweem_streets'],
                        'state' => $dataASW['dataAddress']['state_hidden'],
                        'city' => $dataASW['dataAddress']['city_hidden'],
                        'county' => $dataASW['dataAddress']['colony'],
                        'zipcode' => $dataASW['dataAddress']['zip'],
                        'shippingcompany' => $dataASW['dataAddress']['shipping_way'],//obtener de la sesión,
                        'altAddress' => 0,
                        'email' => $dataASW['dataAddress']['email'],
                        'phone' => $dataASW['dataAddress']['tel'],
                        'previousperiod' => false,
                        'source' => 'WEB',
                        'type_mov'=> 'INGRESA',
                        'codepaid' => $dataASW['codePaid'],
                        'zcreate' => false
                    ]
                ],
            ],
            'SalesWebItems' => [
                'ttSalesWebItems' => $dataASW['arrayItems']
            ]
        ]];

        $resultQuoteWeb = $restWrapper->call("POST",$params,'json', ['http_errors' => false]);

        $resultData = $this->getResultDataAddSalesWeb($resultQuoteWeb);


        if($resultData['requotation']){
            $this->getAddSalesWebWS($steps);
        } else {
            //Eliminado de la session de los Items temporales de Promociones
            SessionRegisterHdl::forgetPromotionItems();
            return $resultData;
        }
    }

    /**
     * getResultDataAddSalesWeb
     *
     * @param String $corbizKey Llave CorBiz del país
     * @return mixed            Vista renderizada de los métodos de pago
     */
    public function getResultDataAddSalesWeb($responseWS){

        $dataResult = array();

        if($responseWS['success'] && $responseWS['responseWS']['response']['Success'] == 'true')
        {
            //cotizacion exitosa
            Register::setSessionCartAddSalesWeb($responseWS['responseWS']['response']);
            $dataResult['success'] = true;
            $dataResult['requotation'] = false;
            $dataResult['response'] = $responseWS['responseWS']['response'];
            $dataResult['existsPromotions'] = false;
            $process = 'register';
            //Armado de arreglo de promociones
            if(isset($responseWS['responseWS']['response']['HedPromo']['dsHedPromo']['thedPromo'])
                && isset($responseWS['responseWS']['response']['DetPromo']['dsDetPromo']['tdetPromo'])){
                $promotionController = new PromotionController();
                $dataResult['existsPromotions'] = $promotionController->initPromotions($responseWS['responseWS']['response']['HedPromo']['dsHedPromo']['thedPromo']
                    ,$responseWS['responseWS']['response']['DetPromo']['dsDetPromo']['tdetPromo'], $process );
            }


            $dataResult['view'] = $this->getResumeCartViewAfterQuotation();

            return $dataResult;
        }else if(!$responseWS['success']  && $responseWS['responseWS']['response']['Success'] == 'false' && isset($responseWS['responseWS']['response']['Error']['dsError']['ttError'])){
            $requotation = ShoppingCart::removeItemsCartAddSalesWebWS($responseWS['responseWS']['response']['Error']['dsError']['ttError']);

            $dataResult['success'] = false;
            $dataResult['requotation'] = $requotation;
            $dataResult['response'] = $responseWS['responseWS']['response']['Error']['dsError']['ttError'];
            return $dataResult;
            //dd($resultQuoteWeb['responseWS']['response']['Error']['dsError']['ttError']);
        }else{
            //errores no controlados excepciones
            $dataResult['success'] = false;
            $dataResult['requotation'] = false;
            $dataResult['response'] = $responseWS['message'];
            return $dataResult;
            //dd($resultQuoteWeb['message']);
        }
    }

    /**
     * getResumeCartViewAfterQuotation
     *
     * @return mixed    Vista renderizada del resumen de compra
     */
    public function getResumeCartViewAfterQuotation() {

        $arrayViews = array('items' => "", 'totals' => "" );
        $corbizCountry      = strtolower(SessionRegisterHdl::getCorbizCountryKey());
        if(View::exists("shopping::frontend.register.includes.{$corbizCountry}.cart_preview_items_{$corbizCountry}")) {
            $viewItems = View::make("shopping::frontend.register.includes.{$corbizCountry}.cart_preview_items_{$corbizCountry}",
                [
                    'currency' => SessionRegisterHdl::getCurrencyKey(),
                    'shoppingCart' => Register::getItemsQuotation(SessionRegisterHdl::getCorbizCountryKey()),
                ]
            );
            $arrayViews['items'] = (string)$viewItems;
        }
        if(View::exists("shopping::frontend.register.includes.{$corbizCountry}.cart_preview_resume_{$corbizCountry}")) {
            $viewTotals = View::make("shopping::frontend.register.includes.{$corbizCountry}.cart_preview_resume_{$corbizCountry}",
                [
                    'currency' => SessionRegisterHdl::getCurrencyKey(),
                    'points' => Register::getPointsQuotation(SessionRegisterHdl::getCorbizCountryKey()),
                    'subtotal' => Register::getSubtotalFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionHdl::getCurrencyKey()),
                    'handle' => Register::getHandlingFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionHdl::getCurrencyKey()),
                    'taxes' => Register::getTaxesFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionHdl::getCurrencyKey()),
                    'total' => Register::getTotalFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionHdl::getCurrencyKey()),
                ]
            );

            $arrayViews['totals'] = (string)$viewTotals;
        }
        //dd($arrayViews);
        return $arrayViews;
       /*  $corbizCountry      = strtolower(SessionRegisterHdl::getCorbizCountryKey());
        if(View::exists("shopping::frontend.register.includes.{$corbizCountry}.cart_preview_{$corbizCountry}")) {
            return View::make("shopping::frontend.register.includes.{$corbizCountry}.cart_preview_{$corbizCountry}",
                [   'currency' => SessionRegisterHdl::getCurrencyKey(),
                    'shoppingCart' => Register::getItemsQuotation(SessionRegisterHdl::getCorbizCountryKey()),
                    'points' => Register::getPointsQuotation(SessionRegisterHdl::getCorbizCountryKey()),
                    'subtotal' => Register::getSubtotalFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionRegisterHdl::getCurrencyKey()),
                    'handle' => Register::getHandlingFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionRegisterHdl::getCurrencyKey()),
                    'taxes' => Register::getTaxesFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionRegisterHdl::getCurrencyKey()),
                    'total' => Register::getTotalFormattedQuotation(SessionRegisterHdl::getCorbizCountryKey(), SessionRegisterHdl::getCurrencyKey())]
            );
        } else {
            return false;
        } */
    }

    /**
     * getAddSalesWebWS
     *
     * @return mixed            Array con los items del carrito en formato para ser enviados en el WS addSalesWeb
     */
    public function getItemsFormatedAddSalesWebWS($process){
        //dd(ShoppingCart::getItems(SessionHdl::getCorbizCountryKey()));
        $arrayItems = array();
        $count = 0;
        $items = SessionRegisterHdl::getKitInfo();

        foreach(ShoppingCart::getItems(SessionRegisterHdl::getCorbizCountryKey()) as $index => $isc){
            $arrayItems[] = [
                'numline' => $count,
                'countrysale' => SessionRegisterHdl::getCorbizCountryKey(),
                'item' => $isc['sku'],
                'quantity ' => $isc['quantity'],
                'listPrice' => $isc['price'],
                'discPrice' => '',
                'points' => $isc['points'],
                'promo' => false
            ];
            $count++;
        }

        //Se realiza el push para agregar el kit seleccionado para cotizarlo junto con los itemes en dado caso de un pedido combinado
        //Si solo viene el kit lo coloca en el array individualmente

         if(SessionRegisterHdl::hasPromotionItems($process)){
            foreach(ShoppingCart::getPromotionItems(SessionRegisterHdl::getCorbizCountryKey(), $process) as $index => $promotion){
                foreach($promotion as $isc){
                    $isc['numline'] = $count;
                    $arrayItems[] = $isc;
                    $count++;
                }
            }
        }
        $arrayItems[] = [
            'numline' => $count == 0 ? 1 : $count,
            'countrysale' => SessionRegisterHdl::getCorbizCountryKey(),
            'item' => $items['kit'],
            'quantity ' => 1,
            'listPrice' => $items['kitprice'],
            'discPrice' => '',
            'points' => 0,
            'promo' => false
        ];




        return $arrayItems;
    }



    public function confirmation(Request $request){

        //Validacioón de que se recibieron datos para procesar la orden
        if (!empty($request->data)) {
            $orderInfo = $this->obtainOrderData($request->data);

            $countryInfo = $this->getCountryInfo($orderInfo['order']['country_id']);
            $lanDefault = Language::where('locale_key', '=', $orderInfo['order']->country->default_locale)->first();
            $date = new \DateTime('now', new \DateTimeZone($countryInfo['timezone']));
            //Si se encuentran los datos en la BD  se procede a armar los llamados a los websevices
            if(!empty($orderInfo)){
                //Datos para llenar del formulario de empresario obtenidos de la DB
                $formEntepreneur = $this->getWSFormEntepreneur(true,true,$orderInfo);
                $docsEntepreneur = $this->getWSDocsEntepreneur('obtain',$orderInfo['order']['id'],$orderInfo['order']['corbiz_transaction'],$orderInfo['order']->country->corbiz_key);
                //Datos para registrar el pedido en corbiz



                //Grabamos en las tablas de corbiz los datos del Eo
                $saveDataEo = $this->CommonMethods->addFormEntrepreneur($countryInfo['webservice'], $countryInfo['corbiz_key'], $lanDefault->corbiz_key, $formEntepreneur, $docsEntepreneur);


                if ($saveDataEo['status']) {
                    //Se actualiza la DB para informar que el proceso de guardar la información en corbiz concluyó con éxito
                    Order::where('order_number', $orderInfo['order']->order_number)->update([
                        'saved_dataeo' => 1,
                        'updated_at' => $date->format('Y-m-d H:i:s'),
                    ]);
                    //Si es correcta la grabación de los datos invocamos el servicio para crear el empresario
                    $createEo = $this->CommonMethods->addEntrepreneur($countryInfo['webservice'], $countryInfo['corbiz_key'], $lanDefault->corbiz_key, $orderInfo['order']['corbiz_transaction']);

                    if($createEo['status']){
                        
                          //Actualización de base de datos para colocar el nuevo numero de empresario
                          ShippingAddress::where('order_id',$orderInfo['order']->id)->update([
                              'eo_number' => $createEo['data']['eonumber'],
                              'updated_at' => $date->format('Y-m-d H:i:s'),
                          ]);

                        $emailsSend = Config::get('cms.email_send');
                        $from_email = '';

                        foreach ($emailsSend as $countryCorbiz => $email)
                        {
                            if ($countryCorbiz == $countryInfo['corbiz_key'])
                            {
                                $from_email = $email;
                            }
                        }
                        //Envio de Mail al sponsor
                            $data_sponsor   = [
                                'view_mail'         => 'shopping::frontend.register.includes.'.strtolower($orderInfo['order']->country->corbiz_key).'.mails.sponsor',
                                'from_email'        => $from_email,
                                'title'             => trans('shopping::register.mail.sponsor.title'),
                                'to_email'          => 'alan.magdaleno@omnilife.com',//$orderInfo['shippingAddress']['sponsor_email'],
                                'name'              => $orderInfo['shippingAddress']['sponsor_name'],
                                'subject'           => trans('shopping::register_customer.mail.sponsor.subject'),
                                'name_customer'     => $orderInfo['shippingAddress']['eo_name'] . ' ' . $orderInfo['shippingAddress']['eo_lastname'],
                                'code_customer'     => $createEo['data']['eonumber'],
                                'tel_customer'      => isset($orderInfo['shippingAddress']['telephone']) ? $orderInfo['shippingAddress']['telephone'] : $orderInfo['shippingAddress']['cellphone'],
                                'email_customer'    => $orderInfo['shippingAddress']['email']
                            ];

                            if (($from_email != null || $from_email != '') && ($orderInfo['shippingAddress']['sponsor_email'] != '' || $orderInfo['shippingAddress']['sponsor_email'] != null))
                        {
                            $this->CommonMethods->getSendMail($data_sponsor);
                        }
                        //Envio de Mail al sponsor
                        //Envio de mail al nuevo empresario
                            $data_customer  = [
                                'view_mail'     => 'shopping::frontend.register.includes.'.strtolower($orderInfo['order']->country->corbiz_key).'.mails.customer',
                                'from_email'    => $from_email,
                                'title'         => trans('shopping::register_customer.mail.customer.title'),
                                'to_email'      => 'alan.magdaleno@omnilife.com',//$orderInfo['shippingAddress']['email'],
                                'name'          => $orderInfo['shippingAddress']['eo_name'] . ' ' . $orderInfo['shippingAddress']['eo_lastname'],
                                'subject'       => trans('shopping::register_customer.mail.customer.subject'),
                                'code'          => $createEo['data']['eonumber'],
                                'password'      => $createEo['data']['password'],
                                'question'      => $createEo['data']['question'],
                                'name_sponsor'  => $orderInfo['shippingAddress']['sponsor_name'],
                                'email_sponsor' => $orderInfo['shippingAddress']['sponsor_email'],
                            ];

                            # Generación del contrato
                            try {
                                $today = explode('.', date('d.m.y'));
                                $paths = $this->generateContract([
                                    'name'       => $orderInfo['shippingAddress']['eo_name'] . ' ' . $orderInfo['shippingAddress']['eo_lastname'],
                                    'address'    => $orderInfo['shippingAddress']['address'],
                                    'city'       => $orderInfo['shippingAddress']['city'],
                                    'state'      => $orderInfo['shippingAddress']['state'],
                                    'zipCode'    => $orderInfo['shippingAddress']['zip_code'],
                                    'birthday'   => date('m-d-Y', strtotime($orderInfo['shippingAddress']['birthdate'])),
                                    'email'      => $orderInfo['shippingAddress']['email'],
                                    'phone'      => isset($orderInfo['shippingAddress']['telephone']) ? $orderInfo['shippingAddress']['telephone'] : '',
                                    'cellphone'  => isset($orderInfo['shippingAddress']['cellphone']) ? $orderInfo['shippingAddress']['cellphone'] : '',
                                    'otherphone' => '',
                                    'dd'         => $today[0],
                                    'mm'         => $today[1],
                                    'yy'         => $today[2],
                                    'filename'   => $createEo['data']['eonumber'] . '.pdf'
                                ], $orderInfo['order']->country_id, $orderInfo['order']->country->default_locale);
                                if ($paths !== false) {
                                    $data_customer['attachPdf']  = $paths['completePath'];

                                    Order::where('id', $orderInfo['order']->id)
                                        ->update([
                                            'contract_path' => $paths['publicPath'],
                                            'updated_at'    => $date->format('Y-m-d H:i:s')
                                        ]);
                                }
                            } catch (\ErrorException $e) {
                                Log::error('ERR Register (confirmation): ' . $e->getMessage());
                            }


                            if (($from_email != null || $from_email != '') && ($orderInfo['shippingAddress']['email'] != '' ||$orderInfo['shippingAddress']['email'] != null))
                            {
                                $this->CommonMethods->getSendMail($data_customer);
                            }
                                    $eo = ['question' => $createEo['data']['question'],'password' => $createEo['data']['password']];

                                    //Inicio llamada addsalesweb para almacenar en la DB
                                    $salesWeb = $this->getWSSalesWeb(true,true,$orderInfo,$createEo['data']['eonumber']);
                                    $salesWebItems = $this->getWSSalesWebItems(true,$orderInfo);
                                    $responseWs = $this->CommonMethods->getOrderFromCorbiz($countryInfo['webservice'], $countryInfo['corbiz_key'], $lanDefault->corbiz_key, $salesWeb, $salesWebItems);

                            //Envio de mail al nuevo empresario

                                        if ($responseWs['status']) {
                                            Order::where('order_number',$orderInfo['order']->order_number)->update([
                                                'order_estatus_id'    => $this->CommonMethods->getOrderStatusId('ORDER_COMPLETE', $orderInfo['order']->country_id),
                                                'corbiz_order_number' => $responseWs['data']['order']
                                            ]);

                                            # Email de confirmación de la orden
                                            $data_order  = [
                                                'view_mail'     => 'shopping::frontend.register.includes.'.strtolower($orderInfo['order']->country->corbiz_key).'.mails.payment_success_order_corbiz',
                                                'from_email'    => $from_email,
                                                'title'         => trans('shopping::register.mail.order.title'),
                                                'to_email'      => 'alan.magdaleno@omnilife.com',//$orderInfo['shippingAddress']['email'],
                                                'name'          => $orderInfo['shippingAddress']['eo_name'] . ' ' . $orderInfo['shippingAddress']['eo_lastname'],
                                                'subject'       => trans('shopping::checkout.confirmation.emails.order_success'),
                                                'order'         =>  $responseWs['data']['order'],
                                            ];

                                            $this->CommonMethods->getSendMail($data_order);
                                            return $this->confirmationSuccess($responseWs,$orderInfo,'success',$eo);

                                        }
                                        else {

                                            Order::where('order_number', $orderInfo['order']->order_number)->update([
                                                'order_estatus_id'   => $this->CommonMethods->getOrderStatusId('CORBIZ_ERROR', $orderInfo['order']->country->corbiz_key),
                                                'updated_at'         => $date->format('Y-m-d H:i:s'),
                                                'error_user'         => $responseWs['err_order']['error_user'],
                                                'error_corbiz'       => $responseWs['err_order']['error_corbiz']
                                            ]);

                                            return $this->confirmationSuccess($responseWs,$orderInfo);

                                        }





                    }
                    //Actualización de base de datos si no se generó el empresario
                    else{
                        Order::where('order_number', $orderInfo['order']->order_number)->update([
                            'order_estatus_id' => 11,
                            'error_corbiz' => $createEo['messages'][0],
                            'updated_at' => $date->format('Y-m-d H:i:s'),
                        ]);
                        return $this->confirmationSuccess($createEo,$orderInfo);

                    }

                }
                else {
                    //Actualización de base de datos si no se guardaron los datos en las tablas de corbiz

                    Order::where('order_number', $orderInfo['order']->order_number)->update([
                        'order_estatus_id' => 11,
                        'error_corbiz' => $saveDataEo['messages'][0],
                        'updated_at' => $date->format('Y-m-d H:i:s'),
                    ]);

                    return $this->confirmationSuccess($saveDataEo,$orderInfo);


                }



            }else{
                //redirect a register por no enctonraro datos en la db
                return redirect('/register');
            }


        }
        //redirect a register por no recibir datos mediante el request
         else {
             return redirect('/register');
         }
    }


    private function confirmationSuccess($response,$info,$type = 'success',$eo = array()) {
        $countryKey = $info['order']->country->corbiz_key;

        $order      = [];

        $order['type']     = $type;
        $order['order']    = Order::where('corbiz_transaction', $info['order']['corbiz_transaction'])->first();
        $order['items']    = OrderDetail::where('order_id', $order['order']->id)->get();
        $order['shipping'] = ShippingAddress::where('order_id', $order['order']->id)->first();
        $order['dataeo'] = $eo;
        $typebanner = 'success';
        # Tipo de vista
        if ($order['order']->order_estatus_id == $this->CommonMethods->getOrderStatusId('PAYMENT_PENDING', $info['order']['country_id'])) {
            $order['type'] = 'pending';
            $typebanner = 'warning';
        } else if ($order['order']->order_estatus_id == $this->CommonMethods->getOrderStatusId('CORBIZ_ERROR', $info['order']['country_id'])) {
            $order['type'] = 'no_order';
            $typebanner = 'error';
            $order['errors'] = $response['messages'];
        }

        foreach ($order['items'] as $i => $item) {
            if ($item->is_promo == 1) {
                $promoProduct = PromoProd::find($item->promo_prod_id);

                if (!is_null($promoProduct)){
                    $name = "{$promoProduct->clv_producto} - {$promoProduct->name}";
                    $sku = $promoProduct->clv_producto;
                } else {
                    $name = "{$item->product_code} - {$item->product_name}";
                    $sku = $item->product_code;
                }

            } else if ($item->is_special == 1) {
                $name = "{$item->product_code} - {$item->product_name}";
                $sku  = $item->product_code;
            } else {
                $countryProduct = CountryProduct::find($item->product_id);
                $name = "{$countryProduct->product->sku} - {$countryProduct->name}";
                $sku  = $countryProduct->product->sku;
            }

            $order['items'][$i]->name = $name;
            $order['items'][$i]->sku  = $sku;
        }

        Session::forget("portal.register");
        ShoppingCart::deleteSession($countryKey);

        $order['banners'] = $this->getBanners($typebanner,'inscription',$info['order']['country_id']);


        $countryKey = strtolower($countryKey);

        return View::make("shopping::frontend.register.includes.{$countryKey}.payment.confirmation.confirmation", $order);


    }





    public function obtainOrderData($data = array()){
        $order = $data['order'];
        $orderData = array();
        switch ($order['bank_id']){
            //Caso paypal
            case 1:
                $orderInfo = Order::where('bank_transaction',$order['bank_transaction'])->first();
                if($orderInfo != null){
                        $orderDetail = $orderInfo->orderDetail;
                        $shippingInformation = $orderInfo->shippingAddress;
                        $orderData = ['order' => $orderInfo,'orderDetail' => $orderDetail,'shippingAddress' => $shippingInformation];
                }
                break;
            //paypalplus
            case 2 :

            break;
        }


        return $orderData;


    }

    public function getCountryInfo($country){
        $data = [];
        $globCountries = Country::find($country);

        if(!is_null($globCountries)){

            $data = ['corbiz_key' => $globCountries['corbiz_key'],'webservice' => $globCountries['webservice'],'timezone' => $globCountries['timezone'],'currency_key' => $globCountries['currency_key']];

         }


        return $data;
    }

    private function generateContract($data, $countryId, $lang) {
        $coords = Config::get('shopping.pdf.coords.'.SessionHdl::getCorbizCountryKey());
        $lines  = [
            ['x' => $coords[0]['x'],  'y' => $coords[0]['y'],  'content' => $data['name']], # Name
            ['x' => $coords[1]['x'],  'y' => $coords[1]['y'],  'content' => $data['address']], # Address
            ['x' => $coords[2]['x'],  'y' => $coords[2]['y'],  'content' => $data['city']], # City
            ['x' => $coords[3]['x'],  'y' => $coords[3]['y'],  'content' => $data['state']], # State
            ['x' => $coords[4]['x'],  'y' => $coords[4]['y'],  'content' => $data['zipCode']], # Zip code
            ['x' => $coords[5]['x'],  'y' => $coords[5]['y'],  'content' => $data['birthday']], # Birthday
            ['x' => $coords[6]['x'],  'y' => $coords[6]['y'],  'content' => $data['email']], # Email
            ['x' => $coords[7]['x'],  'y' => $coords[7]['y'],  'content' => $data['phone']], # Phone
            ['x' => $coords[8]['x'],  'y' => $coords[8]['y'],  'content' => $data['cellphone']], # Cellphone
            ['x' => $coords[9]['x'],  'y' => $coords[9]['y'],  'content' => $data['otherphone']], # Other phone
            ['x' => $coords[10]['x'], 'y' => $coords[10]['y'], 'content' => $data['dd']], # Day
            ['x' => $coords[11]['x'], 'y' => $coords[11]['y'], 'content' => $data['mm']], # Month
            ['x' => $coords[12]['x'], 'y' => $coords[12]['y'], 'content' => $data['yy']], # Year
        ];

        return generate_contract_pdf($countryId, $lang, $lines, $data['filename']);
    }
}
