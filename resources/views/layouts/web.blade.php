<!doctype html>
<html lang="en">
<head>
    <title>@yield('title','Home') - 𝑻𝒂𝒍𝒍🅽𝑷𝒓𝒆𝒆𝒕𝒚</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="20x20">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Styles CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
@livewireStyles
@stack('css')
</head>

<body>
    @include('shared.category')
    @include('shared.sidecart')
    @include('shared.header')
        @yield('content')
    @include('shared.footer')

    <!--Javascript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScripts
    @stack('js')
</body>

</html>
