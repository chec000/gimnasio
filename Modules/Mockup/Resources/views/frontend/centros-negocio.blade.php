@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container"><!-- panel nav -->

            @include('distributorarea::sections.sidebarDA')

            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- grid section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title small">@lang('distributorarea::front_lang.business_center.business_centers')</h1>
                        </div>
                    </header>
                    <div class="datefilter inline">
                        <div class="datefilter__group"><span class="datefilter__label business-center">@lang('distributorarea::front_lang.business_center.country'): </span>
                            <div class="select">
                                <select class="form-control datefilter--country" name="country">
                                    <option value="" disabled="" selected >Selecciona tu país</option>
                                    <option value="AR">Argentina</option>
                                    <option value="BR">Brasil</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="CH">Chile</option>
                                    <option value="CO">Colombia</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="SA">El Salvador</option>
                                    <option value="ES">España</option>
                                    <option value="US">Estados Unidos</option>
                                    <option value="GU">Guatemala</option>
                                    <option value="IT">Italia</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="PA">Panamá</option>
                                    <option value="PR">Paraguay</option>
                                    <option value="PE">Perú</option>
                                    <option value="República Dominicana">República Dominicana</option>
                                    <option value="UR">Uruguay</option>
                                    <option value="RU">Rusia</option>
                                </select>
                            </div>
                        </div>
                        <div class="datefilter__group"><span class="datefilter__label business-center">@lang('distributorarea::front_lang.business_center.city'):</span>
                            <div class="select">
                                <select class="form-control datefilter--city" name="city">
                                    <option value="" disabled="" selected >Selecciona tu ciudad</option>
                                    <option value="AR">Argentina</option>
                                    <option value="BR">Brasil</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="CH">Chile</option>
                                    <option value="CO">Colombia</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="SA">El Salvador</option>
                                    <option value="ES">España</option>
                                    <option value="US">Estados Unidos</option>
                                    <option value="GU">Guatemala</option>
                                    <option value="IT">Italia</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="PA">Panamá</option>
                                    <option value="PR">Paraguay</option>
                                    <option value="PE">Perú</option>
                                    <option value="República Dominicana">República Dominicana</option>
                                    <option value="UR">Uruguay</option>
                                    <option value="RU">Rusia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="ezone__description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales tincidunt lobortis. Aenean sed consectetur enim, non tincidunt ante. Ut imperdiet sollicitudin pulvinar. Nunc eget scelerisque lectus, at consequat dui. Donec venenatis, est malesuada sodales vulputate, lectus ipsum fermentum eros, sed egestas odio lacus in risus. Integer dolor neque, pulvinar sit amet tortor eu, eleifend mollis massa. Sed vestibulum eros sed porttitor aliquam. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                        </p>
                    </div>

                    <div class="ezone__filters">
                        <div class="datefilter__group"><span class="datefilter__label business-center">@lang('distributorarea::front_lang.business_center.trainings')</span>
                            <div class="select">
                                <select class="form-control" name="trainingTime">
                                    <option value="" disabled="" selected >Selecciona tu horario:</option>
                                    <option value="1">Lunes</option>
                                    <option value="2">Martes</option>
                                    <option value="3">Miércoles</option>
                                    <option value="4">Jueves</option>
                                    <option value="5">Viernes</option>
                                    <option value="6">Sábado</option>
                                    <option value="7">Domingo</option>
                                </select>
                            </div>
                        </div>
                        <div class="datefilter__group"><span class="datefilter__label business-center">@lang('distributorarea::front_lang.business_center.opportunities')</span>
                            <div class="select">
                                <select class="form-control" name="oportunityTime">
                                    <option value="" disabled="" selected >Selecciona tu horario:</option>
                                    <option value="1">Lunes</option>
                                    <option value="2">Martes</option>
                                    <option value="3">Miércoles</option>
                                    <option value="4">Jueves</option>
                                    <option value="5">Viernes</option>
                                    <option value="6">Sábado</option>
                                    <option value="7">Domingo</option>
                                </select>
                            </div>
                        </div>
                        <div class="datefilter__group search__group">
                            <span class="datefilter__label business-center"></span>
                            <input class="datefilter__search" type="search" placeholder="@lang('distributorarea::front_lang.buttons.search_business_center')">
                            <button class="icon-btn icon-search" type="button">
                                <img src="{{ asset('themes/omnilife2018/images/icons/search.svg') }}" alt="">
                            </button>
                        </div>
                    </div>

                    <div class="ezone__body">
                        <ul class="ezone__grid-list list-nostyle">
                            <li class="ezone__grid-item business__grid--item">
                                <a href="centro-negocio-detalle.html">
                                    <figure class="ezone__grid-img">
                                        <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                    </figure>
                                    <h3 class="ezone__grid-item__title">SALUD ES VIDA</h3>
                                    <p class="ezone__grid-item__date">Responsable: María Cristina Sánchez</p>
                                    <p class="ezone__grid-item__date">Juntas de Oportunidad: Lun: 17:00 - 19:00 hrs</p>
                                    <p class="ezone__grid-item__date">Entrenamientos: Jue: 17:00 - 19:00 hrs</p>
                                </a>
                            </li>
                            <li class="ezone__grid-item business__grid--item">
                                <a href="centro-negocio-detalle.html">
                                    <figure class="ezone__grid-img">
                                        <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                    </figure>
                                    <h3 class="ezone__grid-item__title">SALUD ES VIDA</h3>
                                    <p class="ezone__grid-item__date">Responsable: María Cristina Sánchez</p>
                                    <p class="ezone__grid-item__date">Juntas de Oportunidad: Lun: 17:00 - 19:00 hrs</p>
                                    <p class="ezone__grid-item__date">Entrenamientos: Jue: 17:00 - 19:00 hrs</p>
                                </a>
                            </li>
                            <li class="ezone__grid-item business__grid--item">
                                <a href="centro-negocio-detalle.html">
                                    <figure class="ezone__grid-img">
                                        <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                    </figure>
                                    <h3 class="ezone__grid-item__title">SALUD ES VIDA</h3>
                                    <p class="ezone__grid-item__date">Responsable: María Cristina Sánchez</p>
                                    <p class="ezone__grid-item__date">Juntas de Oportunidad: Lun: 17:00 - 19:00 hrs</p>
                                    <p class="ezone__grid-item__date">Entrenamientos: Jue: 17:00 - 19:00 hrs</p>
                                </a>
                            </li>
                            <li class="ezone__grid-item business__grid--item">
                                <a href="centro-negocio-detalle.html">
                                    <figure class="ezone__grid-img">
                                        <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                    </figure>
                                    <h3 class="ezone__grid-item__title">SALUD ES VIDA</h3>
                                    <p class="ezone__grid-item__date">Responsable: María Cristina Sánchez</p>
                                    <p class="ezone__grid-item__date">Juntas de Oportunidad: Lun: 17:00 - 19:00 hrs</p>
                                    <p class="ezone__grid-item__date">Entrenamientos: Jue: 17:00 - 19:00 hrs</p>
                                </a>
                            </li>
                            <li class="ezone__grid-item business__grid--item">
                                <a href="centro-negocio-detalle.html">
                                    <figure class="ezone__grid-img">
                                        <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                    </figure>
                                    <h3 class="ezone__grid-item__title">SALUD ES VIDA</h3>
                                    <p class="ezone__grid-item__date">Responsable: María Cristina Sánchez</p>
                                    <p class="ezone__grid-item__date">Juntas de Oportunidad: Lun: 17:00 - 19:00 hrs</p>
                                    <p class="ezone__grid-item__date">Entrenamientos: Jue: 17:00 - 19:00 hrs</p>
                                </a>
                            </li>
                            <li class="ezone__grid-item business__grid--item">
                                <a href="centro-negocio-detalle.html">
                                    <figure class="ezone__grid-img">
                                        <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                    </figure>
                                    <h3 class="ezone__grid-item__title">SALUD ES VIDA</h3>
                                    <p class="ezone__grid-item__date">Responsable: María Cristina Sánchez</p>
                                    <p class="ezone__grid-item__date">Juntas de Oportunidad: Lun: 17:00 - 19:00 hrs</p>
                                    <p class="ezone__grid-item__date">Entrenamientos: Jue: 17:00 - 19:00 hrs</p>
                                </a>
                            </li>
                            <li class="ezone__grid-item business__grid--item">
                                <a href="centro-negocio-detalle.html">
                                    <figure class="ezone__grid-img">
                                        <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                    </figure>
                                    <h3 class="ezone__grid-item__title">SALUD ES VIDA</h3>
                                    <p class="ezone__grid-item__date">Responsable: María Cristina Sánchez</p>
                                    <p class="ezone__grid-item__date">Juntas de Oportunidad: Lun: 17:00 - 19:00 hrs</p>
                                    <p class="ezone__grid-item__date">Entrenamientos: Jue: 17:00 - 19:00 hrs</p>
                                </a>
                            </li>
                            <li class="ezone__grid-item business__grid--item">
                                <a href="centro-negocio-detalle.html">
                                    <figure class="ezone__grid-img">
                                        <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                    </figure>
                                    <h3 class="ezone__grid-item__title">SALUD ES VIDA</h3>
                                    <p class="ezone__grid-item__date">Responsable: María Cristina Sánchez</p>
                                    <p class="ezone__grid-item__date">Juntas de Oportunidad: Lun: 17:00 - 19:00 hrs</p>
                                    <p class="ezone__grid-item__date">Entrenamientos: Jue: 17:00 - 19:00 hrs</p>
                                </a>
                            </li>
                        </ul>
                    </div><!-- // pagination -->
                    <div class="pager"><a class="pager__ctrl prev" href="#"><span class="pager__arrow"></span><span class="pager__label">@lang('distributorarea::front_lang.buttons.previous_page')</span></a>
                        <ul class="pager__list list-nostyle">
                            <li class="pager__item active"><a href="#">1</a></li>
                            <li class="pager__item"> <a href="#">2</a></li>
                            <li class="pager__item"> <a href="#">3</a></li>
                        </ul><a class="pager__ctrl next" href="#"><span class="pager__label">@lang('distributorarea::front_lang.buttons.next_page')</span><span class="pager__arrow"></span></a>
                    </div><!-- // end pagination -->
                </section>
            </div><!-- // end content zone -->
        </div><!-- // zone container -->
    </div>
@endsection
