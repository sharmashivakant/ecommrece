@extends('layouts.web')
@section('title','Order Placed')
@section('content')
<div class="error-wrappe mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 ">
                @livewire('cart.stock')
                <div class="error-content text-center">
                    <i class="bi bi-check-circle" style="color: green; font-size: 72px"></i>
                    <h2>Order Placed</h2>
                    <p>Thank you, your order has been placed.<br>Your order id is <b>{{ strtoupper($data['razorpay_payment_id']) }}</b></p>
                    <div class="error-back-btn">
                        <a href="{{ route('order.index') }}" class="primary-btn-md">View Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
