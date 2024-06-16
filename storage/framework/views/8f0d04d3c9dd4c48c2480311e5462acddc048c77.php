<div class="col-lg-4 mb-4">
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session('message')); ?></div>
    <?php endif; ?>

    <div class="p-4 mb-4">
        <div>
            <h4 class="my-8">Tabela <?php echo e($title); ?> </h4>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.tipo-form-component', ['modal' => ''.e($modal).'','namespace' => ''.e($model).'','form' => ''.e($form).'','title' => ''.e($title).''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.tipo-form-component', ['modal' => ''.e($modal).'','namespace' => ''.e($model).'','form' => ''.e($form).'','title' => ''.e($title).'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.tipo-table-component', ['modal' => ''.e($modal).'','model' => ''.e($model).'','form' => ''.e($form).'','title' => ''.e($title).''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.tipo-table-component', ['modal' => ''.e($modal).'','model' => ''.e($model).'','form' => ''.e($form).'','title' => ''.e($title).'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/voluntario/tipo-component.blade.php ENDPATH**/ ?>