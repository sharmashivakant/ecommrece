@extends('layouts.theme')
@section('content')
<main class="main-content">

    <!--== Start Hero Area Wrapper ==-->
    <section class="hero-two-slider-area position-relative">
        <div class="swiper hero-two-slider-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-two-slide-item bg-img" data-bg-img="{{ asset('assets/theme/images/slider/slider1-bg1.jpg') }}">
                    <div class="container">
                        <div class="hero-two-slide-content mousemove">
                            <!-- <img class="hero-two-slide-shape-img" src="{{ asset('assets/theme/images/slider/shape-polygon1.png') }}"
                                width="657" height="568" alt="Image"> -->
                            <h1 class="hero-two-slide-stroke-title mousemove-layer" data-speed="1">BIG SIZES</h1>
                            <h2 class="hero-two-slide-title mousemove-layer" data-speed=".5">EXCLUSIVE</h2>
                            <p class="hero-two-slide-desc">Tall n Preety</p>
                        </div>
                        <div class="hero-two-social">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i
                                    class="fa fa-linkedin"></i></a>
                            <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i
                                    class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-two-slide-item bg-img" data-bg-img="{{ asset('assets/theme/images/slider/slider2-bg1.jpg') }}">
                    <div class="container">
                        <div class="hero-three-slide-content mousemove">
                            <img class="hero-three-slide-shape-img" src="{{ asset('assets/theme/images/slider/shape-polygon1.png') }}"
                                width="657" height="568" alt="Image">
                            <h2 class="hero-three-slide-subtitle mousemove-layer" data-speed="1">Super</h2>
                            <h1 class="hero-three-slide-title">Merier</h1>
                            <h2 class="hero-three-slide-desc mousemove-layer" data-speed=".5">15% off</h2>
                            <img class="hero-three-slide-product-img" src="{{ asset('assets/theme/images/slider/slider2-product1.png') }}"
                                width="784" height="827" alt="Image">
                        </div>
                        <div class="hero-two-social">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i
                                    class="fa fa-linkedin"></i></a>
                            <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i
                                    class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Add Pagination ==-->
            <div class="container">
                <div class="hero-two-slider-pagination"></div>
            </div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area section-space">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Tranding</h2>
                <p class="ms-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row mb-n6">
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/10.jpg') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Casual Prince</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/11.jpg') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Winter boot</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/12.jpg') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Modern Race</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    
    <!--== Start Product Area Wrapper ==-->
    <section class="product-area section-space">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Best Products</h2>
                <p class="ms-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row mb-n6">
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/13.png') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Casual Prince</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/14.jpg') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Winter boot</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/15.jpg') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Modern Race</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/16.jpg') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Red Perspiciatis</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/17.jpg') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Winter Sprit</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="{{ asset('assets/theme/images/shop/18.jpg') }}" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Summer Race</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Categories Area Wrapper ==-->
    <section class="product-categories-area">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Categories</h2>
                <p class="ms-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row mb-n8">
                <div class="col-sm-6 col-md-4 mb-8">
                    <!--== Start Product Categories Item ==-->
                    <a class="product-category-item" href="shop.html">
                        <div class="product-category-thumb">
                            <img src="{{ asset('assets/theme/images/shop/category/01.png') }}" width="326" height="385" alt="Image-HasTech">
                        </div>
                        <h4 class="product-category-title">DX <span>Sports</span></h4>
                        <p class="product-category-desc">Lorem Ipsum</p>
                    </a>
                    <!--== End Product Categories Item ==-->
                </div>
                <div class="col-sm-6 col-md-4 mb-8">
                    <!--== Start Product Categories Item ==-->
                    <a class="product-category-item" href="shop.html">
                        <div class="product-category-thumb">
                            <img src="{{ asset('assets/theme/images/shop/category/02.png') }}" width="326" height="385" alt="Image-HasTech">
                        </div>
                        <h4 class="product-category-title">RX <span>Casual</span></h4>
                        <p class="product-category-desc">Dummy text</p>
                    </a>
                    <!--== End Product Categories Item ==-->
                </div>
                <div class="col-sm-6 col-md-4 mb-8">
                    <!--== Start Product Categories Item ==-->
                    <a class="product-category-item" href="shop.html">
                        <div class="product-category-thumb">
                            <img src="{{ asset('assets/theme/images/shop/category/03.png') }}" width="326" height="385" alt="Image-HasTech">
                        </div>
                        <h4 class="product-category-title">SX <span>Fashion</span></h4>
                        <p class="product-category-desc">Typesetting</p>
                    </a>
                    <!--== End Product Categories Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Categories Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area section-space">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Latest Blog</h2>
                <p class="ms-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="row mb-n8">
                <div class="col-sm-12 col-md-6 mb-8">
                    <!--== Start Blog Item ==-->
                    <div class="post-item">
                        <a href="blog-details.html" class="thumb">
                            <img class="w-100" src="{{ asset('assets/theme/images/blog/1.png') }}" width="570" height="320"
                                alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category" href="blog.html">Fashion</a>
                            <h4 class="title"><a href="blog-details.html">Hot Summer Fashion for Women new collections
                                    arrives of Lorem Ipsum available.</a></h4>
                            <ul class="meta">
                                <li class="author-info"><img class="author-thumb" src="assets/images/blog/author01.png"
                                        alt="Image-HasTech"> <a href="blog.html">Arry twentyk</a></li>
                                <li class="post-date"><a href="blog.html">13 Feb 2021</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==-->
                </div>
                <div class="col-sm-12 col-md-6 mb-8">
                    <!--== Start Blog Item ==-->
                    <div class="post-item">
                        <a href="blog-details.html" class="thumb">
                            <img class="w-100" src="{{ asset('assets/theme/images/blog/2.png') }}" width="570" height="320"
                                alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category" href="blog.html">Fashion</a>
                            <h4 class="title"><a href="blog-details.html">My Favorite White Sneakers From Splurge To
                                    Save passages available amet suite.</a></h4>
                            <ul class="meta">
                                <li class="author-info"><img class="author-thumb" src="assets/images/blog/author02.png"
                                        alt="Image-HasTech"> <a href="blog.html">Arry twentyk</a></li>
                                <li class="post-date"><a href="blog.html">13 Feb 2021</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

    <!--== Start News Letter Area Wrapper ==-->
    <section class="news-letter-area section-bottom-space">
        <div class="container">
            <div class="newsletter-content-wrap" data-bg-img="{{ asset('assets/theme/images/photos/bg1.jpg') }}">
                <div class="newsletter-content">
                    <h2 class="title">Connect with us | merier</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="newsletter-form">
                        <form>
                            <input type="email" class="form-control" placeholder="Email address">
                            <button class="btn-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End News Letter Area Wrapper ==-->

</main>


@endsection