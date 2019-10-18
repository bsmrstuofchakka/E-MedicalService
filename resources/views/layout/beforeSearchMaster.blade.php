<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('index/img/favicon.png')}}" type="image/png">
    <title>SMCRI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('index/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('index/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('index/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('index/vendors/animate-css/animate.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('index/css/style.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{asset('/index/assets/css/main.css')}}" rel="stylesheet">

    <!--member css-->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('/member/css/style.css')}}">

    <!-- ========== Title ==========
    title> Cocoon -Portfolio</title-->
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{asset('/index/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{asset('/index/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/index/assets/css/et-line.css')}}" rel="stylesheet">
    <link href="{{asset('/index/assets/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{asset('/index/assets/css/slick.css')}}" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{asset('/index/assets/css/magnific-popup.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/index/assets/css/animate.min.css')}}">
    <!-- Custom styles for this template -->




</head>

<body>

<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6 col-4 header-top-left">
                    <!--<select class="default-select">
                        <option data-display="English">English</option>
                        <option value="1">Germany</option>
                        <option value="2">Spanish</option>
                    </select>-->
                </div>
                <div class="col-lg-9 col-sm-6 col-8 header-top-right">
                    @if (!Auth::guest())


                            <a href="#"  class="primary-btn text-uppercase" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="primary-btn text-uppercase" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>

                    @endif


                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="main_menu">
        <!--
        <div class="search_input"  id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" action="{{url('search')}}" method="POST" role="search">
                    {{csrf_field()}}
                    <input type="search" class="form-control" id="search_input" name="search"  value="@if(!empty($searching[0])) {{$searching[0]->date}} @endif"  placeholder="Search Here">

                    <button type="submit" class="btn"></button>

                </form>
            </div>
        </div>
        -->
