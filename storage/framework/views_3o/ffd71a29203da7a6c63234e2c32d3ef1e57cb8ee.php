<div class="card">
            <div class="card-header">
                <input wire:model="search" class="form-control px-8 py-8" placeholder="ingrece el Usuario que busca " >
            </div>
        <?php if($users->count()): ?>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td width='10px'>
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.users.edit', $user)); ?>">editar</a>
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?php echo e($users->links()); ?>

            </div>
        <?php else: ?>
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        <?php endif; ?>
    </div>
    
<?php /**PATH C:\xampp\htdocs\blog\resources\views/livewire/admin/users-index.blade.php ENDPATH**/ ?>