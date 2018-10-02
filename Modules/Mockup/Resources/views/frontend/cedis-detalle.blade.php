@extends('mockup::layouts.master')

@section('content')
    <div class="ezone">
        <div class="wrapper full-size-mobile ezone__container">
            <div class="ezone__panel cedis">
                <figure class="cedis__gallery--main">
                    <img src="{{ asset('themes/omnilife2018/images/cedis.png') }}" alt="">
                </figure>
                <figure class="cedis__gallery--item">
                    <img src="{{ asset('themes/omnilife2018/images/cedis.png') }}" alt="">
                </figure>
                <figure class="cedis__gallery--item">
                    <img src="{{ asset('themes/omnilife2018/images/cedis.png') }}" alt="">
                </figure>
            </div>
            <!-- detail section -->
            <div class="ezone__content ezone__details">
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title small">CEDIS Amistad</h1>
                        </div>
                    </header>
                    <div class="ezone__body">
                        <div class="ezone__textcontent">
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare consequat tortor in semper. Maecenas ac magna elementum, lobortis urna et, tincidunt magna. Donec congue sagittis magna, sed lobortis eros pretium sit amet. Etiam nec tortor volutpat
                                    eros dapibus mattis. Proin et pretium risus. Nunc sed laoreet velit. Vestibulum eleifend fringilla rhoncus. Nam ante risus, malesuada sit amet leo a, mollis pretium arcu. Aenean vulputate luctus mauris vitae bibendum. Donec
                                    nec urna ligula. Praesent ac libero vitae lectus placerat ultrices.<br> <br>
                                </p>
                                <p><strong>Dirección:</strong> Av. Cristóbal Colón 100. Esq. Vasco de Gama. Plaza Bombay locales 105-106.</p>
                                <p><strong>Colonia:</strong> Costa Azul.</p>
                                <p><strong>Código Postal:</strong> 39850</p>
                                <p><strong>Ciudad:</strong> Acapulco</p>
                                <p><strong>Estado:</strong> Guerrero</p>
                                <p><strong>Telefono 1:</strong> 3477884529</p>
                                <p><strong>Telefono 2:</strong> 3471016587</p>
                                <p><strong>Telemarketing: </strong>(744)481-3322</p>
                                <p><strong>Fax: </strong>01 800 – 112 6664</p>
                                <p><strong>Correo:</strong> acapulco @omnilife.com</p>
                                <p><strong>Horario de atención:</strong> Lunes a Viernes de 9:00 am a 6:00 pm y Sábado de 9:00 am a 2:00 pm.</p>
                            </div>
                            <aside class="ezone__banners mul">
                                <figure class="ezone__banner"><img src="{{ asset('themes/omnilife2018/images/eventos-detalle-map.jpg') }}" alt=""></figure>
                                <figure class="ezone__banner large"><img src="{{ asset('themes/omnilife2018/images/banner-download.jpg') }}" alt="">
                                    <figcaption><a class="button" href="#">Agregar evento a calendario</a></figcaption>
                                </figure>
                            </aside>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end detail section -->
        </div>
    </div>
@endsection
