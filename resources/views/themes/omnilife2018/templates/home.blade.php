@php \App\Helpers\ShoppingCart::validateProductWarehouse(\App\Helpers\SessionHdl::getCorbizCountryKey(), \App\Helpers\SessionHdl::getWarehouse()) @endphp

{!! PageBuilder::section('head', [
        'shoppingCart' => ShoppingCart::getItems(session()->get('portal.main.country_corbiz')),
        'currency'     => session()->get('portal.main.currency_key'),
        'subtotal'     => ShoppingCart::getSubtotalFormatted(session()->get('portal.main.country_corbiz'), session()->get('portal.main.currency_key')),
        'points'       => ShoppingCart::getPoints(session()->get('portal.main.country_corbiz'))
    ]) !!}

    <!-- Main slider home markup-->
    {!! PageBuilder::block('main_slider', [
        'view' => PageBuilder::block('main_slider_view'),
        'gradient_theme' => PageBuilder::block('main_slider_gradient_theme'),
        'signal_title' => PageBuilder::block('signal_title'),
        'signal_title_highlight' => PageBuilder::block('signal_title_highlight')
    ]) !!}
    <!-- end Main slider home markup-->

    <div class="wrapper full-size-mobile">
        <!-- Testimonials markup-->
        <div class="testimonials slider" id="testimonials-slider">
            <header class="testimonials__head">
                <h1 class="testimonials__title">
                    {!! PageBuilder::block('testimonial_title_highlight') !!} <span>{!! PageBuilder::block('testimonial_title') !!} </span>
                </h1>
            </header>
            {!! PageBuilder::block('testimonial') !!}
        </div>
        <!-- end Testimonials markup-->
        <!-- product block-->
        @include('cms::frontend.products_home')
        <!-- end product block-->
    </div>

    <!-- bottom banner-->
    <div class="bottom-banner" style="background-image: url('{{ PageBuilder::block('registration_background_image', ['view' => 'raw']) }}');">
        <div class="wrapper bottom-banner__content">
            <h2>{{ PageBuilder::block('registration_title') }}</h2>
            <p>{{ PageBuilder::block('registration_text') }}</p>
            <a {{ PageBuilder::block('registration_link') }}>
                {!! BlockFormatter::smallButton(PageBuilder::block('registration_button_text')) !!}
            </a>
        </div>
    </div>


    <!-- end bottom banner-->

    <!-- front bottom banners-->
    {!! PageBuilder::block('frontbanner') !!}


    @if(Session::has('portal.main.country_policies')&&Cookie::get('country_cookie'.Session()->get('portal.main.country_id')) == null )

    <section id="cookies" class="cookies__message"   {{(Session()->get('portal.main.country_id')==9&&Session::has('portal.main.has_read_cookies'))?'style=display:none':""}}>

      <div class="close__message">
        <a  aria-label="Cerrar" onclick="hidePanel({!!(Session()->get('portal.main.country_id')==9?2:1)!!})">X</a>
      </div>
      <article>
       {{trans('cms::footer.politic_privacy_first')}}   
       <a href="{{Session::get('portal.main.country_policies')}}"  target="_blank" style="font-weight: bold;">
           {{trans('cms::footer.politic_privacy_second')}}</a> 
     {{trans('cms::footer.own_data')}}  
      </article>
    </section>
        @endif
         {!! Form::open(array('id'=>'save_cookies','url' => 'save_read_cookies'))!!}
         <input type="hidden"  name="type_option"  id="type_option" value="" >
        <input type="hidden"  name="country_selected"  id="country_selected" value="" >
    {!! Form::close() !!}

    {!! PageBuilder::section('footer') !!}

<script type="text/javascript">
    var GET_CATEGORIES_URL = "{{ url('/web_api/categories') }}";
    var GET_PRODUCTS_URL = "{{ url('/web_api/products') }}";
    var PUBLIC_URL = "{{ asset('/') }}";
    var BRAND_ID = "{{ session()->get('portal.main.brand.id') }}";
    var COUNTRY_ID = "{{ session()->get('portal.main.country_id') }}";
    var BUTTON_LANG = "{{ trans('cms::home_products.add_product') }}";
</script>
<input type="hidden" id="shop_secret" value="{{ csrf_token() }}">
<script src="{{ PageBuilder::js('shopping_cart_old_browsers') }}"></script>
<script type="text/javascript" src="{{ PageBuilder::js('home_products') }}"></script>
