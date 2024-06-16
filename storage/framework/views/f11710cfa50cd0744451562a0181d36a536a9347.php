

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.voluntario-component', [])->html();
} elseif ($_instance->childHasBeenRendered('SEn2Igw')) {
    $componentId = $_instance->getRenderedChildComponentId('SEn2Igw');
    $componentTag = $_instance->getRenderedChildComponentTagName('SEn2Igw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SEn2Igw');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.voluntario-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('SEn2Igw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.voluntario.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projetos\sesau1\resources\views/admin/sesau/voluntario/index.blade.php ENDPATH**/ ?>