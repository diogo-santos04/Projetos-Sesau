
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','modal' => 'TipoFuncaoPessoa','title' => 'Tipo Função Pessoa','model' => 'App\Models\Admin\Sesau\Juridico\TipoFuncaoPessoa','form' => 'admin.sesau.juridico.tipo_funcao_pessoas.form_tipo'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','modal' => 'TipoFuncaoPessoa','title' => 'Tipo Função Pessoa','model' => 'App\Models\Admin\Sesau\Juridico\TipoFuncaoPessoa','form' => 'admin.sesau.juridico.tipo_funcao_pessoas.form_tipo']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/tipo_funcao_pessoas/form.blade.php ENDPATH**/ ?>