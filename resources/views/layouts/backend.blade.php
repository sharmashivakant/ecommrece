<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') - TnP Backend</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css') }}" type="text/css">
    <!-- Main style file -->
    <link rel="stylesheet" href="{{ asset('dist/css/app.min.css') }}" type="text/css">
    @stack('css')
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ preloader -->
    @include('shared.backend.sidebar')

    <!-- layout-wrapper -->
    <div class="layout-wrapper">
        @include('shared.backend.header')
        <!-- content -->
        <div class="content ">
            @yield('content')
        </div>
        <!-- ./ content -->
        @include('shared.backend.footer')
    </div>
    <!-- ./ layout-wrapper -->

    <!-- Bundle scripts -->
    <script src="{{ asset('libs/bundle.js') }}"></script>
    <!-- Main Javascript file -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    @stack('js')

    <script>
        $("document").ready(function(){
       setTimeout(function(){
          $("div#msg").remove();
       }, 3000 ); // 5 secs

    });
    </script>
</body>

</html>
