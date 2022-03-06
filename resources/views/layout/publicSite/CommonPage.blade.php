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

@if (app()->getLocale() == 'ar')

        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/rtl.css') }}" >
        <link  rel="stylesheet"  type="text/css" href="{{asset('css/responsive.css') }}" >


    @else
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @endif



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
                <li class="active"><a href='{{URL('publicsite/home')}}'>Home</a></li>
                <li><a href="" rel="m_PageScroll2id">About</a></li>
                <li><a href="" rel="m_PageScroll2id">Curriculum</a></li>
                <li><a href="" rel="m_PageScroll2id">Team</a></li>
                @yield('Blogs')
                <li><a href="" rel="m_PageScroll2id">Instructors</a></li>
                <li><a href='{{URL('courses')}}'>Courses</a></li>
                @yield('news')
                <li><a href='{{URL('products')}}' rel="m_PageScroll2id">Products</a></li>
                <li><a href="" rel="m_PageScroll2id">Connect</a></li>
                <li><a href=""><ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul></a></li>
                 @yield('register')
                <li class="sign-in"><a href="">Sign in</a></li>


            </ul>
        </div>
    </div>

    <div class="m-overlay"></div>
</div>
<!--mobile-menu-->

<div class="main-wrapper">
    <header id="header" @yield('check_profile_header')>
        <div class="container">
            <div class="logo-site">
                <a href='{{URL('/')}}'><img src="{{asset('images/logo.svg')}}" alt="" class="img-responsive"></a>
            </div>
            <ul class="main_menu clearfix">
                <li class="active"><a href='{{URL('publicsite/home')}}'>Home</a></li>
                <li><a href='{{URL('/')}}#about' rel="m_PageScroll2id">About</a></li>
                <li><a href='{{URL('/')}}#curriculum' rel="m_PageScroll2id">Curriculum</a></li>
                <li><a href='{{URL('/')}}#team' rel="m_PageScroll2id">Team</a></li>
                @yield('HBlogs')
                <li><a href='{{URL('/')}}#instructors' rel="m_PageScroll2id">Instructors</a></li>
                <li><a href='{{URL('courses')}}'>Courses</a></li>
                @yield('Hnews')
                <li><a href='{{URL('products')}}' rel="m_PageScroll2id">Products</a></li>
                <li><a href='{{URL('/')}}#contact' rel="m_PageScroll2id">Connect</a></li>
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag-o"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            {{--<!-- inner menu: contains the actual data -->--}}
                            <ul class="menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>

                @yield('Hregister')
                @yield('Hsign_in')
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
                        <li><a href="">Faq's</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->
</div>
<script src="{{URL::asset('js/popper.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/jquery.malihu.PageScroll2id.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/wow.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/script.js')}}" type="text/javascript"></script>

@yield('script')

</body>
</html>
