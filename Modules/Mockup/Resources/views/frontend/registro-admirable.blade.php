@extends('mockup::layouts.master')

@section('content')
    <!--registro-->
    <div class="register fullsteps">
        <nav class="tabs-static">
            <div class="wrapper">
                <!--registro barra pasos-->
                <ul class="list-nostyle tabs-static__list">
                    <li class="tabs-static__item active"> <span class="desk">1. Registro de Cliente</span><span class="mov">Cuenta</span></li>
                    <li class="tabs-static__item"><span class="desk">2.</span> Correo Electrónico<span class="mov">Correo Electrónico</span></li>
                    <li class="tabs-static__item"><span class="desk">3. Activación</span><span class="mov">Activación</span></li>
                </ul>
            </div>
        </nav>
        <div class="register__main">
            <form>
                <!-- registro paso 1-->
                <div class="register__step step step2 fade-in-down active" id="step1">
                    <div class="error__box">
                        <span class="error__single">
                            <img src="{{ asset('themes/omnilife2018/images/icons/warning.svg') }}">
                            Se produjo uno o varios problemas:
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
                        <div class="form-label mov">Fuiste invitado:</div>
                        <div class="form-label desk">Fuiste invitado por un Empresario Omnilife:</div>
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

                    <div class="buttons-container">
                        <button class="button secondary" type="button">REGRESAR</button>
                        <button class="button" type="button" data-to="step2">CONTINUAR</button>
                    </div>
                </div>

                <!-- registro paso 2-->
                <div class="register__step step step2 fade-in-down" id="step2">
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
                    <h3>Revisa tu correo electrónico para continuar el proceso de registro.</h3>
                    <div class="buttons-container">
                        <button class="button secondary" type="button">REENVIAR CORREO</button>
                        <button class="button" type="button" data-to="step3">Continuar</button>
                    </div>
                </div>
                <!-- registro paso 3-->
                <div class="register__step step step2 fade-in-down" id="step3">
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
                        <button class="button" type="button" data-to="step4">Activar</button>
                    </div>
                    <div class="register__banner text-center">
                        <img src="{{ asset('themes/omnilife2018/images/bienvenido-desk.jpg') }}" alt="">
                        <p><strong>Registro completado con éxito, tus datos son los siguientes:</strong></p>
                        <p>Código de cliente: 001-123-RPT</p>
                        <p>Contraseña: xd234$rx-#</p>
                        <p>Pregunta secreta: ¿Cuál es tu escritor favorito?</p>
                    </div>

                    <div class="buttons-container">
                        <button class="button" type="button">CONTINUAR COMPRANDO</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
