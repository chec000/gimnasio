<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="format-detection" content="telephone=no">
        <link rel="shortcut icon" href="{{asset($brand['favicon'])}}" type="image/x-icon">
        <link rel="icon" href="{{asset($brand['favicon'])}}" type="image/x-icon">
        <title> @lang('cms::country.title_'.config('cms.brand_css.'.session()->get('portal.main.brand.id')))</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600" rel="stylesheet">
        <link href="{{ asset('themes/omnilife2018/css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('themes/omnilife2018/css/'.config('cms.brand_css.'.session()->get('portal.main.brand.id')).'.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="loader">
            <div class="loader__content">
                <div class="loader__inner">
                    <svg class="loader__circular" viewBox="25 25 50 50">
                    <circle class="loader__base" cx="50" cy="50" r="20"></circle>
                    <circle class="loader__path" cx="50" cy="50" r="20"></circle>
                    </svg>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="select-country" style="background: url('{{ asset('themes/omnilife2018/images/country-'.$brand['name'].'.jpg') }}'); background-size: cover;">
            <img src="{{ asset($brand['logo']) }}" alt="" class="brand-country">
            <div class="select-countries--container sistem has-dropdown">
                <div id="productsCategory" class="select-country--form wrapper">
                    <h1 class="products-desc__title"><span>@lang('cms::country.title')</span></h1>
                    <p>@lang('cms::country.description')</p>
                    <div class="tools__form-group">
                        <div class="select select--categories">
                            <select name="country" id="countries_select">
                                <option value="" selected disabled>@lang('cms::country.country_default'):</option>

                                @foreach ($countries as $c)
                                <option id="country-{{$c->id}}" value="{{$c->id}}">{!!$c->name!!}</option>
                                @endforeach
                            </select>
                            @if(count($languages)>0)
                              <select name="language" id="languages_select" style="display: none">
                                <option value="1" selected disabled>@lang('cms::country.language_default'):</option>
                                @foreach ($languages as $l)
                                <option id="language-{{$l->id}}" value="{{$l->id}}">{{$l->language}}</option>
                                @endforeach                                
                            </select>
                            @endif
                          
                            <label for="postalcode" style="display:{!!($active_zip==false)?'none':''!!}">
                                <input type="text" placeholder="@lang('cms::country.zip_placeholder')">
                            </label>
                            <button class="button small button-country"  disabled id="btn_go">                              
                                <a  style="color: white;"  href='{{ url('/')}}'>@lang('cms::country.go_button')</a>
                            </button>
                         
                        </div>
                    </div>
                </div>
                <div class="countries slider select-country--message" id="products-slider4"></div>
            </div>
        </div>
        {{ Form::open(array('url' => 'saveCountry','id'=>'form_country')) }}
    {{ Form::close() }}
    
        {{ Form::open(array('url' => 'getLanguages','id'=>'form_languages')) }}
      {{ Form::close() }}
      {{ Form::open(array('url' => 'language','id'=>'form_save_language')) }}
      {{ Form::close() }}
<script src="{{ asset('themes/omnilife2018/js/main.js')}}"></script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEp9fyBXuhBis4OfH7o1HAVZjux8xEx3U&callback=initMap"
    async defer></script>-->
        <script src="{{ PageBuilder::js('jquery.min') }}"></script>
        <script src="{{ PageBuilder::js('bootstrap.min') }}"></script>
        <script src="{{ PageBuilder::js('localizacion')}}"></script>
 <script type="text/javascript" > var APP_URL = {!! json_encode(url('/')) !!}; </script>
      
    </body>
</html>
