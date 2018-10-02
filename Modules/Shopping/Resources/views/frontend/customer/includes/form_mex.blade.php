<div class="form-label block">@lang('shopping::register_customer.account.address.label')</div>

<div class="form-group medium">
    <input class="form-control" type="text" id="zip" name="zip" placeholder="@lang('shopping::register_customer.account.address.placeholders.zip')*" class="{{config('register.country')}}" maxlength="8">

    <div class="error-msg" id="div_zip"></div>
</div>

<div class="form-group medium">
    <input class="form-control" type="text" id="street" name="street" placeholder="@lang('shopping::register_customer.account.address.placeholders.street')*">

    <div class="error-msg" id="div_street"></div>
</div>

<div class="form-group medium">
    <input class="form-control" type="text" id="ext_num" name="ext_num" placeholder="@lang('shopping::register_customer.account.address.placeholders.ext_num')*">

    <div class="error-msg" id="div_ext_num"></div>
</div>

<div class="form-group medium">
    <input class="form-control" type="text" id="int_num" name="int_num" placeholder="@lang('shopping::register_customer.account.address.placeholders.int_num')">
</div>

<div class="form-group medium">
    <input class="form-control" type="text" id="colony" name="colony" placeholder="@lang('shopping::register_customer.account.address.placeholders.colony')*">

    <div class="error-msg" id="div_colony"></div>
</div>

<div class="form-group large">
    <input class="form-control" type="text" id="betweem_streets" name="betweem_streets" placeholder="@lang('shopping::register_customer.account.address.placeholders.betweem_streets')">
</div>

<div class="form-group select medium">
    <select class="form-control" readonly="readonly" name="state" id="state">
        <option value="default">@lang('shopping::register_customer.account.address.placeholders.state')*</option>
    </select>

    <div class="error-msg" id="div_state"></div>
</div>

<div class="form-group select medium">
    <select class="form-control" readonly="readonly" name="city" id="city">
        <option value="default">@lang('shopping::register_customer.account.address.placeholders.city')*</option>
    </select>

    <div class="error-msg" id="div_city"></div>
</div>

@if(config('shopping.zip.'.Session::get('portal.register_customer.country_corbiz').'.applies') == true)
    <script>
        var field       = "zip";
        var chars       = 4;
        var url         = "{{route('registercustomer.zipcode')}}";
        var urlcities   = "{{route('registercustomer.cities')}}";
        var paramName   = "zipCode";
        var token       = "{{csrf_token()}}";
        var validate    = "{{config('shopping.zip.'.Session::get('portal.register_customer.country_corbiz').'.validate')}}";
        var check       = "{{config('shopping.zip.'.Session::get('portal.register_customer.country_corbiz').'.check')}}";
        var tipo        = 'register_customer';

        validateFieldAutocomplete(url,urlcities,field,chars,paramName,token,validate,check,tipo);
    </script>
@endif