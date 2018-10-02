

         <div class="form-group medium">
            <input class="form-control" type="text" id="zip" name="zip" placeholder="@lang('shopping::register.info.address.placeholders.zip')" class="{{config('register.country')}}">
            <div class="error-msg" id="div_zip"></div>
        </div>
         <div class="form-group medium">
             <input class="form-control" type="text" id="street" name="street" placeholder="@lang('shopping::register.info.address.placeholders.street')*">
         </div>
         <div class="form-group medium">
             <input class="form-control" type="text" id="ext_num" name="ext_num" placeholder="@lang('shopping::register.info.address.placeholders.ext_num')*">
             <div class="error-msg" id="div_ext_num"></div>
         </div>
        <div class="form-group medium">
            <input class="form-control" type="text" id="colony" name="colony" placeholder="@lang('shopping::register.info.address.placeholders.colony')">
        </div>

        <div class="form-group select medium">
            <select class="form-control" name="state" id="state">
                <option value="">@lang('shopping::register.info.address.placeholders.state')</option>
            </select>
            <input type="hidden" value="" name="state_hidden" id="state_hidden" />
        </div>
        <div class="form-group select medium">
            <select class="form-control" name="city" id="city">

            </select>
            <input type="hidden" value="" name="city_hidden" id="city_hidden" />
            <div class="error-msg" id="div_city"></div>
        </div>
         <div class="form-group large">
             <input class="form-control" type="text" id="betweem_streets" name="betweem_streets" placeholder="@lang('shopping::register.info.address.placeholders.streets')">
         </div>


         @if(config('shopping.zip.'.Session::get('portal.register.country_corbiz').'.applies') == true)
             <script>
                 var field = "zip";
                 var chars = 4;
                 var url = "{{route('register.zipcode')}}";
                 var urlcities = "{{route('register.cities')}}";
                 var paramName = "zipCode";
                 var token = "{{csrf_token()}}";
                 var validate = "{{config('shopping.zip.'.Session::get('portal.register.country_corbiz').'.validate')}}";
                 var check    = "{{config('shopping.zip.'.Session::get('portal.register.country_corbiz').'.check')}}";
                 var tipo     = "register";
                 validateFieldAutocomplete(url,urlcities,field,chars,paramName,token,validate,check,tipo);
             </script>
         @endif



