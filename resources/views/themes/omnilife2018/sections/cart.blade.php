@php
    $style = (isset($shoppingCart) && sizeof($shoppingCart) > 0) ? '' : 'display: none';
@endphp

<!-- cart preview-->
<div class="cart-preview aside">
    <div class="cart-preview__head">
        <p>@lang('cms::cart_aside.head')</p>
        <button class="icon-btn icon-cross close" type="button"></button>
        <p id="cart-remove-all" class="remove-all js-empty-cart" style="{{ $style }}"><a onclick="ShoppingCart.remove_all()" href="javascript:;">@lang('cms::cart_aside.remove_all')</a></p>
    </div>

    <div class="cart-preview__content">
        @if (session()->exists('delete-items'))
            <div class="error__box theme__transparent" style="display: inline-block; font-size: 0.85em; padding: 10px; margin: 0 auto;width: 100%;text-align: center;border: 2px solid #fcb219;">
                <ul style="list-style: none; padding: 0px;">
                    <li>{{ session()->get('delete-items') }}</li>
                </ul>
            </div>
        @endif

        <ul id="cart-list" class="cart-product__list list-nostyle  cart-list">
            @if (isset($shoppingCart) && sizeof($shoppingCart) > 0)
                @foreach ($shoppingCart as $item)
                    <li data-id="{{ $item['id'] }}" class="cart-product__item item-id-{{ $item['id'] }}">
                        <figure class="cart-product__img"><img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"></figure>
                        <div class="cart-product__content">
                            <div class="cart-product__top">
                                <div class="cart-product__title">{{ $item['name'] }}</div>
                                <div class="cart-product__code">@lang('cms::cart_aside.code'): {{ $item['sku'] }}</div>
                                <div class="bin">
                                    <figure class="icon-bin"><img src="{{ asset('themes/omnilife2018/images/icons/bin.svg') }}" alt="Eliminar"></figure>
                                </div>
                            </div>
                            <div class="cart-product__bottom">
                                <div class="form-group numeric">
                                <span class="minus s r">
                                    <svg height="14" width="14">
                                        <line x1="0" y1="8" x2="14" y2="8"></line>
                                    </svg>
                                </span>
                                    <input class="form-control" type="numeric" name="qty#{val}" value="{{ $item['quantity'] }}">
                                    <span class="plus s r">
                                    <svg height="14" width="14">
                                        <line x1="0" y1="7" x2="14" y2="7"></line>
                                        <line x1="7" y1="0" x2="7" y2="14"></line>
                                    </svg>
                                </span>
                                </div>
                                <div class="cart-product__nums">
                                    <div class="cart-product__pts">{{ $item['points'] }} @lang('cms::cart_aside.pts')</div>
                                    <div class="cart-product__price">x {{ currency_format($item['price'], $currency) }}</div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @else
                <li id="cart-empty" style="text-align: center; margin-top: 50px;" class="cart-empty">@lang('cms::cart_aside.no_items')</li>
            @endif
        </ul>

        <div id="cart-resume" style="{{ $style }}" class="cart-preview__resume list-nostyle js-empty-cart">
            <li id="subtotal" class="subtotal_checkout">@lang('cms::cart_aside.subtotal'): {{ isset($subtotal) ? $subtotal : '$00.00' }}</li>
            <li id="points" class="points_checkout">@lang('cms::cart_aside.points'): {{ isset($points) ? $points : '0000' }}</li>
            <li id="total" class="total total_checkout">@lang('cms::cart_aside.total'): {{ isset($subtotal) ? $subtotal : '$00.00' }}</li>
        </div>

        <footer class="cart-preview__footer">
            <a id="cart-finish" class="js-empty-cart" style="{{ $style }}" href="{{ route('checkout.index') }}"><button class="button default" type="button">@lang('cms::cart_aside.checkout_button')</button></a>
            <a href="{{session()->get('portal.main.brand.domain')}}/{{ \App\Helpers\TranslatableUrlPrefix::getTranslatablePrefixByIndexAndLang('products', session()->get('portal.main.app_locale')) }}"><button class="button transparent" type="button">@lang('cms::cart_aside.continue_shopping')</button></a>
        </footer>
    </div>
</div>
<!-- end cart preview-->