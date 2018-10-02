@extends('mockup::layouts.master')

@section('content')

    <div class="cart fullsteps">
        <nav class="tabs-static">
            <div class="wrapper">
                <!--registro barra pasos-->
                <ul class="list-nostyle tabs-static__list">
                    <li class="tabs-static__item active"><span class="desk">1.</span> Dirección <span class="desk">de envío</span></li>
                    <li class="tabs-static__item"><span class="desk">2. Forma de pago</span><span class="mov">Pago</span></li>
                    <li class="tabs-static__item"><span class="desk">3.</span> Confirmación</li>
                </ul>
            </div>
        </nav>
        <div class="cart__main">
            <div class="wrapper">
                <div class="cart__content">
                    <div class="cart__left">
                        <div class="cart__main-title">Check out</div>
                        <div class="step step1 fade-in-down active" id="step1">
                            <div class="cart__main-subtitle">Selecciona una dirección de envío</div>
                            <div class="error__box">
                                <span class="error__single">
                                    <img src="{{ asset('themes/omnilife2018/images/icons/warning.svg') }}"> Se produjo uno o varios problemas:
                                </span>
                                <ul>
                                    <li>
                                        Client authentication failed.
                                    </li>
                                    <li>
                                        Database on server is not currently available. Please retry the connection later. If the problem persists, contact customer support, and provide them the session tracing ID
                                    </li>
                                    <li>
                                        System.Data.Entity.Core.EntityCommandExecutionException: An error occurred while executing the command definition.
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <div class="form-radio card stack">
                                    <input type="radio" id="address1" name="address" value="0">
                                    <label class="card__content-wrap" for="address1">
                                        <div class="card__content">
                                            <label class="radio-fake" for="address1"></label>
                                            <span class="radio-label">
                                                Casa<span class="small">Luis B, Valdes #10, Colonia las Américas, Morelia Mich.</span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-radio card stack">
                                    <input type="radio" id="address3" name="address" value="2">
                                    <label class="card__content-wrap" for="address3">
                                        <div class="card__content">
                                            <a class="ezone__info-edit checkout" href="#addressEdit" data-modal="true">
                                                <figure class="icon icon-edit">
                                                    <span class="icon-edit__text">Editar</span>
                                                    <img src="{{ asset('themes/omnilife2018/images/icons/edit.svg') }}" alt="OMNILIFE - editar">
                                                </figure>
                                            </a>
                                            <a class="ezone__info-delete checkout" href="#addressDelete" data-modal="true">
                                                <figure class="icon icon-delete">
                                                    <span class="icon-edit__text">Eliminar</span>
                                                    <img src="{{ asset('themes/omnilife2018/images/icons/bin.svg') }}" alt="OMNILIFE - eliminar">
                                                </figure>
                                            </a>
                                            <label class="radio-fake" for="address3"></label>
                                            <span class="radio-label">
                                                Otra casa<span class="small">Luis B, Valdes #10, Colonia las Américas, Morelia Mich.</span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-radio card stack">
                                    <input type="radio" id="address2" name="address" value="1">
                                    <label class="card__content-wrap" for="address2">
                                        <div class="card__content">
                                            <label class="radio-fake" for="address2"></label>
                                            <span class="radio-label">
                                                Nueva dirección
                                                <span class="small">Ingresa los datos para que te llegue a otra dirección. <br></span>
                                                <span class="small">*Esta dirección podrá cambiar el costo del manejo de envío.</span>
                                            </span>
                                            <div class="card__extra">
                                                <div class="form-row">
                                                    <div class="form-group medium">
                                                        <input class="form-control" type="text" id="name" name="name" placeholder="Nombre*">
                                                    </div>
                                                    <div class="form-group medium">
                                                        <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Apellido paterno*">
                                                    </div>
                                                    <div class="form-group medium">
                                                        <input class="form-control" type="text" id="lastname2" name="lastname2" placeholder="Apellido materno*">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group medium">
                                                        <input class="form-control" type="text" id="street" name="street" placeholder="Calle*">
                                                    </div>
                                                    <div class="form-group medium">
                                                        <input class="form-control" type="text" id="ext_num" name="ext_num" placeholder="Número ext*">
                                                    </div>
                                                    <div class="form-group medium">
                                                        <input class="form-control" type="text" id="int_num" name="int_num" placeholder="Número int*">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group mediumx">
                                                        <input class="form-control" type="text" id="betweem_streets" name="betweem_streets" placeholder="Entre calles">
                                                    </div>
                                                    <div class="form-group mediumx">
                                                        <input class="form-control" type="text" id="colony" name="colony" placeholder="Colonia">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group select medium">
                                                        <select class="form-control" name="state">
                                                            <option value="">Estado</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group medium">
                                                        <input class="form-control" type="text" id="city" name="city" placeholder="Ciudad">
                                                    </div>
                                                    <div class="form-group medium">
                                                        <input class="form-control" type="text" id="zip" name="zip" placeholder="Código Postal">
                                                    </div>
                                                </div>
                                                <div class="form-row left">
                                                    <div class="form-group mediumx">
                                                        <input class="form-control" type="text" id="tel" name="tel" placeholder="Entre calles">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <button class="button small" type="button">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="buttons-container">
                                <button class="button secondary small" type="button">Seguir comprando</button>
                                <button class="button small" type="button" data-to="step2">Continuar a pago</button>
                            </div>
                        </div>
                        <div class="step step2 fade-in-down" id="step2">
                            <div class="cart__main-subtitle">Selecciona una forma de pago</div>
                            <div class="form-group">
                                <div class="form-radio card stack">
                                    <input type="radio" id="payment1" name="payment" value="1">
                                    <label class="card__content-wrap" for="payment1">
                                        <div class="card__content">
                                            <label class="radio-fake" for="payment1"></label>
                                            <span class="radio-label">
                                                OXXO<span class="small">Paga en cualquiera de las tiendas OXXO de toda la república.</span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-radio card stack">
                                    <input type="radio" id="payment2" name="payment" value="0">
                                    <label class="card__content-wrap" for="payment2">
                                        <div class="card__content">
                                            <label class="radio-fake" for="payment2"></label>
                                            <span class="radio-label">
                                                PayPal<span class="small">Paga con tu cuenta PayPal o tu cuenta PayPal asociada a tu tarjeta bancaria.</span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-radio card stack">
                                    <input type="radio" id="payment3" name="payment" value="3">
                                    <label class="card__content-wrap" for="payment3">
                                        <div class="card__content">
                                            <label class="radio-fake" for="payment3"></label>
                                            <span class="radio-label">
                                                Tarjeta bancaria<span class="small">Paga con tu tarjeta bancaria, sólo ingresa tu número de tarjeta y CSC para pagar de forma rápida y fácil.</span>
                                            </span>
                                            <div class="card__extra">
                                                <div class="form-row">
                                                    <div class="form-group mediumx">
                                                        <input class="form-control" type="text" id="cardnum" name="cardnum" placeholder="Número de tarjeta">
                                                    </div>
                                                    <div class="form-group mediumx">
                                                        <input class="form-control" type="text" id="cardname" name="cardname" placeholder="Nombre en la tarjeta">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-label">Fecha de vencimiento</div>
                                                    <div class="form-group left mediumx">
                                                        <div class="form-group select small">
                                                            <select class="form-control" name="cardmonth">
                                                                <option value="">Mes*</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group select small">
                                                            <select class="form-control" name="cardyear">
                                                                <option value="">Año*</option>
                                                                <option value="1920">1920</option>
                                                                <option value="1921">1921</option>
                                                                <option value="1922">1922</option>
                                                                <option value="1923">1923</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mediumx">
                                                        <input class="form-control" type="text" id="cardcsc" name="cardcsc" placeholder="CVV">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="buttons-container">
                                <button class="button secondary small" type="button">Seguir comprando</button>
                                <button class="button small" type="button" data-to="step3">Finalizar Compra</button>
                            </div>
                        </div>
                    </div>
                    <div class="cart-preview fade-in-down cart__right">
                        <div class="cart-preview__head">
                            <p>Resumen de compra</p>
                            <button class="icon-btn icon-cross close" type="button"></button>
                        </div>
                        <div class="cart-preview__content">
                            <ul class="cart-product__list list-nostyle ps ps--active-y">
                                <li class="cart-product__item">
                                    <figure class="cart-product__img">
                                        <img src="{{ asset('themes/omnilife2018/images/omnilife/products/002.jpg') }}" alt="">
                                    </figure>
                                    <div class="cart-product__content">
                                        <div class="cart-product__top">
                                            <div class="cart-product__title">Omnlife probiotic</div>
                                            <div class="cart-product__code">Código: 12312312</div>
                                            <div class="bin">
                                                <figure class="icon-bin">
                                                    <img src="{{ asset('themes/omnilife2018/images/icons/bin.svg') }}" alt="OMNILIFE - eliminar">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="cart-product__bottom">
                                            <div class="form-group numeric">
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
                                            <div class="cart-product__nums">
                                                <div class="cart-product__pts">00 pts</div>
                                                <div class="cart-product__price">x $0.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-product__item">
                                    <figure class="cart-product__img">
                                        <img src="{{ asset('themes/omnilife2018/images/omnilife/products/002.jpg') }}" alt="">
                                    </figure>
                                    <div class="cart-product__content">
                                        <div class="cart-product__top">
                                            <div class="cart-product__title">Omnlife probiotic</div>
                                            <div class="cart-product__code">Código: 12312312</div>
                                            <div class="bin">
                                                <figure class="icon-bin">
                                                    <img src="{{ asset('themes/omnilife2018/images/icons/bin.svg') }}" alt="OMNILIFE - eliminar">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="cart-product__bottom">
                                            <div class="form-group numeric">
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
                                            <div class="cart-product__nums">
                                                <div class="cart-product__pts">00 pts</div>
                                                <div class="cart-product__price">x $0.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-product__item">
                                    <figure class="cart-product__img">
                                        <img src="{{ asset('themes/omnilife2018/images/omnilife/products/002.jpg') }}" alt="">
                                    </figure>
                                    <div class="cart-product__content">
                                        <div class="cart-product__top">
                                            <div class="cart-product__title">Omnlife probiotic</div>
                                            <div class="cart-product__code">Código: 12312312</div>
                                            <div class="bin">
                                                <figure class="icon-bin">
                                                    <img src="{{ asset('themes/omnilife2018/images/icons/bin.svg') }}" alt="OMNILIFE - eliminar">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="cart-product__bottom">
                                            <div class="form-group numeric">
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
                                            <div class="cart-product__nums">
                                                <div class="cart-product__pts">00 pts</div>
                                                <div class="cart-product__price">x $0.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 363px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 348px;"></div>
                                </div>
                            </ul>
                            <div class="cart-preview__resume list-nostyle">
                                <li>Subtotal: $00.00</li>
                                <li>Manejo: $00.00</li>
                                <li>Impuestos :$00.00</li>
                                <li>Puntos: 0000</li>
                                <li class="total">Total: $00.00</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-preview-mov" id="cart-preview-mov">
                    <div class="cart-preview__head">
                        <p>Carrito de compra</p>
                    </div>
                    <div class="cart-preview__resume list-nostyle">
                        <li>Puntos: 0000</li>
                        <li class="total">Total: $00.00</li>
                    </div>
                </div>
                <div class="step step3 cart__confirm" id="step3">
                    <header class="cart__confirm-head">
                        <p>Gracias por tu compra</p>
                        <h5>Cargo exitoso</h5>
                    </header>
                    <div class="cart__confirm-icon"></div>
                    <p>Tu pedido llegará en 10 días hábiles.</p>
                    <div class="cart__confirm-info">
                        <p>Número de pedido: 13400210491</p>
                        <p>Pago con tarjeta **** **** **** 0000</p>
                        <p class="bold">Total de compra: $000.00</p>
                        <p>Enviado a Fco. I. Madero 1020 Col. Chapultepec, Morelia, Michoacán.</p>
                    </div>
                    <ul class="cart__confirm-items list-nostyle mul">
                        <li class="cart__confirm-item">
                            <span class="cart__confirm-item__qty">2</span>
                            <span class="cart__confirm-item__name">Nombre del producto</span>
                            <span class="cart__confirm-item__code">12312312</span>
                            <span class="cart__confirm-item__pts">00 pts</span>
                            <span class="cart__confirm-item__price">$00.00</span>
                            <span class="cart__confirm-item__price">$00.00</span>
                        </li>
                        <li class="cart__confirm-item">
                            <span class="cart__confirm-item__qty">3</span>
                            <span class="cart__confirm-item__name">Nombre del producto</span>
                            <span class="cart__confirm-item__code">12312312</span>
                            <span class="cart__confirm-item__pts">00 pts</span>
                            <span class="cart__confirm-item__price">$00.00</span>
                            <span class="cart__confirm-item__price">$00.00</span>
                        </li>
                        <li class="cart__confirm-item">
                            <span class="cart__confirm-item__qty">2</span>
                            <span class="cart__confirm-item__name">Nombre del producto</span>
                            <span class="cart__confirm-item__code">12312312</span>
                            <span class="cart__confirm-item__pts">00 pts</span>
                            <span class="cart__confirm-item__price">$00.00</span>
                            <span class="cart__confirm-item__price">$00.00</span>
                        </li>
                        <li class="cart__confirm-item">
                            <span class="cart__confirm-item__qty">1</span>
                            <span class="cart__confirm-item__name">Nombre del producto</span>
                            <span class="cart__confirm-item__code">12312312</span>
                            <span class="cart__confirm-item__pts">00 pts</span>
                            <span class="cart__confirm-item__price">$00.00</span>
                            <span class="cart__confirm-item__price">$00.00</span>
                        </li>
                    </ul>
                    <div class="cart__confirm-banners">
                        <figure class="cart__confirm-banner">
                            <img src="{{ asset('themes/omnilife2018/images/checkout-banner001.jpg') }}" alt="">
                            <figcaption>HISTORIAS DE ÉXITO</figcaption>
                        </figure>
                        <figure class="cart__confirm-banner">
                            <img src="{{ asset('themes/omnilife2018/images/checkout-banner002.jpg') }}" alt="">
                            <figcaption>RALLY 2018</figcaption>
                        </figure>
                    </div>
                    <!-- modal cargando-->
                    <div class="modal modal-loading" id="realizando-pago">
                        <div class="modal__inner ps-container">
                            <header class="modal__body">
                                <p class="text-top">Realizando pago</p>
                                <div class="loading">
                                    <figure class="icon-loading">
                                        <img src="{{ asset('themes/omnilife2018/images/icons/loading.svg') }}" alt="OMNILIFE - loading">
                                    </figure>
                                </div>
                                <p class="highlight">Estás un paso más cerca de tu libertad financiera.</p>
                                <p>No cerrar o refrescar esta ventana hasta confirmación de compra.</p>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
