

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','modal' => 'Distrito','title' => 'Distrito','model' => 'App\Models\Admin\Sesau\Semraiva\Distrito','form' => 'admin.sesau.semraiva.unidade.form_unidade'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','modal' => 'Distrito','title' => 'Distrito','model' => 'App\Models\Admin\Sesau\Semraiva\Distrito','form' => 'admin.sesau.semraiva.unidade.form_unidade']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH D:\Projetos\sesau1\resources\views/admin/sesau/semraiva/distrito/distritoform.blade.php ENDPATH**/ ?>