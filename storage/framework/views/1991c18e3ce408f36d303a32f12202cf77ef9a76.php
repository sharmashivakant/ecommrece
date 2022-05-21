
<?php $__env->startSection('title', 'Catalog Create'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success" id="msg">
            <?php echo e(session()->get('message')); ?>

        </div>
    <?php endif; ?>
    <div class="card mt-2">
        <div class="card-header">
            Insert Images
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo e(route('admin.catalog.upload')); ?>" enctype="multipart/form-data"
                class="dropzone" id="dropzone">
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </div>
    <form action="<?php echo e(route('admin.catalog.store')); ?>" method="post" id="catalog_form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="card">
            <div class="card-header">
                Basic Details
            </div>
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="eg-input-group mb-3">
                        <label for="first_name">Name *</label>
                        <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>" />
                        <?php if($errors->has('name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="eg-input-group mb-3">
                        <label for="details">Description *</label>
                        <textarea name="details" class="form-control" rows="10"><?php echo e(old('details')); ?></textarea>
                        <?php if($errors->has('details')): ?>
                            <span class="text-danger"><?php echo e($errors->first('details')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="eg-input-group mb-3">
                        <label for="details">Short Description *</label>
                        <textarea class="form-control" name="short_desc"><?php echo e(old('short_desc')); ?></textarea>
                        <?php if($errors->has('short_desc')): ?>
                            <span class="text-danger"><?php echo e($errors->first('short_desc')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="eg-input-group mb-3">
                        <label for="details">Material *</label>
                        <textarea class="form-control" name="material"><?php echo e(old('material')); ?></textarea>
                        <?php if($errors->has('material')): ?>
                            <span class="text-danger"><?php echo e($errors->first('material')); ?></span>
                        <?php endif; ?>
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
                        <input type="text" name="price" value="<?php echo e(old('price')); ?>" class="form-control" />
                        <?php if($errors->has('price')): ?>
                            <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="eg-input-group mb-3">
                        <label for="details">Size *</label>
                        <input type="text" name="size" value="<?php echo e(old('size')); ?>" class="form-control" />
                        <?php if($errors->has('size')): ?>
                            <span class="text-danger"><?php echo e($errors->first('size')); ?></span>
                        <?php endif; ?>
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
                            <input type="text" name="sku" <?php echo e(old('sku')); ?> class="form-control" />
                            <?php if($errors->has('sku')): ?>
                                <span class="text-danger"><?php echo e($errors->first('sku')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="eg-input-group mb-3">
                            <label for="details">Stock Quantity *</label>
                            <input type="text" name="quantity" <?php echo e(old('quantity')); ?> class="form-control" />
                            <?php if($errors->has('quantity')): ?>
                                <span class="text-danger"><?php echo e($errors->first('quantity')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="eg-input-group profile-form-sumbit reg-submit-input d-flex align-items-center mt-2">
                <input type="submit" value="Save">
            </div>
        </div>
        </div>
    </form>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Basic Details</strong>
                </div>
                <div class="card-body mt-2">
                    <form method="post" action="<?php echo e(route('admin.catalog.upload')); ?>" enctype="multipart/form-data"
                        class="dropzone" id="dropzone">
                        <?php echo csrf_field(); ?>
                    </form>
                    <form action="<?php echo e(route('admin.catalog.store')); ?>" method="post" id="catalog_form" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail5">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress5" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress6"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity5">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState5" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip5">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck5">
                                <label class="form-check-label" for="gridCheck5"> Check me out </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div> <!-- /. col -->
    </div> <!-- /. end-section -->





<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.options.dropzone = {
            maxFilesize: 10,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            success: function(file, response) {
                console.log(response);
                $('#catalog_form').append('<input type="hidden" name="images[]" value="' + response['success'] +
                    '" />');
            },
            error: function(file, response) {
                return false;
            }
        };
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/backend/catalogs/create.blade.php ENDPATH**/ ?>