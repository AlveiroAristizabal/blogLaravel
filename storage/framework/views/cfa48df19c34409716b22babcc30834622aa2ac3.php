

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>editar roles </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('info')): ?>
        <div class="alert alert-success">
            <?php echo e(session('info')); ?>

        </div>
        
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::model($role, ['route'=>['admin.roles.update', $role], 'method'=>'put']); ?>

                <?php echo $__env->make('admin.roles.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo Form::submit('Actualizar role', ['class'=>'btn btn-primary']); ?>


            <?php echo Form::close( ); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>