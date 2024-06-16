<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', [])->html();
} elseif ($_instance->childHasBeenRendered('qifZwh9')) {
    $componentId = $_instance->getRenderedChildComponentId('qifZwh9');
    $componentTag = $_instance->getRenderedChildComponentTagName('qifZwh9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qifZwh9');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('qifZwh9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.semraiva.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/semraiva/ficha/index.blade.php ENDPATH**/ ?>