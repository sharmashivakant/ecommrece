
<?php $__env->startSection('title','Login to your account'); ?>
<?php $__env->startSection('content'); ?>
<!-- =============== login wrapper start =============== -->
<div class="register-wrapper mt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="register-switcher text-center">
                    <a href="<?php echo e(route('account.register')); ?>" class="resister-btn">Register</a>
                    <a href="#" class="login-btn active">Login</a>
                </div>
            </div>
        </div>
        <div class="row mt-100 justify-content-center">
            <div class="col-xxl-6 col-xl-6 col-lg-8">
                <div class="reg-login-forms">
                    <h4 class="reg-login-title text-center">
                        Login Your Account
                    </h4>
                    <?php if(session()->has('message')): ?>
                    <div class="alert alert-success" id="msg">
                        <?php echo e(session()->get('message')); ?>

                    </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('account.auth')); ?>" method="POST" id="login-form">
                        <?php echo csrf_field(); ?>
                        <div class="reg-input-group">
                            <label for="fname">Email address *</label>
                            <input type="email" name="email" placeholder="Enter your email address">
                            <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="reg-input-group">
                            <label for="password">Password *</label>
                            <input type="password" name="password" placeholder="Enter your password">
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="password-recover-group d-flex justify-content-between flex-wrap">
                            <div class="reg-input-group reg-check-input d-flex align-items-center">
                                <input type="checkbox" id="form-check">
                                <label for="form-check">Remember Me</label>
                            </div>
                            <div class="forgot-password-link">
                                <a href="#">Forgotten password?</a>
                            </div>
                        </div>
                        <div class="reg-input-group reg-submit-input d-flex align-items-center">
                            <input type="submit" id="submite-btn" value="LOG IN">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  login card wrapper end =============== -->




<!-- ===============  Newslatter area start =============== -->
<div class="newslatter-area mt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newslatter-wrap ">
                    <div class="corner-1 position-absolute top-0 start-0">
                        <img src="assets/images/shape/corner1.png" alt="">
                    </div>
                    <div class="corner-2 position-absolute end-0 bottom-0">
                        <img src="assets/images/shape/corner2.png" alt="">
                    </div>

                    <div class="newslatter-content position-relative">
                        <h3>NEWSLETTER</h3>
                        <p> Join now and get 20% off your next purchase!</p>
                        <div class="plane-vactor d-lg-block d-none">
                            <img src="assets/images/shape/plane-vactor.png" alt="">
                        </div>
                        <form action="#" id="newslatter" class="newslatter">
                            <div class="newslatter-form">
                                <input type="text" name="newslatter-form" placeholder="Type Your Email">
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  Newslatter area end =============== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\tallnpreety\resources\views/pages/auth/loginnew.blade.php ENDPATH**/ ?>