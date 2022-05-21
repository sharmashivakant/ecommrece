<div class="main-cart-sidebar">
    <div class="cart-top">
        <div class="cart-close-icon">
            <i class="flaticon-letter-x"></i>
        </div>
        <?php if(!ShoppingCart::isEmpty()): ?>
        <ul class="cart-product-grid">
            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="single-cart-product">
                <div class="cart-product-info d-flex align-items-center">
                    <div class="product-img"><img src="<?php echo e(asset('uploads/product/images/'.$item->product->picture[0])); ?>" alt=""
                            class="img-fluid"></div>
                    <div class="product-info">
                        <a href="product-details.html">
                            <h5 class="product-title"><?php echo e(ucwords($item->name)); ?></h5>
                        </a>
                        <ul class="product-rating d-flex">
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star-fill"></i></li>
                            <li><i class="bi bi-star"></i></li>
                        </ul>
                        <p class="product-price"><span>1</span>x <span class="p-price">&#8377; <?php echo e($item->price); ?></span>
                        </p>
                    </div>
                </div>
                <div class="cart-product-delete-btn">
                    <a wire:click="removeIt('<?php echo e($item->__raw_id); ?>')" href="javascript:void(0)"><i class="flaticon-letter-x"></i></a>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>
    <div class="cart-bottom">
        <?php if(!ShoppingCart::isEmpty()): ?>
        <div class="cart-total d-flex justify-content-between">
            <label>Subtotal :</label>
            <span><?php echo e(ShoppingCart::total()); ?></span>
        </div>
        <div class="cart-btns">
            <a href="<?php echo e(route('order.checkout')); ?>" class="cart-btn checkout">CHECKOUT</a>
            <a href="<?php echo e(route('order.checkout','cart')); ?>" class="cart-btn cart">VIEW CART</a>
        </div>
        <?php else: ?>
        <div class="cart-total d-flex justify-content-between">
            <h2>You have no items in your shopping cart.</h2>
        </div>
    <?php endif; ?>
    </div>
</div>
<?php /**PATH D:\work\tallnpreety\resources\views/livewire/cart/view.blade.php ENDPATH**/ ?>