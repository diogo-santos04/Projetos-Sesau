<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', [])->html();
} elseif ($_instance->childHasBeenRendered('lgZngMM')) {
    $componentId = $_instance->getRenderedChildComponentId('lgZngMM');
    $componentTag = $_instance->getRenderedChildComponentTagName('lgZngMM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lgZngMM');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('lgZngMM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.semraiva.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/semraiva/semraiva/index.blade.php ENDPATH**/ ?>