@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container">
            <!-- panel nav -->
            @include('distributorarea::sections.sidebarDA')
            <!-- // end panel nav  -->

            <!-- content zone -->
            <div class="ezone__content"><!-- top tabs docs -->
                <section class="ezone__section tabs">
                    <header class="ezone__header">
                        <div class="tabs__header flex-start ps-container">
                            <div class="ezone__headline tabs__item active"><a href="#docfis">
                                    <h1 class="ezone__title">@lang('distributorarea::front_lang.tools.fiscal_documents')</h1></a></div>
                            <div class="ezone__headline tabs__item"><a href="#docleg">
                                    <h1 class="ezone__title">@lang('distributorarea::front_lang.tools.legal_documents')</h1></a></div>
                            <div class="ezone__headline tabs__item"><a href="#listpre">
                                    <h1 class="ezone__title">@lang('distributorarea::front_lang.tools.prices_lists')</h1></a></div>
                        </div>
                    </header>
                    <div class="ezone__body"><!-- Fiscales tab -->
                        <div class="tabs__pane active" id="docfis">
                            <div class="tools__area switcher-zone active" data-switcher-id="docfis-ctrls">
                                <div class="tools__inner">
                                    <button class="button medium switcher-ctrl" type="button" data-switcher-to="docfis-download" data-switcher-from="docfis-ctrls">
                                        @lang('distributorarea::front_lang.buttons.download_account_statement')</button>
                                    <button class="button medium switcher-ctrl" type="button" data-switcher-to="docfis-download" data-switcher-from="docfis-ctrls">
                                        @lang('distributorarea::front_lang.buttons.retention_orders')</button>
                                </div>
                            </div>
                            <div class="tools__area tools__download switcher-zone" data-switcher-id="docfis-download">
                                <div class="tools__inner"><a class="tools__back switcher-ctrl" href="#" data-switcher-to="docfis-ctrls" data-switcher-from="docfis-download">
                                        <figure class="icon-back"><img src="{{ asset('themes/omnilife2018/images/icons/arrow-back.svg') }}" alt="OMNILIFE - regresar"></figure></a>
                                    <div class="tools__form-group">
                                        <div class="select">
                                            <select class="form-control" name="country">
                                                <option value="">Selecciona el mes</option>
                                                <option value="1">Enero</option>
                                                <option value="2">Febrero</option>
                                                <option value="3">Marzo</option>
                                                <option value="4">Abril</option>
                                                <option value="5">Mayo</option>
                                                <option value="6">Junio</option>
                                                <option value="7">Julio</option>
                                                <option value="8">Agosto</option>
                                                <option value="9">Septiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Noviembre</option>
                                                <option value="12">Diciembre</option>
                                            </select>
                                        </div>
                                        <button class="button medium" type="button">@lang('distributorarea::front_lang.buttons.download')</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- // end Fiscales tab -->
                        <div class="tabs__pane" id="docleg">
                            <div class="tools__area switcher-zone active" data-switcher-id="docleg-ctrls">
                                <div class="tools__inner">
                                    <button class="button medium switcher-ctrl" type="button" data-switcher-to="docleg-download" data-switcher-from="docleg-ctrls">
                                        @lang('distributorarea::front_lang.buttons.download_account_statement')</button>
                                    <button class="button medium switcher-ctrl" type="button" data-switcher-to="docleg-download" data-switcher-from="docleg-ctrls">
                                        @lang('distributorarea::front_lang.buttons.retention_orders')</button>
                                </div>
                            </div>
                            <div class="tools__area tools__download switcher-zone" data-switcher-id="docleg-download">
                                <div class="tools__inner"><a class="tools__back switcher-ctrl" href="#" data-switcher-to="docleg-ctrls" data-switcher-from="docleg-download">
                                        <figure class="icon-back"><img src="{{ asset('themes/omnilife2018/icons/images/map.jpg') }}" alt="OMNILIFE - regresar"></figure></a>
                                    <div class="tools__form-group">
                                        <div class="select">
                                            <select class="form-control" name="country">
                                                <option value="">Selecciona el mes</option>
                                                <option value="1">Enero</option>
                                                <option value="2">Febrero</option>
                                                <option value="3">Marzo</option>
                                                <option value="4">Abril</option>
                                                <option value="5">Mayo</option>
                                                <option value="6">Junio</option>
                                                <option value="7">Julio</option>
                                                <option value="8">Agosto</option>
                                                <option value="9">Septiembre</option>
                                                <option value="10">Octubre</option>
                                                <option value="11">Noviembre</option>
                                                <option value="12">Diciembre</option>
                                            </select>
                                        </div>
                                        <button class="button medium" type="button">@lang('distributorarea::front_lang.buttons.download')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__pane" id="listpre">
                            <div class="tools__area">
                                <div class="tools__inner">
                                    <div class="tools__form-group">
                                        <div class="select">
                                            <select class="form-control" name="country">
                                                <option value="">Selecciona el país</option>
                                                <option value="1">País 1</option>
                                                <option value="2">País 2</option>
                                                <option value="3">País 3</option>
                                                <option value="4">País 4</option>
                                                <option value="5">País 5</option>
                                                <option value="6">País 6</option>
                                                <option value="7">País 7</option>
                                                <option value="8">País 8</option>
                                                <option value="9">País 9</option>
                                                <option value="10">País 10</option>
                                            </select>
                                        </div>
                                        <button class="button medium">@lang('distributorarea::front_lang.buttons.download')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- // end top tabs docs -->

                <div class="ezone__cols section"><!-- Download section -->
                    <section class="ezone__section downloads">
                        <header class="ezone__header">
                            <div class="ezone__headline bordered">
                                <h1 class="ezone__title">@lang('distributorarea::front_lang.tools.downloads')</h1>
                            </div>
                        </header>
                        <div class="ezone__body">
                            <div class="tools__area">
                                <div class="tools__inner">
                                    <div class="tools__form-group">
                                        <div class="select">
                                            <select class="form-control" name="country">
                                                <option value="">Selecciona el país</option>
                                                <option value="1">País 1</option>
                                                <option value="2">País 2</option>
                                                <option value="3">País 3</option>
                                                <option value="4">País 4</option>
                                                <option value="5">País 5</option>
                                                <option value="6">País 6</option>
                                                <option value="7">País 7</option>
                                                <option value="8">País 8</option>
                                                <option value="9">País 9</option>
                                                <option value="10">País 10</option>
                                            </select>
                                        </div>
                                        <button class="button medium">@lang('distributorarea::front_lang.buttons.download')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- End of Download Section -->
                <div class="ezone__cols">
                    <div class="ezone__col"><!-- calc section -->
                        <section class="ezone__section">
                            <header class="ezone__header">
                                <div class="ezone__headline bordered">
                                    <h1 class="ezone__title">@lang('distributorarea::front_lang.tools.calculator')</h1>
                                </div>
                            </header>
                            <div class="ezone__body">
                                <div class="tools__area tools__calc">
                                    <div class="tools__inner">
                                        <div class="tools__form-group column">
                                            <div class="select has-icon">
                                                <figure class="icon icon-back select__icon"><img src="{{ asset('themes/omnilife2018/images/icons/signopesos.svg') }}" alt="OMNILIFE - simbolo peso"></figure>
                                                <select class="form-control" name="coin">
                                                    <option value="">Moneda</option>
                                                    <option value="1">Moneda 1</option>
                                                    <option value="2">Moneda 2</option>
                                                    <option value="3">Moneda 3</option>
                                                </select>
                                            </div>
                                            <div class="datefilter filter--date">
                                                <div class="select select--date has-icon select">
                                                    <select class="form-control" name="coin">
                                                        <option value="">Día</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                                <div class="select select--date has-icon select">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Mes</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                        <option value="">6</option>
                                                        <option value="">7</option>
                                                        <option value="">8</option>
                                                        <option value="">9</option>
                                                        <option value="">10</option>
                                                        <option value="">11</option>
                                                        <option value="">12</option>
                                                    </select>
                                                </div>
                                                <div class="select select--date has-icon select">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Año</option>
                                                        <option value="">2018</option>
                                                        <option value="">2017</option>
                                                        <option value="">2016</option>
                                                        <option value="">2015</option>
                                                        <option value="">2014</option>
                                                        <option value="">2013</option>
                                                        <option value="">2012</option>
                                                        <option value="">2011</option>
                                                        <option value="">2010</option>
                                                        <option value="">2009</option>
                                                        <option value="">2008</option>
                                                        <option value="">2007</option>
                                                        <option value="">2006</option>
                                                        <option value="">2005</option>
                                                        <option value="">2004</option>
                                                        <option value="">2003</option>
                                                        <option value="">2002</option>
                                                        <option value="">2001</option>
                                                        <option value="">2000</option>
                                                        <option value="">1999</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="button">@lang('distributorarea::front_lang.buttons.calculate')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- // end calc section -->
                        <!-- banner section -->
                        <section class="ezone__section banner not-full-width">
                            <figure><img src="{{ asset('themes/omnilife2018/images/omninegocio.jpg') }}" alt="Banner"></figure>
                        </section><!-- // end banner section -->
                    </div>
                    <div class="ezone__col"><!-- simulator section -->
                        <section class="ezone__section simulator">
                            <header class="ezone__header">
                                <div class="ezone__headline bordered">
                                    <h1 class="ezone__title">@lang('distributorarea::front_lang.tools.income_simulator')</h1>
                                </div>
                            </header>
                            <div class="ezone__body">
                                <div class="tools__area">
                                    <div class="simulator__step step step1 fade-in-down active" id="step1">
                                        <div class="simulator__step-inner">
                                            <p class="simulator__intro">@lang('distributorarea::front_lang.tools.label_income_simulator')</p>
                                            <div class="tools__form-group">
                                                <div class="select">
                                                    <select class="form-control" name="country">
                                                        <option value="">Selecciona el país</option>
                                                        <option value="1">País 1</option>
                                                        <option value="2">País 2</option>
                                                        <option value="3">País 3</option>
                                                        <option value="4">País 4</option>
                                                        <option value="5">País 5</option>
                                                        <option value="6">País 6</option>
                                                        <option value="7">País 7</option>
                                                        <option value="8">País 8</option>
                                                        <option value="9">País 9</option>
                                                        <option value="10">País 10</option>
                                                    </select>
                                                </div>
                                                <button class="button medium simulator__start" type="button" data-to="step2">@lang('distributorarea::front_lang.buttons.start')</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simulator__step step step2 fade-in-down" id="step2">
                                        <div class="simulator__step-inner">
                                            <p class="simulator__intro">@lang('distributorarea::front_lang.tools.label_how_much_earn')</p>
                                            <div class="select">
                                                <select class="form-control" name="quantity">
                                                    <option value="">Seleccionar cantidad</option>
                                                    <option value="1">Cantidad 1</option>
                                                    <option value="2">Cantidad 2</option>
                                                    <option value="3">Cantidad 3</option>
                                                    <option value="4">Cantidad 4</option>
                                                    <option value="5">Cantidad 5</option>
                                                    <option value="6">Cantidad 6</option>
                                                    <option value="7">Cantidad 7</option>
                                                    <option value="8">Cantidad 8</option>
                                                    <option value="9">Cantidad 9</option>
                                                    <option value="10">Cantidad 10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simulator__step step step3 fade-in-down" id="step3">
                                        <div class="simulator__step-inner">
                                            <p class="simulator__intro">@lang('distributorarea::front_lang.tools.label_select_products_share')</p>
                                            <div class="simulator__catalog ps-container">
                                                <ul class="simulator__products list-nostyle">
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod1.jpg') }}" alt="Mimis"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="mimis" name="mimis">
                                                            <label class="checkbox-fake" for="mimis"></label><span class="checkbox-label">Mimis</span>
                                                        </div>
                                                    </li>
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod2.jpg') }}" alt="Omnilife FX"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="omnilifefx1" name="omnilifefx1">
                                                            <label class="checkbox-fake" for="omnilifefx1"></label><span class="checkbox-label">Omnilife FX</span>
                                                        </div>
                                                    </li>
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod3.jpg') }}" alt="Omnilife FX"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="omnilifefx2" name="omnilifefx2">
                                                            <label class="checkbox-fake" for="omnilifefx2"></label><span class="checkbox-label">Omnilife FX</span>
                                                        </div>
                                                    </li>
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod1.jpg') }}" alt="Mimis"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="omnilifefx3" name="omnilifefx3">
                                                            <label class="checkbox-fake" for="omnilifefx3"></label><span class="checkbox-label">Mimis</span>
                                                        </div>
                                                    </li>
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod2.jpg') }}" alt="Omnilife FX"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="omnilifefx4" name="omnilifefx4">
                                                            <label class="checkbox-fake" for="omnilifefx4"></label><span class="checkbox-label">Omnilife FX</span>
                                                        </div>
                                                    </li>
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod3.jpg') }}" alt="Omnilife FX"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="omnilifefx5" name="omnilifefx5">
                                                            <label class="checkbox-fake" for="omnilifefx5"></label><span class="checkbox-label">Omnilife FX</span>
                                                        </div>
                                                    </li>
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod1.jpg') }}" alt="Mimis"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="omnilifefx6" name="omnilifefx6">
                                                            <label class="checkbox-fake" for="omnilifefx6"></label><span class="checkbox-label">Mimis</span>
                                                        </div>
                                                    </li>
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod2.jpg') }}" alt="Omnilife FX"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="omnilifefx7" name="omnilifefx7">
                                                            <label class="checkbox-fake" for="omnilifefx7"></label><span class="checkbox-label">Omnilife FX</span>
                                                        </div>
                                                    </li>
                                                    <li class="simulator__product">
                                                        <figure class="simulator__product-fig"><img src="{{ asset('themes/omnilife2018/images/simulador-prod3.jpg') }}" alt="Omnilife FX"></figure>
                                                        <div class="form-group form-checkbox">
                                                            <input type="checkbox" id="omnilifefx8" name="omnilifefx8">
                                                            <label class="checkbox-fake" for="omnilifefx8"></label><span class="checkbox-label">Omnilife FX</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simulator__step step step4 fade-in-down" id="step4">
                                        <div class="simulator__step-inner">
                                            <figure class="simulator__result-icon"><img src="{{ asset('themes/omnilife2018/images/icons/simulator-result.svg') }}" alt="OMNILIFE - resultado simulador"></figure>
                                            <p class="simulator__intro">Si quieres ganar <span class="bold">$5,000.00 al mes</span> haciendo menudeo, debes vender <span class="bold">9 OMNIPLUS</span> a la semana con un <span class="bold">35% de descuento</span>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simulator__footer">
                                <div class="simulator__footer-inner">
                                    <div class="tabs-static__item hidden"></div>
                                    <div class="simulator__steps">
                                        <div class="tabs-static__item">
                                            1<span class="simulator__step-label">@lang('distributorarea::front_lang.tools.quantity')</span></div>
                                        <div class="tabs-static__item">
                                            2<span class="simulator__step-label">@lang('distributorarea::front_lang.tools.products')</span></div>
                                        <div class="tabs-static__item">
                                            3<span class="simulator__step-label">@lang('distributorarea::front_lang.tools.results')</span></div>
                                    </div>
                                    <button class="button medium simulator__step-ctrl" type="button" data-to="step3">@lang('distributorarea::front_lang.buttons.continue')</button>
                                </div>
                            </div>
                        </section><!-- // end somulator section -->
                        <!-- note -->
                        <section class="ezone__section clean">
                            <p>@lang('distributorarea::front_lang.tools.label_terms')</p>
                        </section><!-- // end note -->
                    </div>
                </div>
            </div>
            <!-- // end content zone -->

        </div><!-- // zone container -->
    </div>
@endsection
