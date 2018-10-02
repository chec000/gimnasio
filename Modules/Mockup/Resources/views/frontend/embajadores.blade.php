@extends('mockup::layouts.master')

@section('theme', 'theme--white')

@section('content')
    <!-- Main slider home markup-->
    <div class="slider mainslider main__slider--ambassador" id="main-slider">
        <div class="slider__wrap">
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/nfuerza--banner.png') }});">
                    <div class="mainslider__gradient theme--white"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content"></div>
                    </div>
                </div>
            </a>
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-omnilife.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">Reconocemos a los líderes</h1>
                        </div>
                    </div>
                </div>
            </a>
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-seytu.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">Reconocemos a los líderes</h1>
                        </div>
                    </div>
                </div>
            </a>
            <a>
                <div class="slider__item" style="background-image:url(http://fuxion.com/upload/images/banner/2017/01/17/ab29aaa5f16ffbe7.png);">
                    <div class="mainslider__gradient"></div>
                    <video class="mainslider__video" poster="http://fuxion.com/upload/images/banner/2017/01/17/ab29aaa5f16ffbe7.png">
                        <source src="{{ asset('themes/omnilife2018/videos/video-arena-audio.webm') }}" type="video/webm">
                        <source src="{{ asset('themes/omnilife2018/videos/video-arena-audio.mp4') }}" type="video/mp4">
                        <source src="{{ asset('themes/omnilife2018/videos/video-arena-audio.ogv') }}" type="video/ogg">
                    </video>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">Reconocemos a los líderes</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="mainslider__signals signals">
            <p class="signals__note"> <span>Productos y oportunidades</span><span>para mejorar tu vida</span></p><span class="signals__scroll">Scroll</span>
        </div>
    </div>
    <!-- end Main slider home markup-->
    <!-- Content body-->
    <div class="wrapper full-size-mobile">
        <!-- Testimonials markup-->
        <div class="testimonials slider ambassador theme--cyan" id="testimonials-slider">
            <header class="testimonials__head">
                <h1 class="testimonials__title ambassador">Conoce a los embajadores</h1>
                <h3 class="testimonials__subtitle ambassador">
                    Notamos la pasión en los jóvenes más destacados en los diferentes países del Continente Omnilife.
                </h3>
            </header>
            <figure class="ambassador--video">
                <img src="{{ asset('themes/omnilife2018/images/video--ambassador.png') }}" alt="">
            </figure>
        </div>
        <!-- end Testimonials markup-->
        <!-- product block-->
        <div class="products-block ambassador home has-dropdown">
            <div class="products-desc withbg mid wrapper theme--gray">
                <h1 class="products-desc__title">Ellos son los embajadores Nfuerza, nuestra voz en tu país...</h1>
                <div class="ambassador--description">
                    <p>En este espacio, identificamos y reconocemos la pasión y el compromiso de cada uno de los jóvenes empresarios mas destacados de los diferentes países del Continente Omnilife.</p>
                    <p>Creamos Embajadores de NFuerza; un programa de impulso, reconocimiento y crecimiento integral para jóvenes que en poco tiempo por su liderazgo y constancia, han crecido y demostrado quienes son. Un programa con exclusivos beneficios pensados para esos jóvenes de este planeta, para esos agentes de cambio que mueven al mundo.</p>
                </div>
            </div>
            <div class="products slider" id="home-products">
                <div class="grid">
                    <div class="item ambassador">
                        <div class="content">
                            <img src="{{ asset('themes/omnilife2018/images/ambassador-marcia.png') }}" alt="">
                            <div class="ambassador--info">
                                <h3 class="ambassador__name">Marcia Thais</h3>
                                <h4 class="ambassador__country">Brasil</h4>
                            </div>
                            <div class="desc">
                                <div class="ambassador--description__quote">
                                    “Hago el negocio en todo momento, contacto gente a diario en mi día cotidiano. Quiero crecer y que los demás crezcan.”
                                </div>
                                <div class="ambassador--description__info"><span>Nivel de Carrera: Plata premier</span></div>
                                <div class="ambassador--description__info"><span>Edad:</span> 23 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> USD $1,000.00</div>
                                <div class="ambassador--description__info">
                                    <span>Celular:</span> +5521976774559
                                </div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ambassador">
                        <div class="content">
                            <img src="{{ asset('themes/omnilife2018/images/ambassador-alvaro.png') }}" alt="">
                            <div class="ambassador--info">
                                <h3 class="ambassador__name">Álvaro y Erika</h3>
                                <h4 class="ambassador__country">Chile</h4>
                            </div>
                            <div class="desc">
                                <div class="ambassador--description__quote">
                                    “Nos aferramos tan fuerte a la oportunidad. A la semana de tomar la oportunidad, renuncié a mi carrera de derecho, aquí en Omni nos pagan por ayudar”.
                                </div>
                                <div class="ambassador--description__info"><span>Nivel de carrera: Oro Elite</span></div>
                                <div class="ambassador--description__info"><strong>Titular: </strong>Álvaro Rojas </div>
                                <div class="ambassador--description__info"><span>Edad:</span> 28 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> USD $6,800.00</div>
                                <div class="ambassador--description__info"><span>Celular:</span> +56944008188</div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>
                                <hr>
                                <div class="ambassador--description__info"><strong>Codistribuidor: </strong>Erika Cornejo</div>
                                <div class="ambassador--description__info"><span>Edad:</span> 27 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> USD $6,800.00</div>
                                <div class="ambassador--description__info"><span>Celular:</span> +56944008190</div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ambassador">
                        <div class="content">
                            <img src="{{ asset('themes/omnilife2018/images/ambassador-yessid.png') }}" alt="">
                            <div class="ambassador--info">
                                <h3 class="ambassador__name">Yessid y Daniela</h3>
                                <h4 class="ambassador__country">Colombia</h4>
                            </div>
                            <div class="desc">
                                <div class="ambassador--description__quote">
                                    “Desde el primer día lo hicimos profesional, entendimos 2 cosas, hacerlo por nuestros sueños y en pareja. Los viajes son nuestro motor, aprendimos a trabajar y enseñamos a los demás”.
                                </div>
                                <div class="ambassador--description__info"><span>Nivel de carrera: Plata Premier </span></div>
                                <div class="ambassador--description__info"><strong>Titular: </strong>Yecid Quintero</div>
                                <div class="ambassador--description__info"><span>Edad:</span> 28 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> USD $400.00</div>
                                <div class="ambassador--description__info"><span>Celular:</span> +57 3174963606</div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>
                                <hr>
                                <div class="ambassador--description__info"><strong>Codistribuidor: Daniela Montes </strong></div>
                                <div class="ambassador--description__info"><span>Edad:</span> 27 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> USD $400.00</div>
                                <div class="ambassador--description__info"><span>Celular:</span> +57 3107182680</div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ambassador">
                        <div class="content">
                            <img src="{{ asset('themes/omnilife2018/images/ambassador-andrea.png') }}" alt="">
                            <div class="ambassador--info">
                                <h3 class="ambassador__name">Andrea y Daniel</h3>
                                <h4 class="ambassador__country">México</h4>
                            </div>
                            <div class="desc">
                                <div class="ambassador--description__quote">
                                    “Aprovechamos al máximo las Juntas Caseras, así llegamos a nivel oro en 6 meses. Recientemente abrimos un Centro de Negocio”
                                </div>
                                <div class="ambassador--description__info"><span>Nivel de carrera: Oro Premier</span></div>
                                <div class="ambassador--description__info">
                                    <strong>Titular: </strong> Andrea Espejel 
                                </div>
                                <div class="ambassador--description__info"><span>Edad:</span> 27 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> USD $700.00</div>
                                <div class="ambassador--description__info"><span>Celular:</span> +52 1 7223503503</div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>
                                <hr>
                                <div class="ambassador--description__info">
                                    <strong>Codistribuidor: </strong> Daniel Dávila 
                                </div>
                                <div class="ambassador--description__info"><span>Edad:</span> 29 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> USD $700.00</div>
                                <div class="ambassador--description__info"><span>Celular:</span> +52 1 7221099626</div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ambassador">
                        <div class="content">
                            <img src="{{ asset('themes/omnilife2018/images/ambassador-juan.png') }}" alt="">
                            <div class="ambassador--info">
                                <h3 class="ambassador__name">Juan Antonio</h3>
                                <h4 class="ambassador__country">Perú</h4>
                            </div>
                            <div class="desc">
                                <div class="ambassador--description__quote">
                                    “Me gusta viajar. Cargo unos soles y mi mochila llena de producto, para volver me encargo de contactar gente nueva y compartir el producto con esta oportunidad de negocio en todos lados”.
                                </div>
                                <div class="ambassador--description__info"><span>Nivel de carrera: Oro Premier</span></div>
                                <div class="ambassador--description__info"><span>Edad:</span> 20 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> USD $500.00</div>
                                <div class="ambassador--description__info"><span>Celular:</span> +051978956060</div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="item ambassador">
                        <div class="content">
                            <img src="{{ asset('themes/omnilife2018/images/ambassador-cynthia.png') }}" alt="">
                            <div class="ambassador--info">
                                <h3 class="ambassador__name">Cynthia Guadalupe</h3>
                                <h4 class="ambassador__country">USA</h4>
                            </div>
                            <div class="desc">
                                <div class="ambassador--description__quote">
                                    “Me apasiona compartir con mucha emoción mi estilo de vida Omnilife NFuerza, lo que me identifica es que estoy convencida de que la oportunidad Omnilife-Seytú es el mejor camino para trascender y hacer la diferencia en mi entorno y en el mundo”.
                                </div>
                                <div class="ambassador--description__info"><span>Nivel de carrera: Oro Premier </span></div>
                                <div class="ambassador--description__info"><span>Edad:</span> 26 años</div>
                                <div class="ambassador--description__info"><span>Cheque mensual:</span> </div>
                                <div class="ambassador--description__info">
                                    <span>Redes Sociales:</span>
                                    <div class="ambassador--description__socialmedia">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/facebook.svg') }}" alt="">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/twitter.svg') }}" alt="OMNILIFE - twitter">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/instagram.svg') }}" alt="OMNILIFE - instagram">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product block-->
        <!-- faq -->
        <div class="ambassador--faq">
            <div class="ambassador--faq__objectives theme--green">
                <h2 class="faq--title">Preguntas Frecuentes</h2>
                <img src="{{ asset('themes/omnilife2018/images/nfuerza-world.png') }}" alt="" class="ambassador--world">
                <div class="ambassador--faq__content">
                    <h3 class="faq--subtitle">¿Cuáles son los objetivos de este programa?</h3>
                    <p>Permear liderazgo y profesionalismo a cada uno de los integrantes de sus organizaciones,  formando líderes potenciales en todo el continente Omnilife.</p>
                    <p>Incrementar en numero de jóvenes inscritos en esta aventura, mediante el impulso y liderazgo brindado a nuestros embajadores Nfuerza, con el objetivo de crecer la  el numero de empresarios, niveles de carreta y nivel de pago mensual.</p>
                    <p>Posicionar nuestra marca y comunicación NFuerza en todo el continente Omnilife.</p>
                    <p>Brindar las herramientas necesarias a nuestros embajadores Nfuerza para incrementar su nivel de profesionalismo mediante coaching grupal 360.</p>
                    <p>Contar con un grupo de jóvenes que definan e inspiren el estilo de vida de lo que es ser un empresario exitoso predicando con el ejemplo.</p>

                    <h3 class="faq--subtitle">¿En qué países hay Embajadores Nfuerza?</h3>
                    <p>Esta es la primer etapa y los países participantes en ella son: </p>
                    <ul>
                        <li>Estados Unidos</li>
                        <li>Colombia</li>
                        <li>México</li>
                        <li>Brasil</li>
                        <li>Chile</li>
                        <li>Perú</li>
                    </ul>

                    <p>Para nuestra segunda etapa, nos enfocaremos en:: </p>
                    <ul>
                        <li>Colombia</li>
                        <li>Ecuador</li>
                        <li>Bolivia</li>
                    </ul>

                    <p>Seleccionaremos año tras año a un grupo diferente de jóvenes al que apoyemos e impulsaremos, ellos serán nuestros aliados más cercanos en este boom de abundancia.</p>
                    <h3 class="faq--subtitle">¿Habrá embajadores en otros países?</h3>
                    <p>Se abrirán convocatorias ahora también para: Argentina, Bolivia, Costa Rica, Ecuador, El Salvador, España, República Dominicana, Guatemala, Italia, Nicaragua, Panamá, Paraguay, Uruguay y Rusia.</p>
                </div>
            </div>
            <div class="ambassador--faq__benefits">
                <div class="ambassador--benefits__container theme--gray">
                    <div class="ambassador--faq__content">
                        <h3 class="faq--subtitle">¿Cuáles son los beneficios exclusivos de Embajadores Nfuerza, además de tener el honor de representar a Nfuerza en mi País o región?</h3>
                        <p>Capacitaciones personalizadas para el embajador y/o su equipo de trabajo enfocadas a negocio y reclutamiento (previa agenda).</p>
                        <p>Capacitaciones en herramientas para su crecimiento y la correcta administración de tu negocio.</p>
                        <p>Posibilidad de acompañar a Amaury Vergara en giras y eventos especiales como representantes de NFuerza.</p>
                        <p>Seminarios virtuales de profesionalización cada 3 meses.</p>
                        <p>Participación activa en toma de decisiones Omnilife NFuerza. (Focus groups).</p>
                        <p>Participación Activa en organización de eventos NCUENTRA (Retroalimentación)</p>

                        <h3 class="faq--subtitle">¿Qué hace un empresario NFuerza?</h3>
                        <p>Representa en esencia y voz a Nfuerza, será uno de nuestros canales principales de difusión de información, contenido, objetivos y filosofía. Son un ejemplo de referencia y la certeza del éxito inminente hacia donde queremos que los jóvenes se dirijan.</p>
                    </div>
                </div>
                <div class="ambassador--benefits__convocatory theme--blue">
                    <h2>Conoce la convocatoria para ser embajador en Marzo de 2018.</h2>
                    <p>Creamos este programa de impulso y crecimiento para jóvenes empresarios, una estrategia que identifica y reconoce a esos jóvenes por sus ganas y el desarrollo de su negocio.</p>
                    <a href="">Descarga las reglas</a>
                </div>
            </div>
        </div>
        <!-- end faq -->
    </div>
    <!-- end Content Body-->
@endsection

@section('scripts')
    <script src="{{ asset('themes/omnilife2018/js/ambassadors.js') }}"></script>
@endsection
