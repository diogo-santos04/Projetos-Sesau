<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', [])->html();
} elseif ($_instance->childHasBeenRendered('5k2y7Vs')) {
    $componentId = $_instance->getRenderedChildComponentId('5k2y7Vs');
    $componentTag = $_instance->getRenderedChildComponentTagName('5k2y7Vs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5k2y7Vs');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('5k2y7Vs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.semraiva.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Katiane\sesau\resources\views/admin/sesau/semraiva/semraiva/index.blade.php ENDPATH**/ ?>