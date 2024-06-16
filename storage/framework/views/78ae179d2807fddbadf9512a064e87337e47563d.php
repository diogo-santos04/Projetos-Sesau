<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.juridico.tipo-component', [])->html();
} elseif ($_instance->childHasBeenRendered('l813258064-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l813258064-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l813258064-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l813258064-0');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.juridico.tipo-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('l813258064-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.sesau.juridico.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/tipos/index.blade.php ENDPATH**/ ?>