<div class="dashbord-switcher">
    <a href="<?php echo e(route('user.dashboard')); ?>" class="<?php echo e(request()->routeIs('user.dashboard') ? 'active' : ''); ?>"><i class="flaticon-dashboard"></i> Dashboard</a>
    <a href="<?php echo e(route('profile')); ?>" class="<?php echo e(request()->routeIs('profile') ? 'active' : ''); ?>"><i class="flaticon-user"></i> My Profile</a>
    <a href="<?php echo e(route('order.index')); ?>" class="<?php echo e(request()->routeIs('order.index') ? 'active' : ''); ?>"><i class="flaticon-shopping-bag"></i> My Order</a>
    <a href="<?php echo e(route('account.logout')); ?>"><i class="flaticon-logout"></i> Logout</a>
</div>

<?php /**PATH D:\work\tallnpreety\resources\views/shared/sidebar.blade.php ENDPATH**/ ?>