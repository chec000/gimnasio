<!-- starts header-->
<header class="main-h">
    <div class="wrapper">
        <div class="logo main-h__logo">
            <a href="#">
                <figure class="icon-omnilife">
                    <img src="{{ asset('themes/omnilife2018/images/icons/'.$brand.'.svg') }}" alt="OMNILIFE">
                </figure>
            </a>
        </div>
        <nav class="main-nav">
            <div class="main-nav__head mov">
                @if (Auth::check())
                    <figure class="avatar small">
                        <img src="{{ asset('themes/omnilife2018/images/user-image.png') }}" alt="user-image">
                    </figure>
                    <div class="main-nav__user">
                        <div class="main-nav__name">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="main-nav__level">
                            <span>Nivel bronce</span>
                            <span class="sep">|</span>
                            <span class="points">3,000 pts</span>
                        </div>
                    </div>
                @else
                    <button class="icon-btn">
                        <figure class="icon-user">
                            <img src="{{ asset('themes/omnilife2018/images/icons/user.svg') }}" alt="OMNILIFE - user">
                        </figure>
                    </button>
                    <a class="main-nav__link" id="login-btn-mov" href="#">Registrarse</a>
                    <a class="main-nav__link bold" href="#">Iniciar sesión</a>
                @endif
                <button class="icon-btn icon-cross close"></button>
            </div>
            <div class="main-nav__body">
                <ul class="nav-list top list-nostyle">
                    @if(!empty(session()->get('portal.main.varsMenu.otherBrands')))
                        @foreach(session()->get('portal.main.varsMenu.otherBrands') as $brandMenu)
                            <li class="nav-item"><a data-brandId="{{$brandMenu->id}}" href="{{$brandMenu->domain . '/mockup/index'}}">{{$brandMenu->name}}</a></li>
                        @endforeach
                    @endif
                    <li class="nav-item"><a href="{{ url('mockup/productos') }}">Productos</a></li>
                    <li class="nav-item"><a href="{{ url('mockup/historias-exito') }}">Historias de Éxito</a></li>
                    <li class="nav-item"><a href="{{ url('mockup/haz-negocio') }}">Haz Negocio</a></li>
                </ul>
                <ul class="nav-list list-nostyle">
                    <li class="nav-item dropdown"><span class="dropdown-toggle">País</span>
                        <ul class="dropdown-list list-nostyle">
                            <li class="dropdown-item">
                                <a href="#">
                                    <figure class="flag"><img src="{{ asset('themes/omnilife2018/images/flags/mx.svg') }}" alt=""></figure>México
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="#">
                                    <figure class="flag"><img src="{{ asset('themes/omnilife2018/images/flags/us.svg') }}" alt=""></figure>Estados Unidos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <span class="dropdown-toggle">Lenguaje</span>
                        <ul class="dropdown-list list-nostyle">
                            <li class="dropdown-item"><a href="#">Español</a></li>
                            <li class="dropdown-item"><a href="#">Inglés</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#">Zona de empresarios</a></li>
                    <li class="nav-item desk bold"><a href="#">Registrarse</a></li>
                    <li class="nav-item desk bold "><a href="#" id="login-btn">Iniciar sesión</a></li>
                </ul>
            </div>
        </nav>
        <ul class="main-h__icons list-nostyle">
            <li class="main-h__icon">
                <button class="icon-btn icon-search" id="isearch"></button>
            </li>
            <li class="main-h__icon">
                <button class="icon-btn icon-cart" id="icart"></button>
            </li>
            <li class="main-h__icon">
                @if (Auth::check())
                <button class="icon-btn" id="iuser">
            <figure style="border-radius: 50%;overflow: hidden;">
              <img src="{{ asset('themes/omnilife2018/images/user-image.png') }}" alt="user-image">
            </figure>
          </button>
                @else
                <button class="icon-btn icon-user" id="iuser"></button>
                @endif
            </li>
            <li class="main-h__icon mov">
                <button class="icon-btn" id="imenu">
          <figure class="icon-menu"><img src="{{ asset('themes/omnilife2018/images/icons/menu-red.svg') }}" alt="OMNILIFE - menu">
          </figure>
        </button>
            </li>
        </ul>
    </div>
</header>
<!-- ends header-->
