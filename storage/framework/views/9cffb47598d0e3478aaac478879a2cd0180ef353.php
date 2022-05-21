<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo $__env->yieldContent('title'); ?> - TnP Backend</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css')); ?>" type="text/css">
    <?php echo $__env->yieldPushContent('css'); ?>
    <!-- Main style file -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/app.min.css')); ?>" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ preloader -->
    <?php echo $__env->make('shared.backend.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- layout-wrapper -->
    <div class="layout-wrapper">
        <?php echo $__env->make('shared.backend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- content -->
        <div class="content ">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- ./ content -->
        <?php echo $__env->make('shared.backend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- ./ layout-wrapper -->

    <!-- Bundle scripts -->
    <script src="<?php echo e(asset('libs/bundle.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <!-- Main Javascript file -->
    <script src="<?php echo e(asset('dist/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/custom.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script>
        $("document").ready(function(){
       setTimeout(function(){
          $("div#msg").remove();
       }, 3000 ); // 5 secs

    });
    </script>
</body>

</html>
<?php /**PATH D:\work\tallnpreety\resources\views/layouts/backend.blade.php ENDPATH**/ ?>