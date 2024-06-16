<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crudtab.crud-component', ['modelName' => 'sindicancia_id','formType' => 'form','modal' => 'Oitiva','title' => 'Oitiva','model' => 'App\Models\Admin\Sesau\Juridico\Oitiva','form' => 'admin.sesau.juridico.oitiva.form_oitiva'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crudtab.crud-component', ['modelName' => 'sindicancia_id','formType' => 'form','modal' => 'Oitiva','title' => 'Oitiva','model' => 'App\Models\Admin\Sesau\Juridico\Oitiva','form' => 'admin.sesau.juridico.oitiva.form_oitiva']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/oitiva/form.blade.php ENDPATH**/ ?>