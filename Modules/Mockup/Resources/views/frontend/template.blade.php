@extends('mockup::layouts.master')

@section('content')

    <div class="business">
        <!-- Main slider home markup-->
        <div class="slider mainslider business-slider" id="main-slider">
            <div class="slider__wrap">
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-1.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">1. Una oportunidad de</span>
                                <span>mejorar tu calidad de vida</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-2.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">2. Obtener</span>
                                <span>nuevos ingresos</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-3.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">3. Conocer</span>
                                <span>el mundo</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-4.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">4. Ayudar a la gente</span>
                                <span>a mejorar su salud</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
                <div class="slider__item" style="background-image:url({{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-5.jpg') }});">
                    <div class="mainslider__gradient"></div>
                    <div class="mainslider__wrap wrapper">
                        <div class="mainslider__content">
                            <h1 class="mainslider__title">
                                <span class="highlight">5. Tu negocio te lleva</span>
                                <span>a cumplir tus sueños</span>
                            </h1>
                            <p class="mainslider__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id nisl convallis, efficitur velit id, accumsan quam. Aliquam non lectus eget magna fringilla congue.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainslider__signals signals">
                <span class="signals__scroll">Scroll</span>
            </div>
        </div>
        <!-- end Main slider home markup-->
        <!-- Content body-->
        <div class="wrapper full-size-mobile business__main">
            <div class="business__main-title col3-4">
                <div class="business__main-inner">
                    <h3 class="products-maintitle">This is a <span>title</span></h3>
                </div>
            </div>
            <div class="history--container">
                <div class="history--description">
                    <h2 class="history--title omnilife">Subtitle</h2>
                    <p class="contact--subtitle">
                        LLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac dolor quam. Ut condimentum eget enim facilisis lobortis. Phasellus finibus nunc elit, sed eleifend elit vestibulum at. In eu sodales tortor. Morbi sit amet sollicitudin magna. Maecenas
                        lobortis leo eget diam sagittis tincidunt. Vivamus faucibus eros a purus ultrices fermentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec accumsan leo nunc, id dictum nisi consequat at. Vestibulum pulvinar vulputate
                        tellus.
                    </p>
                    <p class="contact--subtitle">
                        Maecenas fringilla gravida libero sed finibus. Mauris et ultricies nulla. Quisque nisl quam, porttitor elementum nisi ac, convallis viverra justo. Vivamus vitae lacus eget nisl fermentum porta. Curabitur viverra, diam eget vestibulum aliquet, augue enim
                        faucibus lacus, quis iaculis ex arcu vitae lorem. Quisque cursus pulvinar nisl, at imperdiet eros sodales vel. Duis lacinia vitae nisi ut tristique. Aliquam non nulla et velit ullamcorper molestie. Nulla facilisi. In hac habitasse
                        platea dictumst. Nullam a gravida dui. Donec quis sem mauris. Nulla convallis feugiat nulla, at egestas quam facilisis sed.
                    </p>
                    <p class="contact--subtitle">
                        Nam at molestie orci, id mattis elit. Pellentesque aliquet libero accumsan neque cursus aliquet. Donec accumsan, diam vel ultricies tincidunt, elit odio rutrum purus, nec luctus urna nunc vel augue. Curabitur ultricies felis vulputate massa tempus, sed
                        accumsan lorem porttitor. Donec sollicitudin in ligula sit amet feugiat. Morbi metus leo, posuere at diam quis, lacinia tincidunt turpis. Donec porttitor venenatis lacus a feugiat. Pellentesque interdum consequat massa, eu bibendum
                        leo fermentum eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla velit turpis, vehicula non euismod ac, dictum in libero.
                    </p>
                    <p class="contact--subtitle">
                        Vestibulum accumsan neque quis sem semper, vel rhoncus velit sagittis. Quisque eget risus felis. Cras elit nisl, dignissim non felis sed, eleifend hendrerit ante. Fusce ut mi ac augue posuere vulputate. Duis aliquam maximus urna, ac luctus ligula mattis
                        sit amet. Etiam sit amet placerat tellus. Vivamus molestie non metus mattis aliquam. Pellentesque eleifend mi et venenatis ullamcorper. Curabitur a nisi sed lacus dictum ornare sit amet et augue. Sed quis ultrices erat. Proin ornare
                        augue sit amet rhoncus cursus. Mauris a elit dolor. Integer sem erat, fermentum nec turpis nec, tincidunt fringilla ante. Aenean ut velit metus. Donec nibh lorem, lacinia vel dignissim quis, tincidunt a est. Donec et eros ac lectus
                        mattis ornare.
                    </p>
                </div>
            </div>
            <div class="products-block home has-dropdown">
                <div class="products-desc myomnibusiness-menu withbg omnilife mid wrapper">
                    <h1 class="myomnibusiness__title">Video/Image Title</h1>
                    <p class="products-desc__description">Integer sem erat, fermentum nec turpis nec, tincidunt fringilla ante. Aenean ut velit metus. Donec nibh lorem, lacinia vel dignissim quis, tincidunt a est. Donec et eros ac lectus mattis ornare.</p>
                </div>
                <div class="products slider" id="home-products">
                    <div class="products__wrap slider__wrap">
                        <div class="product myomnibusiness omnilife slider__item">
                            <iframe width="745" height="421" src="https://www.youtube.com/embed/0JgfBDLF7NM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <p>Video/Image description</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Content Body-->
        <!-- bottom banner-->
        <div class="bottom-banner align-left gradient business__banner" style="background-image: url('{{ asset('themes/omnilife2018/images/omnilife/haz-negocio/haznegocioomnilife-banner.jpg') }}');">
            <div class="wrapper bottom-banner__content">
                <h2>Omnilife se trata de ti, de tu vida y de tus sueños</h2>
                <p>Únete como empresario y toma el control.</p>
                <button class="button small" href="#">QUIERO UNIRME</button>
            </div>
        </div>
        <!-- end bottom banner-->
    </div>

@endsection
