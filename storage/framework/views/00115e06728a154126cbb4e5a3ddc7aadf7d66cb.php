
<?php $__env->startSection('title','Order Placed'); ?>
<?php $__env->startSection('content'); ?>
<div class="error-wrappe mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 ">
                <div class="error-content text-center">
                    <i class="bi bi-check-circle" style="color: green; font-size: 72px"></i>
                    <h2>Order Placed</h2>
                    <p>Thank you, your order has been placed.<br>Your order id is <b><?php echo e(strtoupper($data['razorpay_payment_id'])); ?></b></p>
                    <div class="error-back-btn">
                        <a href="<?php echo e(route('order.index')); ?>" class="primary-btn-md">View Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/frontend/status.blade.php ENDPATH**/ ?>