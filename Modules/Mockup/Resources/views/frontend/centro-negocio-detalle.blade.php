@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container"><!-- panel nav -->

            @include('distributorarea::sections.sidebarDA')
            <!-- // end panel nav  -->
            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- history section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline">
                            <ul class="ezone__breadcrumbs list-nostyle">
                                <li>@lang('distributorarea::front_lang.business_center.business_centers') </li>
                                <li>@lang('distributorarea::front_lang.business_center.business_center_detail')</li>
                            </ul>
                            <h1 class="ezone__title">@lang('distributorarea::front_lang.business_center.health_life')</h1>
                            <h4 class="ezone__subtitle">@lang('distributorarea::front_lang.business_center.responsable'): María Cristina Sánchez</h4>
                        </div>
                    </header>
                    <div class="ezone__jumbotron">
                        <video poster="{{ asset('themes/omnilife2018/images/video-poster.jpg') }}">
                            <source src="{{ asset('themes/omnilife2018/videos/video-arena-audio.webm') }}" type="video/webm">
                            <source src="{{ asset('themes/omnilife2018/videos/video-arena-audio.mp4') }}" type="video/mp4">
                            <source src="{{ asset('themes/omnilife2018/videos/video-arena-audio.ogv') }}" type="video/ogg">
                        </video>
                        <div class="play-button">
                            <div class="icon-play"></div>
                        </div>
                        <div class="pause-button">
                            <div class="icon-pause"></div>
                        </div>
                    </div>
                    <div class="ezone__body">
                        <div class="ezone__textcontent">
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare consequat tortor in semper. Maecenas ac magna elementum, lobortis urna et, tincidunt magna. Donec congue sagittis magna, sed lobortis eros pretium sit amet. Etiam nec tortor volutpat eros dapibus mattis. Proin et pretium risus. Nunc sed laoreet velit. Vestibulum eleifend fringilla rhoncus. Nam ante risus, malesuada sit amet leo a, mollis pretium arcu. Aenean vulputate luctus mauris vitae bibendum. Donec nec urna ligula. Praesent ac libero vitae lectus placerat ultrices.<br><br>
                                </p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.phone') 1:</strong> 3477884529</p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.phone') 2:</strong> 3471016587</p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.email'):</strong> ce_1515@hotmail.com</p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.state'):</strong> Jalisco</p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.city'):</strong> Zapopan</p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.address'):</strong> Andador Piedras NEgras #23</p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.colony'):</strong> Tijanita</p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.together')</strong></p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.training'): </strong>Jueves 17:00 - 19:00 hrs</p>
                                <p><strong>@lang('distributorarea::front_lang.business_center.opportunity_boards'):</strong> Lunes 17:00 - 19:00 hrs</p>
                            </div>
                            <aside class="ezone__banners mul">
                                <figure class="ezone__banner"><img src="{{ asset('themes/omnilife2018/images/eventos-detalle-map.jpg') }}" alt=""></figure>
                                <figure class="ezone__banner large"><img src="{{ asset('themes/omnilife2018/images/banner-download.jpg') }}" alt="">
                                    <figcaption><a class="button" href="#">@lang('distributorarea::front_lang.business_center.add_event_calendar')</a></figcaption>
                                </figure>
                            </aside>
                        </div>
                    </div>
                </section>
            </div><!-- // end content zone -->
        </div><!-- // zone container -->
    </div>
@endsection
