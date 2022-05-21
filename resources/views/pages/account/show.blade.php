@extends('layouts.web')
@section('title', 'Orders Details')
@section('content')
<div class="dashbord-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                @include('shared.sidebar')
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="account-sitting-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="billing-card">
                                <h5 class="card-title">Ordered Product</h5>
                                <ul class="card-list">
                                    <li class="list-group-item d-flex align-items-center">

                                       
                                        <img class="m-2" src="{{ asset('uploads/product/images/' . $product->product->images) }}"
                                            style="height: 100px; width:100px;" alt="product-image" />
                                    </li>
                                    <li><span>Product Name<small>:</small></span>{{ $product->product->name  }}</li>
                                    <li><span>Payment Type<small>:</small></span>{{ $product->payment_type  }}</li>
                                    <li><span>Amount <small>:</small></span>&#8377;{{ $product->amount  }}</li>
                                    <li><span>Order Date <small>:</small></span>{{ $product->created_at->format('d M,Y @ h:i A')  }}</li>
                                    <li><span>Status <small>:</small></span>
                                    @if($product->status == 1)
                                    <span class="badge rounded-pill bg-success text-light">Shipping</span>
                                    @elseif($product->status == 0)
                                    <span class="badge rounded-pill bg-danger text-light">Pending</span>
                                    @elseif($product->status == 2)
                                    <span class="badge rounded-pill bg-danger text-light">Delivery</span>
                                    @endif
                                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-6 col-md-6">
                            <div class="shipping-card">
                                <h5 class="card-title">Billing Address</h5>
                                <ul class="card-list">
                                    <li><span>First Name<small>:</small></span>{{ $product->profile->first_name ?? null }} </li>
                                    <li><span>Last Name <small>:</small></span>{{ $product->profile->last_name ?? null }} </li>
                                    <li><span>Address <small>:</small></span>{{ $product->address->address_line1 ?? null }},
                                        {{ $product->address->city ?? null }} </li>
                                    <li><span>Postcode <small>:</small></span>{{ $product->address->postal_code ?? null }} </li>
                                    <li><span>Country <small>:</small></span>{{ $product->address->country ?? null }} </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="shipping-card">
                                <h5 class="card-title">Shipping Address</h5>
                                <ul class="card-list">
                                    <li><span> First Name<small>:</small></span>{{ $product->profile->first_name ?? null }} </li>
                                    <li><span>Last Name <small>:</small></span>{{ $product->profile->last_name ?? null }} </li>
                                    <li><span>Address <small>:</small></span>{{ $product->address->address_line1 ?? null }},
                                        {{ $product->address->city  ?? null }} </li>
                                    <li><span>Postcode <small>:</small></span>{{ $product->address->postal_code ?? null }} </li>
                                    <li><span>Country <small>:</small></span>{{ $product->address->country ?? null }} </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection