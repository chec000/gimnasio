@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container"><!-- panel nav -->

        @include('distributorarea::sections.sidebarDA')

            <!-- content zone -->
            <div class="ezone__content"><!-- user info section -->
                <section class="ezone__section user-info">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title">Gabriela Martínez Pinto</h1>
                        </div>
                    </header>
                    <div class="ezone__body"><!-- profile -->
                        <div class="ezone__profile mobile">
                            <div class="ezone__profile-avatar" data-level="BA">
                                <figure class="avatar smallx"><img src="{{ asset('themes/omnilife2018/images/testimonial.jpg')}}" alt="Perfil"></figure>
                            </div>
                            <div class="ezone__profile-metas">
                                <h1 class="ezone__profile-name">Gabriela Martínez</h1>
                            </div>
                        </div><!-- // end profile -->
                        <div class="ezone__info-user">
                            <div class="ezone__info-count">
                                <span>
                                    @lang('distributorarea::front_lang.distributor.distributor'):
                                    <span>3897477VMF</span>
                                </span>
                                <span>
                                    <span>18 años</span>
                                    <span class="separator">·</span>
                                    <span>México</span>
                                </span>
                                <span>
                                    @lang('distributorarea::front_lang.distributor.level'):
                                    <span>Bronce Premier</span>
                                </span>
                                <span>
                                    @lang('distributorarea::front_lang.distributor.sponsor'):
                                    <span>Uriel Mondragón</span>
                                </span>
                            </div>
                            <form class="ezone__info-personal" action="">
                                <a class="ezone__info-edit" href="#">
                                    <figure class="icon icon-edit">
                                        <span class="icon-edit__text">Editar</span>
                                        <img src="{{ asset('themes/omnilife2018/images/icons/edit.svg') }}" alt="OMNILIFE - editar">
                                    </figure>
                                </a>
                                <div class="ezone__info-inner">
                                    <div class="ezone__info-group address">
                                        <h1 class="ezone__info-title">@lang('distributorarea::front_lang.distributor.address')</h1>
                                        <p class="ezone__info-text ezone__info-static"> <span>Av. de las Cañadas </span><span>#501 </span><span>Cerca de Konexo, a un costado de Coparmex. </span><span>Col. Tres Marías, </span><span>Morelia, </span><span>Michoacán de Ocampo. </span><span>México </span><span>C.P. 58254</span></p>
                                        <div class="form-row ezone__info-ctrl address">
                                            <div class="form-group medium">
                                                <input class="form-control" type="text" id="street" name="street" placeholder="@lang('distributorarea::front_lang.distributor.street')*">
                                            </div>
                                            <div class="form-group medium">
                                                <input class="form-control" type="text" id="ext_num" name="ext_num" placeholder="@lang('distributorarea::front_lang.distributor.number_ext')*">
                                            </div>
                                            <div class="form-group medium">
                                                <input class="form-control" type="text" id="int_num" name="int_num" placeholder="@lang('distributorarea::front_lang.distributor.number_int')*">
                                            </div>
                                            <div class="form-group medium">
                                                <input class="form-control" type="text" id="colony" name="colony" placeholder="@lang('distributorarea::front_lang.distributor.colony')">
                                            </div>
                                            <div class="form-group large">
                                                <input class="form-control" type="text" id="betweem_streets" name="betweem_streets" placeholder="@lang('distributorarea::front_lang.distributor.between_streets')">
                                            </div>
                                            <div class="form-group select medium">
                                                <select class="form-control" name="state">
                                                    <option value="">@lang('distributorarea::front_lang.distributor.state')</option>
                                                </select>
                                            </div>
                                            <div class="form-group medium">
                                                <input class="form-control" type="text" id="city" name="city" placeholder="@lang('distributorarea::front_lang.distributor.city')">
                                            </div>
                                            <div class="form-group medium">
                                                <input class="form-control" type="text" id="zip" name="zip" placeholder="@lang('distributorarea::front_lang.distributor.zip_code')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ezone__info-wrap">
                                        <div class="ezone__info-group">
                                            <h1 class="ezone__info-title">@lang('distributorarea::front_lang.distributor.email')</h1>
                                            <p class="ezone__info-text ezone__info-static">gmartinez@ia.com.mx</p>
                                            <input class="ezone__info-ctrl form-control" type="email" value="gmartinez@ia.com.mx">
                                        </div>
                                        <div class="ezone__info-group">
                                            <h1 class="ezone__info-title">@lang('distributorarea::front_lang.distributor.phone')</h1>
                                            <p class="ezone__info-text ezone__info-static">8883335559</p>
                                            <input class="ezone__info-ctrl form-control" type="tel" value="8883335559">
                                        </div>
                                        <div class="ezone__info-group">
                                            <h1 class="ezone__info-title">@lang('distributorarea::front_lang.distributor.cellphone')</h1>
                                            <p class="ezone__info-text ezone__info-static">Ninguno</p>
                                            <input class="ezone__info-ctrl form-control" type="tel" value="Ninguno">
                                        </div>
                                        <div class="ezone__info-group">
                                            <h1 class="ezone__info-title">@lang('distributorarea::front_lang.distributor.whatsapp')</h1>
                                            <p class="ezone__info-text ezone__info-static">Ninguno</p>
                                            <input class="ezone__info-ctrl form-control" type="tel" value="Ninguno">
                                        </div>
                                    </div>
                                </div>
                                <button class="button medium ezone__info-save" type="submit">@lang('distributorarea::front_lang.buttons.save')</button>
                            </form>
                        </div>
                    </div>
                </section><!-- // end user info section -->
                <!-- invite section -->
                <section class="ezone__section invite">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title">@lang('distributorarea::front_lang.distributor.invite_friend')</h1>
                        </div>
                    </header>
                    <div class="ezone__body">
                        <h1 class="ezone__subtitle">@lang('distributorarea::front_lang.distributor.fill_details_below'):</h1>
                        <div class="form-row">
                            <div class="form-group mediumx">
                                <div class="form-label">@lang('distributorarea::front_lang.distributor.name_guest'):</div>
                                <div class="col-right">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="@lang('distributorarea::front_lang.distributor.name_second_name')">
                                </div>
                            </div>
                            <div class="form-group mediumx">
                                <div class="form-label">@lang('distributorarea::front_lang.distributor.email'):</div>
                                <div class="col-right">
                                    <input class="form-control" type="text" id="email" name="email" placeholder="@lang('distributorarea::front_lang.distributor.enter_email')">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label">@lang('distributorarea::front_lang.distributor.message'):</div>
                                <div class="col-right">
                                    <textarea class="form-control textarea" id="message" name="message" placeholder="@lang('distributorarea::front_lang.distributor.send_msg_guest')"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="buttons-container">
                            <button class="button medium" type="button">@lang('distributorarea::front_lang.buttons.send_invitation')</button>
                        </div>
                    </div>
                </section><!-- // end invite section -->
                <div class="ezone__cols ipad-cols">
                    <div class="ezone__col"><!-- banner section -->
                        <section class="ezone__section banner not-full-width">
                            <figure><img src="{{ asset('themes/omnilife2018/images/omnilife-banner-ezone.jpg') }}" alt="Banner"></figure>
                        </section><!-- // end banner section -->
                    </div>
                    <div class="ezone__col"><!-- banner section -->
                        <section class="ezone__section banner not-full-width">
                            <figure><img src="{{ asset('themes/omnilife2018/images/seytu-banner-ezone.jpg') }}" alt="Banner"></figure>
                        </section><!-- // end banner section -->
                    </div>
                </div>
            </div>
           <!-- // end content zone -->
        </div><!-- // zone container -->
    </div>
@endsection
