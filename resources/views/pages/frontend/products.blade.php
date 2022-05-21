@extends('layouts.web')
@section('title', 'Product')
@section('content')

    <div class="row">
        @foreach ($products as $product)
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="product-card-l">
                <div class="product-img">
                    <a href="{{ route('collection.view',$product->slug) }}l">
                        <img src="{{ asset('uploads/product/thumbnail/'.$product->images) }}" alt="">
                        <img src="assets/images/product/product-1b.png" alt="" class="hover-img">
                    </a>
                    <div class="product-lavels">

                    </div>
                    <div class="product-actions">
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
                        <del class="old-price"></del><ins class="new-price">${{ $product->price }}</ins>
                    </div>
                    @livewire('cart.add',['pid' => $product->id ])
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="col-lg-12">
            <div class="custom-pagination d-flex justify-content-center mt-70">
                <ul class="d-flex pagination-links">
                    <li><a href="#" class="has-arrow"><i class="flaticon-arrow-pointing-to-left"></i></a></li>
                    <li><a href="#" class="active-page">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#" class="has-arrow"><i class="flaticon-arrow-pointing-to-right"></i></a></li>
                </ul>
            </div>
        </div> --}}
    </div>
@endsection
