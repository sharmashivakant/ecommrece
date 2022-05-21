
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Backend Access</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/theme-new/css/simplebar.css')); ?>">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/theme-new/css/feather.css')); ?>">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/theme-new/css/daterangepicker.css')); ?>">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/theme-new/css/app-light.css')); ?>" id="lightTheme">
    <link rel="stylesheet" href="<?php echo e(asset('assets/theme-new/css/app-dark.css')); ?>" id="darkTheme" disabled>
    <?php echo method_field('css'); ?>
  </head>
  <body class="vertical">
    <div class="wrapper">
      <?php echo $__env->make('shared.backend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('shared.backend.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <?php echo $__env->yieldContent('content'); ?>
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <?php echo $__env->make('shared.backend.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </main> <!-- main -->
    </div> <!-- .wrapper -->

    <script src="<?php echo e(asset('assets/theme-new/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/theme-new/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/theme-new/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/theme-new/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/theme-new/js/simplebar.min.js')); ?>"></script>
    <script src='<?php echo e(asset('assets/theme-new/js/daterangepicker.js')); ?>'></script>
    <script src='<?php echo e(asset('assets/theme-new/js/jquery.stickOnScroll.js')); ?>'></script>
    <script src="<?php echo e(asset('assets/theme-new/js/tinycolor-min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/theme-new/js/config.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/theme-new/js/apps.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>

    <script>
        $("document").ready(function(){
       setTimeout(function(){
          $("div#msg").remove();
       }, 3000 ); // 5 secs

    });
    </script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/layouts/admin.blade.php ENDPATH**/ ?>