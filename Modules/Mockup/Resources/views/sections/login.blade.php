<section class="login">
  <div class="login__head">
    @if (Auth::check())
      <!-- logged in -->
      <p>@lang('cms::login_aside.logged_head'): {{ Auth::user()->name }}</p>
    @else
      <!-- login -->
      <p>@lang('cms::login_aside.login_head')</p>
    @endif
    <button class="icon-btn icon-cross close" type="button"></button>
  </div>
  <div class="login__content">
    @if (Auth::check())
      <!-- logged in -->
      <div class="login__profile">
        <div class="login__profile-avatar" data-level="BA" >
          <figure class="avatar medium">
            <img src="{{ asset('themes/omnilife2018/images/user-image.png') }}" alt="Perfil">
          </figure>
        </div>
        <p class="login__profile-name">{{ Auth::user()->name }}</p>
        <a href="#" class="button default">@lang('cms::login_aside.view_profile')</a>
        <p class="login__profile-points">@lang('cms::login_aside.profile_points'): 000</p>
      </div>
    @else
      <!-- login -->
      <form>
        <div class="form-group">
          <input class="form-control transparent" type="text" name="code" id="code" placeholder="@lang('cms::login_aside.client_code_placeholder')">
        </div>
        <div class="form-group">
          <input class="form-control transparent" type="password" name="password" id="password" placeholder="@lang('cms::login_aside.password_placeholder')">
        </div>
        <button class="button default" type="submit">@lang('cms::login_aside.login_button')</button><a class="link" href="#">@lang('cms::login_aside.password_forgotten')</a>
      </form>
    @endif
    <div class="login__noaccount">
      @if (Auth::check())
        <!-- logged in -->
        <a href="#" class="button transparent">@lang('cms::login_aside.logout')</a>
      @else
        <!-- login -->
        <p class="text">@lang('cms::login_aside.no_account_text')</p><a class="button transparent" href="#">@lang('cms::login_aside.no_account_button')</a>
      @endif
    </div>
  </div>
</section>
