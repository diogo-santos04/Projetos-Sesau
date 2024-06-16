


<div class="card p-4 mb-4">
    <div>
        <h2 class="my-4">Form Unidade</h2>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-form-component', ['formType' => 'form','modal' => 'Unidade','title' => 'Unidade','model' => 'App\Models\Admin\Sesau\Semraiva\Unidade','form' => 'admin.sesau.semraiva.unidade.form_unidade'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-form-component', ['formType' => 'form','modal' => 'Unidade','title' => 'Unidade','model' => 'App\Models\Admin\Sesau\Semraiva\Unidade','form' => 'admin.sesau.semraiva.unidade.form_unidade']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>   <?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/semraiva/unidade/form.blade.php ENDPATH**/ ?>