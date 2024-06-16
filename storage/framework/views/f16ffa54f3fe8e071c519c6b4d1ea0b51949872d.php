
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','modal' => 'Membro','title' => 'Membro','model' => 'App\Models\Admin\Sesau\Juridico\Membro','form' => 'admin.sesau.juridico.membros.form_membro'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','modal' => 'Membro','title' => 'Membro','model' => 'App\Models\Admin\Sesau\Juridico\Membro','form' => 'admin.sesau.juridico.membros.form_membro']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/membros/form.blade.php ENDPATH**/ ?>