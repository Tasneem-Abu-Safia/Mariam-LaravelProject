<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Mariam</title>

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-design-iconic-font.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('css')

    <!-- Responsive -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    @yield('header_js')

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
</head>
<body>
<div class="mobile-menu">
    <div class="menu-mobile">
        <div class="brand-area">
            <a href="#">
                <img src="{{asset('images/logo.svg')}}">
            </a>
        </div>
        <div class="mmenu">
            <ul>
                @yield('mobile-menu')

            </ul>
        </div>
    </div>
    <div class="m-overlay"></div>
</div>
<!--mobile-menu-->




@yield('content')
@yield('script')

</body>
</html>
