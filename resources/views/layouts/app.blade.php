<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Login V13</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/register-login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/register-login/css/main.css')}}">
    <!--===============================================================================================-->


<body style="background-color: #999999;">
<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url(/register-login/images/bg-01.jpg);"></div>


        @yield('content')

    </div>
</div>





    <!-- Scripts -->
    <!--script src=" asset('js/app.js') }}"/script-->
    <!--===============================================================================================-->
    <script src="{{asset('/register-login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/register-login/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/register-login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('/register-login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/register-login/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/register-login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('/register-login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/register-loginvendor/countdowntime/countdowntime.js/')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/register-login/js/main.js')}}"></script>
</body>
</html>
