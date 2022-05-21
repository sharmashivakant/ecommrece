
<?php $__env->startSection('title','Orders'); ?>
<?php $__env->startSection('content'); ?>
<!-- simple table -->
<div class="col-md-12">
    <div class="card shadow">
        <!-- <div class="card-body"> -->
            <!-- table -->
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success" id="msg">
                <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>
            <table class="table datatables" id="dataTable-1">
                <thead>
                    <tr>

                        <th>#</th>
                        <th>Name</th>
                        <th>Order</th>
                        <th>Payment</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($data->profile->first_name ?? null); ?></td>
                        <td><?php echo e($data->order_id); ?></td>
                        <td><?php echo e($data->payment_id); ?></td>
                        <td><?php echo e($data->amount); ?></td>
                        <td><?php echo e($data->created_at->format('d M,Y @ h:i A')); ?></td>
                        <td>
                            <?php if($data->status == 1): ?>
                            <span class="badge rounded-pill bg-success text-light">Active</span>
                            <?php elseif($data->status == 0): ?>
                            <span class="badge rounded-pill bg-danger text-light">Pending</span>
                            <?php endif; ?>
                        </td>

                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item"
                                    onclick="deleteCustomer('<?php echo e(route('admin.payment.destroy',$data->id)); ?>')"
                                    class="btn btn-primary ">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <!-- </div> -->
    </div>
</div> <!-- simple table -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('backdoor/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('backdoor/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backdoor/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#payments').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/backend/payment/index.blade.php ENDPATH**/ ?>