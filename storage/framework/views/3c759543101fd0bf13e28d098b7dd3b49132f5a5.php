

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.dant-component')->html();
} elseif ($_instance->childHasBeenRendered('f8BrIdi')) {
    $componentId = $_instance->getRenderedChildComponentId('f8BrIdi');
    $componentTag = $_instance->getRenderedChildComponentTagName('f8BrIdi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('f8BrIdi');
} else {
    $response = \Livewire\Livewire::mount('dant.dant-component');
    $html = $response->html();
    $_instance->logRenderedChild('f8BrIdi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant\dant\resources\views/index.blade.php ENDPATH**/ ?>