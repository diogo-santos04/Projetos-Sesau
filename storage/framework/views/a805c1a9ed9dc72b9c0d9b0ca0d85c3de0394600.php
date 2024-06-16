<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.juridico.juridico-component', [])->html();
} elseif ($_instance->childHasBeenRendered('MyWDqbX')) {
    $componentId = $_instance->getRenderedChildComponentId('MyWDqbX');
    $componentTag = $_instance->getRenderedChildComponentTagName('MyWDqbX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MyWDqbX');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.juridico.juridico-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('MyWDqbX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.sesau.juridico.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/juridicos/index.blade.php ENDPATH**/ ?>