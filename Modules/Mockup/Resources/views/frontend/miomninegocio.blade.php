@extends('mockup::layouts.master')

@section('theme', 'theme--green')

@section('content')
    <!-- Main slider home markup-->
    <div class="slider mainslider" id="main-slider">
        <div class="slider__wrap">
            <a>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-miomninegocio.png') }});">
                    <div class="mainslider__gradient myomnibusiness"></div>
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
        <div class=" myomnibusiness-header">
            <div class="myomnibusiness">
                <div class="myomnibusiness__about">
                    <h1 class="myomnibusiness__title">¿Qué es Mi Omninegocio?</h1>
                    <p class="myomnibusiness__subtitle">
                        Omninegocio es la herramienta digital de Omnilife, para que como empresario puedas consolidar tu negocio independiente. Está compuesto de dos aplicaciones exclusivas: tu propio sitio Web + App de Omnilife.
                    </p>
                </div>
                <blockquote class="testimonial__frase">
                    <img src="{{ asset('themes/omnilife2018/images/myomnibusiness.png') }}" alt="">
                </blockquote>
            </div>
        </div>
        <!-- end Testimonials markup-->
        <!-- product block-->
        <div class="products-block home has-dropdown">
            <div class="products-desc myomnibusiness-menu withbg mid wrapper">
                <h1 class="myomnibusiness__title">Lleva Mi Omninegocio a todas partes</h1>
                <p class="products-desc__description">Con tu propio sitio Web y acceso a la aplicación de Omnilife, podrás implementar mejores prácticas para crecer y promover tu negocio independiente. Este servicio te ayudará a mantener contacto con tu red y clientes. Además, el control de tu
                    negocio estará al alcance de tus manos de manera permanente.</p>
                <div class="col3-4 offset1-4 cases__load myomnibusiness-menu--subtitle">
                    <p>En cualquier dispositivo</p>
                </div>
            </div>
            <div class="products slider" id="home-products">
                <div class="products__wrap slider__wrap">
                    <div class="product myomnibusiness slider__item">
                        <figure class="product--device">
                            <figcaption>
                                <span class="device--image">Página Web</span>
                            </figcaption>
                            <img src="{{ asset('themes/omnilife2018/images/mobile.png') }}" alt="">
                        </figure>
                        <figure class="product--device">
                            <figcaption>
                                <span class="device--image">Aplicación Móvil</span>
                            </figcaption>
                            <img src="{{ asset('themes/omnilife2018/images/ipad.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product block-->
    </div>
    <!-- end Content Body-->

    <div class="wrapper full-size-mobile business__main">
        <div class="business__main-title col4-4 myomnibusiness--instructions">
            <div class="business__main-inner myomnibusiness--steps">
                <h3 class="products-maintitle">Para obtener Mi Omninegocio realiza los siguientes pasos</h3>
            </div>
        </div>
        <div class="business__slider slider" id="business-slider">
            <ul class="business__grid list-nostyle slider__wrap">
                <li class="business__item slider__item">
                    <a>
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                    </a>
                    <h3 class="business__title business__item-title">Productos de calidad avalados por certificaciones internacionales</h3>
                    <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                </li>
                <li class="business__item slider__item">
                    <a>
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                    </a>
                    <h3 class="business__title business__item-title">Plataforma de aprendizaje</h3>
                    <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                </li>
                <li class="business__item slider__item">
                    <a>
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                    </a>
                    <h3 class="business__title business__item-title">Tienda y registro en línea</h3>
                    <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                </li>
                <li class="business__item slider__item">
                    <a>
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                    </a>
                    <h3 class="business__title business__item-title">Acceso a una aplicación móvil</h3>
                    <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="wrapper full-size-mobile business__main">
        <div class="business__main col4-4 banner">
          <div class="myomnibusiness__banner">
            <img class="myomnibusiness__banner--brand" src="{{ asset('themes/omnilife2018/images/myomnibusiness.png') }}" alt="">
            <h2 class="myomnibusiness__banner--title">¿Quieres consolidar tu negocio?</h2>
            <h3 class="myomnibusiness__banner--subtitle">Adquiere ya MiOmninegocio</h3>
            <div class="myomnibusiness__buttons">
              <a href="#">
                <img src="{{ asset('themes/omnilife2018/images/playstore_icon.png') }}" alt="">
              </a>
              <a href="#">
                <img src="{{ asset('themes/omnilife2018/images/appstore_icon.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
        <p class="myomnibusiness--banner__description">
            Consulta el costo y los términos generales del servicio en tu Cedis más cercano o llamando a nuestra línea de atención CREO.
        </p>
    </div>

@endsection
