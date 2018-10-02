@extends('mockup::layouts.master')

@section('theme', 'theme--lightgray')

@section('content')

    <!-- Main slider home markup-->
    <div class="slider mainslider" id="main-slider">
        <div class="slider__wrap">
            <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-'.$brand.'.jpg') }});">
                <div class="mainslider__gradient"></div>
                <div class="mainslider__wrap wrapper">
                    <div class="mainslider__content">
                    </div>
                </div>
            </div>
            <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-seytu.jpg') }});">
                <div class="mainslider__gradient theme--orange"></div>
                <div class="mainslider__wrap wrapper">
                    <div class="mainslider__content">
                        <h1 class="mainslider__title">Reconocemos a los líderes</h1>
                    </div>
                </div>
            </div>
            <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-nfuerza.jpg') }});">
                <div class="mainslider__gradient theme--orange"></div>
                <div class="mainslider__wrap wrapper">
                    <div class="mainslider__content">
                        <h1 class="mainslider__title">Reconocemos a los líderes</h1>
                    </div>
                </div>
            </div>
            <div class="slider__item" style="background-image:url(http://fuxion.com/upload/images/banner/2017/01/17/ab29aaa5f16ffbe7.png);">
                <div class="mainslider__gradient theme--orange"></div>
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
        </div>
        <div class="mainslider__signals signals">
            <p class="signals__note"> <span>Productos y oportunidades</span><span>para mejorar tu vida</span></p><span class="signals__scroll">Scroll</span>
        </div>
    </div>
    <!-- end Main slider home markup-->
    <!-- Content body-->
    <div class="wrapper full-size-mobile">
        <div class="tools--container">
            <div class="tools--description">
                <h2 class="history--title">Título para Herramienta</h2>
                <p class="tools--subtitle">
                    Omnilife nace en 1991 por iniciativa del exdistribuidor de Herbalife Jorge Vergara Madrigal (cuando aún estaba casado con Maricruz Zatarain), con el nombre de Omnitrition de México, adaptando el esquema y productos a la realidad sudamericana y 10 años
                    más tarde toma el nombre de Omnilife de México. Vergara se asocia con otros tres colegas estadounidenses, distribuidores de Herbalife y en 1989 fundan Omnitrition USA. Su producto principal era un té para bajar de peso y una vitamina líquida
                    desarrollada por Durk Person, que distribuyeron bajo la marca Omni IV (conocido en el actual Omnilife como Omniplus).
                </p>
                <p class="tools--subtitle">
                    Es así como el 11 de septiembre de 1991, los tres estadounidenses y Jorge Vergara abren Omnitrition de México, que rápidamente, y con Vergara dirigiendo la parte comercial de la empresa, alcanza un gran éxito, ya que cambian las vitaminas en pastas de
                    Herbalife a líquidos y polvos de más fácil aceptación por los latinoamericanos, así mismo al esquema de pagos de Herbalife le baja porcentajes y con manufacturación local logra productos a menor precio, a sí mismo desembolsa las comisiones
                    cada quince días, a diferencia de las mensualidades usadas en USA. Al poco tiempo, sus socios deciden vender a Vergara su participación en Omnitron de México, y en 1994 como dueño único cambia el nombre actual de Omnilife.
                </p>
                <p class="tools--subtitle">
                    Actualmente Omnilife cuenta con un portafolio de más de 100 productos entre suplementos nutricionales y línea de belleza. En el 2016, a raíz del último divorcio de Vergara, la línea de belleza tomará el nombre de SEYTÚ, enfocada al cuidado personal y
                    cosmética de hombres y mujeres.
                </p>
                <p class="tools--subtitle">
                    Siendo una empresa comprometida con la filosofía de trabajo, Omnilife obtiene el Reconocimiento de Súper Empresas 2015 otorgado por Grupo Expansión (Lugar #15 del ranking).5​ Así mismo, obtiene el Certificado en el Modelo de Equidad de Género desde el
                    2008, fomento hacia la cultura de respeto e igualdad de oportunidades para hombres y mujeres, otorgado por el Instituto Nacional de la Mujeres/México.
                </p>
                <p class="tools--subtitle">
                    Omnilife cuenta con dos plantas de manufactura, una en México con una superficie de 50,000 m2 la cual se posiciona como la más grande del mundo en su ramo y en donde se fabrican cerca de 17 millones de productos de manera mensual. La otra planta está
                    ubicada en Colombia, con una extensión de 5,000 mts2 con una capacidad de producción de 650 mil productos mensuales aproximadamente.
                </p>
            </div>
        </div>
        <div class="tools--grid">
            <div class="tools--grid__container">
                <h2>Template Omnilife Herramientas</h2>
                <ul class="tools--grid__list list-nostyle slider__wrap">
                    <li class="tools--grid__item slider__item">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title"></h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="tools--grid__item slider__item">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title"></h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="tools--grid__item slider__item">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title"></h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="tools--grid__item slider__item">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title"></h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="tools--grid__item slider__item">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title"></h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="tools--grid__item slider__item">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title"></h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="tools--grid__item slider__item">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title"></h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="tools--grid__item slider__item">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title"></h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end Content Body-->

@endsection
