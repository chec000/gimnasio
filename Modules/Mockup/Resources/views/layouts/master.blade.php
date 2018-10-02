<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>OMNILIFE - GENTE QUE CUIDA A LA GENTE</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600" rel="stylesheet">
    <link href="{{ asset('themes/omnilife2018/css/master.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('themes/omnilife2018/css/survey.css') }}">
    @if ($brand == 'nfuerza')
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <link href="{{ asset('themes/omnilife2018/css/nfuerza.css') }}" rel="stylesheet">
    @endif
    @if ($brand == 'seytu')
      <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
      <link href="{{ asset('themes/omnilife2018/css/seytu.css') }}" rel="stylesheet">
    @endif
    @yield('styles')
  </head>
  <body class="@yield('theme')">
    <div class="loader">
      <div class="loader__content">
        <div class="loader__inner">
          <svg class="loader__circular" viewBox="25 25 50 50">
            <circle class="loader__base" cx="50" cy="50" r="20"></circle>
            <circle class="loader__path" cx="50" cy="50" r="20"></circle>
          </svg>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
    @include('mockup::sections.header')
    @include('mockup::sections.search')
    @include('mockup::sections.login')
    @include('mockup::sections.cart')
    <div class="main-content">
      @yield('content')
    </div>
    @include('mockup::sections.footer')
    <!-- Modals -->
    @yield('modals')
    @include('mockup::sections.geo_modal')
    <script src="{{ asset('themes/omnilife2018/js/jquery.min.js') }}"></script>
    <script src="{{ asset('themes/omnilife2018/js/app.js') }}"></script>
    <script src="{{ asset('themes/omnilife2018/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('themes/omnilife2018/js/index.js') }}"></script>
    @yield('scripts')
  </body>
</html>
