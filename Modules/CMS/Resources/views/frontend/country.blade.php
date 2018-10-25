<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" href="{{ asset(isset($brand['favicon']) ? $brand['favicon'] : '/favicon.ico') }}" type="image/x-icon">
        <title> @lang('cms::country.title_'.config('cms.brand_css.'.session()->get('portal.main.brand.id')))</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600" rel="stylesheet">
        <link href="{{ asset('themes/omnilife2018/css/master.css') }}" rel="stylesheet">
        <link href="{{ asset('themes/omnilife2018/css/'.config('cms.brand_css.'.session()->get('portal.main.brand.id')).'.css') }}" rel="stylesheet">
        @php
            $brandName = config('cms.brand_css.'.session()->get('portal.main.brand.id'));
            $brandName = ($brandName == 'master') ? 'omnilife' : $brandName;
            $metaTitle = PageBuilder::block('meta_title', ['meta' => true]) ?:
                trans('cms::header.metadata.' . $brandName . '.title');
            $metaDescription = PageBuilder::block('meta_description', ['meta' => true]) ?:
                trans('cms::header.metadata.' . $brandName . '.description');
        @endphp
        <meta property="og:title" content="{!! $metaTitle !!}">
        <meta property="og:description" content="{!! $metaDescription !!}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="{!! $metaDescription !!}">
        <meta property="og:image" content="{!! asset('themes/omnilife2018/images/logos/' . $brandName . '.png') !!}">
        <meta property="og:image:secure_url" content="{!! asset('themes/omnilife2018/images/logos/' . $brandName . '.png') !!}">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="600">
        <meta property="og:image:height" content="314">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{!! $metaTitle !!}">
        <meta name="twitter:description" content="{!! $metaDescription !!}">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:site" content="https://twitter.com/omnilife">
        <meta name="twitter:creator" content="Omnilife">
        <meta name="twitter:image" content="{!! asset('themes/omnilife2018/images/logos/' . $brandName . '.png') !!}">   
            <script async src="https://www.googletagmanager.com/gtag/js?id={!!config('cms.analytics.'.session()->get('portal.main.brand.id'));!!}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{!!config('cms.analytics.'.session()->get('portal.main.brand.id'))!!}');
</script>

    
    </head>
    <body>
        @include('themes.omnilife2018.sections.loader')
        <div class="overlay"></div>
        <!--<div class="select-country" style="background: url('{{ asset('themes/omnilife2018/images/country-'.$brandName.'.jpg') }}'); background-size: cover;">-->        
            <div class="select-country" style="background: url('https://hdqwalls.com/download/gym-women-image-1920x1080.jpg'); background-size: cover;">                                                
                <img src="{{ asset($brand['logo']) }}" alt="" class="brand-country">
            <div class="select-countries--start sistem has-dropdown">
                <div id="productsCategory" class="select-country--form wrapper">
                    <h1 class="products-desc__title">
                        @lang('cms::country.title')<br>
                        <span style="font-size: .8em">@lang('cms::country.subtitle')</span>
                    </h1>
                    <p>
                        @lang('cms::country.description')<br>
                        <span>@lang('cms::country.subdescription')</span>
                    </p>
                    <div class="tools__form-group">

                        <div class="select select--categories start">
                            <div id="div_countries_select" style="display: inline-block">
                                <select name="country" id="countries_select" class="validate_go">
                                    <option value="" selected disabled>@lang('cms::country.country_default'):</option>
                                    @if(!session()->has('portal.main.booleanChangeCountry')
                                        && session()->has('portal.main.changeCountryId'))
                                        @foreach ($countries as $c)
                                            <option id="country-{{$c->id}}" value="{{$c->id}}"
                                                {{(session()->has('portal.main.changeCountryId')
                                                && (session()->get('portal.main.changeCountryId')) == $c->id) ? "selected" : ''}}>
                                                {!!$c->name!!}
                                            </option>
                                        @endforeach
                                    @else
                                        @foreach ($countries as $c)
                                            <option id="country-{{$c->id}}" value="{{$c->id}}"
                                                {{($country_id !== 0 && $country_id == $c->id) ? "selected" : '' }}>
                                                {!!$c->name!!}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                <div id="" class="error-msg div_answer"></div>
                            </div>
                            <div id="div_languages_select" style="display: none">
                                @if(count($languages)>0)
                                  <select name="language" id="languages_select" style="display: none" class="validate_go">
                                    <option value="" selected disabled>@lang('cms::country.language_default'):</option>
                                    @foreach ($languages as $l)
                                        <option id="language-{{$l->id}}" value="{{$l->id}}">{{$l->language}}</option>
                                    @endforeach
                                </select>
                                @endif
                                <div id="" class="error-msg div_answer"></div>
                            </div>

                            @if (config('settings::frontend.webservices') == 1)
                            <div id="div_states_select" style="display: none">
                                <select name="state" id="states_select" style="display: none" class="validate_go">
                                    <option value="" selected disabled>@lang('cms::country.state_default'):</option>
                                </select>
                                <div id="" class="error-msg div_answer"></div>
                            </div>

                            <div id="div_cities_select" style="display: none">
                                <select name="city" id="cities_select" style="display: none" class="validate_go">
                                    <option value="" selected disabled>@lang('cms::country.city_default'):</option>
                                </select>
                                <div id=" " class="error-msg div_answer"></div>
                            </div>

                            <div id="div_postal_code" style="display: none">
                                <label for="postalcode">
                                    <input id="postalCode" type="text" placeholder="@lang('cms::country.zip_placeholder')"
                                        style="display:{!!($active_zip==false)?'none':''!!}" maxlength="8" class="validate_go validate_zip">
                                </label>
                                <div id="" class="error-msg div_answer"></div>
                            </div>
                            @endif

                            <div style="display: inline-block">
                                <button type="button" class="button small button-country inline_block" id="btn_go" style="color: white;" >@lang('cms::country.go_button')</button>
                            </div>

                        </div>
                    </div>
                    <div class="error__box theme__transparent" style="display: none">
                        <span class="error__single">
                            <img src="{{asset('themes/omnilife2018/images/warning.svg')}}"> @lang('cms::country.title_message_error'):</span>
                        <ul>

                        </ul>
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

        <input id="labelCountryDefault" type="hidden" value="@lang('cms::country.country_default')">
        <input id="labelLanguageDefault" type="hidden" value="@lang('cms::country.language_default')">
        <input id="labelStateDefault" type="hidden" value="@lang('cms::country.state_default')">
        <input id="labelCityDefault" type="hidden" value="@lang('cms::country.city_default')">
        <input id="labelFieldRequired" type="hidden" value="@lang('cms::country.message_required_field')">
        <input id="labelZipRequired" type="hidden" value="@lang('cms::country.message_required_zip')">


        <script src="{{ asset('themes/omnilife2018/js/main.js')}}"></script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEp9fyBXuhBis4OfH7o1HAVZjux8xEx3U&callback=initMap"
    async defer></script>-->
        <script src="{{ PageBuilder::js('jquery.min') }}"></script>
        <script src="{{ PageBuilder::js('bootstrap.min') }}"></script>
        <script src="{{ PageBuilder::js('localizacion')}}"></script>
        <script type="text/javascript" >
            var APP_URL = {!! json_encode(url('/')) !!};

            var changeCountryId = "{{ session()->has('portal.main.changeCountryId') ? '1' : '0' }}";
            var changeLanguageId = "{{ session()->has('portal.main.changeLanguageId') ? '1' : '0' }}";

            var frontend_webservices = "{!! config('settings::frontend.webservices') !!}";
            var shopping_active = 0;
            var changeStartLocale = "{!! session()->get('portal.main.varsChangeLangStart.changeStartLocale') !!}";
            var countryId = "{!! session()->get('portal.main.varsChangeLangStart.newCountry') !!}";

            var app_locale = "{!! app()->getLocale() !!}";
            var session_locale = "{!! session()->get('portal.main.app_locale') !!}";

            $(document).ready(function(){
                @if ((config('settings::frontend.webservices') == 1) && session()->has('portal.main.changeCountryId') &&
                        !session()->has('portal.main.booleanChangeCountry'))
                    $("#countries_select").trigger("change");
                    {!! session()->put('portal.main.booleanChangeCountry', true) !!}
                @else
                if($("#countries_select").val() !== null){
                    $("#countries_select").trigger("change");
                }
                @endif
            });



        </script>

    </body>
</html>
