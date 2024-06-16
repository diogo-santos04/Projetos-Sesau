
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crudtab.crud-component', ['modelName' => 'sindicancia_id','formType' => 'form','modal' => 'SindicanciaPessoa','title' => 'Sindicancia Pessoa','model' => 'App\Models\Admin\Sesau\Juridico\SindicanciaPessoa','form' => 'admin.sesau.juridico.sindicancia_pessoas.form_sindicancia_pessoa'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crudtab.crud-component', ['modelName' => 'sindicancia_id','formType' => 'form','modal' => 'SindicanciaPessoa','title' => 'Sindicancia Pessoa','model' => 'App\Models\Admin\Sesau\Juridico\SindicanciaPessoa','form' => 'admin.sesau.juridico.sindicancia_pessoas.form_sindicancia_pessoa']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/sindicancia_pessoas/form.blade.php ENDPATH**/ ?>