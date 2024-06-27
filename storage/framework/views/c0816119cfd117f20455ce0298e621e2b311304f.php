        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class="card p-2 mb-4 bg-light border-dark">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.residencia.crud-form-component', ['formType' => 'form','title' => 'Inscrições Residencia Médica','model' => 'App\Models\Admin\Sesau\Residencia\Formulario','form' => 'admin.sesau.residencia.formulario.form'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.residencia.crud-form-component', ['formType' => 'form','title' => 'Inscrições Residencia Médica','model' => 'App\Models\Admin\Sesau\Residencia\Formulario','form' => 'admin.sesau.residencia.formulario.form']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/residencia/formulario-component.blade.php ENDPATH**/ ?>