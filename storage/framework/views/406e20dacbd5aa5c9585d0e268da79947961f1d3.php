<!doctype html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title','Home'); ?> - 𝑻𝒂𝒍𝒍🅽𝑷𝒓𝒆𝒆𝒕𝒚</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="20x20">

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery.fancybox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

    <!-- Styles CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
<?php echo \Livewire\Livewire::styles(); ?>

<?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>
    <?php echo $__env->make('shared.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('shared.sidecart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--Javascript -->
    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/swiper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.fancybox.min.js')); ?>"></script>

    <!-- Custom JavaScript -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/layouts/web.blade.php ENDPATH**/ ?>