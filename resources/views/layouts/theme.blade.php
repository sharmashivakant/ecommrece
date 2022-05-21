<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <title>@yield('title','Home') - 𝑻𝒂𝒍𝒍🅽𝑷𝒓𝒆𝒆𝒕𝒚</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/theme/images/favicon.png') }}">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('assets/theme/css/vendor/bootstrap.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assets/theme/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/plugins/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/plugins/nice-select.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">

</head>
    @include('shared.theme.header')
    @yield('content')
    @include('shared.theme.footer')
    @include('shared.theme.sidecart')
   
<body>
    
    
    <!-- Vendors JS -->
    <script src="{{ asset('assets/theme/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/theme/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/plugins/fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/plugins/jquery.nice-select.min.js') }}"></script>

    <!-- Custom Main JS -->
    <script src="{{ asset('assets/theme/js/main.js') }}"></script>

</body>

</html>