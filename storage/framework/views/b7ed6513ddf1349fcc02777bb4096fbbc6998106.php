

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.roles.create')): ?>
<a class="btn btn-secondary btn-sm float-right" href="<?php echo e(route('admin.roles.create')); ?>">Nuevo Rol</a> 
<?php endif; ?>
    <h1>Lista de roles</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session('info')): ?>
        <div class="alert alert-success">
            <?php echo e(session('info')); ?>

        </div>
    <?php endif; ?>
<div class="card">
    <div class="cardpbody">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($role->id); ?></td>
                        <td><?php echo e($role->name); ?></td>
                        <td width='10px'>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.roles.edit')): ?>
                            <a class="btn btn-primary" href="<?php echo e(route('admin.roles.edit', $role)); ?>">editar</a>
                            <?php endif; ?>
                        </td>
                        <td width='10px'>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.roles.destroy')): ?>
                                <form action="<?php echo e(route('admin.roles.destroy',$role)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            <?php endif; ?>
                            
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>