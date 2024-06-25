

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.residencia.residente-component', [])->html();
} elseif ($_instance->childHasBeenRendered('RPB8tNb')) {
    $componentId = $_instance->getRenderedChildComponentId('RPB8tNb');
    $componentTag = $_instance->getRenderedChildComponentTagName('RPB8tNb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RPB8tNb');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.residencia.residente-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('RPB8tNb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.semraiva.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projetos\sesau1\resources\views/admin/sesau/residencia/index.blade.php ENDPATH**/ ?>