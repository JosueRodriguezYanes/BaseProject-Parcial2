
<nav class="main-header navbar navbar-expand border-bottom navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: white"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link" style="color: white"><?php echo e($titulo); ?></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-cogs" style="color: white"></i>
                <span class="hidden-xs" style="color: white"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <a href="<?php echo e(route('admin.perfil')); ?>" target="frameprincipal" class="dropdown-item">
                    <i class="fas fa-user"></i></i> Editar Perfil
                </a>
                <div class="dropdown-divider"></div>

                <a href="<?php echo e(route('admin.logout')); ?>" onclick="event.preventDefault();
                    document.getElementById('frm-logout').submit();" class="dropdown-item"> <i class="fas fa-sign-out-alt"></i></i></i> Cerrar Sesión</a>

                <form id="frm-logout" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </li>



    </ul>
</nav>
<?php /**PATH C:\Users\jdryn\OneDrive\Escritorio\BaseProject-main\resources\views/backend/menus/navbar.blade.php ENDPATH**/ ?>