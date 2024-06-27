<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="mb-4" style="padding-left: 36%">Inscrições para Residência Médica</h2>
    <?php if(!$openCategoria): ?>
    <?php echo $__env->make('livewire.admin.crud.table.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.residencia.candidato-component')->html();
} elseif ($_instance->childHasBeenRendered('l101663583-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l101663583-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l101663583-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l101663583-0');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.residencia.candidato-component');
    $html = $response->html();
    $_instance->logRenderedChild('l101663583-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>
    <?php if($openCategoria): ?>
    <div class="card p-4 m-4 border-dark">
        <p>dados do usuario</p>
        <p>nome: <?php echo e($nome); ?></p>
        <p>nome_social: <?php echo e($nome_social); ?></p>
        <p>celular: <?php echo e($celular); ?></p>
        <p>email: <?php echo e($email); ?></p>
        <p>cpf: <?php echo e($cpf); ?></p>
    </div>

    <div class="card p-4 m-4 border-dark">
        <h2 class="mx-auto p-2" style="width: 500px">Escolha qual a sua categoria</h2>
        <div class="row" style="justify-content: center">
            <div class="col-lg-2 mb-4" style="width: 40%">
                <div class="card text-white bg-primary border border-black">
                    <div class="card-body">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">MÉDICO</h5>
                        <p class="card-text">Inscreva-se nesta categoria</p>
                        <?php if($categoriaSelecionada === 'medico'): ?>
                            <button type="button" wire:click="cancelarSelecao"
                                class="btn btn-success"><i class="fas fa-check-circle"></i> Selecionado</button>
                        <?php else: ?>
                            <button type="button" wire:click="categoriaSelecionada('medico')" class="btn btn-success"
                                <?php if($categoriaSelecionada): ?> disabled <?php endif; ?>>Escolher</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4" style="width: 40%">
                <div class="card text-white bg-danger border border-black">
                    <div class="card-body">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">MULTIPROFISSIONAL</h5>
                        <p class="card-text">Inscreva-se nesta categoria</p>
                        <?php if($categoriaSelecionada === 'multiprofissional'): ?>
                            <button type="button" wire:click="cancelarSelecao"
                                class="btn btn-success"><i class="fas fa-check-circle"></i> Selecionado</button>
                        <?php else: ?>
                            <button type="button" wire:click="categoriaSelecionada('multiprofissional')"
                                class="btn btn-success"
                                <?php if($categoriaSelecionada): ?> disabled <?php endif; ?>>Escolher</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-success" wire:click="openForm">Prosseguir</button>
        </div>
    </div>

    <?php endif; ?>
    <?php if($openForm): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card p-2 mb-4 bg-light border-dark">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.residencia.crud-form-component', ['formType' => 'form','title' => 'Inscrições Residencia Médica','model' => 'App\Models\Admin\Sesau\Residencia\Formulario','form' => 'admin.sesau.residencia.formulario.form','dados' => $dados])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.residencia.crud-form-component', ['formType' => 'form','title' => 'Inscrições Residencia Médica','model' => 'App\Models\Admin\Sesau\Residencia\Formulario','form' => 'admin.sesau.residencia.formulario.form','dados' => $dados]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if($openTipoProcesso): ?>
    <div class="card p-4 m-4 border-dark">
        <h2 class="mx-auto p-2" style="width: 500px">Escolha o seu tipo de processo</h2>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.residencia.tipo-processo-component')->html();
} elseif ($_instance->childHasBeenRendered('l101663583-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l101663583-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l101663583-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l101663583-2');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.residencia.tipo-processo-component');
    $html = $response->html();
    $_instance->logRenderedChild('l101663583-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>


    <div class="card p-4 m-4 border-dark">
        <p>dados do processo do usuario</p>
        <p>categoria: <?php echo e($categoriaSelecionada); ?></p>
        <p>tipos de processo: <?php echo e($tipoProcesso); ?> </p>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/residencia/residente-component.blade.php ENDPATH**/ ?>