@extends('mockup::layouts.master')

@section('content')

    <div class="products-page inner category">
        <header class="products-page__h">
            <div class="wrapper">
                <ul class="products-page__tabs list-nostyle">
                    <li class="products-page__tab active">Vive Balanceado</li>
                    <li class="products-page__tab">Vive Activo</li>
                    <li class="products-page__tab">Vive Fortalecido</li>
                    <li class="products-page__tab"><a href="productos.html#sistema">Sistemas</a></li>
                </ul>
            </div>
        </header>
        <div class="wrapper full-size-mobile">
            <div class="principal">
                <div class="principal__desc">
                    <h1 class="principal__title">Promueve un sueño acogedor</h1>
                    <p class="principal__text">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                </div>
                <figure class="principal__fig"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/category.png') }}"></figure>

                <div class="principal__signals">
                    <div class="signals single-color">
                        <p class="signals__note"> <span>Productos y oportunidades</span><span>para mejorar tu vida</span></p><span class="signals__scroll">Scroll</span>
                    </div>
                </div>
            </div>
            <div class="products-block grid has-dropdown">
                <div class="products-desc wrapper">
                    <h1 class="products-desc__title purple">Nutrición a tu medida</h1>
                    <p class="products-desc__description visible">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus tristique metus. Nulla facilisi.</p>
                    <div class="products-filter">
                        <h2 class="products-filter__title">Total: <span>$1500.00</span></h2>
                        <button class="button" type="button">Comprar Sistema</button>
                    </div>
                </div>
                <div class="products">
                    <div class="products__wrap">
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">MIMIS</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}"  alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Omnilife FX</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/002.jpg') }}" alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Balasamo aftershave</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/003.jpg') }}" alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">MIMIS</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Omnilife FX</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/002.jpg') }}" alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Balasamo aftershave</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/003.jpg') }} " alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">MIMIS</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Omnilife FX</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/002.jpg') }}" alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Balasamo aftershave</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/003.jpg') }}" alt="" /></figure>
                                <p class="product__description">Contribuye a mantener un sueño normal y saludable. Favorece la relajación.</p>
                            </a>
                        </div>
                    </div>
                    <div class="pager"><a class="pager__ctrl prev" href="#"><span class="pager__arrow"></span><span class="pager__label">Página anterior</span></a>
                        <ul class="pager__list list-nostyle">
                            <li class="pager__item active"><a href="#">1</a></li>
                            <li class="pager__item"> <a href="#">2</a></li>
                            <li class="pager__item"> <a href="#">3</a></li>
                        </ul><a class="pager__ctrl next" href="#"><span class="pager__label">Página siguiente</span><span class="pager__arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
