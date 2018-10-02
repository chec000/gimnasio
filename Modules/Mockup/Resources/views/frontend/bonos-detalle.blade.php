@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container"><!-- panel nav -->

            @include('distributorarea::sections.sidebarDA')

            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- history section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline">
                            <ul class="ezone__breadcrumbs list-nostyle">
                                <li>@lang('distributorarea::front_lang.bonus.bonuses_promotions')</li>
                                <li>@lang('distributorarea::front_lang.bonus.bonus_detail')</li>
                            </ul>
                            <h1 class="ezone__title">@lang('distributorarea::front_lang.bonus.bonus_name')</h1>
                            <h4 class="ezone__subtitle">@lang('distributorarea::front_lang.bonus.validity_to') DD / MM / AA</h4>
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
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare consequat tortor in semper. Maecenas ac magna elementum, lobortis urna et, tincidunt magna. Donec congue sagittis magna, sed lobortis eros pretium sit amet. Etiam nec tortor volutpat eros dapibus mattis. Proin et pretium risus. Nunc sed laoreet velit. Vestibulum eleifend fringilla rhoncus. Nam ante risus, malesuada sit amet leo a, mollis pretium arcu. Aenean vulputate luctus mauris vitae bibendum. Donec nec urna ligula. Praesent ac libero vitae lectus placerat ultrices.<br> <br> Maecenas lobortis, quam nec aliquet venenatis, felis quam tempor eros, eu malesuada ipsum diam sit amet magna. Etiam hendrerit at libero eu pretium. Donec efficitur ligula non dolor congue, vel congue turpis fringilla. Nunc sed metus ligula. Proin pharetra iaculis aliquet. Pellentesque erat sem, bibendum non interdum eget, placerat mollis dui. Integer quis lectus arcu. Phasellus pretium risus sed orci aliquam lacinia. Donec auctor sodales diam, sed rhoncus turpis tristique ut. Mauris pretium tempus odio quis imperdiet. Donec cursus sodales ligula, vitae facilisis augue scelerisque quis. Quisque euismod vel orci dignissim semper. Sed ut pretium neque, ut molestie lacus.</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare consequat tortor in semper. Maecenas ac magna elementum, lobortis urna et, tincidunt magna. Donec congue sagittis magna, sed lobortis eros pretium sit amet. Etiam nec tortor volutpat eros dapibus mattis. Proin et pretium risus. Nunc sed laoreet velit. Vestibulum eleifend fringilla rhoncus. Nam ante risus, malesuada sit amet leo a, mollis pretium arcu. Aenean vulputate luctus mauris vitae bibendum. Donec nec urna ligula. Praesent ac libero vitae lectus placerat ultrices.<br> <br> Maecenas lobortis, quam nec aliquet venenatis, felis quam tempor eros, eu malesuada ipsum diam sit amet magna. Etiam hendrerit at libero eu pretium. Donec efficitur ligula non dolor congue, vel congue turpis fringilla. Nunc sed metus ligula. Proin pharetra iaculis aliquet. Pellentesque erat sem, bibendum non interdum eget, placerat mollis dui. Integer quis lectus arcu. Phasellus pretium risus sed orci aliquam lacinia. Donec auctor sodales diam, sed rhoncus turpis tristique ut. Mauris pretium tempus odio quis imperdiet. Donec cursus sodales ligula, vitae facilisis augue scelerisque quis. Quisque euismod vel orci dignissim semper. Sed ut pretium neque, ut molestie lacus.</p>
                            </div>
                            <aside class="ezone__banners">
                                <figure class="ezone__banner large"><img src="{{ asset('themes/omnilife2018/images/banner-download.jpg') }}" alt="">
                                    <figcaption><a class="button" href="#">@lang('distributorarea::front_lang.buttons.download_bases_conditions')</a></figcaption>
                                </figure>
                            </aside>
                        </div>
                    </div>
                </section>
            </div><!-- // end content zone -->
        </div><!-- // zone container -->
    </div>
@endsection
