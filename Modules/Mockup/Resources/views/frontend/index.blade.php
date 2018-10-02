@extends('mockup::layouts.master')

@section('content')
  <!-- Main slider home markup-->
  <div class="slider mainslider" id="main-slider">
        <div class="slider__wrap">
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-omnilife.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
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
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-nfuerza.jpg') }});">
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
                    <video muted class="mainslider__video" poster="http://fuxion.com/upload/images/banner/2017/01/17/ab29aaa5f16ffbe7.png">
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
        <div class="testimonials slider" id="testimonials-slider">
            <header class="testimonials__head">
                <h1 class="testimonials__title">
                    Testimonio <span>de negocio</span>
                </h1>
            </header>
            <div class="slider__wrap">
                <div class="slider__item">
                    <div class="testimonial">
                        <div class="testimonial__avatar">
                            <figure class="avatar medium">
                                <img src="{{ asset('themes/omnilife2018/images/testimonial.jpg') }}" alt="Perfil">
                            </figure>
                        </div>
                        <div class="testimonial__about">
                            <h1 class="testimonial__name">Graciela Angelina Pérez Ramos</h1>
                            <div class="testimonial__metas"><span>71 años</span><span>Tepic, México</span><span>Bronce</span></div>
                            <p class="testimonial__extract">
                                Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido...
                            </p>
                            <a href="historias-exito.html"><button class="testimonial__readmore button small">seguir leyendo</button></a>
                        </div>
                        <blockquote class="testimonial__frase">"Omnilife representa un cambio en mi vida, una forma de vida abundante"</blockquote>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="testimonial">
                        <div class="testimonial__avatar">
                            <figure class="avatar medium"><img src="{{ asset('themes/omnilife2018/images/testimonial.jpg') }}" alt="Perfil"></figure>
                        </div>
                        <div class="testimonial__about">
                            <h1 class="testimonial__name">Graciela Angelina Pérez Ramos</h1>
                            <div class="testimonial__metas">
                                <span>71 years</span>
                                <span>Tepic, México</span>
                            </div>
                            <p class="testimonial__extract">
                                Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido...
                            </p>
                            <button class="testimonial__readmore button small">seguir leyendo</button>
                        </div>
                        <blockquote class="testimonial__frase">"Omnilife representa un cambio en mi vida, una forma de vida abundante"</blockquote>
                    </div>
                </div>
                <div class="slider__item">
                    <div class="testimonial">
                        <div class="testimonial__avatar">
                            <figure class="avatar medium"><img src="{{ asset('themes/omnilife2018/images/testimonial.jpg') }}" alt="Perfil"></figure>
                        </div>
                        <div class="testimonial__about">
                            <h1 class="testimonial__name">Graciela Angelina Pérez Ramos</h1>
                            <div class="testimonial__metas">
                                <span>71 years</span>
                                <span>Tepic, México</span>
                            </div>
                            <p class="testimonial__extract">
                                Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido...
                            </p>
                            <button class="testimonial__readmore button small">seguir leyendo</button>
                        </div>
                        <blockquote class="testimonial__frase">"Omnilife representa un cambio en mi vida, una forma de vida abundante"</blockquote>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Testimonials markup-->
        <!-- product block-->
        <div class="products-block home has-dropdown">
            <div class="products-desc withbg mid wrapper">
                <h1 class="products-desc__title">Nuestros productos</h1>
                <div class="tools__form-group">
                    <div class="select select--categories">
                        <select class="form-control" name="category">
                            <option value="1">Vive Balanceado</option>
                            <option value="2">Vive Activo</option>
                            <option value="3">Vive Fortalecido</option>
                            <option value="4">Sistemas</option>
                        </select>
                    </div>
                </div>
                <p class="products-desc__description">Unc malesuada imperdiet est condimentum ornare. Nam non urna dui. Sed neque enim, mattis ut ligula vel, gravida aliquet diam. </p><a class="button small" href="categoria.html">VER TODOS</a>
            </div>
            <div class="products slider" id="home-products">
                <div class="products__wrap slider__wrap">
                    <div class="product slider__item">
                        <a class="product__link" href="detalle.html">
                            <h3 class="product__name">Nombre producto</h3>
                            <figure class="product__image">
                                <img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" />
                            </figure>
                            <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            <span class="product__nums">
                                <span class="product__price">$100.00</span>
                                <span class="product__pts">00 PTS</span>
                            </span>
                        </a>
                        <footer class="product__f">
                            <div class="product__sep"></div>
                            <button class="button clean" type="button">AGREGAR A CARRITO</button>
                        </footer>
                    </div>
                    <div class="product slider__item">
                        <a class="product__link" href="detalle.html">
                            <h3 class="product__name">Nombre producto</h3>
                            <figure class="product__image">
                                <img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" />
                            </figure>
                            <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            <span class="product__nums">
                                <span class="product__price">$100.00</span>
                                <span class="product__pts">00 PTS</span>
                            </span>
                        </a>
                        <footer class="product__f">
                            <div class="product__sep"></div>
                            <button class="button clean" type="button">AGREGAR A CARRITO</button>
                        </footer>
                    </div>
                    <div class="product slider__item">
                        <a class="product__link" href="detalle.html">
                            <h3 class="product__name">Nombre producto</h3>
                            <figure class="product__image">
                                <img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" />
                            </figure>
                            <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            <span class="product__nums">
                                <span class="product__price">$100.00</span>
                                <span class="product__pts">00 PTS</span>
                            </span>
                        </a>
                        <footer class="product__f">
                            <div class="product__sep"></div>
                            <button class="button clean" type="button">AGREGAR A CARRITO</button>
                        </footer>
                    </div>
                    <div class="product slider__item">
                        <a class="product__link" href="detalle.html">
                            <h3 class="product__name">Nombre producto</h3>
                            <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" /></figure>
                            <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p><span class="product__nums"><span class="product__price">$100.00</span><span class="product__pts">00 PTS</span></span>
                        </a>
                        <footer class="product__f">
                            <div class="product__sep"></div>
                            <button class="button clean" type="button">AGREGAR A CARRITO</button>
                        </footer>
                    </div>
                    <div class="product slider__item">
                        <a class="product__link" href="detalle.html">
                            <h3 class="product__name">Nombre producto</h3>
                            <figure class="product__image">
                                <img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" />
                            </figure>
                            <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            <span class="product__nums">
                                <span class="product__price">$100.00</span>
                                <span class="product__pts">00 PTS</span>
                            </span>
                        </a>
                        <footer class="product__f">
                            <div class="product__sep"></div>
                            <button class="button clean" type="button">AGREGAR A CARRITO</button>
                        </footer>
                    </div>
                    <div class="product slider__item">
                        <a class="product__link" href="detalle.html">
                            <h3 class="product__name">Nombre producto</h3>
                            <figure class="product__image">
                                <img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" />
                            </figure>
                            <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            <span class="product__nums">
                                <span class="product__price">$100.00</span>
                                <span class="product__pts">00 PTS</span>
                            </span>
                        </a>
                        <footer class="product__f">
                            <div class="product__sep"></div>
                            <button class="button clean" type="button">AGREGAR A CARRITO</button>
                        </footer>
                    </div>
                    <p class="disclaimer theme--white">* Los precios mostrados por cada producto son sugeridos y no incluyen un estimado de impuestos y cargos adicionales. Los precios pueden variar según tu ubicación</p>
                </div>
            </div>
        </div>
        <!-- end product block-->
    </div>
    <!-- end Content Body-->
    <!-- bottom banner-->
    <div class="bottom-banner" style="background-image: url('{{ asset('themes/omnilife2018/images/banner-omnilife.jpg') }}');">
        <div class="wrapper bottom-banner__content">
            <h2>Omnilife se trata de ti, de tu vida y de tus sueños</h2>
            <p>Únete como empresario y toma el control.</p>
            <a href="haz-negocio.html"><button class="button small" href="#">QUIERO UNIRME</button></a>
        </div>
    </div>
    <!-- end bottom banner-->
    <!-- front bottom banners-->
    <div class="front-banners">
        <div class="wrapper body-content">
            <div class="front-banner zeytu">
                <a href="#">
                    <figure class="front-banner__img">
                        <img src="{{ asset('themes/omnilife2018/images/slide-fronts-seytu.jpg') }}" alt="">
                    </figure>
                </a>
                <div class="front-banner__description">
                    <h6>Frena la deshidratación de tu piel</h6>
                    <p>Algunos de los factores climáticos impactan directamente la suavidad e hidratación de tu piel. </p>
                </div>
            </div>
            <div class="front-banner nfuerza">
                <a href="#">
                    <figure class="front-banner__img">
                        <img src="{{ asset('themes/omnilife2018/images/slide-fronts-nfuerza.jpg') }}" alt="">
                    </figure>
                </a>
                <div class="front-banner__description">
                    <h6>Utiliza tu tiempo y energía para emprender en grande</h6>
                    <p>Conviértete hoy en el empresario independiente que siempre imaginaste.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end front bottom banners-->

    <!-- Survey -->
    <div class="survey--container">
        <button class="icon-btn icon-cross close" type="button"></button>
        <form id="msform" class="survey">
            <article>
                ¡Queremos escucharte!
            </article>
            <!-- progressbar -->
            <ul id="progressbar" class="progressbar">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <!--h2 class="fs-title">Encuesta</h2-->
                <div class="role">
                    <h3 class="fs-subtitle">1.- Soy:</h3>
                    <label>
                        <input type="radio" name="role" value="distributor" />
                        <p></p>
                        <span>Empresario</span>
                    </label> 

                    
                    <label>
                        <input type="radio" name="role" value="client"/>
                        <p></p>
                        <span>Cliente</span>
                    </label>

                    <label>
                        <input id="fb3" type="radio" name="role" value="guest" />
                        <p></p>
                        <span>Visitante</span>
                    </label>
                </div>
                <input type="button" name="next" class="next action-button" value="Continuar" />
            </fieldset> 
            <fieldset>
                <!--h2 class="fs-title">Encuesta</h2-->
                <div class="redesign">
                    <h3 class="fs-subtitle">2.- ¿Qué te pareció el rediseño del sitio?</h3>
                    <label>
                        <input type="radio" name="redesign" value="worst">
                        <p class="mood--worst"></p>
                        <span>Pésimo</span>
                    </label>
                    <label>
                        <input type="radio" name="redesign" value="bad">
                        <p class="mood--bad"></p>
                    </label>
                    <label>
                        <input type="radio" name="redesign" value="meh">
                        <p class="mood--regular"></p>
                        <span>Regular</span>
                        </label>
                    <label>
                        <input type="radio" name="redesign" value="good">
                        <p class="mood--good"></p>
                    </label>
                    <label>
                        <input type="radio" name="redesign" value="excellet">
                        <p class="mood--excellent"></p>
                        <span>Excelente</span>
                    </label>
                    <div class="redesign--question">
                        <h3 class="fs-subtitle">¿Qué agregarías o quitarías? (Opcional)</h3>
                        <input type="text" placeholder="">
                    </div>
                </div>

                <input type="button" name="previous" class="previous action-button" value="Anterior" />
                <input type="button" name="next" class="next action-button" value="Continuar" />
            </fieldset>
            <fieldset>
                <div class="redesign looking">
                    <h3 class="fs-subtitle">3.- ¿Qué tan fácil ha sido encontrar lo que buscabas?</h3>
                    <label>
                        <input type="radio" name="redesign" value="worst">
                        <p class="mood--worst"></p>
                        <span>Nada fácil</span>
                    </label>
                    <label>
                        <input type="radio" name="redesign" value="bad">
                        <p class="mood--bad"></p>
                    </label>
                    <label>
                        <input type="radio" name="redesign" value="meh">
                        <p class="mood--regular"></p>
                        <span>Regular</span>
                    </label>
                    <label>
                        <input type="radio" name="redesign" value="good">
                        <p class="mood--good"></p>
                    </label>
                    <label>
                        <input type="radio" name="redesign" value="excellet">
                        <p class="mood--excellent"></p>
                        <span>Muy fácil</span>
                    </label>
                </div>

                <input type="button" name="previous" class="previous action-button" value="Anterior" />
                <input type="submit" name="submit" class="submit action-button" value="Enviar" />
                <input type="button" name="next" class="next action-button" value="Continuar" />
            </fieldset>
            <fieldset>
                <article class="message--success">
                    <img src="{{ asset('themes/omnilife2018/images/survey/completed.png') }}" alt="">
                      ¡Gracias por ayudarnos a mejorar!
                </article>
            </fieldset>
        </form>
    </div>
    <!-- End of Survey -->
@endsection
