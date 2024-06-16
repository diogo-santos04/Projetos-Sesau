<div class="row">

    <div class="mb-4 col-4">
        <fieldset disabled>
            <input type="hidden" wire:model.defer="data.tipo_atividade_id" class="form-control">
            
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Tipo Atividade','model' => 'App\Models\Admin\Sesau\Voluntario\TipoAtividade','label' => 'tipo_atividade_id','value' => ''.e(isset($data['tipo_atividade_id']) ? $data['tipo_atividade_id'] : '0').''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Tipo Atividade','model' => 'App\Models\Admin\Sesau\Voluntario\TipoAtividade','label' => 'tipo_atividade_id','value' => ''.e(isset($data['tipo_atividade_id']) ? $data['tipo_atividade_id'] : '0').'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php $__errorArgs = ['data.tipo_atividade_id'];
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
    </fieldset>
    <div class="mb-4 col-4">
        <fieldset disabled>
            <input type="hidden" wire:model.defer="data.tipo_seguimento_id" class="form-control">
            
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Tipo Seguimento','model' => 'App\Models\Admin\Sesau\Voluntario\TipoSeguimento','label' => 'tipo_seguimento_id','value' => ''.e(isset($data['tipo_seguimento_id']) ? $data['tipo_seguimento_id'] : '0').''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Tipo Seguimento','model' => 'App\Models\Admin\Sesau\Voluntario\TipoSeguimento','label' => 'tipo_seguimento_id','value' => ''.e(isset($data['tipo_seguimento_id']) ? $data['tipo_seguimento_id'] : '0').'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php $__errorArgs = ['data.tipo_seguimento_id'];
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
    </fieldset>
    <div class="mb-4 col-4">
        <fieldset disabled>
            <input type="hidden" wire:model.defer="data.tipo_regiao_urbana_id" class="form-control">
            
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.voluntario.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Tipo Regiao Urbana','model' => 'App\Models\Admin\Sesau\Voluntario\TipoRegiaoUrbana','label' => 'tipo_regiao_urbana_id','value' => ''.e(isset($data['tipo_regiao_urbana_id']) ? $data['tipo_regiao_urbana_id'] : '0').''])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.voluntario.dropdown-component', ['color' => 'secondary','columnName' => 'nome','columnId' => 'id','titulo' => 'Tipo Regiao Urbana','model' => 'App\Models\Admin\Sesau\Voluntario\TipoRegiaoUrbana','label' => 'tipo_regiao_urbana_id','value' => ''.e(isset($data['tipo_regiao_urbana_id']) ? $data['tipo_regiao_urbana_id'] : '0').'']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php $__errorArgs = ['data.tipo_regiao_urbana_id'];
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
    </fieldset>

    <form action="">
        <fieldset disabled="disabled">
            <div class="row">
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.razao_social" class="form-control">
                    <label for="razao_social">Razao Social</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.nome_fantasia"class="form-control">
                    <label for="nome_fantasia">Nome fantasia</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.sigla" class="form-control">
                    <label for="sigla">Sigla</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.cnpj" class="form-control">
                    <label for="cnpj">CNPJ</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.email" class="form-control">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.telefone" class="form-control">
                    <label for="telefone">Telefone</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.fone_contato" class="form-control">
                    <label for="contato">Contato</label>
                </div>
                <div class="form-check form-switch col-2">
                    <div class="mb-4 px-4">
                        <label for="status" class="form-check-label">Status</label>
                        <input type="checkbox" wire:model="data.status" id="status" class="form-check-input">
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error"><?php echo e($mssage); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row form-check form-switch col-2">
                    <div class="mb-4 px-4">
                        <label for="cv" class="form-check-label">CV</label>
                        <input type="checkbox" wire:model="data.cv" id="cv" class="form-check-input">
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error"><?php echo e($mssage); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row form-check form-switch col-3">
                    <div class="mb-4 px-4">
                        <label for="pe" class="form-check-label">PE</label>
                        <input type="checkbox" wire:model="data.pe" id="status" class="form-check-input">
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error"><?php echo e($mssage); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-floating mb-4 col-3">
                    <select wire:model.defer="data.classificacao" class="form-select"
                        aria-label="Default select example">
                        <option selected>---SELECIONE---</option>
                        <option value="1">AZUL</option>
                        <option value="2">VERDE</option>
                        <option value="3">AMARELA</option>
                        <option value="4">VERMELHA</option>
                    </select>
                    <label for="select">Classificao</label>
                </div>
                <div class="form-floating mb-4 col-3">
                    <select wire:model.defer="data.risco" class="form-select" aria-label="Default select example">
                        <option selected>---SELECIONE---</option>
                        <option value="1">AZUL</option>
                        <option value="2">VERDE</option>
                        <option value="3">AMARELA</option>
                        <option value="4">VERMELHA</option>
                    </select>
                    <label for="select">Risco</label>
                </div>
                <div class="form-floating mb-4 col-2">
                    <select wire:model.defer="data.prioridade" class="form-select"
                        aria-label="Default select example">
                        <option selected>---SELECIONE---</option>
                        <option value="1">BAIXA</option>
                        <option value="2">NORMAL</option>
                        <option value="3">ALTA</option>
                        <option value="4">URGENTE</option>
                        <option value="5">IMEDIATA</option>
                    </select>
                    <label for="select">Prioridade</label>
                </div>
                <div class="form-floating mb-4 col-2">
                    <select wire:model.defer="data.complexidade" class="form-select"
                        aria-label="Default select example">
                        <option selected>---SELECIONE---</option>
                        <option value="1">BAIXA</option>
                        <option value="2">MEDIA</option>
                        <option value="3">ALTA</option>
                    </select>
                    <label for="select">Complexidade</label>
                </div>
                <div class="form-floating mb-4 col-2">
                    <select wire:model.defer="data.situacao" class="form-select" aria-label="Default select example">
                        <option selected>---SELECIONE---</option>
                        <option value="1">ABERTA</option>
                        <option value="2">FECHADA</option>
                    </select>
                    <label for="select">Situação</label>
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label">Descrição</label>
                    <textarea class="form-control" wire:model.defer="data.descricao" rows="4"></textarea>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="number" wire:model.defer="data.cep" class="form-control">
                    <label for="cep">CEP</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.endereco" class="form-control">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="form-floating mb-4 col-2">
                    <input type="text" wire:model.defer="data.numero" class="form-control">
                    <label for="numero">Numero</label>
                </div>
                <div class="form-floating mb-4 col-2">
                    <input type="text" wire:model.defer="data.uf" class="form-control">
                    <label for="uf">Uf</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.bairro" class="form-control">
                    <label for="bairro">Bairro</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.cidade" class="form-control">
                    <label for="cidade">Cidade</label>
                </div>
                <div class="form-floating mb-4 col-4">
                    <input type="text" wire:model.defer="data.complemento" class="form-control">
                    <label for="complemento">Complemento</label>
                </div>
                <div class="form-floating mb-4 col-12">
                    <input type="text" wire:model.defer="data.url" class="form-control">
                    <label for="url">URL</label>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<?php /**PATH C:\diogo\sesau1\resources\views/admin/sesau/voluntario/instituicoes/viewForm.blade.php ENDPATH**/ ?>