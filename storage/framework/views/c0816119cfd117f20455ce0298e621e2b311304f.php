<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="mb-4">I Formulários de Inscrição de Residência Médica</h2>
    <div class="page-content compass container-fluid border-dark">
        <div class="row">
            <div class="page-content edit-add container-fluid ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-2 mb-4 bg-light border-dark">
                            <h5>RESIDENCIA</h5>
                        </div>
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