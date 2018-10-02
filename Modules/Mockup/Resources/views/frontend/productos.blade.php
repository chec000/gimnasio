@extends('mockup::layouts.master')

@section('content')
    <div class="products-page general">
        <div class="wrapper full-size-mobile">
            <h1 class="products-maintitle">Categorías de <span>Productos</span></h1>
            <div class="products-block">
                <div class="products-desc wrapper">
                    <h1 class="products-desc__title blue">Vive Balanceado</h1>
                    <p class="products-desc__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus tristique metus. Nulla facilisi.</p><a class="button small" href="categoria.html">VER TODOS</a>
                </div>
                <div class="products slider" id="products-slider1">
                    <div class="products__wrap slider__wrap">
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">MIMIS</h3>
                                <figure class="product__image"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/001.jpg') }}" alt="" /></figure>
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
                                <h3 class="product__name">Omnilife FX</h3>
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/002.jpg') }}" alt="" />
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
                                <h3 class="product__name">Balasamo aftershave</h3>
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/003.jpg') }}" alt="" />
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
            <div class="products-block">
                <div class="products-desc wrapper">
                    <h1 class="products-desc__title purple">Vive Activo</h1>
                    <p class="products-desc__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus tristique metus. Nulla facilisi.</p><a class="button small" href="categoria.html">VER TODOS</a>
                </div>
                <div class="products slider" id="products-slider2">
                    <div class="products__wrap slider__wrap">
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Omniplus</h3>
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/004.jpg') }}" alt="" />
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
                                <h3 class="product__name">Omniplus Supreme</h3>
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/005.jpg') }}" alt="" />
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
                                <h3 class="product__name">Magnus Supreme</h3>
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/006.jpg') }}" alt="" />
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
            <div class="products-block">
                <div class="products-desc wrapper">
                    <h1 class="products-desc__title green">Vive Fortalecido</h1>
                    <p class="products-desc__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus tristique metus. Nulla facilisi.</p><a class="button small" href="categoria.html">VER TODOS</a>
                </div>
                <div class="products slider" id="products-slider3">
                    <div class="products__wrap slider__wrap">
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Powermaker Supreme</h3>
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/007.jpg') }}" alt="" />
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
                                <h3 class="product__name">Pump Supreme</h3>
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/008.jpg') }}" alt="" />
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
            <div id="sistema" class="products-block sistem has-dropdown">
                <div id="productsCategory" class="products-desc banner withbg mid wrapper">
                    <h1 class="products-desc__title">Sistemas</h1>
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
                    <p class="products-desc__description">Unc malesuada imperdiet est condimentum ornare. Nam non urna dui. Sed neque enim, mattis ut ligula vel, gravida aliquet diam. </p>
                    <a class="button small" href="categoria.html">VER SISTEMAS</a>
                </div>
                <div class="products slider" id="products-slider4">
                    <div class="products__wrap slider__wrap">
                        <div class="product slider__item banner">
                            <a class="product__link" href="detalle.html">
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/bienvenido_prueba.jpg') }}" alt="" />
                                </figure>
                            </a>
                        </div>
                        <div class="product product-sale banner">
                            <p class="product-sale__text">Este sistema ayudará a tu cuerpo a tener un mejor rendimiento deportivo.</p>
                            <p class="product-sale__price small">Precio por separado: $000.00</p>
                            <p class="product-sale__price">Precio sistema: $000.00</p>
                            <button class="button small" type="button">COMPRAR SISTEMA</button>
                            <p class="disclaimer theme--purple">* Los precios mostrados por cada producto son sugeridos y no incluyen un estimado de impuestos y cargos adicionales. Los precios pueden variar según tu ubicación</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
