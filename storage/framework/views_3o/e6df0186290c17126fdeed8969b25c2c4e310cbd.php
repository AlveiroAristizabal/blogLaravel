<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    <?php if($post->imagen): ?>
        <img class="w-full h-72 object-cover object-center" src="<?php echo e(Storage::url($post->imagen->url)); ?>" alt="">
        <?php else: ?>
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/08/09/15/44/tower-5475850__340.jpg" alt="">
    <?php endif; ?>
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="<?php echo e(route('posts.show', $post)); ?>"><?php echo e($post->name); ?></a>
        </h1>
    </div>
    <div class="text-gray-700 text-base px-6">
        <?php echo $post->extract; ?>

    </div>
    <div class="px-4 pt-4 pb-2">
        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('posts.tag',$tag )); ?>"
                class="inline-block rounded-full bg-gray-200  px-4 py-1 text-sm text-gray-700 mr-2"><?php echo e($tag->name); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</article><?php /**PATH C:\xampp\htdocs\blog\resources\views/components/card-post.blade.php ENDPATH**/ ?>