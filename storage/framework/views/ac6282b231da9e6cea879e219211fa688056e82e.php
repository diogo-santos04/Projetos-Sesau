<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', [])->html();
} elseif ($_instance->childHasBeenRendered('aXN6Ehm')) {
    $componentId = $_instance->getRenderedChildComponentId('aXN6Ehm');
    $componentTag = $_instance->getRenderedChildComponentTagName('aXN6Ehm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aXN6Ehm');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('aXN6Ehm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.semraiva.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant_02042024\dant\resources\views/admin/sesau/semraiva/semraiva/index.blade.php ENDPATH**/ ?>