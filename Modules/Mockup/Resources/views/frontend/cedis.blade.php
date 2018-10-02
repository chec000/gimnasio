@extends('mockup::layouts.master')

@section('content')
    <div class="ezone">
    <!-- content zone -->
        <div class="wrapper full-size-mobile ezone__container">
            <div class="ezone__content ezone__details">
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title small">{{ trans('cms::cedis.general.title') }}</h1>
                        </div>
                    </header>
                    <div class="datefilter inline">
                        <div class="datefilter__group">
                            <span class="datefilter__label business-center">{{ trans('cms::cedis.general.country') }}: </span>
                            <div class="select">
                                <select class="form-control datefilter--country" name="country">
                                    <option value="" disabled="" selected >{{ trans('cms::cedis.general.country_select') }}</option>
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
                                    <option value="RU">Rusia</option>
                                </select>
                            </div>
                        </div>
                        <div class="datefilter__group"><span class="datefilter__label business-center">{{ trans('cms::cedis.general.city') }}:</span>
                            <div class="select">
                                <select class="form-control datefilter--city" name="city">
                                    <option value="" disabled="" selected >{{ trans('cms::cedis.general.city_select') }}</option>
                                    <option value="AR">Argentina</option>
                                    <option value="BR">Brasil</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="CH">Chile</option>
                                    <option value="CO">Colombia</option>
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
                    <!-- grid section -->
                    <div class="ezone__body">
                        <ul class="ezone__grid-list list-nostyle">
                            @for ($i=0; $i < 8; $i++)
                                <li class="ezone__grid-item business__grid--item">
                                    <a href="cedis-detalle.html">
                                        <figure class="ezone__grid-img">
                                            <img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt="">
                                        </figure>
                                        <h3 class="ezone__grid-item__title theme--purple">SALUD ES VIDA</h3>
                                        <p class="ezone__grid-item__date cedis">Av. Cristóbal Colón 100. Esq. Vasco de Gama. Plaza Bombay locales 105-106. Col. Costa Azul. CP 39850. Acapulco, Guerrero.</p>
                                        <a href="cedis-detalle.html" class="button small button--products cedis">{{ trans('cms::cedis.general.see_cedis') }}</a>
                                    </a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <!-- end grid section -->
                    <!-- pagination -->
                    <div class="pager">
                        <a class="pager__ctrl prev" href="#">
                            <span class="pager__arrow"></span>
                            <span class="pager__label">{{ trans('cms::cedis.general.prev_page') }}</span>
                        </a>
                        <ul class="pager__list list-nostyle">
                            <li class="pager__item active"><a href="#">1</a></li>
                            <li class="pager__item"> <a href="#">2</a></li>
                            <li class="pager__item"> <a href="#">3</a></li>
                        </ul>
                        <a class="pager__ctrl next" href="#">
                            <span class="pager__label">{{ trans('cms::cedis.general.next_page') }}</span>
                            <span class="pager__arrow"></span>
                        </a>
                    </div>
                    <!-- end pagination -->
                </section>
            </div>
        </div>
    <!-- end zone content -->
    </div>
@endsection
