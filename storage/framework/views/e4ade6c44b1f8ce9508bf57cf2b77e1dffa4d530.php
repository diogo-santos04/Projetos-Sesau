

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.residencia.formulario-component', [])->html();
} elseif ($_instance->childHasBeenRendered('LKwKsEF')) {
    $componentId = $_instance->getRenderedChildComponentId('LKwKsEF');
    $componentTag = $_instance->getRenderedChildComponentTagName('LKwKsEF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LKwKsEF');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.residencia.formulario-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('LKwKsEF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.semraiva.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projetos\sesau1\resources\views/admin/sesau/residencia/index.blade.php ENDPATH**/ ?>