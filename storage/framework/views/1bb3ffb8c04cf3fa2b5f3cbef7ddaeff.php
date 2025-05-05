<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Panel</title>

    <link href="<?php echo e(asset('images/logo.png')); ?>" rel="icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link href="<?php echo e(asset('fontawesome-free/css/all.min.css')); ?>" type="text/css" rel="stylesheet" />
    <!-- Theme style -->
    <link href="<?php echo e(asset('css/adminlte.min.css')); ?>" type="text/css" rel="stylesheet" />
    <!-- Mensajes Toast -->
    <link href="<?php echo e(asset('css/toastr.min.css')); ?>" type="text/css" rel="stylesheet" />
    <?php echo $__env->yieldContent('content-admin-css'); ?>
</head>



<!-- para iniciar con el menu cerrado colocar
 <body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
 -->

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php echo $__env->make("backend.menus.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make("backend.menus.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-wrapper" style=" background-color: #fff;">
        <!-- redireccionamiento de vista -->

        <iframe style="width: 100%; resize: initial; overflow: hidden; min-height: 96vh" frameborder="0"  scrolling="" id="frameprincipal" src="<?php echo e(route($ruta)); ?>" name="frameprincipal">
        </iframe>

    </div>

    <?php echo $__env->make("backend.menus.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>


<script src="<?php echo e(asset('js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/adminlte.min.js')); ?>" type="text/javascript"></script>


<?php echo $__env->yieldContent('content-admin-js'); ?>

</body>
</html>
<?php /**PATH C:\Users\jdryn\OneDrive\Escritorio\BaseProject-main\resources\views/backend/index.blade.php ENDPATH**/ ?>