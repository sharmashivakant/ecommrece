@extends('layouts.web')
@section('title','Product Details')
@section('content')
<div class="product-details-area mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-10 col-sm-10">
                <div class="product-details-wrapper">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                            <div class="product-switcher-wrap">
                                <div class="nav product-tab" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <div class="product-variation active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home">
                                        <div class="pd-showcase-img">
                                            <img src="{{ asset('uploads/product/images/'.$product->images) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="product-variation" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile">
                                        <div class="pd-showcase-img">
                                            <img src="{{ asset('uploads/product/images/'.$product->images) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="product-variation" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages">
                                        <div class="pd-showcase-img">
                                            <img src="{{ asset('uploads/product/images/'.$product->images) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="product-variation" id="v-pills-settings-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings">
                                        <div class="pd-showcase-img">
                                            <img src="{{ asset('uploads/product/images/'.$product->images) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="pd-preview-img">
                                            <img src="{{ asset('uploads/product/images/'.$product->images) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <div class="pd-preview-img">
                                            <img src="{{ asset('uploads/product/images/'.$product->images) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">
                                        <div class="pd-preview-img">
                                            <img src="{{ asset('uploads/product/images/'.$product->images) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab">
                                        <div class="pd-preview-img">
                                            <img src="{{ asset('uploads/product/images/'.$product->images) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="product-details-wrap">
                                <div class="pd-top">

                                    <h3 class="pd-title">{{ $product->name }}</h3>
                                    <h5 class="pd-price">&#8377; {{ $product->price }}</h5>
                                    <p class="pd-small-info">{{ ucwords($product->details) }}</p>
                                </div>
                                <div class="pd-quick-discription">
                                    <ul>
                                        <li class="pd-type">Catagories: <span> {{ ucwords($product->category->name) }}</span></li>
                                        <li class="pd-type">Availabile: <span>{{ $product->inventory->quantity }}</span> </li>
                                        <li class="d-flex align-items-center">
                                            <span style="font-weight: bold; font-size: 16px;color:#6b6b6b; font-family:var(--font-secondary);">Size :</span>
                                            <div class="size-option d-flex align-items-center">
                                            <input type="radio" name="size" id="size1" value="42" checked="">
                                            <label for="size1">
                                            <span class="p-size">42</span>
                                            </label>
                                            <input type="radio" name="size" id="size2" value="43">
                                            <label for="size2">
                                            <span class="p-size">43</span>
                                            </label>
                                            <input type="radio" name="size" id="size3" value="44">
                                             <label for="size3">
                                            <span class="p-size">44</span>
                                            </label>
                                            <input type="radio" name="size" id="size4" value="45">
                                            <label for="size4">
                                            <span class="p-size">45</span>
                                            </label>
                                            </div>
                                            </li>
                                        <li class="pd-type">Material : <span>{{ ucwords($product->material) }}</span> </li>
                                        <li class="d-flex align-items-center pd-cart-btns">
                                            @livewire('cart.add',['pid' => $product->id ])
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        {{-- <div class="related-product-wrapper mt-120">
            <h3 class="details-title">Related Product</h3>
            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card-l">
                        <div class="product-img">
                            <a href="#">
                                <img src="" alt="">
                                <img src="" alt="" class="hover-img">
                            </a>
                            <div class="product-lavels">
                            </div>
                            <div class="product-actions">
                                {{-- <a href="cart.html"><i class="flaticon-shopping-cart"></i></a> --}}
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
                            {{-- <h3 class="product-title"><a href="#">dsdsd</a></h3>
                            <div class="product-price">
                                <del class="old-price"></del><ins class="new-price">&#8377;111</ins>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
    </div>
</div>
@endsection
