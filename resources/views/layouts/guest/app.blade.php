<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pandu">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ URL::asset('vendor/img/logo.png') }}" />

    <link href="{{asset('/vendor/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/vendor/css/stack-interface.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/vendor/css/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/vendor/css/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/vendor/css/flickity.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/vendor/css/iconsmind.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/vendor/css/jquery.steps.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/vendor/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/vendor/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/vendor/css/font-neo-sans.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('css')
</head>

<body>
    @yield('content')

    <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
        <i class="stack-interface stack-up-open-big"></i>
    </a>
    <script src="{{asset('/vendor/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('/vendor/js/flickity.min.js')}}"></script>
    <script src="{{asset('/vendor/js/parallax.js')}}"></script>
    <script src="{{asset('/vendor/js/typed.min.js')}}"></script>
    <script src="{{asset('/vendor/js/datepicker.js')}}"></script>
    <script src="{{asset('/vendor/js/isotope.min.js')}}"></script>
    <script src="{{asset('/vendor/js/lightbox.min.js')}}"></script>
    <script src="{{asset('/vendor/js/granim.min.js')}}"></script>
    <script src="{{asset('/vendor/js/jquery.steps.min.js')}}"></script>
    <script src="{{asset('/vendor/js/countdown.min.js')}}"></script>
    <script src="{{asset('/vendor/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('/vendor/js/scripts.js')}}"></script>
    @yield('js')
</body>

</html>