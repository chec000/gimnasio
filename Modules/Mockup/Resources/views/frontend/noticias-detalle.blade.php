@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container">
            <!-- panel nav -->
            @include('distributorarea::sections.sidebarDA')
            <!-- // end panel nav  -->

            <!-- content zone -->
            <div class="ezone__content ezone__details"><!-- history section -->
                <section class="ezone__section">
                    <header class="ezone__header">
                        <div class="ezone__headline">
                            <ul class="ezone__breadcrumbs list-nostyle">
                                <li> @lang('distributorarea::front_lang.news_detail.news')</li>
                                <li> @lang('distributorarea::front_lang.news_detail.article')</li>
                            </ul>
                            <h1 class="ezone__title">El 80% de los 21 millones de Bitcoins que existirán ya han sido minados</h1>
                            <h4 class="ezone__subtitle">Por Martina Covarrubias • 13 enero 2018</h4>
                        </div>
                    </header>
                    <figure class="ezone__jumbotron"><img src="{{ asset('themes/omnilife2018/images/noticias-empresario.jpg') }}"></figure>
                    <div class="ezone__body">
                        <div class="text large">
                            <p>Sed diam ante, mattis vel aliquet eu, finibus vel nibh. In mollis interdum erat, a tincidunt leo vestibulum at. Nunc tempus, magna id gravida tincidunt, tortor orci tempus elit, eu tincidunt risus eros vel lorem. Maecenas sed interdum ex, sit amet ultrices eros. Ut varius massa et lacus blandit aliquam. Ut dictum iaculis quam eu varius. Nunc cursus metus ac erat facilisis, ac tristique nunc sagittis. Mauris eget est elit. Aenean vehicula, elit quis laoreet tempor, ex nibh commodo enim, vel aliquet arcu nulla eget ipsum. Phasellus pellentesque dolor sit amet urna imperdiet mollis.</p>
                        </div>
                        <div class="text">
                            <p>
                                In placerat orci quis ullamcorper volutpat. Nulla blandit eros magna, a dignissim diam eleifend consectetur. Aenean vel aliquet tortor. Phasellus nisi nunc, ullamcorper eu tempor a, ultrices sit amet lorem. Mauris placerat tellus sed nunc varius, nec rhoncus diam vehicula. Maecenas quis augue est. Curabitur consectetur, turpis consequat ornare tristique, diam mi varius sem, ac elementum diam tortor eget mauris. Curabitur vulputate eget est eget volutpat. Suspendisse potenti. Etiam pulvinar orci tempor eros feugiat ullamcorper. Donec fringilla viverra sem.<br> <br> Ut laoreet risus purus, vel facilisis nibh sollicitudin eget. Suspendisse nec quam enim. Morbi et cursus metus. Nam orci ex, viverra at odio at, consequat varius leo. Suspendisse dictum eros ut varius accumsan. Integer et porta ligula, at cursus tellus. Maecenas tempor sollicitudin metus eu tincidunt. Aliquam vel nibh facilisis, efficitur eros ut, dapibus felis. Nunc eu tempor massa. Aenean eleifend elit vel viverra pretium. Ut suscipit justo nec elit posuere rhoncus. Sed congue auctor lorem, sed ultrices augue ultricies vel.
                                <br> <br> Nunc egestas fermentum nisi quis scelerisque. Phasellus blandit ex quis est euismod, non ultricies turpis cursus. Mauris viverra nisi quis feugiat iaculis. Integer sit amet facilisis ante, sit amet malesuada magna. Donec molestie turpis vel augue fringilla luctus. Nam feugiat mollis turpis, et sollicitudin lacus. Nulla facilisi. Nam vel ullamcorper lorem. Nam malesuada, diam suscipit molestie bibendum, lorem ante laoreet massa, sed faucibus quam urna id odio. Fusce velit metus, consectetur in sagittis at, placerat sit amet est.
                                <br> <br> Sed diam ante, mattis vel aliquet eu, finibus vel nibh. In mollis interdum erat, a tincidunt leo vestibulum at. Nunc tempus, magna id gravida tincidunt, tortor orci tempus elit, eu tincidunt risus eros vel lorem. Maecenas sed interdum ex, sit amet ultrices eros. Ut varius massa et lacus blandit aliquam. Ut dictum iaculis quam eu varius. Nunc cursus metus ac erat facilisis, ac tristique nunc sagittis. Mauris eget est elit. Aenean vehicula, elit quis laoreet tempor, ex nibh commodo enim, vel aliquet arcu nulla eget ipsum. Phasellus pellentesque dolor sit amet urna imperdiet mollis.
                                <br> <br> In placerat orci quis ullamcorper volutpat. Nulla blandit eros magna, a dignissim diam eleifend consectetur. Aenean vel aliquet tortor. Phasellus nisi nunc, ullamcorper eu tempor a, ultrices sit amet lorem. Mauris placerat tellus sed nunc varius, nec rhoncus diam vehicula. Maecenas quis augue est. Curabitur consectetur, turpis consequat ornare tristique, diam mi varius sem, ac elementum diam tortor eget mauris. Curabitur vulputate eget est eget volutpat. Suspendisse potenti. Etiam pulvinar orci tempor eros feugiat ullamcorper. Donec fringilla viverra sem.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
            <!-- // end content zone -->

        </div><!-- // zone container -->
    </div>
@endsection
