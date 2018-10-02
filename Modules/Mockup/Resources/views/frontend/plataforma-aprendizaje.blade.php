@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container">
            <!-- panel nav -->
            @include('distributorarea::sections.sidebarDA')
            <!-- // end panel nav  -->

            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- platform section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title small">@lang('distributorarea::front_lang.platform_learning.platform_learning')</h1>
                        </div>
                    </header>
                    <figure class="ezone__jumbotron normal"><img src="{{ asset('themes/omnilife2018/images/plataforma-aprendizaje.jpg') }}"></figure>
                    <div class="ezone__body">
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare consequat tortor in semper. Maecenas ac magna elementum, lobortis urna et, tincidunt magna. Donec congue sagittis magna, sed lobortis eros pretium sit amet. Etiam nec tortor volutpat eros dapibus mattis. Proin et pretium risus. Nunc sed laoreet velit. Vestibulum eleifend fringilla rhoncus. Nam ante risus, malesuada sit amet leo a, mollis pretium arcu. Aenean vulputate luctus mauris vitae bibendum. Donec nec urna ligula. Praesent ac libero vitae lectus placerat ultrices.<br> Maecenas lobortis, quam nec aliquet venenatis, felis quam tempor eros, eu malesuada ipsum diam sit amet magna. Etiam hendrerit at libero eu pretium. Donec efficitur ligula non dolor congue, vel congue turpis fringilla. Nunc sed metus ligula. Proin pharetra iaculis aliquet. Pellentesque erat sem, bibendum non interdum eget, placerat mollis dui. Integer quis lectus arcu. Phasellus pretium risus sed orci aliquam lacinia. Donec auctor sodales diam, sed rhoncus turpis tristique ut. Mauris pretium tempus odio quis imperdiet. Donec cursus sodales ligula, vitae facilisis augue scelerisque quis. Quisque euismod vel orci dignissim semper. Sed ut pretium neque, ut molestie lacus.</p>
                        </div><a class="button small center" href="#">@lang('distributorarea::front_lang.buttons.enter')</a>
                    </div><!-- // grid section -->
                    <div class="ezone__grid-imgs">
                        <header class="ezone__header">
                            <div class="ezone__headline bordered">
                                <h1 class="ezone__title small">@lang('distributorarea::front_lang.platform_learning.educative_offer')</h1>
                            </div>
                        </header>
                        <div class="ezone__body">
                            <ul class="ezone__grid-list list-nostyle">
                                <li class="ezone__grid-item">
                                    <h3 class="ezone__grid-item__title">TÍTULO DE LA OFERTA</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test001.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <h3 class="ezone__grid-item__title">TÍTULO DE LA OFERTA</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <h3 class="ezone__grid-item__title">TÍTULO DE LA OFERTA</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <h3 class="ezone__grid-item__title">TÍTULO DE LA OFERTA</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test001.jpg') }}" alt=""></figure>
                                </li>
                            </ul><!--a class="button medium center" href="#">CONOCE TODA LA OFERTA</a-->
                        </div>
                    </div><!-- // end grid section -->
                </section>
            </div>
            <!-- // end content zone -->

        </div><!-- // zone container -->
    </div>
@endsection
