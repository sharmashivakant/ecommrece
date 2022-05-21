
<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="dashbord-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <?php echo $__env->make('shared.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="dashbord-product-status text-center">
                    <h5 class="dashbord-title">Hi  <?php echo e(ucwords($profile->full_name)); ?></h5>
                    <div class="row">
                        <div class="col-lg-3  col-md-3 col-sm-6 ">
                            <div class="product-status-single">
                                <h3>03</h3>
                                <h5>Pending</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="product-status-single">
                                <h3>02</h3>
                                <h5>Processign</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="product-status-single">
                                <h3>01</h3>
                                <h5>Picked</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="product-status-single">
                                <h3>10</h3>
                                <h5>Complete</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/account/dashboard.blade.php ENDPATH**/ ?>