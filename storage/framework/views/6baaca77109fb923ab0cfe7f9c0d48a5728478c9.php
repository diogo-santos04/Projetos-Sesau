

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.voluntario-component', [])->html();
} elseif ($_instance->childHasBeenRendered('QF9vx1K')) {
    $componentId = $_instance->getRenderedChildComponentId('QF9vx1K');
    $componentTag = $_instance->getRenderedChildComponentTagName('QF9vx1K');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QF9vx1K');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.voluntario-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('QF9vx1K', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.voluntario.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\diogo\sesau1\resources\views/admin/sesau/voluntario/index.blade.php ENDPATH**/ ?>