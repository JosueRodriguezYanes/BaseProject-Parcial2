<?php $__env->startSection('content-admin-css'); ?>
    <link href="<?php echo e(asset('css/adminlte.min.css')); ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo e(asset('css/dataTables.bootstrap4.css')); ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo e(asset('css/toastr.min.css')); ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo e(asset('css/buttons_estilo.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>


    <div class="container" style="">
    
    </div>

    <?php $__env->startSection('archivos-js'); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.menus.superior', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jdryn\OneDrive\Escritorio\BaseProject-main\resources\views/backend/admin/dashboard/vistadashboard.blade.php ENDPATH**/ ?>