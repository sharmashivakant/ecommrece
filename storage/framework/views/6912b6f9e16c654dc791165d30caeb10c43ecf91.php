
<?php $__env->startSection('title', 'Shopping Cart'); ?>
<?php $__env->startSection('content'); ?>
    <div class="cart-area mt-120">
        <?php if(!ShoppingCart::isEmpty()): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.index')->html();
} elseif ($_instance->childHasBeenRendered('DYLLvFQ')) {
    $componentId = $_instance->getRenderedChildComponentId('DYLLvFQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('DYLLvFQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DYLLvFQ');
} else {
    $response = \Livewire\Livewire::mount('cart.index');
    $html = $response->html();
    $_instance->logRenderedChild('DYLLvFQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php else: ?>
        <div class="row justify-content-center">
            <div class="col-lg-8 ">
                <div class="error-content text-center">
                    <i class="bi bi-cart" style="color: green; font-size: 72px"></i>
                    <h2>Cart Empty</h2>
                    <p>You have no items in your shopping cart.</p>
                    <div class="error-back-btn">
                        <a href="<?php echo e(route('home')); ?>" class="primary-btn-md">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/frontend/cart.blade.php ENDPATH**/ ?>