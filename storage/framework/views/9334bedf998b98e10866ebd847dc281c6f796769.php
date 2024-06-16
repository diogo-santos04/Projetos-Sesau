

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.voluntario-component', [])->html();
} elseif ($_instance->childHasBeenRendered('aU2gS0W')) {
    $componentId = $_instance->getRenderedChildComponentId('aU2gS0W');
    $componentTag = $_instance->getRenderedChildComponentTagName('aU2gS0W');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aU2gS0W');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.voluntario-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('aU2gS0W', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.voluntario.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projetos\sesau1\sesau1\resources\views/admin/sesau/voluntario/index.blade.php ENDPATH**/ ?>