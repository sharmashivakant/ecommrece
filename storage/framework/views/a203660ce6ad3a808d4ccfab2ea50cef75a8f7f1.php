<?php $__env->startSection('title', 'Catalogue Detail'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title"><?php echo $__env->yieldContent('title'); ?></strong>
                    </div>
                    <div class="card-body mt-2">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">Name *</label>
                                <span class="form-control"><?php echo e(ucwords($product->name ?? null)); ?> </span>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="first_name">Slug *</label>
                                <span class="form-control"><span
                                        class="bg-light btn-sm">/backend/catalog/</span><?php echo e($product->slug ?? null); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="details">Short Description *</label>
                            <textarea class="form-control custom" readonly><?php echo e(ucwords($product->short_desc ?? null)); ?></textarea>

                        </div>
                        <div class="form-group">
                            <label for="details">Description *</label>
                            <textarea name="details" class="form-control custom" readonly
                                rows="10"><?php echo e(ucwords($product->details ?? null)); ?></textarea>

                        </div>
                        <div class="form-group">
                            <label for="details">Material *</label>
                            <textarea class="form-control custom" name="material" readonly><?php echo e(ucwords($product->material ?? null)); ?></textarea>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="details">Price *</label>
                                <label class="form-control"><?php echo e($product->price ?? 0); ?></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Size *</label>
                                <label class="form-control"><?php echo e($product->size ?? 0); ?></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Sku *</label>
                                <label class="form-control"><?php echo e($product->inventory->sku); ?></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="details">Stock Quantity *</label>
                                <label class="form-control"><?php echo e($product->inventory->quantity); ?></label>
                            </div>
                                <?php
                                    $image = explode(',', $product->images);
                                ?>
                                <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset('uploads/product/images/' . $images)); ?>" alt="..."
                                        class="img-thumbnail custom">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="form-group">
                            <div class="form-check">

                            </div>
                        </div>

                    </div> <!-- /. card-body -->
                </div> <!-- /. card -->
            </div> <!-- /. end-section -->
        </div>
    </div>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/pages/backend/catalogs/show.blade.php ENDPATH**/ ?>