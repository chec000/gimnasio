@extends('mockup::layouts.master')

@section('content')
    <div class="business">
    <!-- Main slider home markup-->
        <div class="slider mainslider business-slider" id="main-slider">
            <div class="slider__wrap">
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/'.$brand.'/haz-negocio/haznegocio'.$brand.'-1.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">1. Una oportunidad de</span>
                                mejorar tu calidad de vida
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/'.$brand.'/haz-negocio/haznegocio'.$brand.'-2.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">2. Obtener</span>
                                nuevos ingresos
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/'.$brand.'/haz-negocio/haznegocio'.$brand.'-3.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">3. Conocer</span>
                                el mundo
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/'.$brand.'/haz-negocio/haznegocio'.$brand.'-4.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">4. Ayudar a la gente</span>
                                a mejorar su salud
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/'.$brand.'/haz-negocio/haznegocio'.$brand.'-5.jpg') }});">
                <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">5. Tu negocio te lleva</span>
                                a cumplir tus sueños
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainslider__signals signals"><span class="signals__scroll">Scroll</span></div>
        </div>
        <!-- end Main slider home markup-->
        <!-- Content body-->
        <div class="wrapper full-size-mobile business__main">
            <div class="business__main-title col3-4">
                <div class="business__main-inner">
                    <h3 class="products-maintitle">
                        Herramientas para <span>impulsar tu negocio</span>
                    </h3>
                </div>
            </div>
            <div class="business__slider slider" id="business-slider">
                <ul class="business__grid list-nostyle slider__wrap">
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>checkmark</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M32.8,64a3.1,3.1,0,0,1,0-4.2l4.4-4.2a2.6,2.6,0,0,1,2.1-.9,3,3,0,0,1,2.2.9l13,13.2L82.7,40.9a3,3,0,0,1,2.2-.9,2.6,2.6,0,0,1,2,.9l4.3,4.2a3.1,3.1,0,0,1,0,4.2L56.4,83.6a2.8,2.8,0,0,1-4.2,0Z"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Productos de calidad avalados por certificaciones internacionales</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>pencil</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M90.3429405,48.6205113 C91.4377097,47.5396 91.9902156,46.222503 91.9998559,44.6674126 C92.0100986,43.1135273 91.4744631,41.7898025 90.3929492,40.6950334 L83.44475,33.6570595 C82.3638387,32.5622903 81.0461391,32.0103869 79.4922538,32.0001441 C77.9377659,31.9899014 76.6134387,32.5255369 75.5186695,33.6064483 L70.1231507,38.9344855 C69.8104456,39.2435755 69.6531892,39.591829 69.6507792,39.980451 C69.6477666,40.3690729 69.8014078,40.680573 70.1111004,40.9155537 L82.9663534,53.9352933 C83.1971165,54.2479984 83.5068091,54.4052547 83.895431,54.4070622 C84.284053,54.4100748 84.6347165,54.2564336 84.9474216,53.9479461 L90.3429405,48.6205113 Z M46.6051955,71.421474 C46.913683,71.7335766 47.3011,71.8914355 47.7674463,71.8944481 C48.2337927,71.8974606 48.6230171,71.7450244 48.9363248,71.4359344 L66.9997146,53.6008976 C67.3124197,53.2918076 67.4702786,52.9043907 67.4732911,52.4380443 C67.4763037,51.9716979 67.323265,51.5824735 67.0147775,51.2691658 C66.7056875,50.9570632 66.3182705,50.7986019 65.8519242,50.7955893 C65.3855778,50.7925767 64.9963533,50.946218 64.6836482,51.2547055 L46.6196559,69.0903448 C46.3069508,69.3988323 46.1490919,69.7868517 46.1460793,70.2525956 C46.1430668,70.7195444 46.2961055,71.1081664 46.6051955,71.421474 Z M42.3466218,81.1858268 L42.3821702,75.5908756 L38.1868605,75.5637624 L36.7408253,83.0144588 L40.4468931,86.7675227 L47.9150624,85.4166848 L47.9415731,81.2207726 L42.3466218,81.1858268 Z M65.4313689,43.5666183 C65.744074,43.2581308 66.0947376,43.1044895 66.4833595,43.1075021 C66.8719815,43.1099122 67.181674,43.266566 67.4130397,43.5792711 L80.2682927,56.5990106 C80.5773827,56.8339913 80.731024,57.1454914 80.7286139,57.5341134 C80.7262038,57.9227353 80.568345,58.2715913 80.2556399,58.5800789 L49.5243791,88.9239227 L35.2881624,91.397848 C34.3548672,91.5466691 33.5408699,91.2701148 32.845568,90.5663777 C32.1508686,89.8626406 31.8845571,89.0450282 32.0454285,88.1135405 L34.7001081,73.9098596 L65.4313689,43.5666183 Z"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Plataforma de aprendizaje</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>cart</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M48.9,80.8a5.6,5.6,0,1,0,5.6,5.6A5.6,5.6,0,0,0,48.9,80.8ZM32,32v6h6L48.8,60.8,44.6,68a10.7,10.7,0,0,0-.6,3,6,6,0,0,0,6,6H86V71H51.2a.6.6,0,0,1-.6-.6v-.3L53.3,65H75.5a5.5,5.5,0,0,0,5.1-3L91.4,42.5A1.7,1.7,0,0,0,92,41a2.8,2.8,0,0,0-3-3H44.6l-2.7-6ZM78.9,80.8a5.6,5.6,0,1,0,5.6,5.6A5.6,5.6,0,0,0,78.9,80.8Z"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Tienda y registro en línea</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>phone</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M61.7,92.1a4.4,4.4,0,1,0-3-1.3A4.2,4.2,0,0,0,61.7,92.1ZM76.9,77.6l.3-42.2a1.6,1.6,0,0,0-1.6-1.6l-27.1-.2a1.6,1.6,0,0,0-1.6,1.6l-.3,42.2A1.6,1.6,0,0,0,48.2,79l27.1.2a1.6,1.6,0,0,0,1.6-1.6Zm.3-50.4a6.5,6.5,0,0,1,6.5,6.5l-.4,56.3a6.5,6.5,0,0,1-6.5,6.5l-30.3-.2A6.5,6.5,0,0,1,40,89.8l.4-56.3A6.5,6.5,0,0,1,46.9,27Z"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Acceso a una aplicación móvil</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis.</p>
                    </li>
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>arrow</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M72,68.6l6.4,15.9a2,2,0,0,1,0,1.6,2.1,2.1,0,0,1-1.2,1.2l-5.7,2.5a1.7,1.7,0,0,1-1.5,0,2.2,2.2,0,0,1-1.2-1.2L62.7,73.5,52.5,83.9a1.7,1.7,0,0,1-2.2.5,2,2,0,0,1-1.3-2l.3-50.2a1.9,1.9,0,0,1,1.3-1.9,1.9,1.9,0,0,1,2.2.4L85.9,65a2,2,0,0,1,.4,2.3,1.9,1.9,0,0,1-1.9,1.3Z"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Acceso a una página web personalizada</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>money</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M55.8,50.1a5.4,5.4,0,0,0,2.6,4.4,40.5,40.5,0,0,0,6.1,3A61.8,61.8,0,0,1,71,60.6a17,17,0,0,1,5.3,4.6,13.4,13.4,0,0,1,2.2,7.7A16.2,16.2,0,0,1,75,83.4a15.3,15.3,0,0,1-9.5,5.5v6.4a1.7,1.7,0,0,1-.4,1.2,1.4,1.4,0,0,1-1,.5H59.1a1.4,1.4,0,0,1-1-.5,1.7,1.7,0,0,1-.4-1.2V88.8a23,23,0,0,1-6.7-2.4,22,22,0,0,1-5.5-4.2,1.7,1.7,0,0,1-.4-1,1.7,1.7,0,0,1,.3-1.2L49,74.4a1.4,1.4,0,0,1,1-.6,1.2,1.2,0,0,1,1,.3,29.1,29.1,0,0,0,5.2,3.6,13.5,13.5,0,0,0,5.7,1.4,6.8,6.8,0,0,0,4.9-1.8,5.5,5.5,0,0,0,1.5-3.8,5,5,0,0,0-2.3-4,41.5,41.5,0,0,0-6-3q-4.4-1.9-6.6-3.1a17.9,17.9,0,0,1-5.5-5.1,14.5,14.5,0,0,1-2.2-8.1,14.5,14.5,0,0,1,3.3-9.4,15.8,15.8,0,0,1,8.7-5.4V28.6a1.7,1.7,0,0,1,.4-1.2,1.4,1.4,0,0,1,1-.5H64a1.4,1.4,0,0,1,1,.5,1.7,1.7,0,0,1,.4,1.2v6.4a21.6,21.6,0,0,1,6.1,1.8,17.6,17.6,0,0,1,5.1,3.4,2.1,2.1,0,0,1,.5,1,1.7,1.7,0,0,1-.1,1.1l-3,5.9a1.2,1.2,0,0,1-.9.8,1.3,1.3,0,0,1-1.2-.3q-4.9-3.8-9.5-3.8a7.8,7.8,0,0,0-4.9,1.4,4.5,4.5,0,0,0-1.8,3.8"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Simulador de ingresos mensuales</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>suitcase</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M83.5,63.6A1.6,1.6,0,0,0,81.9,62H76.4a1.6,1.6,0,0,0-1.6,1.6v23a1.6,1.6,0,0,0,1.6,1.6h5.5a1.6,1.6,0,0,0,1.6-1.6ZM66,81.1a1.6,1.6,0,0,0-1.6-1.6H58.9a1.6,1.6,0,0,0-1.6,1.6v5.5a1.6,1.6,0,0,0,1.6,1.6h5.5A1.6,1.6,0,0,0,66,86.6Zm0-17.5A1.6,1.6,0,0,0,64.4,62H58.9a1.6,1.6,0,0,0-1.6,1.6v5.5a1.6,1.6,0,0,0,1.6,1.6h5.5A1.6,1.6,0,0,0,66,69.1ZM48.5,81.1a1.6,1.6,0,0,0-1.6-1.6H41.4a1.6,1.6,0,0,0-1.6,1.6v5.5a1.6,1.6,0,0,0,1.6,1.6h5.5a1.6,1.6,0,0,0,1.6-1.6Zm0-17.5A1.6,1.6,0,0,0,46.9,62H41.4a1.6,1.6,0,0,0-1.6,1.6v5.5a1.6,1.6,0,0,0,1.6,1.6h5.5a1.6,1.6,0,0,0,1.6-1.6Zm35-26.2a1.6,1.6,0,0,0-1.6-1.6H41.4a1.6,1.6,0,0,0-1.6,1.6V51.6a1.6,1.6,0,0,0,1.6,1.6H81.9a1.6,1.6,0,0,0,1.6-1.6ZM31,33.6A6.5,6.5,0,0,1,37.6,27H85.7a6.5,6.5,0,0,1,6.6,6.6V90.4A6.5,6.5,0,0,1,85.7,97H37.6A6.5,6.5,0,0,1,31,90.4Z"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Calculadora dinámica</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. Phasellus in velit at turpis pellentesque lobortis ut eu libero.</p>
                    </li>
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>calendar</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M83.6,80a1.6,1.6,0,0,0-1.2-.5H77a1.7,1.7,0,0,0-1.7,1.7v5.5A1.7,1.7,0,0,0,77,88.4h5.4a1.7,1.7,0,0,0,1.7-1.7V81.1A1.6,1.6,0,0,0,83.6,80Zm0-17.5a1.6,1.6,0,0,0-1.2-.5H77a1.7,1.7,0,0,0-1.7,1.7v5.5A1.7,1.7,0,0,0,77,70.9h5.4a1.7,1.7,0,0,0,1.7-1.7V63.6A1.6,1.6,0,0,0,83.6,62.5ZM66.3,80a1.6,1.6,0,0,0-1.2-.5H59.7A1.7,1.7,0,0,0,58,81.2v5.5a1.7,1.7,0,0,0,1.7,1.7h5.4a1.7,1.7,0,0,0,1.7-1.7V81.1A1.6,1.6,0,0,0,66.3,80Zm0-17.5a1.6,1.6,0,0,0-1.2-.5H59.7A1.7,1.7,0,0,0,58,63.7v5.5a1.7,1.7,0,0,0,1.7,1.7h5.4a1.7,1.7,0,0,0,1.7-1.7V63.6A1.6,1.6,0,0,0,66.3,62.5ZM48.9,80a1.6,1.6,0,0,0-1.2-.5H42.3a1.7,1.7,0,0,0-1.7,1.7v5.5a1.7,1.7,0,0,0,1.7,1.7h5.4a1.7,1.7,0,0,0,1.7-1.7V81.1A1.6,1.6,0,0,0,48.9,80Zm0-17.5a1.6,1.6,0,0,0-1.2-.5H42.3a1.7,1.7,0,0,0-1.7,1.7v5.5a1.7,1.7,0,0,0,1.7,1.7h5.4a1.7,1.7,0,0,0,1.7-1.7V63.6A1.6,1.6,0,0,0,48.9,62.5Zm42.3-9.2A1.7,1.7,0,0,1,92.9,55V90.4A6.4,6.4,0,0,1,91,95a6.3,6.3,0,0,1-4.7,2H38.5a6.3,6.3,0,0,1-4.6-1.9A6.4,6.4,0,0,1,32,90.4V54.9a1.7,1.7,0,0,1,1.7-1.7ZM33.6,48.9a1.7,1.7,0,0,1-1.7-1.7V42.3a6.5,6.5,0,0,1,6.5-6.5H45V28.6a1.7,1.7,0,0,1,1.7-1.7h5.4a1.7,1.7,0,0,1,1.7,1.7v7.1H71.1V28.6a1.7,1.7,0,0,1,1.7-1.7h5.4a1.7,1.7,0,0,1,1.7,1.7v7.1h6.5a6.5,6.5,0,0,1,6.5,6.5v4.9a1.7,1.7,0,0,1-1.7,1.7Z"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Eventos nacionales e internacionales</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin eget magna at lobortis. Quisque sed ornare diam. Duis vitae aliquam diam. </p>
                    </li>
                    <li class="business__item slider__item three-columns">
                        <svg class="business__item-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124">
                            <title>calculator</title>
                            <circle class="cls-1" cx="62" cy="62" r="62"></circle>
                            <path class="cls-2" d="M83.5,63.6A1.6,1.6,0,0,0,81.9,62H76.4a1.6,1.6,0,0,0-1.6,1.6v23a1.6,1.6,0,0,0,1.6,1.6h5.5a1.6,1.6,0,0,0,1.6-1.6ZM66,81.1a1.6,1.6,0,0,0-1.6-1.6H58.9a1.6,1.6,0,0,0-1.6,1.6v5.5a1.6,1.6,0,0,0,1.6,1.6h5.5A1.6,1.6,0,0,0,66,86.6Zm0-17.5A1.6,1.6,0,0,0,64.4,62H58.9a1.6,1.6,0,0,0-1.6,1.6v5.5a1.6,1.6,0,0,0,1.6,1.6h5.5A1.6,1.6,0,0,0,66,69.1ZM48.5,81.1a1.6,1.6,0,0,0-1.6-1.6H41.4a1.6,1.6,0,0,0-1.6,1.6v5.5a1.6,1.6,0,0,0,1.6,1.6h5.5a1.6,1.6,0,0,0,1.6-1.6Zm0-17.5A1.6,1.6,0,0,0,46.9,62H41.4a1.6,1.6,0,0,0-1.6,1.6v5.5a1.6,1.6,0,0,0,1.6,1.6h5.5a1.6,1.6,0,0,0,1.6-1.6Zm35-26.2a1.6,1.6,0,0,0-1.6-1.6H41.4a1.6,1.6,0,0,0-1.6,1.6V51.6a1.6,1.6,0,0,0,1.6,1.6H81.9a1.6,1.6,0,0,0,1.6-1.6ZM31,33.6A6.5,6.5,0,0,1,37.6,27H85.7a6.5,6.5,0,0,1,6.6,6.6V90.4A6.5,6.5,0,0,1,85.7,97H37.6A6.5,6.5,0,0,1,31,90.4Z"></path>
                        </svg>
                        <h3 class="business__title business__item-title">Planes de desarrollo personal</h3>
                        <p class="business__item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </li>
                </ul>
            </div>
            <div class="col3-4 offset1-4 desk">
                <div class="business__main-inner"></div>
            </div>
        </div>
        <!-- end Content Body-->
        <!-- bottom banner-->
        <div class="bottom-banner align-left gradient business__banner" style="background-image: url('{{ asset('themes/omnilife2018/images/'.$brand.'/haz-negocio/haznegocio'.$brand.'-banner.jpg') }}');">
            <div class="wrapper bottom-banner__content">
                <h2>Omnilife se trata de ti, de tu vida y de tus sueños</h2>
                <p>Únete como empresario y toma el control.</p>
                <button class="button small" href="#">QUIERO UNIRME</button>
            </div>
        </div>
        <!-- end bottom banner-->
    </div>
@endsection
