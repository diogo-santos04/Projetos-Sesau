

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.voluntario-component', [])->html();
} elseif ($_instance->childHasBeenRendered('m5ppf21')) {
    $componentId = $_instance->getRenderedChildComponentId('m5ppf21');
    $componentTag = $_instance->getRenderedChildComponentTagName('m5ppf21');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('m5ppf21');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.voluntario-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('m5ppf21', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.voluntario.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/voluntario/index.blade.php ENDPATH**/ ?>