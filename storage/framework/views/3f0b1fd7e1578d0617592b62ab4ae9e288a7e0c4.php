<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post.post-component', [])->html();
} elseif ($_instance->childHasBeenRendered('EZJD9dA')) {
    $componentId = $_instance->getRenderedChildComponentId('EZJD9dA');
    $componentTag = $_instance->getRenderedChildComponentTagName('EZJD9dA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EZJD9dA');
} else {
    $response = \Livewire\Livewire::mount('post.post-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('EZJD9dA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Katiane\sesau\resources\views/posts/index.blade.php ENDPATH**/ ?>