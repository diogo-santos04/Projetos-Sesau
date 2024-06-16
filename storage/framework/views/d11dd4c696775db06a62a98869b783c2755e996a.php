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
        <input type="hidden" wire:model.prevent="data.membro_id" class="form-control">
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.juridico.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Membro','model' => 'App\Models\Admin\Sesau\Juridico\Membro','label' => 'membro_id','value' => ''.e(isset($data['membro_id']) ? $data['membro_id'] : '0').''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.juridico.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Membro','model' => 'App\Models\Admin\Sesau\Juridico\Membro','label' => 'membro_id','value' => ''.e(isset($data['membro_id']) ? $data['membro_id'] : '0').'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__errorArgs = ['data.membro_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                          
    </div>
    <div class="mb-4 col-4">
        <input type="hidden" wire:model.prevent="data.tipo_funcao_membro_id" class="form-control">
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.juridico.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Tipo Funcao Membro','model' => 'App\Models\Admin\Sesau\Juridico\TipoFuncaoMembro','label' => 'tipo_funcao_membro_id','value' => ''.e(isset($data['tipo_funcao_membro_id']) ? $data['tipo_funcao_membro_id'] : '0').''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.juridico.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Tipo Funcao Membro','model' => 'App\Models\Admin\Sesau\Juridico\TipoFuncaoMembro','label' => 'tipo_funcao_membro_id','value' => ''.e(isset($data['tipo_funcao_membro_id']) ? $data['tipo_funcao_membro_id'] : '0').'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__errorArgs = ['data.tipo_funcao_membro_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                          
    </div>

    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.especie" class="form-control">
        <label for="especie">especie</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_ato" class="form-control">
        <label for="numero_ato">numero_ato</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_ato" class="form-control">
        <label for="data_ato">data_ato</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_diogrande" class="form-control">
        <label for="numero_diogrande">numero_diogrande</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_publicacao" class="form-control">
        <label for="data_publicacao">data_publicacao</label>
    </div>
    
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.numero_processo_sindicancia" class="form-control">
        <label for="numero_processo_sindicancia">numero_processo_sindicancia</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="date" wire:model.defer="data.data_publicacao_despacho_secretario" class="form-control">
        <label for="data_publicacao_despacho_secretario">data_publicacao_despacho_secretario</label>
    </div>
    <div class="form-floating mb-4 col-12">
        <textarea wire:model.defer="data.rubrica" class="form-control" rows="5" cols="50"></textarea>
        <label for="rubrica">rubrica</label>
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
</div><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/sindicancia_membros/form_sindicancia_membro.blade.php ENDPATH**/ ?>