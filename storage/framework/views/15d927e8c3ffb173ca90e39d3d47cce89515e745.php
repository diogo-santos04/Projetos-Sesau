<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Função Membro','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => '','link' => '','modalId' => 'TipoFuncaoMembro'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Função Membro','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => '','link' => '','modalId' => 'TipoFuncaoMembro']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Função Pessoa','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => '','link' => '','modalId' => 'TipoFuncaoPessoa'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Função Pessoa','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => '','link' => '','modalId' => 'TipoFuncaoPessoa']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Situação','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fa-solid fa-layer-group icon','cor' => '','link' => '','modalId' => 'TipoSituacao'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Situação','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fa-solid fa-layer-group icon','cor' => '','link' => '','modalId' => 'TipoSituacao']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>                   
 
<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/juridico/tipo-component.blade.php ENDPATH**/ ?>