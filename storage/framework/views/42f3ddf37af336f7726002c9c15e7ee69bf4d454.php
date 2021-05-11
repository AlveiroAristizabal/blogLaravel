<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text--gray-600">
            <?php echo e($post->name); ?>

        </h1>
        <div class="text-lg  text--gray-500 mb-2">
            <?php echo $post->extract; ?>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            
            <div class="lg:col-span-2"> 
                

                <figure>
                    <?php if($post->imagen): ?>
                    <img class="w-full h-80 object-cover object-center" src="<?php echo e(Storage::url($post->imagen->url)); ?>" alt="">
                    <?php else: ?>
                    <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/08/09/15/44/tower-5475850__340.jpg" alt="">
                    <?php endif; ?>
                </figure>
                <div class="text-base text-gray-500 mt-4;">
                    <?php echo $post->body; ?>

                </div>

            </div>
            
            <aside>
                

                    <h1 class="text-2xl font-bold text-grey-600 mb-4">Mas en <?php echo e($post->category->name); ?></h1>
                    <ul>
                        <?php $__currentLoopData = $similares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mb-4">
                            <a class="flex" href="<?php echo e(route('posts.show', $similar)); ?>">
                                <?php if($similar->imagen): ?>
                            <img class="w-36  h-20 object-cover object-center" src="<?php echo e(Storage::url($similar->imagen->url)); ?>" alt="">
                            <?php else: ?>
                            <img class="w-36  h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/08/09/15/44/tower-5475850__340.jpg" alt="">
                            <?php endif; ?> 
                            <span class="ml-2 text-gray-600" ><?php echo e($similar->name); ?></span>
                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            
            </aside>

        </div>

    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>