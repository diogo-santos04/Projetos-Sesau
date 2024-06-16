<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.samu-component', [])->html();
} elseif ($_instance->childHasBeenRendered('IYrnahv')) {
    $componentId = $_instance->getRenderedChildComponentId('IYrnahv');
    $componentTag = $_instance->getRenderedChildComponentTagName('IYrnahv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IYrnahv');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.samu-component', []);
    $html = $response->html();
    $_instance->logRenderedChild('IYrnahv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sesau.samu.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/samu/samu/index.blade.php ENDPATH**/ ?>