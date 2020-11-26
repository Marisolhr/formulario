
<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('navbar'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <h2>Vuelva a intentarlo</h2>
    <form action="<?php echo e(action('App\Http\Controllers\FormularioControlador@validarLogin')); ?>" method="post" >
        <?php echo e(csrf_field()); ?>

        <label for="user">Usuario</label>
        <input type="text" name="user">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    Derechos reservados ##parent-placeholder-d7eb6b340a11a367a1bec55e4a421d949214759f##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\formulario\resources\views/notlogin.blade.php ENDPATH**/ ?>