
<?php $__env->startSection('title','Customer'); ?>
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
                <table id="customer" class="table table-custom mb-0 table-hover">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data->first_name ?? null); ?></td>
                            <td><?php echo e($data->last_name ?? null); ?></td>
                            <td><?php echo e($data->user->email ?? null); ?></td>
                            <td><?php echo e($data->phone ?? null); ?></a></td>

                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item"
                                        href="<?php echo e(route('admin.customer.edit',$data->id)); ?>">Edit</a>
                                    <a class="dropdown-item"
                                        onclick="deleteCustomer('<?php echo e(route('admin.customer.destroy',$data->id)); ?>')">Delete</a>

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
$('#customer').DataTable({
    autoWidth: true,
    "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
    ]
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/backend/customer/index.blade.php ENDPATH**/ ?>