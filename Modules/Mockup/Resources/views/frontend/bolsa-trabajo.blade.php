@extends('mockup::layouts.master')

@section('content')
    <div class="business">
        <!-- Main slider home markup-->
        <div class="slider mainslider business-slider" id="main-slider">
            <div class="slider__wrap">
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-3.jpg') }});">
                    <div class="mainslider__gradient -"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">Revolucionando el trabajo <br>
                                de miles de personas</span>
                                <span>alrededor del mundo</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vel justo eu pharetra. Integer a laoreet tellus. In ante ante, consequat at diam et, fringilla ultrices mauris.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-2.jpg') }});">
                    <div class="mainslider__gradient -"></div>
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
            </a>
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-3.jpg') }});">
                    <div class="mainslider__gradient -"></div>
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
            </a>
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-4.jpg') }});">
                    <div class="mainslider__gradient -"></div>
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
            </a>
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-5.jpg') }});">
                    <div class="mainslider__gradient -"></div>
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
            </a>
        </div>
        <div class="mainslider__signals signals">
            <p class="signals__note">
                <span></span>
                <span></span>
            </p>
            <span class="signals__scroll">scroll</span>
        </div>
    </div>
    <!-- end Main slider home markup-->
    <!-- Content body-->
    <div class="wrapper full-size-mobile business__main">
        <div class="business__main-title col3-4">
            <div class="business__main-inner">
                <h3 class="products-maintitle">
                    PREMIOS Y RECONOCIMIENTOS
                    <span></span>
                </h3>
            </div>
        </div>
        <div class="jobs--container">
            <div class="jobs--description">
                <p class="jobs--subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vel justo eu pharetra. Integer a laoreet tellus. In ante ante, consequat at diam et, fringilla ultrices mauris. Sed eleifend et nisi sit amet volutpat. Morbi quis pulvinar risus. Vestibulum vitae neque condimentum, posuere nibh vel, maximus lacus. Aliquam erat volutpat. Sed tristique sed lorem sed porta. Sed vitae diam viverra, rutrum dolor ut, volutpat orci. Pellentesque habitant morbi tri
                </p>
                <p class="jobs--subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare vel justo eu pharetra. Integer a laoreet tellus. In ante ante, consequat at diam et, fringilla ultrices mauris. Sed eleifend et nisi sit amet volutpat. Morbi quis pulvinar risus. Vestibulum vitae neque condimentum, posuere nibh vel, maximus lacus. Aliquam erat volutpat. Sed tristique sed lorem sed porta. Sed vitae diam viverra, rutrum dolor ut, volutpat orci. Pellentesque habitant morbi tri
                </p>
                <div class="jobs--thumbnails">
                    <figure class="jobs--thumbnails__item">
                        <img src="{{ asset('themes/omnilife2018/images/google.png') }}" title="google" alt="google">
                        <figcaption>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.
                        </figcaption>
                    </figure>
                    <figure class="jobs--thumbnails__item">
                        <img src="{{ asset('themes/omnilife2018/images/working.png') }}" title="working" alt="working">
                        <figcaption>
                            Mauris luctus vestibulum urna at luctus. Suspendisse semper eros erat
                        </figcaption>
                    </figure>
                </div>
                <div class="jobs--vision">
                    <div class="c-50">
                        <h2 class="jobs--vision__title">
                            Forma parte de un equipo con impacto global
                            <br><span>OMNILIFE</span>
                        </h2>
                    </div>
                    <div class="c-50">
                        <div class="jobs--vision__description">
                            Integer ultrices consectetur imperdiet. In euismod quis risus id imperdiet. Fusce tempor metus mi, nec sollicitudin nisl posuere in. Vestibulum et dapibus arcu. Cras mattis felis eget sem commodo viverra. Nunc quis velit pulvinar, tristique tortor sit amet, gravida ante. Cras pulvinar nisl quis lacus tempus pulvinar eu vitae risus. Suspendisse eu interdum elit. Integer ultrices consectetur imperdiet. In euismod quis risus id imperdiet. Fusce tempor metus mi, nec sollicitudin nisl posuere in. Vestibulum et dapibus arcu. Cras mattis felis eget sem commodo viverra. Nunc quis velit pulvinar, tristique tortor sit amet, gravida ante. Cras pulvinar nisl quis lacus tempus pulvinar eu vitae risus. Suspendisse eu interdum elit.
                        </div>
                    </div>
                </div>

                <div class="jobs--vacancies flexbox">
                    <div class="c-33">
                        <figure class="vacant--item theme--violet">
                            <img src="{{ asset('themes/omnilife2018/images/icon-design.png') }}" title="icon-design" alt="icon-design">
                            <figcaption>
                                <div class="vacant--title">
                                    Digital  Designer
                                </div>
                                <div class="vacant--description">
                                    UX<br><br>
                                    Prototipado<br><br>
                                    Diseño de Apps<br><br>
                                    Diseño de Interfaz<br><br>
                                    <img src="{{ asset('themes/omnilife2018/images/icon-arrow.png') }}" title="icon-arrow" alt="icon-arrow">
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="c-33">
                        <figure class="vacant--item theme--orange">
                            <img src="{{ asset('themes/omnilife2018/images/icon-copyright.png') }}" title="icon-copyright" alt="icon-copyright">
                            <figcaption>
                                <div class="vacant--title">
                                    Content  Manager
                                </div>
                                <div class="vacant--description">
                                    Creación de contenido<br><br>
                                    Administración de sitios Web<br><br>
                                    Wordpress<br><br>
                                    Google Analytics<br><br>
                                    <img src="{{ asset('themes/omnilife2018/images/icon-arrow.png') }}" title="icon-arrow" alt="icon-arrow">
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="c-33">
                        <figure class="vacant--item theme--gray">
                            <img src="{{ asset('themes/omnilife2018/images/icon-terminal.png') }}" title="icon-terminal" alt="icon-terminal">
                            <figcaption>
                                <div class="vacant--title">
                                    Web  Developer
                                </div>
                                <div class="vacant--description">
                                    HTML5/CSS3<br><br>
                                    JavaScript<br><br>
                                    React o Vue<br><br>
                                    Desarrollo de APIs<br><br>
                                    <img src="{{ asset('themes/omnilife2018/images/icon-arrow.png') }}" title="icon-arrow" alt="icon-arrow">
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="c-100 text-center">
                        <h3 class="vacancies--message">
                            ¿No estás seguro si encajas en alguna de estas posiciones? Mándanos tu CV
                        </h3>
                        <div class="vacancies--mail">
                            <a href="mailto:team@omnilife.com">
                                team@omnilife.com
                            </a>
                        </div>
                    </div>
                </div>
                <div class="jobs--rewards flexbox">
                    <h2 class="rewards--title">PREMIOS Y RECONOCIMIENTOS</h2>
                    <div class="c-33">
                        <figure class="rewards--item"><img src="{{ asset('themes/omnilife2018/images/icon-seattle.png') }}" title="icon-seattle" alt="icon-seattle">
                            <figcaption>
                                Tech Impact Award<br>
                                Awarded for innovation in Marketing/Analytics. Seattle Magazine,<br>
                                2015
                            </figcaption>
                        </figure>
                    </div>
                    <div class="c-33">
                        <figure class="rewards--item">
                            <img src="{{ asset('themes/omnilife2018/images/icon-5000.png') }}" title="icon-5000" alt="icon-5000">
                            <figcaption>
                                Inc. 5000<br>
                                One of the fastest-growing private companies for three years in a row Inc. Magazine,<br>
                                2013-2015
                            </figcaption>
                        </figure>
                    </div>
                    <div class="c-33">
                        <figure class="rewards--item">
                            <img src="{{ asset('themes/omnilife2018/images/icon-bjournal.png') }}" title="icon-bjournal" alt="icon-bjournal">
                            <figcaption>
                                40 Under 40<br>
                                Featuring CEO Peter Hamilton Puget Sound Business Journal,<br>
                                2015
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Content Body-->
@endsection
