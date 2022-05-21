
<?php $__env->startSection('title', 'Shopping Cart'); ?>
<?php $__env->startSection('content'); ?>
    <div class="checkout-area mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form method="POST" id="booking_form" action="https://api.razorpay.com/v1/checkout/embedded">
                        <?php echo csrf_field(); ?>
                        <h5 class="checkout-title">
                            Billing Details
                        </h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="eg-input-group">
                                    <label for="first-name1">First Name</label>
                                    <input type="text" id="first-name1" name="address[first_name]"
                                        value="<?php echo e(ucwords($address->first_name ?? null)); ?>" placeholder="Your first name">
                                </div>
                                <?php $__errorArgs = ['address.first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e('First name is required'); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="eg-input-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" id="last-name" name="address[last_name]"
                                        value="<?php echo e(ucwords($address->last_name ?? null)); ?>" placeholder="Your last name">
                                </div>
                                <?php $__errorArgs = ['address.last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e('Last name is required'); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="country">Country / Region</label>
                                    <?php if (isset($component)) { $__componentOriginalbc93d675bb2b6911a649f032cb7415bd6445fe68 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Countries::class, ['selected' => $profile->country,'name' => 'address[country]']); ?>
<?php $component->withName('countries'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc93d675bb2b6911a649f032cb7415bd6445fe68)): ?>
<?php $component = $__componentOriginalbc93d675bb2b6911a649f032cb7415bd6445fe68; ?>
<?php unset($__componentOriginalbc93d675bb2b6911a649f032cb7415bd6445fe68); ?>
<?php endif; ?>
                                </div>
                                <?php $__errorArgs = ['address.country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e('Country is required'); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                <input type="hidden" name="address[address_id]" value="<?php echo e($address->id ?? null); ?>">
                                    <label>Street Address</label>
                                    <input type="text" name="address[address_line1]"  value="<?php echo e(ucwords($address->address_line1 ?? null)); ?>"
                                        placeholder="House and street name">
                                </div>
                                <?php $__errorArgs = ['address.address_line1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e('Address Line1 is required'); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="eg-input-group">
                                <label>City</label>
                                <input type="text" name="address[city]"
                                        value="<?php echo e(ucwords($address->city ?? null )); ?>"
                                        placeholder="City Name">
                                    <!-- <?php if (isset($component)) { $__componentOriginal37c23a6bbee45b23a5b3cd2401b701aacd33d311 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Cities::class, ['selected' => $profile->city]); ?>
<?php $component->withName('cities'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37c23a6bbee45b23a5b3cd2401b701aacd33d311)): ?>
<?php $component = $__componentOriginal37c23a6bbee45b23a5b3cd2401b701aacd33d311; ?>
<?php unset($__componentOriginal37c23a6bbee45b23a5b3cd2401b701aacd33d311); ?>
<?php endif; ?> -->
                                </div>
                                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e('City is required'); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="eg-input-group">
                                <label>Post Code</label>
                                    <input type="text" name="address[postal_code]" value="<?php echo e($address->postal_code ?? null); ?>"
                                        placeholder="Post Code">
                                </div>
                                <?php $__errorArgs = ['address.postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e('Postal_code is required'); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label>Additional Information</label>
                                    <input type="text" name="address[mobile]" value="<?php echo e($address->mobile ?? null); ?>"
                                        placeholder="Your Phone Number">
                                </div>
                                <?php $__errorArgs = ['address.mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e('Mobile is required'); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="eg-input-group">
                                <input type="text" name="address[email]"
                                        value="<?php echo e($address->user->email ?? null); ?>"
                                        placeholder="Your Email addresss">
                                </div>
                                <div class="eg-input-group mb-0">
                                    <textarea cols="30" rows="7" name="address[notes]" placeholder="Order Notes (Optional)"><?php echo e($profile->notes ?? null); ?></textarea>
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
                                <?php if(!ShoppingCart::isEmpty()): ?>
                                    <?php $__currentLoopData = ShoppingCart::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="single-product">
                                            <div class="product-img">
                                                <img src="<?php echo e(asset('uploads/product/thumbnail/' . $item->product->images)); ?>"
                                                    alt="">
                                            </div>
                                            <div class="product-info">
                                                <h5 class="product-title"><a href="#"><?php echo e($item->name); ?></a></h5>
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
                                                            <?php echo e($item->price); ?></span></strong>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="total-cost-summary">
                            <ul>
                                <li class="subtotal">Total <span>&#8377; <?php echo e(ShoppingCart::total()); ?></span></li>
                                <li>Tax <span><?php echo e(totaltax()); ?></span></li>
                                <li>Total ( tax excl.) <span>&#8377; <?php echo e(ShoppingCart::total()); ?></span></li>
                                <li>Total ( tax incl.) <span>&#8377; <?php echo e(ShoppingCart::total() + totaltax()); ?></span></li>
                            </ul>
                        </div>
                        <div class="total-cost">
                            <ul>
                                <li class="d-flex justify-content-between">Subtotal <span>&#8377;
                                        <?php echo e(ShoppingCart::total() + totaltax()); ?></span></li>
                            </ul>
                        </div>

                        <div class="payment-methods">
                            <div class="form-check payment-check">
                                <input class="form-check-input" type="radio" name="order[payment_type]"
                                    value="online" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Pay Online
                                </label>
                                <img src="<?php echo e(asset('assets/images/payment/payment-cards.png')); ?>"
                                    alt="">
                                <p>Pay Online using Credit/Debit Card, NetBanking, UPI and other various methods.</p>
                            </div>

                            <div class="form-check payment-check paypal">
                                <input class="form-check-input" type="radio" name="order[flexRadioDefault]"
                                    id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    PayPal
                                </label>
                                
                                <a href="#" class="about-paypal">What is PayPal</a>
                            </div>
                            <div class="payment-form-bottom d-flex align-items-center">
                                <input type="checkbox" name="order[term]" id="terms" required>
                                <label for="terms">I have read and agree to the website <a href="#">Terms and
                                        conditions</a></label>
                            </div>
                        </div>
                        <input type="hidden" name="key_id" value="<?php echo e(env('RAZORPAY_KEY')); ?>">
                        <input type="hidden" name="order_id" id="order" required>
                        <input type="hidden" name="name" value="ExelArt">
                        <input type="hidden" name="description" value="Buy Art Service">
                        <input type="hidden" name="prefill[email]" value="<?php echo e(Auth::user()->email); ?>">
                        <input type="hidden" name="prefill[contact]"
                            value="<?php echo e(Auth::user()->profile->phone ?? null); ?>">
                        <input type="hidden" name="amount" value="<?php echo e((ShoppingCart::total() + totalTax())); ?>">
                        <input type="hidden" name="callback_url"
                            value="<?php echo e(route('order.placed')); ?>">
                        <input type="hidden" name="cancel_url" value="<?php echo e(URL::current()); ?>">
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
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
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
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/frontend/checkout.blade.php ENDPATH**/ ?>