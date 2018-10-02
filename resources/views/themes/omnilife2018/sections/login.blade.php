<section class="login">
    <div class="login__head">
        @if((Session::get('portal.eo.auth') == true))
        <p>@lang('cms::login_aside.section.head.logged'):</p>
        @else
        <p>@lang('cms::login_aside.section.head.login')</p>
        @endif

        <button id="btnCloseLoginSection" class="icon-btn icon-cross close" type="button"></button>
    </div>

    <div class="login__content">
        @if ((Session::get('portal.eo.auth') == true))
        <div class="login__profile">
            <div class="login__profile-avatar" data-level="{{Session::get('portal.eo.shortTitleName')}}" >
                <figure class="avatar medium">
                    <img class="icon-btn icon-user-logged" style="height: 100%;">
                </figure>
            </div>

            <p class="login__profile-name">{{Session::get('portal.eo.name1')}}</p>
            <a href="#" class="button default">@lang('cms::login_aside.section.content.profile.view')</a>
            <p class="login__profile-points">@lang('cms::login_aside.section.content.profile.points'): 000</p>
        </div>
        @else
        <form id="formLoginSection" name="formLoginSection">
            <div id="error_ws_section" class="error__box theme__transparent hidden" style="font-size: 11pt; text-align: left;">
                <span class="error__single"><img src="{{asset('themes/omnilife2018/images/warning.svg')}}"> @lang('cms::reset_password.errors')</span>
                <ul id="error_ws_ul_section">
                </ul>
            </div>

            <div class="form-group">
                <input class="form-control transparent" type="text" name="code" id="code" placeholder="@lang('cms::login_aside.section.content.placeholder.code')">

                <div id="div_code" class="error-msg"></div>
            </div>

            <div class="form-group">
                <input class="form-control transparent" type="password" name="password" id="password" placeholder="@lang('cms::login_aside.section.content.placeholder.password')">

                <div id="div_password" class="error-msg"></div>
            </div>

            <div class="form-group">
                <input class="form-control transparent" type="hidden" name="url_previous" id="url_previous" value="{{session('url_previous')}}">
                <input class="form-control transparent" type="hidden" name="country_corbiz" id="country_corbiz" value="{{Session::get('portal.main.country_corbiz')}}">
                <input class="form-control transparent" type="hidden" name="language_corbiz" id="language_corbiz" value="{{Session::get('portal.main.language_corbiz')}}">
            </div>

            <button id="btnFormLoginSection" class="button default" type="button">@lang('cms::login_aside.btn.login')</button><a class="link" href="{{route('resetpassword.index')}}">@lang('cms::login_aside.btn.reset')</a>
        </form>
        @endif

        <div class="login__noaccount">
            @if ((Session::get('portal.eo.auth') == true))
            <button id="btnLogoutSection" class="button transparent">@lang('cms::login_aside.btn.logout')</button>
            @else
            <p class="text">@lang('cms::login_aside.section.noaccount.text')</p><a class="button transparent" href="#">@lang('cms::login_aside.section.noaccount.btn')</a>
            @endif
        </div>
    </div>
</section>