@extends('mockup::layouts.master')

@section('content')

    <div class="business">
        <!-- Main slider home markup-->
        <div class="slider mainslider business-slider" id="main-slider">
            <div class="slider__wrap">
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-jobs-'.$brand.'.png') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">Revolucionando el trabajo <br> de miles de personas</span>
                                <span>alrededor del mundo</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vel justo eu pharetra. Integer a laoreet tellus. In ante ante, consequat at diam et, fringilla ultrices mauris. </p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-2.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">2. Obtener</span>
                                <span>nuevos ingresos</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-3.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">3. Conocer</span>
                                <span>el mundo</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-4.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">4. Ayudar a la gente</span>
                                <span>a mejorar su salud</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-5.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">5. Tu negocio te lleva</span>
                                <span>a cumplir tus sueños</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainslider__signals signals">
                <span class="signals__scroll">Scroll</span>
            </div>
        </div>
        <!-- end Main slider home markup-->
        <!-- Content body-->
        <div class="wrapper full-size-mobile business__main">
            <div class="business__main-title col3-4">
                <div class="business__main-inner">
                    <h3 class="products-maintitle {{ $brand }}">¡No te pierdas <span>Xtravaganas 2019!</span></h3>
                </div>
            </div>
            <div class="jobs--container">
                <div class="jobs--description">
                    <p class="jobs--subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vel justo eu pharetra. Integer a laoreet tellus. In ante ante, consequat at diam et, fringilla ultrices mauris. Sed eleifend et nisi sit amet volutpat. Morbi quis pulvinar risus. Vestibulum
                        vitae neque condimentum, posuere nibh vel, maximus lacus. Aliquam erat volutpat. Sed tristique sed lorem sed porta. Sed vitae diam viverra, rutrum dolor ut, volutpat orci. Pellentesque habitant morbi tri
                    </p>
                    <!-- content zone -->
                    <div class="ezone__content ezone__details template-events">
                        <!-- history section -->
                        <section class="ezone__section">
                            <header class="ezone__header">
                                <div class="ezone__headline bordered">
                                    <h1 class="ezone__title small">Fecha: Jueves 29 de Marzo de 2019</h1>
                                </div>
                            </header>
                            <div class="ezone__body">
                                <div class="ezone__textcontent template-events">
                                    <div class="text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare consequat tortor in semper. Maecenas ac magna elementum, lobortis urna et, tincidunt magna. Donec congue sagittis magna, sed lobortis eros pretium sit amet. Etiam nec tortor volutpat
                                            eros dapibus mattis. Proin et pretium risus. Nunc sed laoreet velit. Vestibulum eleifend fringilla rhoncus. Nam ante risus, malesuada sit amet leo a, mollis pretium arcu. Aenean vulputate luctus mauris vitae bibendum.
                                            Donec nec urna ligula. Praesent ac libero vitae lectus placerat ultrices.<br><br>
                                        </p>
                                        <p><strong>Telefono 1:</strong> 3477884529</p>
                                        <p><strong>Telefono 2:</strong> 3471016587</p>
                                        <p><strong>Correo:</strong> ce_1515@hotmail.com</p>
                                        <p><strong>Estado:</strong> Jalisco</p>
                                        <p><strong>Ciudad:</strong> Zapopan</p>
                                        <p><strong>Dirección:</strong> Andador Piedras NEgras #23</p>
                                        <p><strong>Colonia:</strong> Tijanita</p>
                                        <p><strong>Juntas</strong></p>
                                        <p><strong>Entrenamiento: </strong>Jueves 17:00 - 19:00 hrs</p>
                                        <p><strong>Juntas de Oportunidad:</strong> Lunes 17:00 - 19:00 hrs</p>
                                    </div>
                                    <aside class="ezone__banners mul">
                                        <figure class="ezone__banner">
                                            <img src="{{ asset('themes/omnilife2018/images/eventos-detalle-map.jpg') }}" alt="">
                                        </figure>
                                        <figure class="ezone__banner large">
                                            <img src="{{ asset('themes/omnilife2018/images/banner-download.jpg') }}" alt="">
                                            <figcaption>
                                                <a class="button" href="#">Agregar evento a calendario</a>
                                            </figcaption>
                                        </figure>
                                    </aside>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- // end content zone -->
                    <div class="ezone__grid-imgs">
                        <header class="ezone__header">
                            <div class="ezone__headline bordered">
                                <h1 class="ezone__title small">Galería</h1>
                            </div>
                        </header>
                        <div class="ezone__body">
                            <ul class="ezone__grid-list list-nostyle">
                                <li class="ezone__grid-item">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test001.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test001.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test001.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure>
                                </li>
                                <li class="ezone__grid-item">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test001.jpg') }}" alt=""></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Content Body-->
    </div>

@endsection
