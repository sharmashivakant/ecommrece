<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-8">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Product Title</th>
                        <th scope="col">Unite Price</th>
                        
                        
                        <th scope="col">Subtotal</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!ShoppingCart::isEmpty()): ?>
                        <?php $__currentLoopData = ShoppingCart::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="image-col">
                                    <img src="<?php echo e(asset('uploads/product/images/'.$item->product->picture[0])); ?>" alt="">
                                </td>
                                <td class="product-col"><a href="product-details.html"
                                        class="product-title"><?php echo e($item->name); ?></a></td>
                                <td class="unite-col"> &#8377; <?php echo e($item->price); ?> </span></del>
                                    <span class="unite-price"></span></td>
                                
                                
                                <td class="total-col">&#8377; <?php if($item->discount_price): ?> <?php echo e($item->discount_price + $item->tax); ?> <?php else: ?> <?php echo e($item->price + $item->tax); ?> <?php endif; ?></td>
                                <td class="delete-col">
                                    <div class="delete-icon">
                                        <a href="javascript:void(0)" wire:click="removeIt('<?php echo e($item->__raw_id); ?>')"><i class="flaticon-letter-x"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-60">
        <div class="col-xxl-4 col-lg-4">
            <div class="cart-coupon-input">
                
            </div>
        </div>
        <div class="col-xxl-8 col-lg-8">
            <table class="table total-table">
                <tbody>
                    <tr>
                        <td class="tt-left">Cart Totals</td>
                        <td></td>
                        <td class="tt-right">&#8377; <?php echo e(ShoppingCart::total()); ?></td>
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
                                <li>&#8377; <?php echo e(ShoppingCart::total()); ?></li>
                                <li>&#8377; <?php echo e(ShoppingCart::total() + totaltax()); ?></li>
                                <li>&#8377; <?php echo e(totalTax()); ?></li>
                                <li></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td class="tt-left">Subtotal</td>
                        <td>
                        </td>
                        <td class="tt-right">&#8377; <?php echo e((ShoppingCart::total() + totalTax())); ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="cart-proceed-btns">
                <a href="<?php echo e(route('order.checkout')); ?>" class="cart-proceed">Proceed to Checkout</a>
                <a href="product.html" class="continue-shop">Continue to shopping</a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/livewire/cart/index.blade.php ENDPATH**/ ?>