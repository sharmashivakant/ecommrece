
<?php $__env->startSection('title','Orders'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card shadow">
        <div class="card-body">
            <div class=" mt-3">
                <?php if (isset($component)) { $__componentOriginala8ce70a6680f50c3c25132c7e8e87a009c00b28a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Validation::class, []); ?>
<?php $component->withName('validation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8ce70a6680f50c3c25132c7e8e87a009c00b28a)): ?>
<?php $component = $__componentOriginala8ce70a6680f50c3c25132c7e8e87a009c00b28a; ?>
<?php unset($__componentOriginala8ce70a6680f50c3c25132c7e8e87a009c00b28a); ?>
<?php endif; ?>
                <?php if(session()->has('message')): ?>
                <div class="alert alert-success" id="msg">
                    <?php echo e(session()->get('message')); ?>

                </div>
                <?php endif; ?>
                <table class="table table-custom table-lg mb-0" id="orders">
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Paid</th>
                            <th>Status</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <a href="#"><?php echo e($order->order_id); ?></a>
                            </td>
                            <td><?php echo e($order->created_at->format('d M,Y')); ?></td>
                            <td><?php echo e($order->profile->first_name ?? null); ?></td>
                            <td>&#8377;<?php echo e($order->product->price ?? null); ?></td>
                            <td>
                                <?php if($order->status == 1): ?>
                                <span class="badge rounded-pill bg-success text-light">Active</span>
                                <?php elseif($order->status == 0): ?>
                                <span class="badge rounded-pill bg-danger text-light">Pending</span>
                                <?php elseif($order->status == 2): ?>
                                <span class="badge rounded-pill bg-danger text-light">Delivery</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($order->product->name ?? null); ?></td>
                            <td><?php echo e($order->amount); ?></td>
                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <!-- <a class="dropdown-item" href="#">Remove</a> -->
                                    <a class="dropdown-item"
                                        onclick="deleteCustomer('<?php echo e(route('admin.orders.destroy',$order->id)); ?>')"
                                        class="btn btn-primary ">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/theme-new/css/dataTables.bootstrap4.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets/theme-new/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/theme-new/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script>
$('#orders').DataTable({
    autoWidth: true,
    "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
    ]
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/backend/orders/index.blade.php ENDPATH**/ ?>