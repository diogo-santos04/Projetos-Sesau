<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', [])->html();
} elseif ($_instance->childHasBeenRendered('7wwsqVv')) {
    $componentId = $_instance->getRenderedChildComponentId('7wwsqVv');
    $componentTag = $_instance->getRenderedChildComponentTagName('7wwsqVv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7wwsqVv');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.ficha-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('7wwsqVv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.semraiva.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\diogo\sesau1\resources\views/admin/sesau/semraiva/semraiva/index.blade.php ENDPATH**/ ?>