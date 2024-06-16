<div>   

<?php if($openForm && $form == $emitForm && $formType != 'modal'): ?>
    <div class="card p-4 mb-4 bg-light-subtle border border-light">
        <div>
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-form-component', ['formType' => ''.e($formType).'','modal' => ''.e($modal).'','title' => ''.e($title).'','model' => ''.e($model).'','form' => ''.e($form).'','modalId' => ''.e($modalId).''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-form-component', ['formType' => ''.e($formType).'','modal' => ''.e($modal).'','title' => ''.e($title).'','model' => ''.e($model).'','form' => ''.e($form).'','modalId' => ''.e($modalId).'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>   
<?php endif; ?>

 
    <?php if(!$openForm): ?>
    <div class="card p-4 mb-4 bg-light-subtle border border-light shadow">
        <?php echo $__env->make('livewire.admin.crud.table.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div>
            <h2 class="my-4">Tabela <?php echo e($title); ?></h2>
            <?php echo $__env->make('livewire.admin.crud.table.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-table-component', ['formType' => ''.e($formType).'','modal' => ''.e($modal).'','title' => ''.e($title).'','model' => ''.e($model).'','form' => ''.e($form).'','modalId' => ''.e($modalId).''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-table-component', ['formType' => ''.e($formType).'','modal' => ''.e($modal).'','title' => ''.e($title).'','model' => ''.e($model).'','form' => ''.e($form).'','modalId' => ''.e($modalId).'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/crud/crud-component.blade.php ENDPATH**/ ?>