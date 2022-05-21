
<?php $__env->startSection('title','Orders'); ?>
<?php $__env->startSection('content'); ?>
<div class="dashbord-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <?php echo $__env->make('shared.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="order-details">
                    <table class="table order-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="order-id">#</th>
                                <th scope="col" class="order-id">Order Number</th>
                                <th scope="col" class="order-amount">Amount</th>
                                <th scope="col" class="order-date">Order Date</th>
                                <th scope="col" class="order-status">Status</th>
                                <th scope="col" class="order-active">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="order-id"><?php echo e($key+1); ?></td>
                                <td class="order-date"><?php echo e($orders->order_num); ?></td>
                                <td class="order-amount"><?php echo e($orders->amount); ?></td>
                                <td class="order-status"><?php echo e($orders->created_at->format('d M,Y @ h:i A')); ?></td>
                                <td class="order-status">
                                    <?php if($orders->status == 1): ?>
                                    <span class="badge rounded-pill bg-success text-light">Shipping</span>
                                    <?php elseif($orders->status == 0): ?>
                                    <span class="badge rounded-pill bg-danger text-light">Pending</span>
                                    <?php elseif($orders->status == 2): ?>
                                    <span class="badge rounded-pill bg-danger text-light">Delivery</span>
                                    <?php endif; ?>
                                </td>
                                <td class="order-active"><a href="<?php echo e(route('order.show',$orders->id)); ?>"><i class="flaticon-visibility"></i></a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/account/order.blade.php ENDPATH**/ ?>