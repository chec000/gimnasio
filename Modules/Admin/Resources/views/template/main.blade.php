<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>{!! $site_name." | ".$title !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Omnilife CMS {{ config('cms.site.version') }}">
    <meta name="_token" content="{{ csrf_token() }}">

    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    {!! AssetBuilder::styles() !!}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link href="{!! asset('/themes/omnilife2018/css/complementos.css') !!}" rel="stylesheet">
    @yield('styles')

</head>

<body>

<nav class="navbar navbar-default navbar-fixhed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo" href="{{ route('admin.home') }}">
                <img src="{{ URL::to(config('admin.config.public')) }}/app/img/logo.png" alt="Omnilife CMS"/>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @if (isset($system_menu))
                    {!! $system_menu !!}
                @endif
            </ul>
        </div> 
    </div>
</nav>

@if (!empty($sections_menu))
    <nav class="navbar navbar-inverse subnav navbar-fixedg-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar2" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    {!! $sections_menu !!}
                </ul>
            </div> 
        </div>
    </nav>
@endif

<div class="container{{ empty($sections_menu)?' loginpanel':'' }}" id="content-wrap">
    <div class="row">
        <div class="{{ empty($sections_menu)?'col-sm-6 col-sm-offset-3':'col-sm-12' }}">
            <div id="cmsNotifications">
                <div class="alert" id="cmsDefaultNotification" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            </div>
            {!! $content !!}
            <br /><br />
        </div>
    </div>
</div>

{!! $modals !!}

<script src="{{ URL::to(config('admin.config.public')).'/app/js/router.js' }}"></script>
<script type="text/javascript">
    var dateFormat = '{{ config('cms.date.format.jq_date') }}';
    var timeFormat = '{{ config('cms.date.format.jq_time') }}';
    var ytBrowserKey = '{{ config('settings::key.yt_browser') ?: config('cms.key.yt_browser') }}';
    var adminPublicUrl = '{{ URL::to(config('admin.config.public')).'/' }}';
    router.addRoutes({!! $coaster_routes !!});
    router.setBase('{{ URL::to('/') }}');
</script>

{!! AssetBuilder::scripts() !!}
<script type="text/javascript">
    var _URL_PROJECT = '{{ route('admin.home') }}';
    $.ajaxSetup({
        statusCode: {
            419: function () {
                window.location.href = _URL_PROJECT;
            },
        }
    });
</script>
@yield('scripts')
@if (!empty($alerts))
    <script type="text/javascript">
        $(document).ready(function () {
            @foreach($alerts as $alert)
                cms_alert('{!! $alert->class !!}', '{!! $alert->content !!}');
            @endforeach
        });
    </script>
@endif

</body>

</html>
