<div class="row">
    <div class="mb-4 col-4">
        <input type="hidden" wire:model.prevent="data.sindicancia_id" class="form-control">
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.juridico.dropdown-component', ['color' => 'secondary','columnName' => 'id','columnId' => 'id','titulo' => 'Sindicancia','model' => 'App\Models\Admin\Sesau\Juridico\Sindicancia','label' => 'sindicancia_id','value' => ''.e(isset($data['sindicancia_id']) ? $data['sindicancia_id'] : '0').''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.juridico.dropdown-component', ['color' => 'secondary','columnName' => 'id','columnId' => 'id','titulo' => 'Sindicancia','model' => 'App\Models\Admin\Sesau\Juridico\Sindicancia','label' => 'sindicancia_id','value' => ''.e(isset($data['sindicancia_id']) ? $data['sindicancia_id'] : '0').'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__errorArgs = ['data.sindicancia_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                          
    </div>
    <div class="mb-4 col-4">
        <input type="hidden" wire:model.prevent="data.pessoa_id" class="form-control">
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.juridico.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Pessoa','model' => 'App\Models\Admin\Sesau\Juridico\Pessoa','label' => 'pessoa_id','value' => ''.e(isset($data['pessoa_id']) ? $data['pessoa_id'] : '0').''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.juridico.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Pessoa','model' => 'App\Models\Admin\Sesau\Juridico\Pessoa','label' => 'pessoa_id','value' => ''.e(isset($data['pessoa_id']) ? $data['pessoa_id'] : '0').'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__errorArgs = ['data.pessoa_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                          
    </div>

    <div class="row form-check form-switch">
        <div class="mb-4 px-4">
            <label for="status" class="form-check-label">Status</label>
            <input type="checkbox" wire:model="data.status" id="status" class="form-check-input">
            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
</div><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/sindicancia_pessoas/form_sindicancia_pessoa.blade.php ENDPATH**/ ?>