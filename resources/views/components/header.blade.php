<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="FundPro - Nonprofit, Crowdfunding & Charity HTML5 Template" />
    <meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
    <meta name="author" content="" />

    <!-- Page Title -->
    <title>{{ config('app.name') }}</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    @if (config('app.locale') == 'ar')
        <!-- CSS | RTL Layout -->
        <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style-main-rtl.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style-main-rtl-extra.css') }}" rel="stylesheet" type="text/css">
        <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    @endif
    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="{{ asset('css/colors/theme-skin-orange.css') }}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('js/jquery-plugin-collection.js') }}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">
    <div id="wrapper" class="clearfix">


        <!-- Header -->
        <header class="header">
            <div class="header-top bg-theme-colored sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget no-border m-0">
                                <ul
                                    class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm flip sm-pull-none sm-text-center mt-sm-15">
                                    <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                                </ul>

                            </div>

                        </div>
                        <div class="btn-group mb-1">
                            <button type="button" class="btn btn-light btn-sm dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (App::getLocale() == 'ar')
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <img src="{{ URL::asset('assets/img/flags/EG.png') }}" alt="">
                                @else
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <img src="{{ URL::asset('assets/img/flags/US.png') }}" alt="">
                                @endif
                            </button>
                            <ul class="dropdown-menu">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            @if (App::getLocale() == 'en')
                                <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
                            @else
                                <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div class="widget no-border m-0">
                                <ul class="list-inline pull-right sm-pull-none sm-text-center mt-5">
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a
                                            href="#" class="text-white">Donation Hotline :+011-223-3445</a>
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope text-white"></i> <a
                                            href="#" class="text-white">contact@yourdomain.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-silver-light">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default no-bg">


                            @if (App::getLocale() == 'ar')
                                <a class="menuzord-brand pull-left flip" href="{{ route('home') }}"><img
                                        src="{{ asset('images/logo-wide.png') }}" alt=""></a>
                                <ul class="menuzord-menu">
                                    @auth
                                    @if (Auth::user()->type == 'user'  )
                                    <form action="{{ route('front.logout') }}" id="logout" method="post"
                                            style="display:none">
                                            @csrf
                                        </form>
                                       <li> <a class="btnlog"
                                        onclick="event.preventDefault(); document.getElementById('logout').submit()"
                                        href="{{ route('front.logout') }}">تسجيل خروج</a></li>
                                        @endif
                                        @endauth
                                        @guest
                                        <li><a class="btnlog" href="{{ route('front.login.form') }}">تسجيل دخول</a></li>
                                        <li><a href="{{ route('front.register.form') }}">تسجيل </a></li>

                                        @endguest


                                    <li><a href="{{ route('contact') }}">{{ __('Contact Us') }}</a></li>
                                    <li><a href="{{ route('front.emergencies.all') }}">{{ __('Emergencies') }}</a></li>
                                    <li><a href="{{ route('front.orphan.all') }}">{{ __('Orphans') }}</a></li>
                                    <li><a href="{{ route('front.event.all') }}">{{ __('Events') }}</a></li>
                                    <li><a href="{{ route('front.category') }}">{{ __('Categories') }}</a></li>
                                    <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                                    <li class="active"><a href="{{ route('home') }}">{{ __('Home') }}</a> </li>

                                </ul>
                            @endif
                            @if (App::getLocale() == 'en')
                                <a class="menuzord-brand pull-left flip" href="{{ route('home') }}"><img
                                        src="{{ asset('images/logo-wide.png') }}" alt=""></a>
                                <ul class="menuzord-menu">
                                    <li class="active"><a href="{{ route('home') }}">{{ __('Home') }}</a> </li>
                                    <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                                    <li><a href="{{ route('front.category') }}">{{ __('Categories') }}</a></li>
                                    <li><a href="{{ route('front.event.all') }}">{{ __('Events') }}</a></li>
                                    <li><a href="{{route('front.orphan.all')}}">{{ __('Orphans') }}</a></li>
                                    <li><a href="{{ route('front.emergencies.all') }}">{{ __('Emergencies') }}</a></li>
                                    <li><a href="{{ route('contact') }}">{{ __('Contact Us') }}</a></li>
                                    @auth
                                    @if (Auth::user()->type == 'user'  )
                                    <form action="{{ route('front.logout') }}" id="logout" method="post"
                                            style="display:none">
                                            @csrf
                                        </form>
                                       <li> <a class="btnlog"
                                        onclick="event.preventDefault(); document.getElementById('logout').submit()"
                                        href="{{ route('front.logout') }}">Logout</a></li>
                                        @endif
                                        @endauth
                                        @guest
                                        <li><a class="btnlog" href="{{ route('front.login.form') }}">Login</a></a></li>
                                        <li><a href="{{ route('front.register.form') }}">Register </a></li>

                                        @endguest
                                </ul>
                            @endif


                        </nav>
                    </div>
                </div>
            </div>
        </header>
