<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post.post-component', [])->html();
} elseif ($_instance->childHasBeenRendered('j0F6wFX')) {
    $componentId = $_instance->getRenderedChildComponentId('j0F6wFX');
    $componentTag = $_instance->getRenderedChildComponentTagName('j0F6wFX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('j0F6wFX');
} else {
    $response = \Livewire\Livewire::mount('post.post-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('j0F6wFX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('posts.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant_02042024\sesau\resources\views/posts/index.blade.php ENDPATH**/ ?>