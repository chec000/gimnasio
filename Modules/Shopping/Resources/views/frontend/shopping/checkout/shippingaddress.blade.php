{!! PageBuilder::section('head', [
    'shoppingCart' => \App\Helpers\ShoppingCart::getItems(\App\Helpers\SessionHdl::getCorbizCountryKey()),
    'currency'     => \App\Helpers\SessionHdl::getCurrencyKey(),
    'subtotal'     => \App\Helpers\ShoppingCart::getSubtotalFormatted(\App\Helpers\SessionHdl::getCorbizCountryKey(), \App\Helpers\SessionHdl::getCurrencyKey()),
    'points'       => \App\Helpers\ShoppingCart::getPoints(\App\Helpers\SessionHdl::getCorbizCountryKey()),
    'title'        => trans('shopping::checkout.title')
]) !!}
<script type='text/javascript' src="{{ asset('cms/jquery/jquery.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('/js/jquery.autocomplete.js') }}"></script>
<script src="{{ PageBuilder::js('resume_cart_checkout_old_browsers') }}"></script>
{!! PageBuilder::section('loader') !!}
<input type="hidden" id="shop_secret" value="{{ csrf_token() }}">
<div class="cart fullsteps">
    <nav class="tabs-static">
        <div class="wrapper">
            <!--registro barra pasos-->
            <ul class="list-nostyle tabs-static__list">
                <li class="tabs-static__item active">{!! trans('shopping::shippingAddress.tag_shipping_address') !!}</li>
                <li class="tabs-static__item">{!! trans('shopping::shippingAddress.tag_way_to_pay') !!}</li>
                <li class="tabs-static__item">{!! trans('shopping::shippingAddress.tag_confirm') !!}</li>
            </ul>
        </div>
    </nav>
    <div class="cart__main">
        <div class="wrapper">
            <div class="cart__content">
                <div class="cart__left">
                    <div class="cart__main-title">@lang('shopping::checkout.checkout')</div>
                    <div class="step step1 fade-in-down active" id="step1">

                        <div class="cart__main-subtitle">@lang('shopping::shippingAddress.select_new_shipping_address')</div>
                        <div class="error__box" id="error_step1" style="display: none;">
                            <span class="error__single">
                                <img src="{{ asset('themes/omnilife2018/images/icons/warning.svg') }}">@lang('shopping::shippingAddress.we_have_a_problem'):
                            </span>
                            <ul id="error__boxSA_ul_step1">
                            </ul>
                        </div>

                        <div class="alert alert-green  alert-success-green  alert-dismissible" id="success_step1" style="display: none;">
                            <button type="button" class="close-alert-green" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>@lang('shopping::shippingAddress.success')</strong>
                            <ul id="success__boxSA_ul_step1">
                            </ul>
                        </div>

                        <div class="form-group listShipmentAddress"></div>

                        @if(View::exists("shopping::frontend.shopping.includes.form_shippingaddress_".strtolower(session()->get('portal.main.country_corbiz'))))
                            @include("shopping::frontend.shopping.includes.form_shippingaddress_".strtolower(session()->get('portal.main.country_corbiz')))
                        @endif

                        <div class="buttons-container">
                            <a href="{{ route(\App\Helpers\TranslatableUrlPrefix::getRouteName(session()->get('portal.main.app_locale'), ['products', 'index'])) }}"><button class="button secondary small" type="button">@lang('shopping::checkout.keep_buying')</button></a>
                            <button id="buttonToStep2" class="button small" type="button" data-to="step2"
                                {{session()->has('portal.checkout.'.session()->get('portal.main.country_corbiz').'.quotation') ? '' : "disabled=disabled"}}
                                >@lang('shopping::checkout.continue_payment')</button>
                        </div>
                    </div>
                    <!-- Payment -->
                    <div class="step step2 fade-in-down" id="step2">
                        <div id="form-payment"></div>
                        <div class="buttons-container">
                            <button id="to-step1" class="button secondary small" type="button" data-to="step1">@lang('shopping::checkout.return')</button>
                            <button style="display: none;" class="button small payment-container" type="button" data-to="step3">@lang('shopping::checkout.finish_purchase')</button>
                            <div class="payment-container paypal" style="display: none;">
                                <div id="paypal-button"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- cart preview-->
                @if(View::exists("shopping::frontend.shopping.includes.cart_preview_".strtolower(session()->get('portal.main.country_corbiz'))))
                    @include("shopping::frontend.shopping.includes.cart_preview_".strtolower(session()->get('portal.main.country_corbiz')))
                @endif
                <!-- end cart preview-->
            </div>

        </div>
    </div>

    <input type="hidden" id="current_country" value="{{session()->has("portal.main.country_corbiz") ? session()->get("portal.main.country_corbiz") : 0}}">
    <input type="hidden" id="current_language" value="{{session()->has("portal.main.language_corbiz") ? session()->get("portal.main.language_corbiz") : ""}}">
    <input type="hidden" id="order">
</div>

@if(View::exists("shopping::frontend.shopping.includes.modal_edit_shippingaddress_".strtolower(session()->get('portal.main.country_corbiz'))))
    @include("shopping::frontend.shopping.includes.modal_edit_shippingaddress_".strtolower(session()->get('portal.main.country_corbiz')))
@endif

<div class="modal alert address" id="addressDelete">
    <button class="button secondary close modal-close" type="button">X</button>
    <div class="modal__inner ps-container">
        <header class="modal__head">
            <h5 class="modal__title highlight">@lang('shopping::shippingAddress.delete_address')</h5>
        </header>
        <div class="modal__body">
            <div class="card__content">
                <h4>@lang('shopping::shippingAddress.msg_confirm_delete_address')</h4>
            </div>
            <div class="error__box" id="error_step1_modal_delete" style="display: none;">
                <span class="error__single">
                    <img src="{{ asset('themes/omnilife2018/images/icons/warning.svg') }}">@lang('shopping::shippingAddress.we_have_a_problem'):
                </span>
                <ul id="error__boxSA_ul_step1_modal_delete"></ul>
            </div>
        </div>
        <footer class="modal__foot">
            <div class="buttons-container">
                <button class="button secondary close" type="button">@lang('shopping::shippingAddress.cancel')</button>
                <button class="button primary btnConfirmDelete" type="button" >@lang('shopping::shippingAddress.delete')</button>
                <input type="hidden" id="idfolio" value="">
            </div>
        </footer>
    </div>
</div><!-- Temp markup -->

<!-- ends footer--><!-- Alert -->
<div class="modal alert" id="alert">
    <div class="modal__inner ps-container">
        <header class="modal__head">
            <h5 class="modal__title highlight">¡Alerta!</h5>
        </header>
        <div class="modal__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies pharetra ipsum, sed vehicula neque. Nullam fermentum est tellus.</p>
        </div>
        <footer class="modal__foot">
            <div class="buttons-container">
                <button class="button secondary close" type="button">@lang('shopping::shippingAddress.close')</button>
            </div>
        </footer>
    </div>
</div><!-- Temp markup -->

<!-- ends footer--><!-- Alert -->
<div class="modal alert" id="exit">
    <div class="modal__inner ps-container">
        <header class="modal__head">
            <h5 class="modal__title highlight">Registro inconcluso</h5>
        </header>
        <div class="modal__body">
            <p>Al salir de esta página sin concluir tu inscripción perderás la información que llevas, ¿deseas continuar?</p>
        </div>
        <footer class="modal__foot">
            <div class="buttons-container">
                <button class="button secondary close" type="button">@lang('shopping::shippingAddress.close')</button>
                <button class="button primary close" type="button">@lang('shopping::shippingAddress.accept')</button>
            </div>
        </footer>
    </div>
</div><!-- Temp markup -->
<!-- ends footer--><!-- Alert -->
<div class="modal alert" id="alert">
    <div class="modal__inner ps-container">
        <header class="modal__head">
            <h5 class="modal__title highlight">¡Alerta!</h5>
        </header>
        <div class="modal__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies pharetra ipsum, sed vehicula neque. Nullam fermentum est tellus.</p>
        </div>
        <footer class="modal__foot">
            <div class="buttons-container">
                <button class="button secondary close" type="button">@lang('shopping::shippingAddress.close')</button>
            </div>
        </footer>
    </div>
</div><!-- Temp markup -->

<!-- ends footer--><!-- Alert -->
<div class="modal alert" id="exit">
    <div class="modal__inner ps-container">
        <header class="modal__head">
            <h5 class="modal__title highlight">Registro inconcluso</h5>
        </header>
        <div class="modal__body">
            <p>Al salir de esta página sin concluir tu inscripción perderás la información que llevas, ¿deseas continuar?</p>
        </div>
        <footer class="modal__foot">
            <div class="buttons-container">
                <button class="button secondary close" type="button">@lang('shopping::shippingAddress.cancel')</button>
                <button class="button primary close" type="button">@lang('shopping::shippingAddress.accept')</button>
            </div>
        </footer>
    </div>
</div>

<div class="modal alert address" id="addressSuccess">
    <button class="button secondary close modal-close" type="button">X</button>
    <div class="modal__inner ps-container">
        <header class="modal__head">
            <h5 class="modal__title highlight"></h5>
        </header>
        <div class="modal__body">

        </div>
        <footer class="modal__foot">
            <div class="buttons-container">
                <button class="button secondary close" type="button">@lang('shopping::shippingAddress.close')</button>
            </div>
        </footer>
    </div>
</div><!-- Temp markup -->

<!-- modal cargando-->
<div class="modal modal-loading" id="realizando-pago">
    <div class="modal__inner ps-container">
        <header class="modal__body">
            <p class="text-top">@lang('shopping::checkout.payment.modal.loader.title')</p>
            <div class="loading">
                <figure class="icon-loading">
                    <img src="{{ asset('themes/omnilife2018/images/icons/loading_'.\App\Helpers\SessionHdl::getLocale().'.svg') }}" alt="OMNILIFE - loading">
                </figure>
            </div>
            <p class="highlight">@lang('shopping::checkout.payment.modal.loader.p1')</p>
            <p>@lang('shopping::checkout.payment.modal.loader.p2')</p>
        </header>
    </div>
</div>

{!! PageBuilder::section('footer', ['paymentjs' => true]) !!}
@include("shopping::frontend.shopping.includes.promotions.modal_promo")
<script type="text/javascript" >

    var country = $("#current_country").val();
    var language = $("#current_language").val();

    @if ((config('settings::frontend.webservices') == 1) && (session()->has("portal.main.shopping_active") == 1))

    function getShippingAddress(getFromWS, start){
        var url = 'checkout/getShippingAddress/'+getFromWS;

        $.ajax({
            url: url,
            type: 'GET',
            success: function (data) {
                console.log(data);
                if (data.success) {
                    if(data.defaultZipcode){
                        $("#zip").val(data.defaultZipcode);
                    }
                    var listShipmentAddress = $('.listShipmentAddress');
                    listShipmentAddress.empty();
                    $.each(data.listShipmentAddress, function( index, value ) {
                        var newShipmentAddress = '';

                        if(!value.incorrect){
                            newShipmentAddress += '<div class="form-radio card stack">' ;
                            if(getFromWS === 1 && value.folio == data.defaultShippmentAddress){
                                newShipmentAddress += '<input type="radio" id="address'+value.folio+'" class="btnAddressChecked" name="address" value="'+ value.folio+'" checked="checked">';
                            } else {
                                newShipmentAddress += '<input type="radio" id="address'+value.folio+'" class="btnAddressChecked" name="address" value="'+ value.folio+'">';
                            }
                            newShipmentAddress += '<label class="card__content-wrap" for="address'+value.folio+'">';
                        } else {
                            newShipmentAddress += '<div class="form-radio error__box card stack">'+
                                '<span class="error__single">' +
                                '@lang('shopping::shippingAddress.msg_address_error')' +
                                '</span>';
                        }

                        newShipmentAddress += '<div class="card__content">'+
                            '<input type="hidden" class="valueFolio" name="folio" value="'+ value.folio+'">'+
                            '<a class="ezone__info-edit checkout edit_sa_modal" href="#">';
                            if(value.permissions.canEdit) {
                                newShipmentAddress += '<figure class="icon icon-edit">' +
                                '<span class="icon-edit__text">{{trans("shopping::shippingAddress.edit")}}</span>' +
                                '<img src="{{ asset('themes/omnilife2018/images/icons/edit.svg') }}" alt="OMNILIFE - {{trans("shopping::shippingAddress.edit")}}">' +
                                '</figure>' +
                                '</a>';
                            }
                            if(value.type === "ALTERNA" && value.permissions.canDelete) {
                                newShipmentAddress += '<a href="#" class="ezone__info-delete checkout delete_sa_modal">' +
                                '<figure class="icon icon-delete">' +
                                '<span class="icon-edit__text">{{trans("shopping::shippingAddress.delete")}}</span>' +
                                '<img src="{{ asset('themes/omnilife2018/images/icons/bin.svg') }}" alt="OMNILIFE - {{trans("shopping::shippingAddress.delete")}}">' +
                                '</figure>' +
                                '</a>';
                            }
                            newShipmentAddress += '<label class="radio-fake" for="address'+value.folio+'"></label>'+value.labelSA+
                            //'<span class="radio-label">'+value.Etiqueta+'<span class="small">'+value.Direccion+', '+ value.Colonia+', '+ value.Ciudad +' '+ value.Estado+'</span>'+
                            '</span>'+
                            '</div>'+
                            '</label>'+
                            '</div>';
                        listShipmentAddress.append(newShipmentAddress);
                    });

                    if(getFromWS === 1 && data.defaultShippmentAddress !== 0){
                        selectShippingAddress(data.defaultShippmentAddress);
                    }


                    $(".loader").removeClass("show");
                } else {
                    $('div#error_step1').css('display','inline-block');
                    if(start !== 1){
                        $("ul#error__boxSA_ul_step1").html("");
                    }

                    $.each(data.error, function( index, value ) {
                        $('ul#error__boxSA_ul_step1').append("<li>"+value.messUser+"</li>");
                    });

                    $(".loader").removeClass("show");
                }
            },
            beforeSend: function () {
                $(".loader").addClass("show");
            },
            complete: function () {
//                $(".loader").removeClass("show");
            },
            error: function (jqXHR, timeout, message) {
                $(".loader").removeClass("show");
               var contentType = jqXHR.getResponseHeader("Content-Type");
               if (jqXHR.status === 200 && contentType.toLowerCase().indexOf("text/html") >= 0) {
                   window.location.reload();
               }
            }
        });
    }

    @endif


    function getStatesSA(country,start){
        //Llamado Secret Questions
        var stateHtml = '';
        $.ajax({
            type: "POST",
            url: "{{ route('checkout.shippingAddress.states') }}",
            data: {'country':country, _token: '{{csrf_token()}}'},
            success: function (result){

                if(result.status){
                    if( start !== 1){
                        $("#error__boxSA_ul_step1").html("");
                        $("#error_step1").hide();
                    }
                    $('#state').removeClass('has-error');
                    $('#edit_state').removeClass('has-error');
                    /*stateHtml += '<option value="">@lang("shopping::register.info.address.placeholders.state")</option>';*/

                    $.each(result.data, function (i, item) {
                        stateHtml += '<option value="'+$.trim(item.id)+'">' + $.trim(item.name) + '</option>';
                    });
                    $("#state").append(stateHtml);
                    $("#edit_state").append(stateHtml);
                }else{
                    if(start !== 1){
                        $("#error__boxSA_ul_step1").html("");
                    }

                    $("#error_step1").show();
                    $("#state").addClass("has-error");
                    $("#editstate").addClass("has-error");
                    $.each(result.messages, function (i, item) {
                        $("#error__boxSA_ul_step1").append("<li class='text-danger'>"+item+"</li>");
                    });
                }
            },
            error:function(result){
            },
            beforeSend: function () {
                if(start !== 1){
                    $("ul#error__boxSA_ul_step1").html("");
                }
                $("#error_step1").hide();
                $("#state").children('option:not(:first)').remove();
                $("#edit_state").children('option:not(:first)').remove();
            },
            complete: function () {
            }
        });
    }

    $(document).on('change','#state',function () {
        var state = $(this).val();
        var country = $("#current_country").val();
        var htmlCities = '';
        $.ajax({
            type: "POST",
            url: "{{ route('checkout.shippingAddress.cities') }}",
            data: {'country':country,'state':state, _token: '{{csrf_token()}}'},
            success: function (result){

                if(result.status){
                    $("#error__boxSA_ul_step1").html("");
                    $("#error_step1").hide();

                    $("#city_name").val("");

                    $('#city').removeClass('has-error');
                    /*htmlCities += '<option value="">@lang("shopping::register.info.address.placeholders.city")</option>';*/
                    $.each(result.data, function (i, item) {

                        htmlCities += '<option value="'+$.trim(item.id)+'">' + $.trim(item.name) + '</option>';

                    });
                    $("#city").append(htmlCities);
                }else{
                    $("#error_step1").show();
                    $("#error__boxSA_ul_step1").html("");
                    $("#city").addClass("has-error");
                    $("#city_name").val("");
                    $.each(result.messages, function (i, item) {
                        $("#error__boxSA_ul_step1").append("<li class='text-danger'>"+item+"</li>");
                    });
                }
            },
            error:function(result){

            },
            beforeSend: function () {
                $("#error__boxSA_ul_step1").html("");
                $("#error_step1").hide();
                $("#city").children('option:not(:first)').remove();

            },
            complete: function () {

            }
        });
    });

    $(document).on('change','#city',function () {
        var state = $("#state").val();
        var city = $(this).val();
        var cityname = $("#city option:selected").text();
        var htmlShippingCompanies = '';
        $.ajax({
            type: "POST",
            url: "{{ route('checkout.shippingAddress.shippingCompanies') }}",
            data: {'state':state, 'city':city, _token: '{{csrf_token()}}'},
            success: function (result){

                if(result.status){
                    $("#error__boxSA_ul_step1").html("");
                    $("#error_step1").hide();
                    $("#city_name").val(cityname);
                    $('#shipping_company').removeClass('has-error');
                    $.each(result.data, function (i, item) {

                        htmlShippingCompanies += '<option value="'+$.trim(item.comp_env)+'">' + $.trim(item.descripcion) + '</option>';

                    });
                    $("#shipping_company").append(htmlShippingCompanies);
                }else{

                    $("#error_step1").show();
                    $("#error__boxSA_ul_step1").html("");
                    $("#shipping_company").addClass("has-error");
                    $.each(result.messages, function (i, item) {
                        $("#error__boxSA_ul_step1").append("<li class='text-danger'>"+item+"</li>");
                    });
                }
            },
            error:function(result){

            },
            beforeSend: function () {

                $("#error__boxSA_ul_step1").html("");
                $("#error_step1").hide();
                $("#shipping_company").children('option:not(:first)').remove();

            },
            complete: function () {

            }
        });
    });

    $(document).on('click','#btnAddShippingAddress',function () {
        validateAddShippingAddress();
    });

    function validateAddShippingAddress() {
        var url = "{{route('checkout.shippingAddress.validateAddShippingAddress')}}";
        var form = $("#form_addShippingAddress");
        var tipo  = 'addShippingAddress';
        var step = 'step1';
        var nextStep = 'step2';

        validateFieldsPortalSA(url,form,tipo,step,nextStep);
    }

    function validateFieldsPortalSA(url,form,tipo,step,nextStep) {
        cleanMessagesvalidateFieldsPortalSA(step);

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            data: form.serialize(),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                if (data.success == true) {
                    if (tipo == 'checkout') {
                        if (step == 'step1') {
                            $('#tab__' + step).removeClass('active');
                            $('#' + step).removeClass('active');
                            $('#tab__' + nextStep).addClass('active');
                            $('#' + nextStep).addClass('active');
                        }
                        else if (step == 'step2') {
                        }
                        else if (step == 'step3') {
                        }
                    }
                    if(tipo == 'addShippingAddress'){
                        saveShippingAddress(form.serialize());
                    }
                    if(tipo == 'editShippingAddress'){
                        saveEditShippingAddress(form.serialize());
                    }
                }
                else if (data.success == false) {
                    $.each(data.message, function(key, message) {
                        addErrorMsgValidateFieldsPortalSA(key, message);
                    });
                }
            }
        });
    }

    function saveShippingAddress(dataForm){

        $.ajax({
            type: "POST",
            url: "{{ route("checkout.shippingAddress.addShippingAddress") }}",
            data: dataForm,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (result){

                if(result.status){
                    $("#error__boxSA_ul_step1_add").html("");
                    $("#error_step1_add").hide();

                    getShippingAddress(1,0);
                    $("#success_step1").show();
                    $("#success__boxSA_ul_step1").html("");
                    $("#success__boxSA_ul_step1").append("<li class='text-success'>"+result.message_modal+"</li>");

                    document.getElementById("form_addShippingAddress").reset();

                }else{
                    getShippingAddress(0,0);
                    $("#error_step1_add").show();
                    $("#error__boxSA_ul_step1_add").html("");
                    $.each(result.messages, function (i, item) {
                        $("#error__boxSA_ul_step1_add").append("<li class='text-danger'>"+item+"</li>");
                    });

                }
            },
            error:function(result){

            },
            beforeSend: function () {
                $("#error__boxSA_ul_step1_add").html("");
                $("#error_step1_add").hide();
            },
            complete: function () {

            }
        });
    }

    function addErrorMsgValidateFieldsPortalSA(key, message) {
        $('#' + key).addClass('has-error');
        $('#div_' + key).html(message);
    }

    function cleanMessagesvalidateFieldsPortalSA(step) {
        $('#error__box_' + step).hide();
        $('#error__box_ul_' + step).html('');
        $('.has-error').removeClass('has-error');
        $('.error-msg').html('');
    }

    $(document).on("click", ".delete_sa_modal", function (){
        $("#error__boxSA_ul_step1_modal_delete").html("");
        $("#error_step1_modal_delete").hide();
        var valueFolio = $(this).closest(".card__content").find(".valueFolio").val();
        $("#addressDelete").find("#idfolio").val(valueFolio);
        $("#addressDelete").addClass("active");
        $(".overlay").css("display",'block');

    });

    $(document).on("click", ".close", function (){
        //$(this).closest(".modal").find("input#idfolio").val("");
        //$("#addressDelete").removeClass("active");
        //$("#addressSuccess").removeClass("active");

        //$("#addressEdit").removeClass("active");
        document.getElementById("form_editShippingAddress").reset();

        $(".overlay").css("display",'none');
        $(this).closest("div.modal").removeClass("active");
    });

    $(document).on("click", ".btnConfirmDelete", function (){

        var idfolio = $("#addressDelete").find("#idfolio").val();

        $.ajax({
            type: "POST",
            url: "{{ route("checkout.shippingAddress.deleteShipmentAddress") }}",
            data: {folio:idfolio,country:country,lang:language},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (result){

                if(result.status){
                    $("#error__boxSA_ul_step1_modal_delete").html("");
                    $("#error_step1_modal_delete").hide();
                    $("#addressDelete").removeClass("active");
                    $(".overlay").hide();

                    getShippingAddress(1,0);

                    $("#success_step1").show();
                    $("#success__boxSA_ul_step1").html("");
                    $("#success__boxSA_ul_step1").append("<li class='text-success'>"+result.message_modal+"</li>");

                }else{

                    $("#error_step1_modal_delete").show();
                    $("#error__boxSA_ul_step1_modal_delete").html("");
                    $.each(result.messages, function (i, item) {
                        $("#error__boxSA_ul_step1_modal_delete").append("<li class='text-danger'>"+item+"</li>");
                    });

                }
            },
            error:function(result){

            },
            beforeSend: function () {
                $("#error__boxSA_ul_step1").html("");
                $("#error_step1").hide();
            },
            complete: function () {

            }
        });
    });

    $(document).on("click", ".btnAddressChecked", function (){
        var valChecked = $(this).val();
        selectShippingAddress(valChecked);
    });

    function selectShippingAddress(folio){
        $(".loader").addClass("show");

        var showPromotions = false;
        var url = 'checkout/selectShippingAddress/'+folio;
        $.ajax({
            url: url,
            type: 'GET',
            success: function (result) {
                console.log(result);
                if (result.status) {
                    $('div#error_step1').css('display','none');
                    $("ul#error__boxSA_ul_step1").html("");

                   if (result.resultASW && result.resultASW.existsPromotions) {
                       showPromotions = true;
                   }

                    getViewCartPreviewQuotation();
                    $("div#change_period_step1").show();

                } else {

                    $("#addressSuccess").find(".modal__title").empty().append(result.messages);
                    $("#addressSuccess").find(".modal__body").empty().append("<p>"+result.messages+"</p>");
                    $("#addressSuccess").addClass("active");
                    $(".overlay").css("display",'block');

                    $('div#error_step1').css('display','inline-block');
                    $("ul#error__boxSA_ul_step1").html("");
                    $('ul#error__boxSA_ul_step1').append("<li>"+result.messages+"</li>");
                    $("div#change_period_step1").hide();

                    $(".loader").removeClass("show");
                }
            },
            beforeSend: function () {
                $(".loader").addClass("show");
            },
            complete: function () {
                //$(".loader").removeClass("show");
                console.log("showPromotions: "+showPromotions);
                if(showPromotions) {
                    getViewModalPromotions('checkout');
                }
            },
            error: function() {
                $(".loader").removeClass("show");
            }
        });
    }

    function getViewCartPreviewQuotation(){
        var url = 'checkout/quotation/getCartPreviewQuotation';
        $.ajax({
            url: url,
            type: 'GET',
            success: function (result) {
                //$(".overlay").css("display",'none');
                if (result) {
                    $('div#cart-preview').find("#cart-empty").hide();
                    $('div#cart-preview').find(".cart-product__item").remove();
                    $('div#cart-preview').find(".cart-product__list").addClass('cart-list');
                    $('div#cart-preview').find(".cart-product__list").append(result.items);
                    $('div#cart-preview').find(".cart-preview__resume").html("");
                    $('div#cart-preview').find(".cart-preview__resume").append(result.totals);
                    $('div#cart-preview').removeClass("active");
                    //$('div#cart-preview').replaceWith(result);

                    /*document.getElementById("cart-preview").classList.add("ps");
                    document.getElementById("cart-preview").classList.add("ps--active-y");
                    */

                    $('div#cart-preview').removeClass("active");
                    $("#buttonToStep2").removeAttr('disabled');

                    $('#cart-preview-mov li.total').text($('#total').text());
                    $('#cart-preview-mov li.points').text($('#points').text());

                } else {
                    $('div#cart-preview').find("#cart-empty").show();
                    //alert('No se cargo resumen de compra')
                }
            },
            complete: function () {
                $(".loader").removeClass("show");
            },
            error: function() {
                $(".loader").removeClass("show");
                $(".overlay").css("display",'none');
                $("#blank-overlay").css("display",'none');
            }
        });
    }

    $(document).on("click", ".btnchangePeriodQuotation", function (){
        var change_period = $(this).val();
        setChangePeriodSession(change_period);
    });

    function setChangePeriodSession(change_period){
        var url = 'checkout/quotation/setChangePeriodSession/'+change_period;
        $.ajax({
            url: url,
            type: 'GET',
            success: function (result) {
                console.log(result);
                if (result.success) {
                    $("#addressSuccess").find(".modal__title").empty().append(result.message);
                    $("#addressSuccess").find(".modal__body").empty();
                    $("#addressSuccess").addClass("active");
                    $(".overlay").css("display",'block');
                } else {
                    $("#addressSuccess").find(".modal__title").empty().append(result.message);
                    $("#addressSuccess").find(".modal__body").empty();
                    $("#addressSuccess").addClass("active");
                    $(".overlay").css("display",'block');
                }
            },beforeSend: function () {
                $(".loader").addClass("show");
            },
            complete: function () {
                $(".loader").removeClass("show");
            },
            error: function() {
                $(".loader").removeClass("show");
            }
        });
    }

    $(document).ready(function(){
        $("#blank-overlay").css("display",'none');
        getShippingAddress(1,1);
        getStatesSA(country,1);

        // Cargar los productos del carrito en el document
        var shopping_cart = jQuery.parseJSON('{!! ShoppingCart::sessionToJson(session()->get('portal.main.country_corbiz')) !!}');
        if (shopping_cart.constructor === Array && shopping_cart.length == 0) {
            shopping_cart = {};
        }
        document.shopping_cart = shopping_cart;

        $('#to-step1').on('click', function () {
            getViewCartPreviewQuotation();
            // $('.cart-preview__head').append('<p id="cart-remove-all" class="remove-all js-empty-cart" style="display: inline-block"><a onclick="ResumeCart.remove_all()" href="javascript:;">Delete all</a></p>');
        });
    });

</script>

<script src="{{ PageBuilder::js('promotions') }}"></script>