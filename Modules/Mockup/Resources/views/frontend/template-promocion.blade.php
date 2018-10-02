@extends('mockup::layouts.master')

@section('content')

    <div class="business">
        <!-- Main slider home markup-->
        <div class="slider mainslider business-slider" id="main-slider">
            <div class="slider__wrap">
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-jobs.png') }});">
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
            <div class="mainslider__signals signals"><span class="signals__scroll">Scroll</span></div>
        </div>
        <!-- end Main slider home markup-->
        <!-- Content body-->
        <div class="wrapper full-size-mobile">
            <!-- Testimonials markup-->
            <div class="myomnibusiness-header omnilife">
                <div class="myomnibusiness">
                    <div class="myomnibusiness__about">
                        <h1 class="myomnibusiness__title omnilife">Reto90</h1>
                        <p class="myomnibusiness__subtitle omnilife">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et gravida neque, vel aliquam purus. Proin vel placerat arcu, eu dignissim ligula. Mauris malesuada in ante vel gravida. Suspendisse semper orci neque, vitae vestibulum nisl maximus in.
                            Vivamus lacinia, dolor et convallis venenatis, risus tellus vestibulum eros, vel venenatis ligula ligula vitae sapien. Phasellus vulputate, turpis quis dignissim tristique, eros purus fermentum velit, a fermentum dolor metus sit
                            amet turpis. Praesent finibus, diam in porttitor lobortis, turpis velit hendrerit ex, sed tempor nulla nibh nec diam.
                        </p>
                    </div>
                    <blockquote class="testimonial__frase">
                        <img src="https://www.omnilife.com/wp-content/uploads/2018/04/banners_web_90.jpg" alt="">
                    </blockquote>
                </div>
            </div>
            <!-- end Testimonials markup-->
        </div>
        <div class="wrapper full-size-mobile business__main {{$brand}}">
            <div class="business__main-title col4-4">
                <div class="business__main-inner myomnibusiness--steps {{$brand}}">
                    <h3 class="products-maintitle">Beneficios de participar</h3>
                </div>
            </div>
            <div class="business__slider slider" id="business-slider">
                <ul class="business__grid list-nostyle slider__wrap">
                    <li class="business__item slider__item ">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title">Productos de calidad avalados por certificaciones internacionales</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item ">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title">Plataforma de aprendizaje</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item ">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title">Tienda y registro en línea</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item ">
                        <figure>
                            <img src="{{ asset('themes/omnilife2018/images/icons/check.svg') }}" title="check" alt="check" class="business__item-icon">
                        </figure>
                        <h3 class="business__title business__item-title">Acceso a una aplicación móvil</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis.</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end Content Body-->
    </div>
    <!-- bottom banner-->
    <div class="bottom-banner align-left gradient business__banner" style="background-image: url('{{ asset('themes/omnilife2018/images/'.$brand.'/haz-negocio/haznegocio'.$brand.'-banner.jpg') }}');">
        <div class="wrapper bottom-banner__content">
            <h2>Omnilife se trata de ti, de tu vida y de tus sueños</h2>
            <p>Únete como empresario y toma el control.</p>
            <button class="button small" href="#">QUIERO UNIRME</button>
        </div>
    </div>
    <!-- end bottom banner-->

@endsection
