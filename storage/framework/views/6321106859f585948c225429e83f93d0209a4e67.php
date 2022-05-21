
<?php $__env->startSection('title','Profile'); ?>
<?php $__env->startSection('content'); ?>
<div class="dashbord-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <?php echo $__env->make('shared.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="col-xl-8 col-lg-8">
                <?php if(session('message')): ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <p><strong><?php echo e(session('message')); ?></strong></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
                <form action="<?php echo e(route('profile.update',$profile->id)); ?>" method="POST" enctype="multipart/form-data" id="profile-form">
                    <?php echo csrf_field(); ?>
                    <div class="profile-form-wrapper">
                    <h5>Profile</h5>
                    <div class="profile-top">
                        <div class="user-image">
                            <img src="<?php echo e(asset('uploads/user/thumbnail/'.$profile->image)); ?>" alt="">
                            <div class="prifil-change-icon">
                                <i class="bi bi-camera"></i>
                            </div>
                        </div>
                        <div class="profile-top-btns">
                           <input type="file" name="image" class="upload" />
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="fname">First Name*</label>
                                    <input type="text" id="first_name" name="first_name" value="<?php echo e(ucwords($profile->first_name ?? null)); ?>" placeholder="Your first name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="lname">Last Name*</label>
                                    <input type="text" id="last_name"  name="last_name" value="<?php echo e(ucwords($profile->last_name ?? null)); ?>" placeholder="Your last name" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="email">Email *</label>
                                    <input type="email" id="email" name="email" value="<?php echo e(ucwords($profile->user->email ?? null)); ?>" placeholder="Your email" required readonly>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="Number">Contact Number *</label>
                                    <input type="tel" id="phone" name="phone" value="<?php echo e(ucwords($profile->phone ?? null)); ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="address">Address *</label>
                                    <input type="text" id="address" name="address" value="<?php echo e(ucwords($profile->address ?? null)); ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="city">City *</label>
                                   <?php if (isset($component)) { $__componentOriginal37c23a6bbee45b23a5b3cd2401b701aacd33d311 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Cities::class, ['selected' => $profile->city]); ?>
<?php $component->withName('cities'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37c23a6bbee45b23a5b3cd2401b701aacd33d311)): ?>
<?php $component = $__componentOriginal37c23a6bbee45b23a5b3cd2401b701aacd33d311; ?>
<?php unset($__componentOriginal37c23a6bbee45b23a5b3cd2401b701aacd33d311); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="state">State *</label>
                                    <?php if (isset($component)) { $__componentOriginal45d22e58baddf32bdcd4f49a2ffbd2d4feb8b8ef = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\States::class, ['selected' => $profile->state ?? 'HR']); ?>
<?php $component->withName('states'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45d22e58baddf32bdcd4f49a2ffbd2d4feb8b8ef)): ?>
<?php $component = $__componentOriginal45d22e58baddf32bdcd4f49a2ffbd2d4feb8b8ef; ?>
<?php unset($__componentOriginal45d22e58baddf32bdcd4f49a2ffbd2d4feb8b8ef); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="zip">Zip Code * </label>
                                    <input type="number" id="zip" name="pincode" value="<?php echo e($profile->pincode ?? null); ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="eg-input-group">
                                    <label for="country">Country *</label>
                                    <?php if (isset($component)) { $__componentOriginalbc93d675bb2b6911a649f032cb7415bd6445fe68 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Countries::class, ['name' => 'country','selected' => $profile->country ?? 'IN']); ?>
<?php $component->withName('countries'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbc93d675bb2b6911a649f032cb7415bd6445fe68)): ?>
<?php $component = $__componentOriginalbc93d675bb2b6911a649f032cb7415bd6445fe68; ?>
<?php unset($__componentOriginalbc93d675bb2b6911a649f032cb7415bd6445fe68); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="password">Password *</label>
                                    <input type="password" id="password" name="password" placeholder="Enter a password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="eg-input-group">
                                    <label for="sure-pass">Confirm Password *</label>
                                    <input type="password" id="sure-pass" name="confirm_password" placeholder="Confirm password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div
                                    class="eg-input-group profile-form-sumbit reg-submit-input d-flex align-items-center">
                                    <input type="submit" id="submite-btn" value="Save Change">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/account/profile.blade.php ENDPATH**/ ?>