
<?php $__env->startSection('title',' Edit Customer'); ?>
<?php $__env->startSection('content'); ?>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success" id="msg">
                <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>

            <form action="<?php echo e(route('admin.customer.update',$data->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-lg-12 pb-2">
                        <div class="eg-input-group">
                            <img src="<?php echo e(asset('uploads/'.$data->image)); ?>" style="height: 200px; width:200px;" />
                            <label for="profile">Image *</label>
                            <input type="file" name="profile" class="form-control" />
                            <?php if($errors->has('profile')): ?>
                            <span class="text-danger"><?php echo e($errors->first('profile')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" name="first_name" class="form-control"
                                value="<?php echo e($data->first_name ?? null); ?>" />
                            <?php if($errors->has('first_name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" name="last_name" class="form-control"
                                value="<?php echo e($data->last_name ?? null); ?>" />
                            <?php if($errors->has('last_name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="email">Email *</label>
                            <input type="text" name="email" class="form-control"
                                value="<?php echo e($data->user->email ?? null); ?>" />
                            <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="phone">Phone *</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo e($data->phone ?? null); ?>" />
                            <?php if($errors->has('phone')): ?>
                            <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="password">Password *</label>
                            <input type="password" name="password" class="form-control" />
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="eg-input-group">
                            <label for="password">Confirm Password *</label>
                            <input type="password" name="confirm_password" class="form-control" />
                            <?php if($errors->has('confirm_password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('confirm_password')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="eg-input-group profile-form-sumbit reg-submit-input d-flex align-items-center mt-2">
                            <input type="submit" value="Save">
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/backend/customer/edit.blade.php ENDPATH**/ ?>