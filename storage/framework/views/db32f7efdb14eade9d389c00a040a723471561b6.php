

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.tags.create')): ?>
        <a class="btn btn-secondary btn-sm float-right px-2"  href="<?php echo e(route('admin.tags.create')); ?>">Nueva etiqueta</a>
    <?php endif; ?>
    <h1>Listado de etiqueta</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(session('info')): ?>
<div class="alert alert-success">
    <strong><?php echo e(session('info')); ?></strong>
</div>
<?php endif; ?>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($tag->id); ?></td>
                    <td><?php echo e($tag->name); ?></td>
                    <td width="10px">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.tags.edit')): ?>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.tags.edit', $tag)); ?>">Editar</a>
                        <?php endif; ?>
                    </td>
                    <td width="10px">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.tags.destroy')): ?>
                            <form action="<?php echo e(route('admin.tags.destroy',$tag)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
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




<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/tags/index.blade.php ENDPATH**/ ?>