{!! PageBuilder::section('head') !!}
<script type='text/javascript' src="{{ asset('cms/jquery/jquery.min.js') }}"></script>

{!! PageBuilder::section('loader') !!}

<div class="cart fullsteps">
    <nav class="tabs-static">
        <div class="wrapper">
            <!--registro barra pasos-->
            <ul class="list-nostyle tabs-static__list">
                <li class="tabs-static__item tabs-static__item_step1">
                    <span class="desk">@lang('shopping::register.tabs.account.desktop')</span>
                    <span class="mov">@lang('shopping::register.tabs.account.mobile')</span>
                </li>
                <li class=" tabs-static__item tabs-static__item_step2">
                    <span class="desk">@lang('shopping::register.tabs.info.desktop')</span>
                    <span class="mov">@lang('shopping::register.tabs.info.mobile')</span>
                </li>
                <li class="tabs-static__item tabs-static__item_step3">
                    <span class="desk">@lang('shopping::register.tabs.kit.desktop')</span>
                    <span class="mov">@lang('shopping::register.tabs.kit.mobile')</span>
                </li>
                <li class="tabs-static__item tabs-static__item active">
                    <span class="desk">@lang('shopping::register.tabs.confirm.desktop')</span>
                    <span class="mov">@lang('shopping::register.tabs.confirm.mobile')</span>
                </li>
            </ul>
        </div>
    </nav>
    <div class="cart__main">
        <div class="wrapper">
            @include('shopping::frontend.register.includes.usa.payment.confirmation.confirmation_'.$type, $order)
        </div>
    </div>
</div>

{!! PageBuilder::section('footer') !!}
