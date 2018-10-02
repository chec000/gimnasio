@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container">
            <!-- panel nav -->
            @include('distributorarea::sections.sidebarDA')
            <!-- // end panel nav  -->

            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- grid section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title small">@lang('distributorarea::front_lang.events.events')</h1>
                        </div>
                    </header>
                    <div class="datefilter inline">
                        <div class="datefilter__group"><span class="datefilter__label">@lang('distributorarea::front_lang.events.filter_from')</span>
                            <div class="select select--news has-icon select">
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
                            <div class="select select--news has-icon select">
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
                            <div class="select select--news has-icon select">
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
                        <div class="datefilter__group"><span class="datefilter__label">@lang('distributorarea::front_lang.events.to') </span>
                            <div class="select select--news has-icon select">
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
                            <div class="select select--news has-icon select">
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
                            <div class="select select--news has-icon select">
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
                    </div>
                    <div class="ezone__body">
                        <ul class="ezone__grid-list list-nostyle">
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test008.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test008.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test007.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test008.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test002.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                            <li class="ezone__grid-item"><a href="eventos-detalle.html">
                                    <figure class="ezone__grid-img"><img src="{{ asset('themes/omnilife2018/images/test003.jpg') }}" alt=""></figure>
                                    <h3 class="ezone__grid-item__title">TÍTULO DEL CONCURSO</h3>
                                    <p class="ezone__grid-item__date">13 de febrero 2018, Ciudad de México</p></a></li>
                        </ul>
                    </div><!-- // pagination -->
                    <div class="pager"><a class="pager__ctrl prev" href="#"><span class="pager__arrow"></span><span class="pager__label">@lang('distributorarea::front_lang.events.previous_page')</span></a>
                        <ul class="pager__list list-nostyle">
                            <li class="pager__item active"><a href="#">1</a></li>
                            <li class="pager__item"> <a href="#">2</a></li>
                            <li class="pager__item"> <a href="#">3</a></li>
                        </ul><a class="pager__ctrl next" href="#"><span class="pager__label">@lang('distributorarea::front_lang.events.next_page')</span><span class="pager__arrow"></span></a>
                    </div><!-- // end pagination -->
                </section>
            </div>
            <!-- // end content zone -->

        </div><!-- // zone container -->
    </div>
@endsection
