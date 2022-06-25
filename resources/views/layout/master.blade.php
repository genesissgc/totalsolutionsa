<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Total Solutions - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description', config('app.name'))">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{ asset('public/images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('public/images/favicon.ico') }}">

    @stack('before-styles')
    <!-- Google Font (font-family: 'Open Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!-- Google Font (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}">
    @stack('after-styles')

    @if (trim($__env->yieldContent('page-styles')))
        @yield('page-styles')
    @endif
</head>

<body>

    <div class="tm-preloader">
        <span class="tm-preloader-box"></span>
        <button class="tm-button tm-button-sm tm-button-white">Cancel Preloader <b></b></button>
    </div>

    <div id="wrapper" class="wrapper">

        <!-- Header Area -->
        @include('layout.header')
        <!--// Header Area -->

        <!-- Main Content -->
        @yield('content')
        <!--// Main Content -->

        <!-- Footer Area -->
        @include('layout.footer')
        <!--// Footer Area -->

    </div>

    @stack('before-scripts')
    <!-- Js Files -->
    <script src="{{ asset('public/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/plugins.js') }}"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>
    <!--// Js Files -->
    @stack('after-scripts')

    <!-- Scripts Dynamic-->
    @if (trim($__env->yieldContent('page-script')))
        @yield('page-script')
    @endif
</body>

</html>