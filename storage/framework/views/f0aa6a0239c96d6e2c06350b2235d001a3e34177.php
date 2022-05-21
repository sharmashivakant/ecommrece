
<?php $__env->startSection('title', 'Catalog Detail'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="mb-5">
                <h2 class="mb-0 fs-exact-18">Basic information</h2>
            </div>
            
            <div class="card">
                <div class="card-header">
                    Basic Details
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="eg-input-group mb-3">
                            <label for="first_name">Name *</label>
                            <span class="form-control"><?php echo e(ucwords($product->name ?? null)); ?> </span>

                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group mb-3">
                                <label for="first_name">Slug *</label>
                                <span class="form-control"><span
                                        class="bg-light btn-sm">/backend/catalog/</span><?php echo e($product->slug ?? null); ?></span>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group mb-3">
                                <label for="details">Description *</label>
                                <textarea class="form-control custom" readonly><?php echo e(ucwords($product->details ?? null)); ?></textarea>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group mb-3">
                                <label for="details">Short Description *</label>
                                <textarea class="form-control custom" readonly><?php echo e($product->short_desc ?? null); ?></textarea>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group mb-3">
                                <label for="details">Material *</label>
                                <textarea class="form-control custom" name="material" readonly><?php echo e(ucwords($product->material ?? null)); ?></textarea>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        Pricing
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="eg-input-group mb-3">
                                <label for="details">Price *</label>
                                <label class="form-control"><?php echo e($product->price ?? 0); ?></label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="eg-input-group mb-3">
                                <label for="details">Size *</label>
                                <label class="form-control"><?php echo e($product->size ?? 0); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        Inventory
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="eg-input-group mb-3">
                                    <label for="details">Sku *</label>
                                    <label class="form-control"><?php echo e($product->inventory->sku); ?></label>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group mb-3">
                                    <label for="details">Stock Quantity *</label>
                                    <label class="form-control"><?php echo e($product->inventory->quantity); ?></label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        Images
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="input-group control-group increment">

                                <div class="input-group-btn ms-2">
                                    <div class="card-header">
                                        Images
                                    </div>
                                    <div class="card-body">
                                        <?php
                                            $image = explode(',',$product->images);
                                        ?>
                                        <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img src="<?php echo e(asset('uploads/product/images/'.$images)); ?>" alt="..." class="img-thumbnail custom">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/backend/catalogs/show.blade.php ENDPATH**/ ?>