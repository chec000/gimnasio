@extends('mockup::layouts.master')

@section('content')
    <div class="business">
        <!-- Main slider home markup-->
        <div class="slider mainslider business-slider" id="main-slider">
            <div class="slider__wrap">
                <a>
                    <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/'.$brand.'/historias/banner-exito.jpg') }});">
                        <div class="mainslider__gradient"></div>
                        <div class="mainslider__wrap wrapper">
                            <div class="mainslider__content">
                                <h1 class="mainslider__title">
                                    <span class="highlight">Lorem ipsum</span>
                                    <span>dolor sit amet</span>
                                </h1>
                                <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/'.$brand.'/historias/banner-exito.jpg') }});">
                        <div class="mainslider__gradient"></div>
                        <div class="mainslider__wrap wrapper">
                            <div class="mainslider__content">
                                <h1 class="mainslider__title">
                                    <span class="highlight">Lorem ipsum</span>
                                    <span>dolor sit amet</span>
                                </h1>
                                <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/'.$brand.'/historias/banner-exito.jpg') }});">
                        <div class="mainslider__gradient"></div>
                        <div class="mainslider__wrap wrapper">
                            <div class="mainslider__content">
                                <h1 class="mainslider__title">
                                    <span class="highlight">Lorem ipsum</span>
                                    <span>dolor sit amet</span>
                                </h1>
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
        <div class="wrapper full-size-mobile business__main cases">
            <div class="business__main-title col3-4 cases__headline">
                <div class="business__main-inner">
                    <h3 class="business__title">Historias de éxito</h3>
                </div>
            </div>
            <div class="cases__body">
                <div class="testimonial cases__item">
                    <div class="cases__about">
                        <div class="testimonial__headline">
                            <div class="testimonial__avatar">
                                <figure class="avatar smallx">
                                    <img src="{{ asset('themes/omnilife2018/images/testimonial.jpg') }}" alt="Perfil">
                                </figure>
                            </div>
                            <div class="testimonial__about">
                                <h1 class="testimonial__name">Graciela Angelina Pérez Ramos</h1>
                                <div class="testimonial__metas">
                                    <span>71 years</span>
                                    <span>Tepic, México</span>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial__extract">
                            Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido...
                        </p>
                        <blockquote class="testimonial__frase">"Omnilife representa un cambio en mi vida, una forma de vida abundante"</blockquote>
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
                                <p>Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido Nunc eu sollicitudin dolor, vitae maximus nisl. Nullam condimentum convallis ante eu
                                    pretium. Mauris tincidunt, libero ac suscipit suscipit, lorem massa commodo nisi, at sollicitudin neque massa et massa. Ut et finibus leo. Integer tristique arcu sed velit accumsan gravida. Maecenas iaculis ex vitae vehicula
                                    elementum. Morbi consequat lorem nisl. Nunc aliquet mi quis nisl vehicula, vel ornare neque mattis. Aenean sed turpis eget orci lobortis tincidunt. Integer mattis augue vitae erat hendrerit hendrerit. Suspendisse faucibus varius
                                    justo vitae porttitor.</p>
                                <p>Morbi at lectus eget ipsum auctor tristique. Aliquam vestibulum ultricies risus. Mauris nunc lacus, finibus id felis ac, pharetra mattis diam. Maecenas posuere maximus nibh ut ultricies. Donec non iaculis neque, id imperdiet massa.
                                    Nunc et faucibus elit. Quisque congue justo est, ut bibendum diam dictum eu. Mauris fringilla aliquet dignissim. Cras suscipit lorem sit amet gravida consequat. Integer eleifend accumsan sapien quis aliquam. Cras faucibus lectus
                                    a semper dictum.</p>
                                <p>Mauris tincidunt, libero ac suscipit suscipit, lorem massa commodo nisi, at sollicitudin neque massa et massa. Ut et finibus leo. Integer tristique arcu sed velit accumsan gravida. Maecenas iaculis ex vitae vehicula elementum.
                                    Morbi consequat lorem nisl. Nunc aliquet mi quis nisl vehicula, vel ornare neque mattis. Aenean sed turpis eget orci lobortis tincidunt. Integer mattis augue vitae erat hendrerit hendrerit.</p>
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
                                <h1 class="testimonial__name">Graciela Angelina Pérez Ramos</h1>
                                <div class="testimonial__metas">
                                    <span>71 years</span>
                                    <span>Tepic, México</span>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial__extract">
                            Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido...
                        </p>
                        <blockquote class="testimonial__frase">
                            "Omnilife representa un cambio en mi vida, una forma de vida abundante"
                        </blockquote>
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
                                <p>Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido Nunc eu sollicitudin dolor, vitae maximus nisl. Nullam condimentum convallis ante eu
                                    pretium. Mauris tincidunt, libero ac suscipit suscipit, lorem massa commodo nisi, at sollicitudin neque massa et massa. Ut et finibus leo. Integer tristique arcu sed velit accumsan gravida. Maecenas iaculis ex vitae vehicula
                                    elementum. Morbi consequat lorem nisl. Nunc aliquet mi quis nisl vehicula, vel ornare neque mattis. Aenean sed turpis eget orci lobortis tincidunt. Integer mattis augue vitae erat hendrerit hendrerit. Suspendisse faucibus varius
                                    justo vitae porttitor.</p>
                                <p>Morbi at lectus eget ipsum auctor tristique. Aliquam vestibulum ultricies risus. Mauris nunc lacus, finibus id felis ac, pharetra mattis diam. Maecenas posuere maximus nibh ut ultricies. Donec non iaculis neque, id imperdiet massa.
                                    Nunc et faucibus elit. Quisque congue justo est, ut bibendum diam dictum eu. Mauris fringilla aliquet dignissim. Cras suscipit lorem sit amet gravida consequat. Integer eleifend accumsan sapien quis aliquam. Cras faucibus lectus
                                    a semper dictum.</p>
                                <p>Mauris tincidunt, libero ac suscipit suscipit, lorem massa commodo nisi, at sollicitudin neque massa et massa. Ut et finibus leo. Integer tristique arcu sed velit accumsan gravida. Maecenas iaculis ex vitae vehicula elementum.
                                    Morbi consequat lorem nisl. Nunc aliquet mi quis nisl vehicula, vel ornare neque mattis. Aenean sed turpis eget orci lobortis tincidunt. Integer mattis augue vitae erat hendrerit hendrerit.</p>
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
                                <h1 class="testimonial__name">Graciela Angelina Pérez Ramos</h1>
                                <div class="testimonial__metas">
                                    <span>71 years</span>
                                    <span>Tepic, México</span>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial__extract">
                            Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido...
                        </p>
                        <blockquote class="testimonial__frase">"Omnilife representa un cambio en mi vida, una forma de vida abundante"</blockquote>
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
                                <p>Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido Nunc eu sollicitudin dolor, vitae maximus nisl. Nullam condimentum convallis ante eu
                                    pretium. Mauris tincidunt, libero ac suscipit suscipit, lorem massa commodo nisi, at sollicitudin neque massa et massa. Ut et finibus leo. Integer tristique arcu sed velit accumsan gravida. Maecenas iaculis ex vitae vehicula
                                    elementum. Morbi consequat lorem nisl. Nunc aliquet mi quis nisl vehicula, vel ornare neque mattis. Aenean sed turpis eget orci lobortis tincidunt. Integer mattis augue vitae erat hendrerit hendrerit. Suspendisse faucibus varius
                                    justo vitae porttitor.</p>
                                <p>Morbi at lectus eget ipsum auctor tristique. Aliquam vestibulum ultricies risus. Mauris nunc lacus, finibus id felis ac, pharetra mattis diam. Maecenas posuere maximus nibh ut ultricies. Donec non iaculis neque, id imperdiet massa.
                                    Nunc et faucibus elit. Quisque congue justo est, ut bibendum diam dictum eu. Mauris fringilla aliquet dignissim. Cras suscipit lorem sit amet gravida consequat. Integer eleifend accumsan sapien quis aliquam. Cras faucibus lectus
                                    a semper dictum.</p>
                                <p>Mauris tincidunt, libero ac suscipit suscipit, lorem massa commodo nisi, at sollicitudin neque massa et massa. Ut et finibus leo. Integer tristique arcu sed velit accumsan gravida. Maecenas iaculis ex vitae vehicula elementum.
                                    Morbi consequat lorem nisl. Nunc aliquet mi quis nisl vehicula, vel ornare neque mattis. Aenean sed turpis eget orci lobortis tincidunt. Integer mattis augue vitae erat hendrerit hendrerit.</p>
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
                                <h1 class="testimonial__name">Graciela Angelina Pérez Ramos</h1>
                                <div class="testimonial__metas">
                                    <span>71 years</span>
                                    <span>Tepic, México</span>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial__extract">
                            Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido...
                        </p>
                        <blockquote class="testimonial__frase">"Omnilife representa un cambio en mi vida, una forma de vida abundante"</blockquote>
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
                                <p>Mi ideal en Omnilife fue viajar y que mi familia conociera muchas partes del mundo. Hemos ganado bonos y un carrito en aquel tiempo. He seguido Nunc eu sollicitudin dolor, vitae maximus nisl. Nullam condimentum convallis ante eu
                                    pretium. Mauris tincidunt, libero ac suscipit suscipit, lorem massa commodo nisi, at sollicitudin neque massa et massa. Ut et finibus leo. Integer tristique arcu sed velit accumsan gravida. Maecenas iaculis ex vitae vehicula
                                    elementum. Morbi consequat lorem nisl. Nunc aliquet mi quis nisl vehicula, vel ornare neque mattis. Aenean sed turpis eget orci lobortis tincidunt. Integer mattis augue vitae erat hendrerit hendrerit. Suspendisse faucibus varius
                                    justo vitae porttitor.</p>
                                <p>Morbi at lectus eget ipsum auctor tristique. Aliquam vestibulum ultricies risus. Mauris nunc lacus, finibus id felis ac, pharetra mattis diam. Maecenas posuere maximus nibh ut ultricies. Donec non iaculis neque, id imperdiet massa.
                                    Nunc et faucibus elit. Quisque congue justo est, ut bibendum diam dictum eu. Mauris fringilla aliquet dignissim. Cras suscipit lorem sit amet gravida consequat. Integer eleifend accumsan sapien quis aliquam. Cras faucibus lectus
                                    a semper dictum.</p>
                                <p>Mauris tincidunt, libero ac suscipit suscipit, lorem massa commodo nisi, at sollicitudin neque massa et massa. Ut et finibus leo. Integer tristique arcu sed velit accumsan gravida. Maecenas iaculis ex vitae vehicula elementum.
                                    Morbi consequat lorem nisl. Nunc aliquet mi quis nisl vehicula, vel ornare neque mattis. Aenean sed turpis eget orci lobortis tincidunt. Integer mattis augue vitae erat hendrerit hendrerit.</p>
                            </div>
                            <button class="cases__close button small secondary">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col3-4 offset1-4 cases__load">
                <div class="business__main-inner">
                    <a class="cases__load-link" href="#">
                        <svg class="icon" viewBox="0 0 768 768">
                            <path fill="#FFF" d="M237 250.5l147 147 147-147 45 45-192 192-192-192z"></path>
                        </svg>
                        <h3 class="business__title">Cargar más testimonios</h3>
                        <svg class="icon" viewBox="0 0 768 768">
                            <path fill="#FFF" d="M237 250.5l147 147 147-147 45 45-192 192-192-192z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="cases__filter">
                <div class="business__main--search">
                    <div class="datefilter__group search__group">
                        <span class="datefilter__label business-center"></span>
                        <input id="search-input" class="datefilter__search" placeholder="Buscar Historia de Éxito" value="" type="search">
                        <a href="#" id="search-btn" class="icon-btn icon-search" type="button">
                            <img src="{{ asset('themes/omnilife2018/images/search-icon.svg') }}" title="search-icon" alt="search-icon">
                        </a>
                    </div>
                </div>
                <div class="tools__form-group">
                    <span class="cases__filter-label">Filtrar:</span>
                    <div class="select select--stories">
                        <select class="form-control" name="category">
                            <option value="1">Ver todo</option>
                            <option value="2">Libertad financiera</option>
                            <option value="3">Reconocimientos</option>
                            <option value="4">Calidad de vida</option>
                            <option value="5">Bonos y viajes</option>
                            <option value="6">Producto</option>
                            <option value="7">Peso saludable</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Content Body-->
        <!-- bottom banner-->
        <div class="bottom-banner gradient cases__banner" style="background-image: url('{{ asset('themes/omnilife2018/images/'.$brand.'/historias/bottom-banner-exito.jpg') }}');">
            <div class="wrapper bottom-banner__content">
                <h2 class="highlight">Reconocemos el esfuerzo</h2>
                <h2>y éxito de nuestros empresarios</h2>
                <button class="button small" href="#">Conócelos aquí</button>
            </div>
        </div>
        <!-- end bottom banner-->
    </div>
@endsection
