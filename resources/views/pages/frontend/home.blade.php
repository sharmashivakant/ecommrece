@extends('layouts.web')
@section('content')
    @include('shared.hero')
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
                        <h2>{{ date('F Y') }} Collection</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content product-tab" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-card-l">
                                            <div class="product-img custom">
                                                <a href="{{ route('collection.view',$product->slug) }}">
                                                    <img src="{{ asset('uploads/product/images/' . $product->picture[0]) }}"
                                                        alt="">
                                                </a>
                                                <div class="product-lavels">
                                                </div>
                                                <div class="product-actions">
                                                    {{-- <a href="#"><i class="flaticon-heart"></i></a>
                                                    <a href="product-details.html"><i class="flaticon-search"></i></a> --}}

                                                </div>

                                            </div>
                                            <div class="product-body">
                                                {{-- <ul class="d-flex product-rating">
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                    <li>(<span>8</span> Review)</li>
                                                </ul> --}}
                                                <h3 class="product-title"><a href="{{ route('collection.view',$product->slug) }}">{{ $product->name }}</a></h3>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8377; {{ $product->price }}</ins>
                                                </div>
                                                @livewire('cart.add',['pid' => $product->id ])
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                        <h5>Offering the best price</h5>
                        <h2 class="banner-title">TallnPretty's Footwear Collection Can Help You Find the Perfect Shoe.
                            Shop Now. </h2>
                        <div class="banner-btn">
                            <a href="{{ route('collection.list') }}" class="primary-btn-md">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Wide banner area end =============== -->
@endsection
