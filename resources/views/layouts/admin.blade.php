
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Backend Access</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/theme-new/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/theme-new/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/theme-new/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/theme-new/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('assets/theme-new/css/app-dark.css') }}" id="darkTheme" disabled>
    @stack('css')
  </head>
  <body class="vertical">
    <div class="wrapper">
      @include('shared.backend.header')
      @include('shared.backend.sidebar')

      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            @yield('content')
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        @include('shared.backend.notification')
      </main> <!-- main -->
    </div> <!-- .wrapper -->

    <script src="{{ asset('assets/theme-new/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/config.js') }}"></script>
    <script src="{{ asset('assets/theme-new/js/apps.js') }}"></script>

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
