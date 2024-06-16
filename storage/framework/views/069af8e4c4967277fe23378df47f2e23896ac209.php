<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','title' => 'Tipo Seguimento','model' => 'App\Models\Admin\Sesau\Voluntario\TipoSeguimento','form' => 'admin.sesau.voluntario.tipo_seguimentos.form'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','title' => 'Tipo Seguimento','model' => 'App\Models\Admin\Sesau\Voluntario\TipoSeguimento','form' => 'admin.sesau.voluntario.tipo_seguimentos.form']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH C:\diogo\sesau1\resources\views/admin/sesau/voluntario/tipo_seguimentos/tiposeguimento.blade.php ENDPATH**/ ?>