<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Mariam</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link  rel="stylesheets"  href="{{URL::asset('css/bootstrap.min.css') }}" >
    <link  rel="stylesheet"  href="{{asset('css/material-design-iconic-font.css') }}" >
    <link  rel="stylesheet"  href="{{asset('css/font-awesome.css') }}" >
    <link  rel="stylesheet"  href="{{asset('css/owl.carousel.min.css') }}" >
    <link  rel="stylesheet"  href="{{asset('css/owl.theme.default.min.css') }}">

    <link type="text/css" rel="stylesheet"   href="{{asset('css/animate.css') }}"  />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

@yield('css')

    <!-- Responsive -->
    <link  rel="stylesheet"  type="text/css" href="{{asset('css/responsive.css') }}" >

    @yield('header_js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
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

<div class="main-wrapper">
    <header id="header">
        <div class="container">
            <div class="logo-site">
                <a href="#"><img src="{{asset('images/logo.svg')}}" alt="" class="img-responsive"></a>
            </div>
            <ul class="main_menu clearfix">
               @yield('header')
            </ul>
            <button type="button" class="hamburger is-closed">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
        </div>
    </header>
    <!--header-->

    @yield('content')
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInUp">
                    <div class="social-media">
                        <li class="twitter"><a href=""><i class="zmdi zmdi-twitter"></i></a></li>
                        <li class="facebook"><a href=""><i class="zmdi zmdi-facebook"></i></a></li>
                        <li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
                        <li class="youtube"><a href=""><i class="fa fa-google"></i></a></li>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="ft-menu">
                        <li><a href="faq.html">Faq's</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                        <li><a href="terms.html">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->
</div>
@yield('script')

</body>
</html>
