@extends('mockup::layouts.master')

@section('content')
    <div class="business">
    <!-- Main slider home markup-->
        <div class="slider mainslider business-slider" id="main-slider">
            <div class="slider__wrap">
                <a>
                    <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-jobs.png') }});">
                        <div class="mainslider__gradient"></div>
                        <div class="mainslider__wrap wrapper">
                            <div class="mainslider__content">
                                <h1 class="mainslider__title"> <span class="highlight">Tu éxito en curso</span></h1>
                                <p class="mainslider__desc cresiendo">Únete a más de 35,000 empresarios que han conseguido reforzar y potenciar <br>sus conocimientos y habilidades para hacer su negocio independiente en Omnilife.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-2.jpg') }});">
                        <div class="mainslider__gradient"></div>
                        <div class="mainslider__wrap wrapper">
                            <div class="mainslider__content">
                                <h1 class="mainslider__title"> <span class="highlight">2. Obtener</span><span>nuevos ingresos</span></h1>
                                <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-3.jpg') }});">
                        <div class="mainslider__gradient"></div>
                        <div class="mainslider__wrap wrapper">
                            <div class="mainslider__content">
                                <h1 class="mainslider__title"> <span class="highlight">3. Conocer</span><span>el mundo</span></h1>
                                <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-4.jpg') }});">
                        <div class="mainslider__gradient"></div>
                        <div class="mainslider__wrap wrapper">
                            <div class="mainslider__content">
                                <h1 class="mainslider__title"> <span class="highlight">4. Ayudar a la gente</span><span>a mejorar su salud</span></h1>
                                <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-5.jpg') }});">
                        <div class="mainslider__gradient"></div>
                        <div class="mainslider__wrap wrapper">
                            <div class="mainslider__content">
                                <h1 class="mainslider__title"> <span class="highlight">5. Tu negocio te lleva</span><span>a cumplir tus sueños</span></h1>
                                <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mainslider__signals signals"><span class="signals__scroll">Scroll</span></div>
        </div>
        <!-- end Main slider home markup-->
        <!-- Content body-->
        <div class="wrapper full-size-mobile business__main">
            <div class="business__main-title col3-4">
                <div class="business__main-inner">
                    <h3 class="products-maintitle">Plataforma <span>de Aprendizaje</span></h3>
                </div>
            </div>
            <div class="cresiendo--container">
                <div class="cresiendo--description">
                    <p class="cresiendo--subtitle">
                        CreSiendo, la Academia de Empresarios OMNILIFE, es una plataforma diseñada para que nuestros Empresarios logren alcanzar sus sueños y objetivos a través de cursos en línea y presenciales.
                    </p>
                    <div class="cresiendo--thumbnails">
                        <figure class="cresiendo--thumbnails__item">
                            <img src="{{ asset('themes/omnilife2018/images/cresiendo-virtual.png') }}" alt="">
                            <figcaption class="theme--magenta">
                                <p>Cursos para el desarrollo de negocio enfocados en lograr el crecimiento integral y potencializar cada objetivo a través de cursos y materiales interactivos disponibles en 5 idiomas, a cualquier hora y en cualquier lugar.</p>
                            </figcaption>
                        </figure>
                        <figure class="cresiendo--thumbnails__item">
                            <img src="{{ asset('themes/omnilife2018/images/cresiendo-presencial.png') }}" alt="">
                            <figcaption class="theme--green">
                                <p>Cursos presenciales de desarrollo humano que permitirán una transformación interna para lograr el crecimiento integral dentro del negocio independiente en Omnilife.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="business__main-title cases__headline cresiendo">
                <header>
                    <h1 class="testimonials__title">Testimonio de Éxito <span>en CreSiendo</span></h1>
                </header>
            </div>

            <div class="cases__body">
                <div class="testimonial cases__item">
                    <div class="cases__about">
                        <div class="testimonial__headline">
                            <div class="testimonial__avatar">
                                <figure class="avatar smallx"><img src="{{ asset('themes/omnilife2018/images/testimonial.jpg') }}" alt="Perfil"></figure>
                            </div>
                            <div class="testimonial__about">
                                <h1 class="testimonial__name">Rocío Salinas & Gerardo González</h1>
                                <div class="testimonial__metas"><span>71 años</span><span>Guadalajara, México</span><span>Bronce</span></div>
                            </div>
                        </div>
                        <p class="testimonial__extract">
                            Creemos firmemente que una persona que dedica tiempo a su crecimiento personal,
                            obviamente también va a crecer en el negocio, por eso, si quieres mejorar, esta es la oportunidad,
                            te recomendamos asistir a los módulos presenciales de CreSiendo donde además trabajas
                            más en forma algunos detalles que amplían tu panorama...
                        </p>
                        <blockquote class="testimonial__frase">"Una gran ventaja es que los puedes hacer en distintos momentos del día, estés donde estés."</blockquote>
                        <div class="cases__video ezone__jumbotron">
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
                        <button class="cases__open testimonial__readmore button small">sigue leyendo</button>
                    </div>
                    <div class="cases__testimonial">
                        <div class="cases__testimonial-inner">
                            <div class="cases__testimonial-body ps-container desk-only">
                                <p>Tenemos 26 años con nuestro Negocio Independiente Omnilife y queremos invitarlos a tomar los cursos de CreSiendo Virtual, mientras más pasa el tiempo creemos que ya lo sabemos todo y con estos cursos refuerzas realmente el profesionalismo a través de varios módulos. Cuando hice el curso de “Tus primeros 90 días” me llamo la atención en cosas que a veces se nos olvidan y que son esenciales para las personas que vamos ingresando a Omnilife.</p>
                                <p>Otro de los cursos que nos encanto fue el de “Menudeo la base del éxito” el cual es importante para aquellos que quieren tener ganancias inmediatas, el de “Liderar”,  es el secreto en esta organización, el desarrollar nuestro propio liderazgo y además ayudar a nuestros inscritos que lo logren.</p>
                                <p>Una gran ventaja es que los puedes hacer en distintos momentos del día, estés donde estés y cuando menos lo pienses ya tendrás tus certificados y podrás recomendarlos a tu red.</p>
                                <p>Creemos firmemente que una persona que dedica tiempo a su crecimiento personal, obviamente también va a crecer en el negocio, por eso, si quieres mejorar, esta es la oportunidad, te recomendamos asistir a los módulos presenciales de CreSiendo donde además trabajas más en forma algunos detalles que amplían tu panorama de vida para lograr un crecimiento integral. Tomate el tiempo para invertir en ti mismo y poder crecer en el negocio.</p>
                            </div>
                            <button class="cases__close button small secondary">Cerrar</button>
                        </div>
                    </div>
                </div>
                <div class="testimonial cases__item">
                    <div class="cases__about">
                        <div class="testimonial__headline">
                            <div class="testimonial__avatar">
                                <figure class="avatar smallx"><img src="{{ asset('themes/omnilife2018/images/testimonial.jpg') }}" alt="Perfil"></figure>
                            </div>
                            <div class="testimonial__about">
                                <h1 class="testimonial__name">Manuel Touriño</h1>
                                <div class="testimonial__metas"><span>71 años</span><span>Perú</span><span>Bronce</span></div>
                            </div>
                        </div>
                        <p class="testimonial__extract">
                            CreSiendo Virtual realmente es una herramienta espectacular con muchos
                            temas importantes para el desarrollo de tu negocio independiente,
                            pero sobre todo hay uno que te ayuda muy bien a tener claridad y
                            visión de lo que vas a lograr en esta compañía, que es el curso “Tus primeros 90 días”...
                        </p>
                        <blockquote class="testimonial__frase">"¿Qué es lo tengo que hacer para tener éxito?"</blockquote>
                        <div class="cases__video ezone__jumbotron">
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
                        <button class="cases__open testimonial__readmore button small">sigue leyendo</button>
                    </div>
                    <div class="cases__testimonial">
                        <div class="cases__testimonial-inner">
                            <div class="cases__testimonial-body ps-container desk-only">
                                <p>CreSiendo Virtual realmente es una herramienta espectacular con muchos temas importantes para el desarrollo de tu negocio independiente, pero sobre todo hay uno que te ayuda muy bien a tener claridad y visión de lo que vas a lograr en esta compañía, que es el curso “Tus primeros 90 días”. </p>
                                <p>Este ya lo he visto muchas veces, en mis entrenamientos con mis equipos cada miércoles lo pasamos porque realmente el plan de 90 días va de la mano con la pregunta “¿Qué es lo que es lo tengo que hacer para tener éxito?” y si no sabes responder no hay problema. Consulta el entrenamiento desde tu celular, Tablet o computadora, estés donde estés en tu coche, en tu casa, en cualquier lugar y aprovecha esta gran herramienta.</p>
                            </div>
                            <button class="cases__close button small secondary">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Content Body-->
    <!-- bottom banner-->
    <div class="bottom-banner" style="background-image: url({{ asset('themes/omnilife2018/images/banner-omnilife.jpg') }});">
        <div class="wrapper bottom-banner__content">
            <h2>Omnilife se trata de ti, de tu vida y de tus sueños</h2>
            <p>Únete como empresario y toma el control.</p>
            <a href="haz-negocio.html"><button class="button small" href="#">QUIERO UNIRME</button></a>
        </div>
    </div>
    <!-- end bottom banner-->
@endsection
