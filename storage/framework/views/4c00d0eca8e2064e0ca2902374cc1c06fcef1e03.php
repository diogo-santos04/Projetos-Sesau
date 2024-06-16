<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post.post-component', [])->html();
} elseif ($_instance->childHasBeenRendered('BBzmciE')) {
    $componentId = $_instance->getRenderedChildComponentId('BBzmciE');
    $componentTag = $_instance->getRenderedChildComponentTagName('BBzmciE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BBzmciE');
} else {
    $response = \Livewire\Livewire::mount('post.post-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('BBzmciE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\katiane\sesau\resources\views/posts/index.blade.php ENDPATH**/ ?>