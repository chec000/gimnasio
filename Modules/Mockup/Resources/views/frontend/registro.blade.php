@extends('mockup::layouts.master')

@section('content')
    <!--registro-->
    <div class="register fullsteps">
        <nav class="tabs-static">
            <div class="wrapper">
                <!--registro barra pasos-->
                <ul class="list-nostyle tabs-static__list">
                    <li class="tabs-static__item active"> <span class="desk">1. Registro de Empresario</span><span class="mov">Cuenta</span></li>
                    <li class="tabs-static__item"><span class="desk">2.</span> Info<span class="desk">rmación</span></li>
                    <li class="tabs-static__item"><span class="desk">3. Selección de kit</span><span class="mov">Kit</span></li>
                    <li class="tabs-static__item"><span class="desk">4. Confirmación</span><span class="mov">Confirmar</span></li>
                </ul>
            </div>
        </nav>
        <div class="cart__main">
            <form>
                <!-- registro paso 1-->
                <div class="register__step step step1 fade-in-down active" id="step1">
                    <div class="error__box">
                        <span class="error__single"><img src="{{ asset('themes/omnilife2018/images/icons/warning.svg') }}"> Se produjo uno o varios problemas:</span>
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
                        <div class="form-label mov">Fuiste invitado:</div>
                        <div class="form-label desk">Fuiste invitado por un empresario Omnilife:</div>
                        <div class="col-right">
                            <div class="form-radio inline"><span class="radio-label">Sí</span>
                                <input type="radio" id="invited1" name="invited" value="1">
                                <label class="radio-fake" for="invited1"></label>
                            </div>
                            <div class="form-radio inline"><span class="radio-label">No</span>
                                <input type="radio" id="invited2" name="invited" value="0">
                                <label class="radio-fake" for="invited2"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group hidden" id="invited-yes">
                        <div class="form-label">Ingresa código de empresario:</div>
                        <div class="col-right">
                            <input class="form-control" type="text" id="register-code" name="register-code" placeholder="Ingresar código*">
                            <!--.error-msg Este campo es obligatorio-->
                        </div>
                    </div>
                    <div class="form-group hidden" id="invited-no">
                        <div class="form-label">¿Cómo nos conociste?:</div>
                        <div class="col-right">
                            <div class="select">
                                <select class="form-control" name="country">
                                    <option value="">¿Cómo nos conociste?</option>
                                    <option value="1">Redes Sociales</option>
                                    <option value="2">YouTube</option>
                                    <option value="3">Por familiares y amigos</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">País:</div>
                        <div class="col-right">
                            <div class="select">
                                <select class="form-control" name="country">
                                    <option value="">Selecciona un país</option>
                                    <option value="mx">México</option>
                                    <option value="us">Estados Unidos</option>
                                    <option value="pg">Portugal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Correo:</div>
                        <div class="col-right">
                            <input class="form-control" type="text" id="email" name="email" placeholder="Ingresa correo*">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Confirmar correo:</div>
                        <div class="col-right">
                            <input class="form-control" type="text" id="confirm-email" name="confirm-email" placeholder="Ingresa correo*">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Teléfono:</div>
                        <div class="col-right">
                            <input class="form-control" type="text" id="tel" name="tel" placeholder="Ingresa teléfono*">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Pregunta secreta:</div>
                        <div class="col-right">
                            <div class="select">
                                <select class="form-control" name="secret-question">
                                    <option value="">Selecciona una</option>
                                    <option value="1">¿Cómo se llama tu perro?</option>
                                    <option value="2">¿Cómo se llama tu gato?</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label">Respuesta:</div>
                        <div class="col-right">
                            <input class="form-control" type="text" id="response-question" name="response-question" placeholder="Escribe tu respuesta*">
                        </div>
                    </div>
                    <div class="buttons-container">
                        <button class="button secondary" type="button">REGRESAR</button>
                        <button class="button" type="button" data-to="step2">CONTINUAR</button>
                    </div>
                </div>

                <!-- registro paso 2-->
                <div class="register__step step step2 fade-in-down" id="step2">
                    <div class="form-row">
                        <div class="form-label block">Nombre completo</div>
                        <div class="form-group medium">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Nombre*">
                            <div class="error-msg">Este campo es obligatorio.</div>
                        </div>
                        <div class="form-group medium">
                            <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Apellido paterno*">
                        </div>
                        <div class="form-group medium">
                            <input class="form-control" type="text" id="lastname2" name="lastname2" placeholder="Apellido materno*">
                        </div>
                        <div class="form-group medium">
                            <input class="form-control" type="text" id="sex" name="sex" placeholder="Sexo*">
                        </div>
                    </div>
                    <div class="form-row left">
                        <div class="form-label block">Fecha de nacimiento</div>
                        <div class="form-group select small">
                            <select class="form-control" name="day">
                                <option value="">Día*</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </div>
                        <div class="form-group select small">
                            <select class="form-control" name="month">
                                <option value="">Mes*</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                            </select>
                        </div>
                        <div class="form-group select small">
                            <select class="form-control" name="year">
                                <option value="">Año*</option>
                                <option value="1920">1920</option>
                                <option value="1921">1921</option>
                                <option value="1922">1922</option>
                                <option value="1923">1923</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label block">Identificación</div>
                        <div class="form-group select mediumx">
                            <select class="form-control" name="id_type">
                                <option value="">Tipo de identificación</option>
                            </select>
                        </div>
                        <div class="form-group mediumx">
                            <input class="form-control" type="text" id="id_num" name="id_num" placeholder="Número de identificación*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-label block">Dirección</div>
                        <div class="form-group medium">
                            <input class="form-control" type="text" id="street" name="street" placeholder="Calle*">
                        </div>
                        <div class="form-group medium">
                            <input class="form-control" type="text" id="ext_num" name="ext_num" placeholder="Número ext*">
                        </div>
                        <div class="form-group medium">
                            <input class="form-control" type="text" id="int_num" name="int_num" placeholder="Número int*">
                        </div>
                        <div class="form-group medium">
                            <input class="form-control" type="text" id="colony" name="colony" placeholder="Colonia">
                        </div>
                        <div class="form-group large">
                            <input class="form-control" type="text" id="betweem_streets" name="betweem_streets" placeholder="Entre calles">
                        </div>
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
                    <div class="form-row">
                        <div class="form-group form-checkbox">
                            <input type="checkbox" id="terms1" name="terms1">
                            <label class="checkbox-fake" for="terms1"></label><span class="checkbox-label">Acepto <a href="#terminos-y-condiciones-contrato" data-modal="true">Términos y condiciones de contrato</a>.</span>
                        </div>
                        <div class="form-group form-checkbox">
                            <input type="checkbox" id="terms3" name="terms3">
                            <label class="checkbox-fake" for="terms3"></label><span class="checkbox-label">Acepto <a href="#terminos-y-condiciones-pago">la transferencia de mis datos al país de México, Centro de Operaciones del negocio de OMNILIFE.</a>.</span>
                        </div>
                        <div class="form-group form-checkbox">
                            <input type="checkbox" id="terms2" name="terms2">
                            <label class="checkbox-fake" for="terms2"></label><span class="checkbox-label">Acepto <a href="#terminos-y-condiciones-pago">recibir información relacionada a productos, servicios, promociones y/o eventos de OMNILIFE por medio de mis datos de contacto proporcionados.</a>.</span>
                        </div>
                    </div>
                    <div class="buttons-container">
                        <button class="button secondary" type="button" data-to="step1">REGRESAR</button>
                        <button class="button" type="button" data-to="step3">CONTINUAR</button>
                    </div>
                </div>
                <!-- registro paso 3-->
                <div class="register__step step step3 fade-in-down" id="step3">
                    <div class="wrapper">
                        <div class="cart__register">
                            <div class="cart__left">
                                <div class="cart__main-title">Selecciona tu kit</div>
                                <div class="form-group">
                                    <div class="form-radio inline card">
                                        <input type="radio" id="kit1" name="kit" value="1" checked>
                                        <label class="card__content-wrap" for="kit1">
                                            <figure class="card__img kit">
                                                <img src="{{ asset('themes/omnilife2018/images/9410335.png') }}" alt="">
                                            </figure>
                                            <div class="card__content kit">
                                                <h3 class="card__title">KIT MALETÍN NUTRICIONAL WEB</h3>
                                                <p class="card__price">$499</p>
                                                <label class="radio-fake" for="kit1"></label>
                                                <span class="radio-label">Seleccionar</span>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="form-radio inline card">
                                        <input type="radio" id="kit2" name="kit" value="0">
                                        <label class="card__content-wrap kit" for="kit2">
                                            <figure class="card__img kit">
                                                <img src="{{ asset('themes/omnilife2018/images/9410335.png') }}" alt="">
                                            </figure>
                                            <div class="card__content kit">
                                                <h3 class="card__title">KIT MALETÍN NUTRICIONAL WEB</h3>
                                                <p class="card__price">$499</p>
                                                <label class="radio-fake" for="kit2"></label>
                                                <span class="radio-label">Seleccionar</span>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="form-radio inline card">
                                        <input type="radio" id="kit3" name="kit" value="3">
                                        <label class="card__content-wrap" for="kit3">
                                            <figure class="card__img kit">
                                                <img src="{{ asset('themes/omnilife2018/images/9410335.png') }}" alt="">
                                            </figure>
                                            <div class="card__content kit">
                                                <h3 class="card__title">KIT MALETÍN NUTRICIONAL WEB</h3>
                                                <p class="card__price">$499</p>
                                                <label class="radio-fake" for="kit3"></label>
                                                <span class="radio-label">Seleccionar</span>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="form-radio inline card">
                                        <input type="radio" id="kit4" name="kit" value="4">
                                        <label class="card__content-wrap kit" for="kit4">
                                            <figure class="card__img kit">
                                                <img src="{{ asset('themes/omnilife2018/images/9410335.png') }}" alt="">
                                            </figure>
                                            <div class="card__content kit">
                                                <h3 class="card__title">KIT MALETÍN NUTRICIONAL WEB</h3>
                                                <p class="card__price">$499</p>
                                                <label class="radio-fake" for="kit4"></label>
                                                <span class="radio-label">Seleccionar</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-label">Selecciona una forma de envío</div>
                                    <div class="form-radio card">
                                        <input type="radio" id="shipping_way1" name="shipping_way" value="1" checked>
                                        <label class="card__content-wrap" for="shipping_way1">
                                            <div class="card__content">
                                                <label class="radio-fake" for="shipping_way1"></label>
                                                <span class="radio-label">Enviar por DHL Internacional</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-radio card">
                                        <input type="radio" id="shipping_way2" name="shipping_way" value="0">
                                        <label class="card__content-wrap" for="shipping_way2">
                                            <div class="card__content">
                                                <label class="radio-fake" for="shipping_way2"></label>
                                                <span class="radio-label">Enviar por Estafeta Mexicana</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-label">Selecciona una forma de pago</div>
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
                                                        <div class="form-group mediumx left">
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
                            </div>
                            <div class="cart-preview fade-in-down cart__right cart__right">
                                <div class="cart-preview__head">
                                    <p>Resumen de compra</p>
                                    <button class="icon-btn icon-cross close" type="button"></button>
                                </div>
                                <div class="cart-preview__content">
                                    <ul class="cart-product__list list-nostyle">
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
                                    </ul>
                                    <div class="cart-preview__resume list-nostyle">
                                        <p class="text small">Subtotal (Precio de lista): $520.23</p>
                                        <p class="text small">- Descuento Empresario: $76.90</p>
                                        <p class="text small">Impuestos: $66.27</p>
                                        <p class="text small">Costo de envío: $66.27</p>
                                        <p class="text total">Total: $575.87</p>
                                        <p class="text points">Puntos generados: 600</p>
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
                        </div>
                    </div>

                    <div class="buttons-container">
                        <button class="button secondary" type="button" data-to="step2">REGRESAR</button>
                        <button class="button" type="button" id="make-payment" data-to="step4">REALIZAR PAGO</button>
                    </div>
                </div>
            </form>
            <!-- registro bienvenido-->
            <div class="register__step step step4 register__welcome" id="step4">
                <h3>Revisa tu correo electrónico para finalizar la creación de tu cuenta.</h3>
                <p>Tu número de empresario es: 001-123-RPT</p>
            </div>
        </div>
    </div>
    <!-- modal cargando-->
    <div class="modal modal-loading" id="realizando-pago">
        <div class="modal__inner ps-container">
            <header class="modal__body">
                <p class="text-top">Realizando pago</p>
                <p class="price">$575.87 MXN</p>
                <div class="loading">
                    <figure class="icon-loading"><img src="{{ asset('themes/omnilife2018/images/icons/loading.svg') }}" alt="OMNILIFE - loading" /></figure>
                </div>
                <p class="highlight">Estás un paso más cerca de tu libertad financiera.</p>
                <p>No cerrar o refrescar esta ventana hasta confirmación de compra.</p>
            </header>
        </div>
    </div>
@endsection
