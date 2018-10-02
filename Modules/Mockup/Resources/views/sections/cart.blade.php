<!-- cart preview-->
<div class="cart-preview aside">
  <div class="cart-preview__head">
    <p>@lang('cms::cart_aside.head')</p>
    <button class="icon-btn icon-cross close" type="button"></button>
    <p class="remove-all"> <a href="#">@lang('cms::cart_aside.remove_all')</a></p>
  </div>
  <div class="cart-preview__content">
    <ul class="cart-product__list list-nostyle">
      <li class="cart-product__item">
        <figure class="cart-product__img"><img src="{{ asset('themes/omnilife2018/images/omnilife/products/002.jpg') }}" alt=""></figure>
        <div class="cart-product__content">
          <div class="cart-product__top">
            <div class="cart-product__title">Omnlife probiotic</div>
            <div class="cart-product__code">Código: 12312312</div>
            <div class="bin">
              <figure class="icon-bin"><img src="{{ asset('themes/omnilife2018/images/icons/bin.svg') }}" alt="OMNILIFE - eliminar"></figure>
            </div>
          </div>
          <div class="cart-product__bottom">
            <div class="form-group numeric"><span class="minus">
                <svg height="14" width="14">
                  <line x1="0" y1="8" x2="14" y2="8"></line>
                </svg></span>
              <input class="form-control" type="numeric" name="qty#{val}" value="1"><span class="plus">
                <svg height="14" width="14">
                  <line x1="0" y1="7" x2="14" y2="7"></line>
                  <line x1="7" y1="0" x2="7" y2="14"></line>
                </svg></span>
            </div>
            <div class="cart-product__nums">
              <div class="cart-product__pts">00 pts</div>
              <div class="cart-product__price">x $0.00</div>
            </div>
          </div>
        </div>
      </li>
    </ul>
    <div class="cart-preview__resume list-nostyle">
      <li>@lang('cms::cart_aside.subtotal'): $00.00</li>
      <li>@lang('cms::cart_aside.management'): $00.00</li>
      <li>@lang('cms::cart_aside.taxes'):$00.00</li>
      <li>@lang('cms::cart_aside.points'): 0000</li>
      <li class="total">@lang('cms::cart_aside.total'): $00.00</li>
    </div>
  </div>
  <footer class="cart-preview__footer">
    <a href="carrito.html"><button class="button default" type="button">@lang('cms::cart_aside.checkout_button')</button></a>
    <a href="detalle.html"><button class="button transparent" type="button">@lang('cms::cart_aside.continue_shopping')</button></a>
  </footer>
</div>
<!-- end cart preview-->
