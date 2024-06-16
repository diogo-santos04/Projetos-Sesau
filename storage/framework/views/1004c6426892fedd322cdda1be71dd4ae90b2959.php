<div>   
    <?php if($openForm && $form == $emitForm && $formType != 'modal'): ?>
        <div class="card p-4 mb-4">
            <div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crudtab.crud-form-component', ['modelName' => ''.e($modelName).'','formType' => ''.e($formType).'','modal' => ''.e($modal).'','title' => ''.e($title).'','model' => ''.e($model).'','form' => ''.e($form).'','modelId' => ''.e(isset($modelId) ? $modelId : 0).''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crudtab.crud-form-component', ['modelName' => ''.e($modelName).'','formType' => ''.e($formType).'','modal' => ''.e($modal).'','title' => ''.e($title).'','model' => ''.e($model).'','form' => ''.e($form).'','modelId' => ''.e(isset($modelId) ? $modelId : 0).'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>   
    <?php endif; ?>

    <?php if(!$openForm): ?> 
        <div class="card p-4 mb-4">
            <?php echo $__env->make('livewire.admin.crudtab.table.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div>
                <h2 class="my-4">Tabela <?php echo e($title); ?></h2>
                <?php echo $__env->make('livewire.admin.crudtab.table.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crudtab.crud-table-component', ['modelName' => ''.e($modelName).'','formType' => ''.e($formType).'','modal' => ''.e($modal).'','title' => ''.e($title).'','model' => ''.e($model).'','form' => ''.e($form).''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crudtab.crud-table-component', ['modelName' => ''.e($modelName).'','formType' => ''.e($formType).'','modal' => ''.e($modal).'','title' => ''.e($title).'','model' => ''.e($model).'','form' => ''.e($form).'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php /**PATH C:\diogo\sesau1\resources\views/livewire/admin/crudtab/crud-component.blade.php ENDPATH**/ ?>