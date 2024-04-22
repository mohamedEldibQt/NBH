<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('en', 'ar', app()->getLocale()) }}"
      data-textdirection="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>
        <title>@yield('title')</title>
    </title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- BEGIN VENDOR CSS-->

    <!-- END MODERN CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/app.css')}}">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('app-assets/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css')}}">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/style.css') }}">

    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    @if(app()->getLocale() == 'ar')
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/vendors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/chartist.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/custom-rtl.css')}}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/pages/timeline.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/pages/dashboard-ecommerce.css')}}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css')}}">
    @endif
    <!-- END Custom CSS-->
</head>


<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<header>
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="ft-menu font-large-1"></i></a>
                    </li>
                    <li class="nav-item">

                        <a class="navbar-brand" href="{{ url('/') }}">
                            <h3 class="brand-text">  {{ config('app.name', 'Dashboard') }}</h3>
                        </a>

                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700"> {{ Auth::user()->name ?? '' }}</span>
                </span>
                                <span class="avatar avatar-online">
                  <img src="{{asset('app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a> -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ft-power"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li style="margin-right: 30px"
                            class="dropdown dropdown-language nav-item">
                            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"><i style="font-size: 20px" class="flag-icon flag-icon-cy"></i>
                                <span class="selected-language"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                <ul>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">

                            </a>

                        </li>
                        <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">      </a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<sidebar>
    @include('layouts.adminSidebar')
</sidebar>


<main style="height: 95%">
    @yield('content')
</main>


<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; <script>document.write(new Date().getFullYear());</script>
          <a class="text-bold-800 grey darken-2" href="https://sherifshalaby.tech/" target="_blank">sherifshalaby.tech </a>, All rights reserved. </span>

    </p>
</footer>



<!-- BEGIN VENDOR JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('app-assets/js/scripts/extensions/sweet-alerts.js')}}" type="text/javascript"></script>
<script src="{{asset('app-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->




</body>
</html>
