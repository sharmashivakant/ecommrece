@extends('layouts.web')
@section('title', 'Shopping Cart')
@section('content')
    <div class="cart-area mt-120">
        @if(!ShoppingCart::isEmpty())
        @livewire('cart.index')
    @else
        <div class="row justify-content-center">
            <div class="col-lg-8 ">
                <div class="error-content text-center">
                    <i class="bi bi-cart" style="color: green; font-size: 72px"></i>
                    <h2>Cart Empty</h2>
                    <p>You have no items in your shopping cart.</p>
                    <div class="error-back-btn">
                        <a href="{{ route('home') }}" class="primary-btn-md">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    </div>
@endsection
