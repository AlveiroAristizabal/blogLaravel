

<?php $__env->startSection('title', 'Tablero control'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Tablero de control</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>Bien venido al tablero de control.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/index.blade.php ENDPATH**/ ?>