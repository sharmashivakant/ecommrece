<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-8">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Product Title</th>
                        <th scope="col">Unite Price</th>
                        {{-- <th scope="col">Discount Price</th> --}}
                        {{-- <th scope="col">Quantity</th> --}}
                        <th scope="col">Subtotal</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!ShoppingCart::isEmpty())
                        @foreach (ShoppingCart::all() as $item)
                            <tr>
                                <td class="image-col">
                                    <img src="{{ asset('uploads/product/images/'.$item->product->picture[0]) }}" alt="">
                                </td>
                                <td class="product-col"><a href="product-details.html"
                                        class="product-title">{{ $item->name }}</a></td>
                                <td class="unite-col"> &#8377; {{ $item->price }} </span></del>
                                    <span class="unite-price"></span></td>
                                {{----<td class="discount-col"><span class="discount-price">@if($item->discount_price != "")&#8377; {{ $item->discount_price }} @endif</span></td>--}}
                                {{-- <td class="quantity-col">
                                    <div class="quantity">
                                        <input type="number" min="1" max="90" step="10" value="1">
                                        <div class="quantity-nav">
                                            <div class="quantity-button quantity-up"><i class="bi bi-plus"></i>
                                            </div>
                                            <div class="quantity-button quantity-down"><i
                                                    class="bi bi-dash"></i></div>
                                        </div>
                                    </div>
                                </td> --}}
                                <td class="total-col">&#8377; @if($item->discount_price) {{$item->discount_price + $item->tax}} @else {{$item->price + $item->tax}} @endif</td>
                                <td class="delete-col">
                                    <div class="delete-icon">
                                        <a href="javascript:void(0)" wire:click="removeIt('{{ $item->__raw_id }}')"><i class="flaticon-letter-x"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-60">
        <div class="col-xxl-4 col-lg-4">
            <div class="cart-coupon-input">
                {{--<h5 class="coupon-title">Coupon Code</h5>
                 <form class="coupon-input d-flex align-items-center">
                    <input type="text" placeholder="Coupon Code">
                    <button type="submit">Apply Code</button>
                </form> --}}
            </div>
        </div>
        <div class="col-xxl-8 col-lg-8">
            <table class="table total-table">
                <tbody>
                    <tr>
                        <td class="tt-left">Cart Totals</td>
                        <td></td>
                        <td class="tt-right">&#8377; {{ ShoppingCart::total() }}</td>
                    </tr>
                    <tr>
                        <td class="tt-left">Shipping</td>
                        <td>
                            <ul class="cart-cost-list">
                                <li>Shipping Fee</li>
                                <li>Total ( tax excl.)</li>
                                <li>Total ( tax incl.)</li>
                                <li>Taxes</li>
                                <li>Shipping Enter your address to view shipping options. <a href="#">Calculate
                                        shipping</a>
                                </li>
                            </ul>
                        </td>
                        <td class="tt-right cost-info-td">
                            <ul class="cart-cost">
                                <li>Free</li>
                                <li>&#8377; {{ ShoppingCart::total() }}</li>
                                <li>&#8377; {{ ShoppingCart::total() + totaltax() }}</li>
                                <li>&#8377; {{ totalTax() }}</li>
                                <li></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="tt-left">Subtotal</td>
                        <td>
                        </td>
                        <td class="tt-right">&#8377; {{ (ShoppingCart::total() + totalTax()) }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="cart-proceed-btns">
                <a href="{{ route('order.checkout') }}" class="cart-proceed">Proceed to Checkout</a>
                <a href="product.html" class="continue-shop">Continue to shopping</a>
            </div>
        </div>
    </div>
</div>
