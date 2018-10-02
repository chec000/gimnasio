@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container"><!-- panel nav -->

            @include('distributorarea::sections.sidebarDA')

            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- grid section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title small">@lang('distributorarea::front_lang.bonus.bonuses_promotions')</h1>
                        </div>
                    </header>
                    <div class="ezone__body">
                        <ul class="ezone__grid-list list-nostyle">
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test005.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test006.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test001.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test005.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test005.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test006.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test001.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                            <li class="ezone__grid-item">
                                <h3 class="ezone__grid-item__title">@lang('distributorarea::front_lang.bonus.title_bonus')</h3>
                                <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test006.jpg') }}" alt=""></figure><a class="button small center" href="bonos-detalle.html">CONSULTA BASES</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div><!-- // end content zone -->
        </div><!-- // zone container -->
    </div>

@endsection
