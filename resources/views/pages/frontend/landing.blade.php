<!doctype html>
<html lang="en">

<head>
    <title>TallnPreet</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png"
        sizes="20x20">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="comming-soon-area position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="comming-soon-contents">
                        <div class="count-down-wrapper">
                            <h2>Coming Soon</h2>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua deserunt ullamco est sit aliqu </p>
                            <div class="countdown-boxes" id="timer">
                                <div class="countdown-box">
                                    <div class="corner-shape1 position-absolute bottom-0 end-0"><img
                                            src="{{ asset('assets/images/shape/count-corner1.png') }}"
                                            alt=""></div>
                                    <div class="corner-shape1 position-absolute top-0 start-0"><img
                                            src="{{ asset('assets/images/shape/count-corner2.png') }}"
                                            alt=""></div>
                                    <h3 id="days">...</h3>
                                    <h5>Days</h5>
                                </div>
                                <div class="countdown-box">
                                    <div class="corner-shape1 position-absolute bottom-0 end-0"><img
                                            src="{{ asset('assets/images/shape/count-corner1.png') }}"
                                            alt=""></div>
                                    <div class="corner-shape1 position-absolute top-0 start-0"><img
                                            src="{{ asset('assets/images/shape/count-corner2.png') }}"
                                            alt=""></div>
                                    <h3 id="hours">...</h3>
                                    <h5>Hours</h5>
                                </div>
                                <div class="countdown-box">
                                    <div class="corner-shape1 position-absolute bottom-0 end-0"><img
                                            src="{{ asset('assets/images/shape/count-corner1.png') }}"
                                            alt=""></div>
                                    <div class="corner-shape1 position-absolute top-0 start-0"><img
                                            src="{{ asset('assets/images/shape/count-corner2.png') }}"
                                            alt=""></div>
                                    <h3 id="minutes">...</h3>
                                    <h5>Minuts</h5>
                                </div>
                                <div class="countdown-box">
                                    <div class="corner-shape1 position-absolute bottom-0 end-0"><img
                                            src="{{ asset('assets/images/shape/count-corner1.png') }}"
                                            alt=""></div>
                                    <div class="corner-shape1 position-absolute top-0 start-0"><img
                                            src="{{ asset('assets/images/shape/count-corner2.png') }}"
                                            alt=""></div>
                                    <h3 id="seconds">...</h3>
                                    <h5>Seconds</h5>
                                </div>
                            </div>
                        </div>
                        <div class="newslatter-content position-relative text-center">
                            <h3>NEWSLETTER</h3>
                            <p> Join now and get 20% off your next purchase!</p>
                            <form action="#" id="newslatter" class="newslatter">
                                <div class="newslatter-form">
                                    <input type="text" name="newslatter-form" placeholder="Type Your Email">
                                    <button type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-fixed-social-icons d-xl-block d-none">
            <ul>
                <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>
                <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
            </ul>
            <h5>Special Edition</h5>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>