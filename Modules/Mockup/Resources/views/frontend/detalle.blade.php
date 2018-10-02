@extends('mockup::layouts.master')

@section('content')
    <div class="products-page inner detail">
        <header class="products-page__h">
            <div class="wrapper">
                <ul class="products-page__tabs list-nostyle">
                    <li class="products-page__tab active">Vive Balanceado</li>
                    <li class="products-page__tab">Vive Activo</li>
                    <li class="products-page__tab">Vive Fortalecido</li>
                    <li class="products-page__tab">Sistemas</li>
                </ul>
            </div>
        </header><!-- Principal banner -->
        <div class="wrapper">
            <div class="principal">
                <figure class="principal__fig">
                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/category.png') }}">
                </figure>
                <div class="principal__desc">
                    <ul class="list-nostyle principal__breadcrumbs">
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Rendimiento deportivo</a></li>
                    </ul>
                    <h1 class="principal__title">Omnilife Mimis</h1>
                    <h2 class="principal__subtitle">Caja con 30 sobres de 300 g</h2>
                    <p class="principal__price">$00.00 </p>
                    <p class="principal__pts">00 PTS </p>
                    <div class="principal__ctrls">
                        <div class="form-group numeric transparent principal__quantity">
                            <span class="minus">
                                <svg height="14" width="14">
                                    <line x1="0" y1="8" x2="14" y2="8"></line>
                                </svg>
                            </span>
                            <input class="form-control" type="numeric" name="qty#{val}" value="1">
                            <span class="plus">
                                <svg height="14" width="14">
                                    <line x1="0" y1="7" x2="14" y2="7"></line>
                                    <line x1="7" y1="0" x2="7" y2="14"></line>
                                </svg>
                            </span>
                        </div>
                        <button class="button transparent small principal__addtocart">Agregar al carrito</button>
                    </div>
                    <p class="principal__text">
                        Suplemento alimenticio con delicioso sabor manzana-canela, que contiene L-triptófano, |
                        L-teanina y ácido gamma-aminobutí­rico (GABA), los cuales favorecen a la relajación.
                        L-triptofano: Contribuye a mantener un sueño normal y saludable. Favorece la
                        relajación.
                    </p>
                    <p class="disclaimer">* Los precios mostrados por cada producto son sugeridos y no incluyen un estimado de impuestos y cargos adicionales. Los precios pueden variar según tu ubicación</p>
                    <footer class="principal__footer">
                        <div class="principal__social dropdown light hasicons">
                            <span class="dropdown-toggle">
                                <a class="nutritional--btn" href="#nutritional" data-modal="true">
                                    <img class="icon icon-list" src="{{ asset('themes/omnilife2018/images/list2.svg') }}" alt="">
                                    <span>Tabla Nutricional</span>
                                </a>
                                <svg class="icon icon-share" id="icon-share" viewBox="0 0 20 20">
                                    <title>Compartir</title>
                                    <path fill-rule="nonzero" d="M16.575 13.034c-.977 0-1.855.418-2.479 1.086l-7.29-3.63a3.55 3.55 0 0 0 .043-.521 3.56 3.56 0 0 0-.04-.508l7.278-3.59a3.385 3.385 0 0 0 2.488 1.095c1.892 0 3.425-1.56 3.425-3.483C20 1.559 18.467 0 16.575 0c-1.891 0-3.424 1.559-3.424 3.483 0 .173.016.341.04.508L5.913 7.58a3.385 3.385 0 0 0-2.488-1.095C1.533 6.486 0 8.046 0 9.969c0 1.924 1.533 3.483 3.425 3.483.977 0 1.855-.418 2.479-1.085l7.29 3.63c-.026.17-.044.342-.044.52 0 1.924 1.533 3.483 3.425 3.483S20 18.441 20 16.517c0-1.924-1.533-3.483-3.425-3.483z"></path>
                                </svg>Compartir
                                <div class="dropdown-list">
                                    <ul class="list-nostyle">
                                        <li class="dropdown-item">
                                            <figure class="flag"><img src="{{ asset('themes/omnilife2018/images/facebook.svg') }}" alt="Facebook"></figure>Facebook
                                        </li>
                                        <li class="dropdown-item">
                                            <figure class="flag"><img src="{{ asset('themes/omnilife2018/images/twitter.svg') }}" alt="Twitter"></figure>Twitter
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!-- // end Principal banner -->
        <!-- Detail body content -->
        <div class="wrapper full-size-mobile products-body">
            <!-- Info tabs -->
            <div class="tabs expanded products-tabs">
                <div class="tabs__header">
                    <div class="tabs__item active"><a href="#ben">Beneficios</a></div>
                    <div class="tabs__item"><a href="#ing">Ingredientes</a></div>
                    <div class="tabs__item"><a href="#com">Comentarios</a></div>
                </div>
                <div class="tabs__content">
                    <div class="tabs__pane active" id="ben">
                        <h1>Beneficios</h1>
                        <p>Suplemento alimenticio bajo en calorí­as con delicioso sabor a toronja, que contiene extracto de café verde y mezclas de fibra de avena, arroz y manzana. Extracto de café verde: Utiliza las grasas almacenadas para producir energí­a por lo que puede ayudar a disminuir el peso corporal. Puede ayudar a disminuir el azúcar de la sangre.</p>
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul>
                    </div>
                    <div class="tabs__pane" id="ing">
                        <h1>Ingredientes</h1>
                        <p>Suplemento alimenticio bajo en calorí­as con delicioso sabor a toronja, que contiene extracto de café verde y mezclas de fibra de avena, arroz y manzana. Extracto de café verde: Utiliza las grasas almacenadas para producir energí­a por lo que puede ayudar a disminuir el peso corporal. Puede ayudar a disminuir el azúcar de la sangre.</p>
                    </div>
                    <div class="tabs__pane" id="com">
                        <h1>Comentarios</h1>
                        <p>Suplemento alimenticio bajo en calorí­as con delicioso sabor a toronja, que contiene extracto de café verde y mezclas de fibra de avena, arroz y manzana. Extracto de café verde: Utiliza las grasas almacenadas para producir energí­a por lo que puede ayudar a disminuir el peso corporal. Puede ayudar a disminuir el azúcar de la sangre.</p>
                    </div>
                </div>
            </div>
            <!-- // end Info tabs -->
            <!-- Products block complement -->
            <div class="products-block complementary">
                <div class="products slider" id="products-complementary">
                    <div class="products__wrap slider__wrap">
                        <div class="product slider__item">
                            <a class="product__link" href="detalle.html">
                                <h3 class="product__name">Omniplus</h3>
                                <figure class="product__image">
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/004.jpg') }}" alt=""/>
                                </figure>
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
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/005.jpg') }}" alt=""/>
                                </figure>
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
                                    <img src="{{ asset('themes/omnilife2018/images/omnilife/products/006.jpg') }}" alt=""/>
                                </figure>
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
                    </div>
                </div>
                <div class="products-desc wrapper">
                    <h1 class="products-desc__title purple">
                        Productos <span class="small-proportion">complementarios</span>
                    </h1>
                    <p class="products-desc__description visible">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam faucibus tristique metus. Nulla facilisi.</p>
                    <span class="products-desc__price">$960.00</span>
                    <a class="button small visible" href="#">Agregar a carrito</a>
                </div>
            </div>
            <!-- // end Products block complement -->
        </div>
        <!-- // end Detail body content -->
    </div>
@endsection
