<div class="form-group">
    <?php echo Form::label('role','Role:'); ?>

    <?php echo Form::text('name', null, ['class'=>'form-control','placeholder'=>'ponga el rol']); ?>

    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger">
            <?php echo e($message); ?>

        </small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

    <h2 class="h3">Lista de Permisos</h2>
    
    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <label class='mr-2'  >
            <?php echo Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']); ?>

            <?php echo e($permission->description); ?>

        </label>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/admin/roles/partials/form.blade.php ENDPATH**/ ?>