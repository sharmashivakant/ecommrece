<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend Access</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" />

    <!-- Themify icons -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/icons/themify-icons/themify-icons.css')); ?>" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/app.min.css')); ?>" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="auth">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Backend Access</h1>
                                </div>
                                <form class="mb-5" method="POST" action="<?php echo e(route('account.auth')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" autofocus >
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Enter password" >
                                    </div>
                                    <!-- <div class="text-center text-lg-start"> -->
                                         <a href="<?php echo e(route('admin.admin.dashboard')); ?>" class="btn btn-primary">Sign In</a>
                                        <!-- <button class="btn btn-primary">Sign In</button> -->
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bundle scripts -->
    <script src="<?php echo e(asset('libs/bundle.js')); ?>"></script>
    <!-- Main Javascript file -->
    <script src="<?php echo e(asset('dist/js/app.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/pages/auth/login.blade.php ENDPATH**/ ?>