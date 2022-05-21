<div class="main-cart-sidebar">
    <div class="cart-top">
        <div class="cart-close-icon">
            <i class="flaticon-letter-x"></i>
        </div>
        @if(!ShoppingCart::isEmpty())
        <ul class="cart-product-grid">
            @foreach ($cart as $item)
            <li class="single-cart-product">
                <div class="cart-product-info d-flex align-items-center">
                    <div class="product-img"><img src="{{ asset('uploads/product/images/'.$item->product->picture[0]) }}" alt=""
                            class="img-fluid"></div>
                    <div class="product-info">
                        <a href="product-details.html">
                            <h5 class="product-title">{{ ucwords($item->name) }}</h5>
                        </a>
                        <ul class="product-rating d-flex">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star"></i></li>
                        </ul>
                        <p class="product-price"><span>1</span>x <span class="p-price">&#8377; {{ $item->price }}</span>
                        </p>
                    </div>
                </div>
                <div class="cart-product-delete-btn">
                    <a wire:click="removeIt('{{ $item->__raw_id }}')" href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
                </div>
            </li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="cart-bottom">
        @if(!ShoppingCart::isEmpty())
        <div class="cart-total d-flex justify-content-between">
            <label>Subtotal :</label>
            <span>{{ ShoppingCart::total() }}</span>
        </div>
        <div class="cart-btns">
            <a href="{{ route('order.checkout') }}" class="cart-btn checkout">CHECKOUT</a>
            <a href="{{ route('order.checkout','cart') }}" class="cart-btn cart">VIEW CART</a>
        </div>
        @else
        <div class="cart-total d-flex justify-content-between">
            <h2>You have no items in your shopping cart.</h2>
        </div>
    @endif
    </div>
</div>
