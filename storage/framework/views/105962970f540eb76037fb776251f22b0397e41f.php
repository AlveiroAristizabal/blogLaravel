

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<a class="btn btn-secondary btn-sm float-right" href="">Nuevo Usuario</a> 


<h1>Listado de usuarios</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users-index')->html();
} elseif ($_instance->childHasBeenRendered('A5lBoDP')) {
    $componentId = $_instance->getRenderedChildComponentId('A5lBoDP');
    $componentTag = $_instance->getRenderedChildComponentTagName('A5lBoDP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('A5lBoDP');
} else {
    $response = \Livewire\Livewire::mount('admin.users-index');
    $html = $response->html();
    $_instance->logRenderedChild('A5lBoDP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/users/index.blade.php ENDPATH**/ ?>