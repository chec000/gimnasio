{!! PageBuilder::section('head') !!}
<script type='text/javascript' src="{{ asset('cms/jquery/jquery.min.js') }}"></script>

{!! PageBuilder::section('loader') !!}

<div class="cart fullsteps">
    <nav class="tabs-static">
        <div class="wrapper">
            <!--registro barra pasos-->
            <ul class="list-nostyle tabs-static__list">
                <li class="tabs-static__item">{!! trans('shopping::shippingAddress.tag_shipping_address') !!}</li>
                <li class="tabs-static__item">{!! trans('shopping::shippingAddress.tag_way_to_pay') !!}</li>
                <li class="tabs-static__item active">{!! trans('shopping::shippingAddress.tag_confirm') !!}</li>
            </ul>
        </div>
    </nav>
    <div class="cart__main">
        <div class="wrapper">
            @include('shopping::frontend.shopping.includes.'.strtolower(session()->get('portal.main.country_corbiz').'.payment.confirmation.confirmation_'.$type), $order)
        </div>
    </div>
</div>

{!! PageBuilder::section('footer') !!}
