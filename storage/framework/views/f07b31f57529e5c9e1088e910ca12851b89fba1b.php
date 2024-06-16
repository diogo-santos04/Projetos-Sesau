

<div>
    <div class="card p-4 m-4">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.modal-component', ['title' => 'Pessoa','icon' => 'fas fa-user icon','form' => 'admin.sesau.samu.pessoa.form','modalId' => 'Pessoa','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered('1')) {
    $componentId = $_instance->getRenderedChildComponentId('1');
    $componentTag = $_instance->getRenderedChildComponentTagName('1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.modal-component', ['title' => 'Pessoa','icon' => 'fas fa-user icon','form' => 'admin.sesau.samu.pessoa.form','modalId' => 'Pessoa','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild('1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <div class="card p-4 mb-4">
            <div class="row">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.card-component', ['textColor' => 'text-white','title' => 'App','text_color' => 'text-white','text' => 'teste texto','icon' => 'fas fa-mobile-alt icon','cor' => 'bg-primary','link' => ''])->html();
} elseif ($_instance->childHasBeenRendered('1')) {
    $componentId = $_instance->getRenderedChildComponentId('1');
    $componentTag = $_instance->getRenderedChildComponentTagName('1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.card-component', ['textColor' => 'text-white','title' => 'App','text_color' => 'text-white','text' => 'teste texto','icon' => 'fas fa-mobile-alt icon','cor' => 'bg-primary','link' => '']);
    $html = $response->html();
    $_instance->logRenderedChild('1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.card-component', ['textColor' => 'text-white','title' => 'Site','text_color' => 'text-white','text' => 'teste texto','icon' => 'fas fa-globe icon','cor' => 'bg-success','link' => ''])->html();
} elseif ($_instance->childHasBeenRendered('2')) {
    $componentId = $_instance->getRenderedChildComponentId('2');
    $componentTag = $_instance->getRenderedChildComponentTagName('2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.card-component', ['textColor' => 'text-white','title' => 'Site','text_color' => 'text-white','text' => 'teste texto','icon' => 'fas fa-globe icon','cor' => 'bg-success','link' => '']);
    $html = $response->html();
    $_instance->logRenderedChild('2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.card-component', ['textColor' => 'text-white','title' => 'Pessoa','text_color' => 'text-white','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => 'bg-info','link' => '','modalId' => 'Pessoa'])->html();
} elseif ($_instance->childHasBeenRendered('6')) {
    $componentId = $_instance->getRenderedChildComponentId('6');
    $componentTag = $_instance->getRenderedChildComponentTagName('6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.card-component', ['textColor' => 'text-white','title' => 'Pessoa','text_color' => 'text-white','text' => 'teste texto','icon' => 'fas fa-user icon','cor' => 'bg-info','link' => '','modalId' => 'Pessoa']);
    $html = $response->html();
    $_instance->logRenderedChild('6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.pessoa-component', ['title' => 'Pessoa','model' => 'App\Models\Admin\Sesau\Samu\Pessoa'])->html();
} elseif ($_instance->childHasBeenRendered('l4206274318-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l4206274318-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4206274318-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4206274318-4');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.pessoa-component', ['title' => 'Pessoa','model' => 'App\Models\Admin\Sesau\Samu\Pessoa']);
    $html = $response->html();
    $_instance->logRenderedChild('l4206274318-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.pessoa-table-component', ['title' => 'Pessoa','model' => 'App\Models\Admin\Sesau\Samu\Pessoa'])->html();
} elseif ($_instance->childHasBeenRendered('l4206274318-5')) {
    $componentId = $_instance->getRenderedChildComponentId('l4206274318-5');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4206274318-5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4206274318-5');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.pessoa-table-component', ['title' => 'Pessoa','model' => 'App\Models\Admin\Sesau\Samu\Pessoa']);
    $html = $response->html();
    $_instance->logRenderedChild('l4206274318-5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <div class="card p-4 mb-4">                                                                                                 
            <div class="row">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.tipo-component', ['title' => 'Tipo Fins','model' => 'App\Models\Admin\Sesau\Samu\TipoFim','form' => 'admin.sesau.samu.tipo_fim.form'])->html();
} elseif ($_instance->childHasBeenRendered('l4206274318-6')) {
    $componentId = $_instance->getRenderedChildComponentId('l4206274318-6');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4206274318-6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4206274318-6');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.tipo-component', ['title' => 'Tipo Fins','model' => 'App\Models\Admin\Sesau\Samu\TipoFim','form' => 'admin.sesau.samu.tipo_fim.form']);
    $html = $response->html();
    $_instance->logRenderedChild('l4206274318-6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.tipo-component', ['title' => 'Tipo Parentesco','model' => 'App\Models\Admin\Sesau\Samu\TipoParentesco','form' => 'admin.sesau.samu.tipo_parentesco.form'])->html();
} elseif ($_instance->childHasBeenRendered('l4206274318-7')) {
    $componentId = $_instance->getRenderedChildComponentId('l4206274318-7');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4206274318-7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4206274318-7');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.tipo-component', ['title' => 'Tipo Parentesco','model' => 'App\Models\Admin\Sesau\Samu\TipoParentesco','form' => 'admin.sesau.samu.tipo_parentesco.form']);
    $html = $response->html();
    $_instance->logRenderedChild('l4206274318-7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.tipo-component', ['title' => 'Tipo Prazo','model' => 'App\Models\Admin\Sesau\Samu\TipoPrazo','form' => 'admin.sesau.samu.tipo_prazo.form'])->html();
} elseif ($_instance->childHasBeenRendered('l4206274318-8')) {
    $componentId = $_instance->getRenderedChildComponentId('l4206274318-8');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4206274318-8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4206274318-8');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.tipo-component', ['title' => 'Tipo Prazo','model' => 'App\Models\Admin\Sesau\Samu\TipoPrazo','form' => 'admin.sesau.samu.tipo_prazo.form']);
    $html = $response->html();
    $_instance->logRenderedChild('l4206274318-8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.atendimento-component', ['title' => 'Atendimento','model' => 'App\Models\Admin\Sesau\Samu\Atendimento'])->html();
} elseif ($_instance->childHasBeenRendered('l4206274318-9')) {
    $componentId = $_instance->getRenderedChildComponentId('l4206274318-9');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4206274318-9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4206274318-9');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.atendimento-component', ['title' => 'Atendimento','model' => 'App\Models\Admin\Sesau\Samu\Atendimento']);
    $html = $response->html();
    $_instance->logRenderedChild('l4206274318-9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.ocorrencia-component', ['title' => 'Ocorrencia','model' => 'App\Models\Admin\Sesau\Samu\Ocorrencia'])->html();
} elseif ($_instance->childHasBeenRendered('l4206274318-10')) {
    $componentId = $_instance->getRenderedChildComponentId('l4206274318-10');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4206274318-10');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4206274318-10');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.ocorrencia-component', ['title' => 'Ocorrencia','model' => 'App\Models\Admin\Sesau\Samu\Ocorrencia']);
    $html = $response->html();
    $_instance->logRenderedChild('l4206274318-10', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.samu.protocolo-component', ['title' => 'Protocolo','model' => 'App\Models\Admin\Sesau\Samu\Protocolo'])->html();
} elseif ($_instance->childHasBeenRendered('l4206274318-11')) {
    $componentId = $_instance->getRenderedChildComponentId('l4206274318-11');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4206274318-11');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4206274318-11');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.samu.protocolo-component', ['title' => 'Protocolo','model' => 'App\Models\Admin\Sesau\Samu\Protocolo']);
    $html = $response->html();
    $_instance->logRenderedChild('l4206274318-11', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

</div>
<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/samu/samu-component.blade.php ENDPATH**/ ?>