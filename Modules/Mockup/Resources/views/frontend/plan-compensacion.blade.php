@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container">
            <!-- panel nav -->
            @include('distributorarea::sections.sidebarDA')
            <!-- // end panel nav  -->

            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- compensation plan section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title">@lang('distributorarea::front_lang.compensation_plan.compensation_plan')</h1>
                        </div>
                    </header>
                    <div class="ezone__body">
                        <div class="ezone__textcontent full">
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare consequat tortor in semper. Maecenas ac magna elementum, lobortis urna et, tincidunt magna. Donec congue sagittis magna, sed lobortis eros pretium sit amet. Etiam nec tortor volutpat eros dapibus mattis. Proin et pretium risus. Nunc sed laoreet velit. Vestibulum eleifend fringilla rhoncus. Nam ante risus, malesuada sit amet leo a, mollis pretium arcu. Aenean vulputate luctus mauris vitae bibendum. Donec nec urna ligula. Praesent ac libero vitae lectus placerat ultrices.<br> <br> Maecenas lobortis, quam nec aliquet venenatis, felis quam tempor eros, eu malesuada ipsum diam sit amet magna. Etiam hendrerit at libero eu pretium. Donec efficitur ligula non dolor congue, vel congue turpis fringilla. Nunc sed metus ligula. Proin pharetra iaculis aliquet. Pellentesque erat sem, bibendum non interdum eget, placerat mollis dui. Integer quis lectus arcu. Phasellus pretium risus sed orci aliquam lacinia. Donec auctor sodales diam, sed rhoncus turpis tristique ut. Mauris pretium tempus odio quis imperdiet. Donec cursus sodales ligula, vitae facilisis augue scelerisque quis. Quisque euismod vel orci dignissim semper. Sed ut pretium neque, ut molestie lacus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="ezone__jumbotron">
                        <video poster="{{ asset('themes/omnilife2018/images/video-poster2.jpg') }}">
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
                    </div><a class="button medium center" href="#">@lang('distributorarea::front_lang.buttons.download_compensation_plan')</a><br>
                </section>
                <section class="ezone__section tabs faq">
                    <header class="ezone__header tabs__header ps-container">
                        <div class="ezone__headline tabs__item">
                            <h1 class="ezone__title">@lang('distributorarea::front_lang.compensation_plan.frequent_questions')</h1>
                        </div>
                        <div class="ezone__headline tabs__item active"><a href="#generals">
                                <h1 class="ezone__title">Generales</h1></a></div>
                        <div class="ezone__headline tabs__item"><a href="#points">
                                <h1 class="ezone__title">Puntos</h1></a></div>
                        <div class="ezone__headline tabs__item"><a href="#carrear-level">
                                <h1 class="ezone__title">Nivel de carrera</h1></a></div>
                        <div class="ezone__headline tabs__item"><a href="#earnings">
                                <h1 class="ezone__title">Ganancias</h1></a></div>
                    </header>
                    <div class="ezone__body"><!-- // end generals zone -->
                        <div class="tabs__pane active" id="generals">
                            <ul class="list-nostyle questions-list">
                                <li class="question-item">
                                    <p class="question">¿A partir de qué fecha estará vigente el  Plan de compensaciones?</p>
                                    <p class="answer">A partir del 1ro de febrero de 2016.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿Cómo se manejarán los periodos en el  Plan de compensaciones?</p>
                                    <p class="answer">Se manejarán de forma mensual.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿En qué momento se iniciará con la nueva lista de precios?</p>
                                    <p class="answer">A partir del 1ro de febrero de 2016.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿Quién es un Empresario Bronce?</p>
                                    <p class="answer">Es un Empresario que compra mensualmente de 1 a 299 puntos personales.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿Quién es un Empresario Bronce Activo?</p>
                                    <p class="answer">Es un Empresario que compra mensualmente de 300 puntos personales o más.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿Qué es una línea?</p>
                                    <p class="answer">Es aquella que se construye cuando presentas de forma directa a otro Empresario quien a su vez presenta a otro y así sucesivamente.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿Qué es una línea activa?</p>
                                    <p class="answer">Es aquella en la que por lo menos uno de los presentados que la integra o forma parte de ella, compra 300 puntos personales o más al mes.</p>
                                </li>
                            </ul>
                        </div><!-- // end generals zone -->
                        <div class="tabs__pane" id="points">
                            <ul class="list-nostyle questions-list">
                                <li class="question-item">
                                    <p class="question">¿A partir de qué fecha estará vigente el  Plan de compensaciones?</p>
                                    <p class="answer">A partir del 1ro de febrero de 2016.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿Cómo se manejarán los periodos en el  Plan de compensaciones?</p>
                                    <p class="answer">Se manejarán de forma mensual.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿Qué es una línea?</p>
                                    <p class="answer">Es aquella que se construye cuando presentas de forma directa a otro Empresario quien a su vez presenta a otro y así sucesivamente.</p>
                                </li>
                                <li class="question-item">
                                    <p class="question">¿Qué es una línea activa?</p>
                                    <p class="answer">Es aquella en la que por lo menos uno de los presentados que la integra o forma parte de ella, compra 300 puntos personales o más al mes.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <!-- // end content zone -->

        </div><!-- // zone container -->
    </div>
@endsection
