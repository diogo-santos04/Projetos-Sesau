<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="mb-4" style="padding-left: 33%">Inscrições para Residência Médica</h2>
    <div class="page-content compass container-fluid border-dark">
        <div class="row">
            <div class="page-content edit-add container-fluid ">
                <div class="row">
                    <div class="card p-2 mb-4 bg-light border-dark">
                        <div class="row">
                            <div class="form-floating mb-4 col-3">
                                <input type="text" wire:model.prevent="data.nome" class="form-control">
                                <label for="nome">2 - Nome Completo*</label>
                            </div>
                            <div class="form-floating mb-4 col-3">
                                <input type="text" wire:model.prevent="data.nome_social" class="form-control">
                                <label for="nomesocial">3 - Nome Social</label>
                            </div>
                            <div class="form-floating mb-4 col-3">
                                <input type="number" wire:model.prevent="data.cpf" class="form-control">
                                <label for="cpf">4 - CPF*</label>
                            </div>
                            <div class="form-floating mb-4 col-3">
                                <input type="number" wire:model.prevent="data.celular" class="form-control">
                                <label for="celular">5 - Celular*</label>
                            </div>
                            <div class="form-floating mb-4 col-3">
                                <input type="text" wire:model.prevent="data.email" class="form-control">
                                <label for="email">6 - Email*</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card p-2 mb-4 bg-light border-dark">
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','title' => 'Inscrições Residencia Médica','model' => 'App\Models\Admin\Sesau\Residencia\Formulario','form' => 'admin.sesau.residencia.formulario.form'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','title' => 'Inscrições Residencia Médica','model' => 'App\Models\Admin\Sesau\Residencia\Formulario','form' => 'admin.sesau.residencia.formulario.form']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/residencia/formulario-component.blade.php ENDPATH**/ ?>