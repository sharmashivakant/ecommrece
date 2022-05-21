
<?php $__env->startSection('title', 'Manage Catalogue'); ?>
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
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <a href="#"><?php echo e($key+1); ?></a>
                            </td>
                            <td class="sorting_1">
                                <div class="d-flex align-items-center"><a href="app-product.html" class="me-4">
                                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"><?php
                                            $image = explode(',',$product->images);

                                            ?><img src="<?php echo e(asset('uploads/product/images/'.$image[0])); ?>"
                                                width="40" height="40" alt=""></div>
                                    </a>
                                    <div><a href="app-product.html" class="text-reset"><?php echo e($product->name); ?></a>
                                        <div class="sa-meta mt-0">
                                            <ul class="sa-meta__list">
                                                </li>
                                                <li class="sa-meta__item">SKU: <span title="Click to copy product SKU"
                                                        class="st-copy"><?php echo e($product->inventory->sku ?? null); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo e($product->category->name ?? null); ?></td>
                            <td>
                                <?php if($product->status == 1): ?>
                                <span class="badge rounded-pill bg-success text-light">In Stock</span>
                                <?php elseif($product->status == 0): ?>
                                <span class="badge rounded-pill bg-danger text-light">Out Of Stock</span>
                                <?php endif; ?>
                            </td>
                            <td>&#8377;<?php echo e($product->price); ?></td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="<?php echo e(route('admin.catalog.show',$product->slug)); ?>"
                                                class="dropdown-item">Show</a>
                                            <a href="<?php echo e(route('admin.catalog.edit',$product->slug)); ?>"
                                                class="dropdown-item">Edit</a>
                                            <a class="dropdown-item"
                                                onclick="deleteCustomer('<?php echo e(route('admin.catalog.destroy',$product->id)); ?>')">Delete</a>
                                        </div>
                                    </div>
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
$('#products').DataTable({
    autoWidth: true,
    "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
    ]
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/backend/catalogs/index.blade.php ENDPATH**/ ?>