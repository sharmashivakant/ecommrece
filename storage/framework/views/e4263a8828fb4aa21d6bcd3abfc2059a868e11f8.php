<?php $__env->startSection('title', 'Manage Catalogue'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <div class="row">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success" id="msg">
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title"><?php echo $__env->yieldContent('title'); ?></strong>
                    </div>
                    <table class="table datatables" id="products">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td>
                                        <?php
                                            $image = explode(',', $product->images);
                                        ?>
                                        <img src="<?php echo e(asset('uploads/product/images/' . $image[0])); ?>" width="40" height="40"
                                            alt="">
                                    </td>
                                    <td><?php echo e($product->name ?? null); ?></td>
                                    <td><?php echo e($product->category->name ?? null); ?></td>
                                    <td>&#8377;<?php echo e($product->price); ?></td>
                                    <td>
                                        <?php if($product->status == 1): ?>
                                            <span class="badge rounded-pill bg-success text-light">In Stock</span>
                                        <?php elseif($product->status == 0): ?>
                                            <span class="badge rounded-pill bg-danger text-light">Out Of Stock</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="<?php echo e(route('admin.catalog.show', $product->slug)); ?>">Show</a>
                                            <a class="dropdown-item"
                                                href="<?php echo e(route('admin.catalog.edit', $product->slug)); ?>">Edit</a>
                                            <a class="dropdown-item"
                                                onclick="deleteCustomer('<?php echo e(route('admin.catalog.destroy', $product->id)); ?>')">Remove</a>
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
        <link href="<?php echo e(asset('backdoor/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <?php $__env->stopPush(); ?>

    <?php $__env->startPush('js'); ?>
        <script src="<?php echo e(asset('backdoor/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backdoor/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
        <script>
            $(document).ready(function() {
                $('#products').DataTable();
            });
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/pages/backend/catalogs/index.blade.php ENDPATH**/ ?>