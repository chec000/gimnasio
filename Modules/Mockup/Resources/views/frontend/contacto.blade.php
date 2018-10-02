@extends('mockup::layouts.master')

@section('theme', 'theme--lightgray')

@section('content')
    <!-- Main slider home markup-->
    <div class="mainslider contact" id="main-slider">
        <div class="slider__wrap">
            <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/slide-contact.png') }});">
                <div class="mainslider__gradient theme--lightgray"></div>
                <div class="mainslider__wrap wrapper">
                    <div class="mainslider__content"></div>
                </div>
            </div>
        </div>
        <div class="mainslider__signals signals">
            <p class="signals__note"> <span>Productos y oportunidades</span><span>para mejorar tu vida</span></p><span class="signals__scroll">Scroll</span>
        </div>
    </div>
    <!-- end Main slider home markup-->
    <!-- Content body-->
    <div class="wrapper full-size-mobile business__main">
        <div class="business__main-title col3-4">
            <div class="business__main-inner">
                <h3 class="products-maintitle contact">Comunícate con<span> Nosotros</span></h3>
            </div>
        </div>
        <div class="business__slider slider" id="business-slider">
            <div class="contact--container">
                <div class="contact--description">
                    <article class="contact__info">
                        Nuestro equipo de atención a empresarios y especialistas en nutrición alrededor del mundo están listos para atenderte. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ullam illum laborum maiores beatae consectetur! Nihil neque, natus consectetur facilis ex molestias pariatur, officiis officia repellat rerum praesentium provident cumque!
                    </article>
                    <article class="contact__info">
                        <strong>Centro de Respuesta Empresarios Omnilife (CREO)</strong>: Comunícate cuando Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laudantium ad repudiandae, aliquid voluptatum itaque nisi, vitae magni error molestias saepe quo accusamus illo repellendus quisquam omnis libero commodi. Quos.
                    </article>
                    <article class="contact__info">
                        <strong>Nutrición a tu medida</strong>: Comunícate cuando Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione eaque ad praesentium eligendi pariatur maiores error, dolorum sequi ducimus recusandae, totam ex est animi dolores facere commodi molestiae, accusamus unde.
                    </article>
                </div>
            </div>
            <div class="contact--list">
                <header class="ezone__header">
                    <div class="ezone__headline bordered">
                        <h1 class="ezone__title">Directorio</h1>
                    </div>
                </header>
                <div class="contact--list__creo">
                    <div class="business__slider slider" id="business-slider">
                        <ul class="business__grid list-nostyle slider__wrap">
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Argentina</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 800 10 6664 Fax: 2115831 <br>
                                    <strong>Nutre tu vida:  </strong>800 10 66 64
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Bolivia</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 0800 666 666 <br>
                                    <strong>Nutre tu vida:  </strong>0800 666 666
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Brasil</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> São Paulo: 55 (11) 3556-6464 / de otras ciudades: 0800 704 6664 & WhatsApp: 011 94845-1745 <br>
                                    <strong>Nutre tu vida:  </strong>0800 666 666
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Chile</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 800 -83-5500 Fax: 580-1339 <br>
                                    <strong>Nutre tu vida:  </strong>800 835 500
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Colombia</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 01 800 0915 073 Fax: 212 3297 <br>
                                    <strong>Nutre tu vida:  </strong>01 800 096 88 73
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Costa Rica</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 800 666 45 43 Fax: 2232 9473<br>
                                    <strong>Nutre tu vida:  </strong>800 666 45 43
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Ecuador</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 1800-66 6486 Fax: 225 1588 Ext. 119 <br>
                                    <strong>Nutre tu vida:  </strong>1 800 688 738
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">El Salvador</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 800-7005 Fax: 2239-6603 <br>
                                    <strong>Nutre tu vida:  </strong>800 70 05
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Estados Unidos</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 1 888 326 11 88 Fax 915 594 5197 <br>
                                    <strong>Nutre tu vida:  </strong>1 888 496 1090
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">España</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 900 210 168 Fax: 91 574 7173 <br>
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Guatemala</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 1-801-00-41252 Fax: 2420 7514 <br>
                                    <strong>Nutre tu vida:  </strong>180 100 41 252
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Italia</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 800 978420<br>
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">México</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 01 800 112 66 64 Fax: 01 800 801 0811 <br>
                                    <strong>Nutre tu vida:  </strong>01 800 386 88 73
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Nicaragua</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 1- 800-6664 Fax 50522707085 <br>
                                    <strong>Nutre tu vida:  </strong>1 800 6664
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Panamá</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 800-2985 Fax: 800-2800<br>
                                    <strong>Nutre tu vida:  </strong>800 29 85
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Paraguay</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 0800-11-6664 Fax: 621-393 <br>
                                    <strong>Nutre tu vida:  </strong>0 800 11 66 64
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Perú</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 0800 00 664 Fax: 614 5225<br>
                                    <strong>Nutre tu vida:  </strong>0 800 00 185
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Rep. Dominicana</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 809-200-0445 Fax: 1809- 2214441<br>
                                    <strong>Nutre tu vida:  </strong>809 200-0445
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Rusia</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 8 800 234 81 90 <br>
                                </p>
                            </li>
                            <li class="business__item slider__item contact">
                                <h3 class="business__title business__item-title">Uruguay</h3>
                                <p class="business__item-description contact">
                                    <strong>CREO:</strong> 0800-8521 Fax: 240-04759 <br>
                                    <strong>Nutre tu vida:  </strong>0 800 85 21
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Content Body-->
@endsection
