




<div class="card p-4 mb-4">
    <div class="card p-4 mb-4">
        <div class="row" style="justify-content: center">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.modal-component', ['title' => 'Tipo Funcao Pessoa','icon' => 'fas fa-user icon','form' => 'admin.sesau.juridico.tipo_funcao_pessoas.form','modalId' => 'TipoFuncaoPessoa','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.modal-component', ['title' => 'Tipo Funcao Pessoa','icon' => 'fas fa-user icon','form' => 'admin.sesau.juridico.tipo_funcao_pessoas.form','modalId' => 'TipoFuncaoPessoa','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.modal-component', ['title' => 'Tipo Função Membro','icon' => 'fas fa-user icon','form' => 'admin.sesau.juridico.tipo_funcao_membros.form','modalId' => 'TipoFuncaoMembro','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.modal-component', ['title' => 'Tipo Função Membro','icon' => 'fas fa-user icon','form' => 'admin.sesau.juridico.tipo_funcao_membros.form','modalId' => 'TipoFuncaoMembro','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.modal-component', ['title' => 'Tipo Situacao','icon' => 'fa-solid fa-layer-group icon','form' => 'admin.sesau.juridico.tipo_situacoes.form','modalId' => 'TipoSituacao','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.modal-component', ['title' => 'Tipo Situacao','icon' => 'fa-solid fa-layer-group icon','form' => 'admin.sesau.juridico.tipo_situacoes.form','modalId' => 'TipoSituacao','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>



            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Função Pessoa','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => 'bg-secondary-subtle border border-subtle','link' => '','modalId' => 'TipoFuncaoPessoa'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Função Pessoa','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => 'bg-secondary-subtle border border-subtle','link' => '','modalId' => 'TipoFuncaoPessoa']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Função Membro','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => 'bg-secondary-subtle border border-subtle','link' => '','modalId' => 'TipoFuncaoMembro'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Função Membro','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => 'bg-secondary-subtle border border-subtle','link' => '','modalId' => 'TipoFuncaoMembro']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Situação','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fa-solid fa-layer-group icon','cor' => 'bg-secondary-subtle border border-subtle','link' => '','modalId' => 'TipoSituacao'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.card.card-component', ['textColor' => 'text-secondary-emphasis','title' => 'Tipo Situação','text_color' => 'text-secondary-emphasis','text' => 'teste texto','icon' => 'fa-solid fa-layer-group icon','cor' => 'bg-secondary-subtle border border-subtle','link' => '','modalId' => 'TipoSituacao']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>
    </div>
</div>

<?php echo $__env->make('admin.sesau.juridico.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/tipos/form.blade.php ENDPATH**/ ?>