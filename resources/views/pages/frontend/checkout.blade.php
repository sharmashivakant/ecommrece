@extends('layouts.web')
@section('title', 'Shopping Cart')
@section('content')
    <div class="checkout-area mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form method="POST" id="booking_form" action="https://api.razorpay.com/v1/checkout/embedded">
                        @csrf
                        <h5 class="checkout-title">
                            Billing Details
                        </h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="eg-input-group">
                                    <label for="first-name1">First Name</label>
                                    <input type="text" id="first-name1" name="address[first_name]"
                                        value="{{ ucwords($address->first_name ?? null) }}" placeholder="Your first name">
                                </div>
                                @error('address.first_name')
                                    <span class="text-danger">{{ 'First name is required' }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="eg-input-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" id="last-name" name="address[last_name]"
                                        value="{{ ucwords($address->last_name ?? null) }}" placeholder="Your last name">
                                </div>
                                @error('address.last_name')
                                    <span class="text-danger">{{ 'Last name is required' }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="country">Country / Region</label>
                                    <x-countries :selected="$profile->country" name="address[country]" />
                                </div>
                                @error('address.country')
                                    <span class="text-danger">{{ 'Country is required' }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                <input type="hidden" name="address[address_id]" value="{{ $address->id ?? null }}">
                                    <label>Street Address</label>
                                    <input type="text" name="address[address_line1]"  value="{{ ucwords($address->address_line1 ?? null) }}"
                                        placeholder="House and street name">
                                </div>
                                @error('address.address_line1')
                                    <span class="text-danger">{{ 'Address Line1 is required' }}</span>
                                @enderror
                                <div class="eg-input-group">
                                <label>City</label>
                                <input type="text" name="address[city]"
                                        value="{{ ucwords($address->city ?? null ) }}"
                                        placeholder="City Name">
                                    <!-- <x-cities :selected="$profile->city" /> -->
                                </div>
                                @error('city')
                                    <span class="text-danger">{{ 'City is required' }}</span>
                                @enderror
                                <div class="eg-input-group">
                                <label>Post Code</label>
                                    <input type="text" name="address[postal_code]" value="{{ $address->postal_code ?? null }}"
                                        placeholder="Post Code">
                                </div>
                                @error('address.postal_code')
                                    <span class="text-danger">{{ 'Postal_code is required' }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label>Additional Information</label>
                                    <input type="text" name="address[mobile]" value="{{ $address->mobile ?? null }}"
                                        placeholder="Your Phone Number">
                                </div>
                                @error('address.mobile')
                                    <span class="text-danger">{{ 'Mobile is required' }}</span>
                                @enderror
                                <div class="eg-input-group">
                                <input type="text" name="address[email]"
                                        value="{{ $address->user->email ?? null }}"
                                        placeholder="Your Email addresss">
                                </div>
                                <div class="eg-input-group mb-0">
                                    <textarea cols="30" rows="7" name="address[notes]" placeholder="Order Notes (Optional)">{{ $profile->notes ?? null }}</textarea>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="col-lg-5">
                    <div class="order-summary">
                        <div class="added-product-summary">
                            <h5 class="checkout-title">
                                Order Summary
                            </h5>
                            <ul class="added-products">
                                @if (!ShoppingCart::isEmpty())
                                    @foreach (ShoppingCart::all() as $item)
                                        <li class="single-product">
                                            <div class="product-img">
                                                <img src="{{ asset('uploads/product/images/' . $item->product->picture[0]) }}"
                                                    alt="">
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-title"><a href="#">{{ $item->name }}</a></h5>
                                                <div class="product-total">
                                                    <div class="quantity">
                                                        <input type="number" min="1" max="90" step="10" value="1">
                                                        <div class="quantity-nav">
                                                            <div class="quantity-button quantity-up"><i
                                                                    class="bi bi-plus"></i>
                                                            </div>
                                                            <div class="quantity-button quantity-down"><i
                                                                    class="bi bi-dash"></i></div>
                                                        </div>
                                                    </div>
                                                    <strong> <i class="bi bi-x-lg"></i> <span
                                                            class="product-price">&#8377;
                                                            {{ $item->price }}</span></strong>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="total-cost-summary">
                            <ul>
                                <li class="subtotal">Total <span>&#8377; {{ ShoppingCart::total() }}</span></li>
                                <li>Tax <span>{{ totaltax() }}</span></li>
                                <li>Total ( tax excl.) <span>&#8377; {{ ShoppingCart::total() }}</span></li>
                                <li>Total ( tax incl.) <span>&#8377; {{ ShoppingCart::total() + totaltax() }}</span></li>
                            </ul>
                        </div>
                        <div class="total-cost">
                            <ul>
                                <li class="d-flex justify-content-between">Subtotal <span>&#8377;
                                        {{ ShoppingCart::total() + totaltax() }}</span></li>
                            </ul>
                        </div>

                        <div class="payment-methods">
                            <div class="form-check payment-check">
                                <input class="form-check-input" type="radio" name="order[payment_type]"
                                    value="online" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Pay Online
                                </label>
                                <img src="{{ asset('assets/images/payment/payment-cards.png') }}"
                                    alt="">
                                <p>Pay Online using Credit/Debit Card, NetBanking, UPI and other various methods.</p>
                            </div>

                            <div class="form-check payment-check paypal">
                                <input class="form-check-input" type="radio" name="order[flexRadioDefault]"
                                    id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    PayPal
                                </label>
                                {{-- <img src="{{ asset('assets/images/payment/payment-cards.png') }}"
                                alt=""> --}}
                                <a href="#" class="about-paypal">What is PayPal</a>
                            </div>
                            <div class="payment-form-bottom d-flex align-items-center">
                                <input type="checkbox" name="order[term]" id="terms" required>
                                <label for="terms">I have read and agree to the website <a href="#">Terms and
                                        conditions</a></label>
                            </div>
                        </div>
                        <input type="hidden" name="key_id" value="{{ env('RAZORPAY_KEY') }}">
                        <input type="hidden" name="order_id" id="order" required>
                        <input type="hidden" name="name" value="ExelArt">
                        <input type="hidden" name="description" value="Buy Art Service">
                        <input type="hidden" name="prefill[email]" value="{{ Auth::user()->email }}">
                        <input type="hidden" name="prefill[contact]"
                            value="{{ Auth::user()->profile->phone ?? null }}">
                        <input type="hidden" name="amount" value="{{ (ShoppingCart::total() + totalTax()) }}">
                        <input type="hidden" name="callback_url"
                            value="{{ route('order.placed') }}">
                        <input type="hidden" name="cancel_url" value="{{ URL::current() }}">
                    </div>
                    <div class="cart-proceed-btns">
                        <button type="button" id="confirm_booking" onclick="validateOrder()"
                            class="cart-proceed">Confirm and
                            Pay</a>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function validateOrder() {
            var form = $("#booking_form");
            $.ajax({
                type: 'POST',
                url: 'order-store',
                data: form.serialize(),
                success: function (result) {
                   if (result.status) {
                        $('#order').val(result.order_id);
                        //console.log(result);
                       // return false;
                    form.submit();
                     } else {
                          return false;
                     }
                }
            });
            return false;
        }
    </script>
@endpush

