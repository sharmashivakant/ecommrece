<!doctype html>
<html lang="en">
<head>
    <title>TallnPreety</title>

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

</head>

<body>
    <!-- ===============  Category sidebar start =============== -->
    <div class="category-sidebar">
        <div class="category-sidebar-wrapper ">
            <div class="category-seidebar-top">
                <h4>All category</h4>
                <div class="category-close">
                    <i class="flaticon-arrow-pointing-to-left"></i>
                </div>
            </div>
            <div class="accordion" id="categoryExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="categoryHeading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#categoryOne" aria-expanded="false" aria-controls="categoryOne">
                            <i class="flaticon-woman"></i> Woman Collection
                        </button>
                    </h2>
                    <div id="categoryOne" class="accordion-collapse collapse" aria-labelledby="categoryHeading1"
                        data-bs-parent="#categoryExample" style="">
                        <div class="accordion-body">
                            <ul class="sb-category-list">
                                <li><a href="product.html">Man Casual Silk Shirt</a> <span
                                        class="product-amount">(10)</span></li>
                                <li><a href="product.html">Man Orange Shorts</a> <span
                                        class="product-amount">(22)</span></li>
                                <li><a href="product.html">Party Dress</a> <span class="product-amount">(08)</span></li>
                                <li><a href="product.html">T-Shirt</a> <span class="product-amount">(41)</span> </li>
                                <li><a href="product.html">Ghost Mannequin Black Hoodie</a> <span
                                        class="product-amount">(15)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="categoryHeading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#categoryFour" aria-expanded="false" aria-controls="categoryFour">
                            <i class="flaticon-man"></i> Mens’s Collection
                        </button>
                    </h2>
                    <div id="categoryFour" class="accordion-collapse collapse" aria-labelledby="categoryHeading4"
                        data-bs-parent="#categoryExample" style="">
                        <div class="accordion-body">
                            <ul class="sb-category-list">
                                <li><a href="product.html">Man Casual Silk Shirt</a> <span
                                        class="product-amount">(10)</span></li>
                                <li><a href="product.html">Man Orange Shorts</a> <span
                                        class="product-amount">(22)</span></li>
                                <li><a href="product.html">Party Dress</a> <span class="product-amount">(08)</span></li>
                                <li><a href="product.html">T-Shirt</a> <span class="product-amount">(41)</span> </li>
                                <li><a href="product.html">Ghost Mannequin Black Hoodie</a> <span
                                        class="product-amount">(15)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="categoryHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#categoryTwo" aria-expanded="false" aria-controls="categoryTwo">
                            <i class="flaticon-children"></i> Kid’s Collection
                        </button>
                    </h2>
                    <div id="categoryTwo" class="accordion-collapse collapse" aria-labelledby="categoryHeading2"
                        data-bs-parent="#categoryExample" style="">
                        <div class="accordion-body">
                            <ul class="sb-category-list">
                                <li><a href="product.html">Man Casual Silk Shirt</a> <span
                                        class="product-amount">(10)</span></li>
                                <li><a href="product.html">Man Orange Shorts</a> <span
                                        class="product-amount">(22)</span></li>
                                <li><a href="product.html">Party Dress</a> <span class="product-amount">(08)</span></li>
                                <li><a href="product.html">T-Shirt</a> <span class="product-amount">(41)</span> </li>
                                <li><a href="product.html">Ghost Mannequin Black Hoodie</a> <span
                                        class="product-amount">(15)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ===============  Category sidebar end =============== -->

    <!-- ============  main searchbar area start =========== -->
    <div class="main-searchbar">
        <div class="searchbar-wrap">
            <div class="container">
                <form action="#" method="POST" class="main-searchbar-form">
                    <h5>What are you lookking for?</h5>
                    <div class="searchbar-input">
                        <div class="input-wrap w-100 position-relative">
                            <input type="text" placeholder="Search Products, Category, Brands....">
                        </div>
                        <div class="search-close"><i class="flaticon-close"></i></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============  main searchbar area end =========== -->

    <!-- =============== cart sidebar start=============== -->
    <div class="cart-sidebar-wrappper">
        <div class="main-cart-sidebar">
            <div class="cart-top">
                <div class="cart-close-icon">
                    <i class="flaticon-letter-x"></i>
                </div>
                <ul class="cart-product-grid">
                    <li class="single-cart-product">
                        <div class="cart-product-info d-flex align-items-center">
                            <div class="product-img"><img src="assets/images/product/cart-p1.png" alt=""
                                    class="img-fluid"></div>
                            <div class="product-info">
                                <a href="product-details.html">
                                    <h5 class="product-title">Men Casual Summer Sale</h5>
                                </a>
                                <ul class="product-rating d-flex">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star"></i></li>
                                </ul>
                                <p class="product-price"><span>1</span>x <span class="p-price">$10.32</span>
                                </p>
                            </div>
                        </div>
                        <div class="cart-product-delete-btn">
                            <a href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
                        </div>

                    </li>

                </ul>
            </div>
            <div class="cart-bottom">
                <div class="cart-total d-flex justify-content-between">
                    <label>Subtotal :</label>
                    <span>$64.08</span>
                </div>
                <div class="cart-btns">
                    <a href="checkout.html" class="cart-btn checkout">CHECKOUT</a>
                    <a href="cart.html" class="cart-btn cart">VIEW CART</a>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== cart sidebar end=============== -->

    <!-- ===============  Topbar area start =============== -->
    <div class="topbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ">
                    <ul class="topbar-social-icons d-flex align-items-center">
                        <li class="follow-text">Follow Us</li>
                        <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                        <li><a href="#"><i class="flaticon-twitter-1"></i></a></li>
                        <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
                        <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-lg-center">
                    <div class="topbar-mobil-contact">
                        <a href="tel:+8801761111456">Hot Line : +91 172 1111 4567</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <ul class="topbar-right d-flex align-items-center justify-content-end">
                        <li class="order-track">
                            <a href="#"><i class="flaticon-pin"></i> Track Order</a>
                        </li>
                        <li>
                            <select class="languege-select" aria-label="Default select example">
                                <option selected>INR</option>
                                <option value="1">USD</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Topbar area end =============== -->

    <!-- ===============  header area start =============== -->
    <header>
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo d-flex justify-content-between align-items-center h-100">
                            <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>

                            <div class="mobile-menu d-flex ">

                                <ul class="d-flex mobil-nav-icons align-items-center">
                                    <li class="search-icon global-top"><a href="javascript:void(0)"><i
                                                class="flaticon-search-1"></i></a></li>
                                    <li><a href="dashboard.html"><i class="flaticon-user"></i></a></li>
                                    <li class="category-icon"><a href="javascript:void(0)"><i
                                                class="flaticon-menu"></i></a></li>
                                    <li class="cart-icon"><a href="javascript:void(0)"><i
                                                class="flaticon-shopping-cart"></i></a>
                                        <div class="has-count">12</div>
                                    </li>
                                </ul>
                                <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                    <span class="h-top"></span>
                                    <span class="h-middle"></span>
                                    <span class="h-bottom"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6">

                        <nav class="main-nav">
                            <div class="inner-logo d-xl-none">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logo-v2.png') }}" alt="">
                                </a>
                            </div>
                            <ul>
                                <li><a href="javascript:void(0)">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>

                            <ul class="inner-social-icons d-xl-none d-flex flex-wrap">
                                <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter-1"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
                                <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-xl-3 col-2 d-none d-xl-block ">
                        <div class="nav-right h-100 d-flex align-items-center justify-content-end">
                            <ul class="d-flex nav-icons">
                                <li class="search-icon"><a href="javascript:void(0)"><i
                                            class="flaticon-search-1"></i></a></li>
                                <li><a href="dashboard.html"><i class="flaticon-user"></i></a></li>
                                <li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a>
                                </li>
                                <li class="cart-icon"><a href="javascript:void(0)"><i
                                            class="flaticon-shopping-cart"></i></a>
                                    <div class="has-count">12</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- ===============  header area end =============== -->

    <!-- ===============  Hero area start =============== -->
    <div class="hero-area position-relative">

        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide-item">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="slide-item-content">
                                    <h5>Sale up 75% off</h5>
                                    <h2 class="slide-item-title">Imagine the next level of <span>Fashion</span></h2>

                                    <div class="slide-item-btn">
                                        <a href="product.html" class="primary-btn-xl">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-lg-end">
                                <div class="slide-item-figure">
                                    <img src="{{ asset('assets/images/banner/banner-figure11.png') }}" alt=""
                                        class="img-fluid figure">

                                    <div class="figure-shape">
                                        <img src="{{ asset('assets/images/shape/banner-shape.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-slide-item">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="slide-item-content">
                                    <h5>Sale up 75% off</h5>
                                    <h2 class="slide-item-title">Imagine is the best way <span>Fashion</span></h2>

                                    <div class="slide-item-btn">
                                        <a href="product.html" class="primary-btn-xl">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-lg-end">
                                <div class="slide-item-figure">
                                    <img src="{{ asset('assets/images/banner/banner-figure2.png') }}" alt=""
                                        class="img-fluid figure">

                                    <div class="figure-shape">
                                        <img src="{{ asset('assets/images/shape/banner-shape.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><span>Next</span><i
                class="flaticon-arrow-pointing-to-right"></i></div>
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i
                class="flaticon-arrow-pointing-to-left"></i><span>Back</span></div>

        <div class="fixed-social-icons d-xl-block d-none">
            <ul>
                <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>
                <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
            </ul>

            <h5>Special Edition</h5>
        </div>
    </div>
    <!-- ===============  Hero area end =============== -->

    <!-- ===============  Feature area start =============== -->
    <div class="features-area mt-96">
        <div class="container">
            <div class="row features-row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-box">
                        <div class="feature-timeline">
                            <span>01</span>
                        </div>

                        <div class="single-feature">
                            <div class="feature-icon">
                                <i class="flaticon-shipping"></i>
                                <span>Our Quality</span>
                            </div>
                            <h5>Most Advanced Features</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-box">
                        <div class="feature-timeline">
                            <span>02</span>
                        </div>

                        <div class="single-feature">
                            <div class="feature-icon">
                                <i class="flaticon-price-tag"></i>
                                <span>Our Price</span>
                            </div>
                            <h5>Very Reasonable Price</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-box">
                        <div class="feature-timeline">
                            <span>03</span>
                        </div>

                        <div class="single-feature">
                            <div class="feature-icon">
                                <i class="flaticon-puzzle"></i>
                                <span>Our Delivery</span>
                            </div>
                            <h5>Product Frist Delivery</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-box">
                        <div class="feature-timeline">
                            <span>04</span>
                        </div>

                        <div class="single-feature">
                            <div class="feature-icon">
                                <i class="flaticon-headphones"></i>
                                <span>Our Support</span>
                            </div>
                            <h5>24/7 Live Support</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ===============  Feature area end =============== -->

    <!-- =============== Product area start =============== -->
    <div class="product-area mt-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header">
                        <h2>Select your best</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="product-tab-buttons">
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Top Sale</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">NEW ARRIVAL</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Best seller</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="tab-content product-tab" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-1a.png" alt="">
                                                <img src="assets/images/product/product-1b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <!-- <span class="new">New</span>
                                            <span class="discount">-40%</span>
                                            <span class="sale">Sale</span>
                                            <span class="sold-out">Sold Out</span> -->
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">UNIQLO Man Mid
                                                    Rise</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-8a.png" alt="">
                                                <img src="assets/images/product/product-8b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Man Casul Summer
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-7a.png" alt="">
                                                <img src="assets/images/product/product-7b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="discount">-40%</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-6a.png" alt="">
                                                <img src="assets/images/product/product-6a.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">


                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Simple Man Mid
                                                    Rise</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-5a.png" alt="">
                                                <img src="assets/images/product/product-5b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sold-out">Sold Out</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Buy khaki polo neck
                                                    jumper </a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-4a.png" alt="">
                                                <img src="assets/images/product/product-4b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">

                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">kid's Summer
                                                    Shirt</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-3a.png" alt="">
                                                <img src="assets/images/product/product-3b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">

                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Men’s Renta Silk
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-2b.png" alt="">
                                                <img src="assets/images/product/product-2b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="new">New</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row">

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-7a.png" alt="">
                                                <img src="assets/images/product/product-7b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="discount">-40%</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-6a.png" alt="">
                                                <img src="assets/images/product/product-6a.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">


                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Simple Man Mid
                                                    Rise</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-5a.png" alt="">
                                                <img src="assets/images/product/product-5b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sold-out">Sold Out</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Buy khaki polo neck
                                                    jumper </a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-4a.png" alt="">
                                                <img src="assets/images/product/product-4b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">

                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">kid's Summer
                                                    Shirt</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-3a.png" alt="">
                                                <img src="assets/images/product/product-3b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">

                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Men’s Renta Silk
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-2b.png" alt="">
                                                <img src="assets/images/product/product-2b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="new">New</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-1a.png" alt="">
                                                <img src="assets/images/product/product-1b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <!-- <span class="new">New</span>
                                            <span class="discount">-40%</span>
                                            <span class="sale">Sale</span>
                                            <span class="sold-out">Sold Out</span> -->
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">UNIQLO Man Mid
                                                    Rise</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-8a.png" alt="">
                                                <img src="assets/images/product/product-8b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Man Casul Summer
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-7a.png" alt="">
                                                <img src="assets/images/product/product-7b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="discount">-40%</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Women Renta Silk
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-6a.png" alt="">
                                                <img src="assets/images/product/product-6a.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">


                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Simple Man Mid
                                                    Rise</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-5a.png" alt="">
                                                <img src="assets/images/product/product-5b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sold-out">Sold Out</span>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Buy khaki polo neck
                                                    jumper </a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-4a.png" alt="">
                                                <img src="assets/images/product/product-4b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">

                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">kid's Summer
                                                    Shirt</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-card-l">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/product-3a.png" alt="">
                                                <img src="assets/images/product/product-3b.png" alt=""
                                                    class="hover-img">
                                            </a>
                                            <div class="product-lavels">

                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <ul class="d-flex product-rating">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                                <li>(<span>8</span> Review)</li>
                                            </ul>
                                            <h3 class="product-title"><a href="product-details.html">Men’s Renta Silk
                                                    Dress</a></h3>
                                            <div class="product-price">
                                                <del class="old-price">$302.74</del><ins class="new-price">$290.05</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Product area end =============== -->

    <!-- ===============  Wide banner area start =============== -->
    <div class="wide-banner-area mt-120">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xxl-6">
                    <div class="banner-content">
                        <h5>Biggest Offer</h5>
                        <h2 class="banner-title">Fashion Online at The most affordable price</h2>
                        <div class="banner-quote">
                            Sale 30% off <br> your First Order
                        </div>
                        <div class="banner-btn">
                            <a href="product.html" class="primary-btn-md">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Wide banner area end =============== -->

    <!-- ===============  Newslatter area start =============== -->
    <div class="newslatter-area mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newslatter-wrap ">
                        <div class="corner-1 position-absolute top-0 start-0">
                            <img src="assets/images/shape/corner1.png" alt="">
                        </div>
                        <div class="corner-2 position-absolute end-0 bottom-0">
                            <img src="assets/images/shape/corner2.png" alt="">
                        </div>

                        <div class="newslatter-content position-relative">
                            <h3>NEWSLETTER</h3>
                            <p> Join now and get 20% off your next purchase!</p>
                            <div class="plane-vactor d-lg-block d-none">
                                <img src="assets/images/shape/plane-vactor.png" alt="">
                            </div>
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
    </div>
    <!-- ===============  Newslatter area end =============== -->

    <!-- ===============  Footer area start =============== -->
    <div class="footer-area mt-120">
        <div class="footer-wrap">
            <div class="footer-shape">
                <img src="assets/images/shape/footer-vactor.png" alt="">
            </div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-about">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/images/logo-v2.png" alt=""></a>
                            </div>
                            <p class="about-text">EG STORE - worldwide fashion store since 2021. We sell over 200+
                                branded products on our web-site.</p>
                            <div class="footer-contact">
                                <a href="#">Add. 168/170, Avenue 01, Mirpur DOHS, Bangladesh.</a>
                                <a href="mailto:info@example.com">Email: info@example.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <h5 class="footer-widget-title">Quick Links</h5>
                                    <ul class="footer-links">
                                        <li><a href="about.html">About EG STORE</a></li>
                                        <li><a href="product.html">New Collection</a></li>
                                        <li><a href="product.html">Woman Dress</a></li>
                                        <li><a href="product.html">Man Dress</a></li>
                                        <li><a href="blog.html">Our Latest News</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <h5 class="footer-widget-title">Company</h5>
                                    <ul class="footer-links">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Returns </a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Our Support</a></li>
                                        <li><a href="#">Terms &amp; Service</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 ">
                                <div class="footer-widget">
                                    <h5 class="footer-widget-title">We Accepts:</h5>

                                    <ul class="footer-payment d-flex flex-wrap">
                                        <li><img src="assets/images/payment/pay1.png" alt=""></li>
                                        <li><img src="assets/images/payment/pay2.png" alt=""></li>
                                        <li><img src="assets/images/payment/pay3.png" alt=""></li>
                                        <li><img src="assets/images/payment/pay3.png" alt=""></li>
                                        <li><img src="assets/images/payment/pay2.png" alt=""></li>
                                        <li><img src="assets/images/payment/pay1.png" alt=""></li>
                                    </ul>

                                    <div class="footer-social-links">
                                        <h5>Follow Us:</h5>
                                        <ul class="social-icons d-flex">
                                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter-1"></i></a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <p>Copyright 2020-{{ date('Y') }} TallnPreety.com | Designed By <a href="https://shinyribbons.com/" target="_blank">ShinyRibbons</a></p>
        </div>
    </div>
    <!-- ===============  Footer area end =============== -->

    <!--Javascript -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>