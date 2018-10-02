@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container">
            <!-- panel nav -->
            @include('distributorarea::sections.sidebarDA')
            <!-- // end panel nav  -->

            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- grid section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title small">@lang('distributorarea::front_lang.travels.travels_available') </h1>
                        </div>
                    </header>
                    <div class="ezone__body">
                        <ul class="ezone__grid-list list-nostyle">
                            <li class="ezone__grid-item"><a href="viajes-detalle.html">
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt=""></figure></a>
                                <div class="ezone__grid-score">
                                    <p>@lang('distributorarea::front_lang.travels.simple_rating')</p>
                                    <ul class="list-nostyle">
                                        <li class="unlocked">1</li>
                                        <li class="unlocked">2</li>
                                        <li class="unlocked">3</li>
                                        <li class="unlocked">4</li>
                                        <li class="unlocked">5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                    <p>@lang('distributorarea::front_lang.travels.points'): 0/1000</p>
                                </div>
                            </li>
                            <li class="ezone__grid-item"><a href="viajes-detalle.html">
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test008.jpg') }}" alt=""></figure></a>
                                <div class="ezone__grid-score">
                                    <p>@lang('distributorarea::front_lang.travels.simple_rating')</p>
                                    <ul class="list-nostyle">
                                        <li class="unlocked">1</li>
                                        <li class="unlocked">2</li>
                                        <li class="unlocked">3</li>
                                        <li class="unlocked">4</li>
                                        <li class="unlocked">5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                    <p>@lang('distributorarea::front_lang.travels.points'): 0/1000</p>
                                </div>
                            </li>
                            <li class="ezone__grid-item"><a href="viajes-detalle.html">
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure></a>
                                <div class="ezone__grid-score">
                                    <p>@lang('distributorarea::front_lang.travels.simple_rating')</p>
                                    <ul class="list-nostyle">
                                        <li class="unlocked">1</li>
                                        <li class="unlocked">2</li>
                                        <li class="unlocked">3</li>
                                        <li class="unlocked">4</li>
                                        <li class="unlocked">5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                    <p>@lang('distributorarea::front_lang.travels.points'): 0/1000</p>
                                </div>
                            </li>
                            <li class="ezone__grid-item"><a href="viajes-detalle.html">
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure></a>
                                <div class="ezone__grid-score">
                                    <p>@lang('distributorarea::front_lang.travels.simple_rating')</p>
                                    <ul class="list-nostyle">
                                        <li class="unlocked">1</li>
                                        <li class="unlocked">2</li>
                                        <li class="unlocked">3</li>
                                        <li class="unlocked">4</li>
                                        <li class="unlocked">5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                    <p>@lang('distributorarea::front_lang.travels.points'): 0/1000</p>
                                </div>
                            </li>
                            <li class="ezone__grid-item"><a href="viajes-detalle.html">
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure></a>
                                <div class="ezone__grid-score">
                                    <p>@lang('distributorarea::front_lang.travels.simple_rating')</p>
                                    <ul class="list-nostyle">
                                        <li class="unlocked">1</li>
                                        <li class="unlocked">2</li>
                                        <li class="unlocked">3</li>
                                        <li class="unlocked">4</li>
                                        <li class="unlocked">5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                    <p>@lang('distributorarea::front_lang.travels.points'): 0/1000</p>
                                </div>
                            </li>
                            <li class="ezone__grid-item"><a href="viajes-detalle.html">
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure></a>
                                <div class="ezone__grid-score">
                                    <p>Calificación sencilla</p>
                                    <ul class="list-nostyle">
                                        <li class="unlocked">1</li>
                                        <li class="unlocked">2</li>
                                        <li class="unlocked">3</li>
                                        <li class="unlocked">4</li>
                                        <li class="unlocked">5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                    <p>Puntos: 0/1000</p>
                                </div>
                            </li>
                            <li class="ezone__grid-item"><a href="viajes-detalle.html">
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt=""></figure></a>
                                <div class="ezone__grid-score">
                                    <p>Calificación sencilla</p>
                                    <ul class="list-nostyle">
                                        <li class="unlocked">1</li>
                                        <li class="unlocked">2</li>
                                        <li class="unlocked">3</li>
                                        <li class="unlocked">4</li>
                                        <li class="unlocked">5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                    <p>Puntos: 0/1000</p>
                                </div>
                            </li>
                            <li class="ezone__grid-item"><a href="viajes-detalle.html">
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test008.jpg') }}" alt=""></figure></a>
                                <div class="ezone__grid-score">
                                    <p>Calificación sencilla</p>
                                    <ul class="list-nostyle">
                                        <li class="unlocked">1</li>
                                        <li class="unlocked">2</li>
                                        <li class="unlocked">3</li>
                                        <li class="unlocked">4</li>
                                        <li class="unlocked">5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                        <li>11</li>
                                        <li>12</li>
                                    </ul>
                                    <p>Puntos: 0/1000</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <!-- // end content zone -->

        </div><!-- // zone container -->
    </div>
@endsection
