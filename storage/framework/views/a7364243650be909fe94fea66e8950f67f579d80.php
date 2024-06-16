
<div class="p-3">

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corSecundaria' => '#435ce8','title' => 'TIPO ATIVIDADE','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.tipo_atividades.tipoatividade','modalId' => 'TipoAtividade','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corSecundaria' => '#435ce8','title' => 'TIPO ATIVIDADE','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.tipo_atividades.tipoatividade','modalId' => 'TipoAtividade','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corSecundaria' => '#49a8b9','title' => 'TIPO SEGUIMENTO','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.tipo_seguimentos.tiposeguimento','modalId' => 'TipoSeguimento','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corSecundaria' => '#49a8b9','title' => 'TIPO SEGUIMENTO','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.tipo_seguimentos.tiposeguimento','modalId' => 'TipoSeguimento','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corSecundaria' => '','title' => 'TIPO REGIAO URBANA','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.tipo_regioes.tiporegiao','modalId' => 'TipoRegiaoUrbana','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corSecundaria' => '','title' => 'TIPO REGIAO URBANA','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.tipo_regioes.tiporegiao','modalId' => 'TipoRegiaoUrbana','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corPrimaria' => '','corSecundaria' => '#FFEC9E','corFooter' => '','title' => 'COLABORADOR','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.colaborador.colaborador','modalId' => 'Colaborador','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corPrimaria' => '','corSecundaria' => '#FFEC9E','corFooter' => '','title' => 'COLABORADOR','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.colaborador.colaborador','modalId' => 'Colaborador','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corSecundaria' => '#e7dbaa','corFooter' => '','title' => 'VISUALIZACAO','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.instituicoes.formCall','modalId' => 'viewInstituicao','tamanho' => 'modal-fullscreen'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.modal-component', ['corSecundaria' => '#e7dbaa','corFooter' => '','title' => 'VISUALIZACAO','icon' => 'fas fa-map-marker-alt icon','form' => 'admin.sesau.voluntario.instituicoes.formCall','modalId' => 'viewInstituicao','tamanho' => 'modal-fullscreen']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    
    <div class="row">

        <div class="card border-info p-4 mb-4" style="background-color:#e7dbaa" >
            <div class="card border-info p-4 mb-4" >   
                <div class="row" style="justify-content: center">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.card-component', ['textColor' => 'text-white','title' => 'Atividade','text_color' => 'text-white','text' => 'Adicionar Tipo Atividade','icon' => 'fas fa-clipboard-list icon','cor' => 'border-black bg-primary','link' => '','modalId' => 'TipoAtividade'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.card-component', ['textColor' => 'text-white','title' => 'Atividade','text_color' => 'text-white','text' => 'Adicionar Tipo Atividade','icon' => 'fas fa-clipboard-list icon','cor' => 'border-black bg-primary','link' => '','modalId' => 'TipoAtividade']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>  
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.card-component', ['textColor' => 'text-white','title' => 'Seguimento','text_color' => 'text-white','text' => 'Adicione Tipo Seguimento','icon' => 'fas fa-map-marker-alt icon','cor' => 'border-black bg-info','link' => '','modalId' => 'TipoSeguimento'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.card-component', ['textColor' => 'text-white','title' => 'Seguimento','text_color' => 'text-white','text' => 'Adicione Tipo Seguimento','icon' => 'fas fa-map-marker-alt icon','cor' => 'border-black bg-info','link' => '','modalId' => 'TipoSeguimento']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>                   
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.card-component', ['textColor' => 'text-white','title' => 'Regiao Urbana','text_color' => 'text-white','text' => 'Adicione Regiao Urbana','icon' => 'fas fa-building icon','cor' => 'border-black bg-success','link' => '','modalId' => 'TipoRegiaoUrbana'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.card-component', ['textColor' => 'text-white','title' => 'Regiao Urbana','text_color' => 'text-white','text' => 'Adicione Regiao Urbana','icon' => 'fas fa-building icon','cor' => 'border-black bg-success','link' => '','modalId' => 'TipoRegiaoUrbana']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>

            <div class="card border-info p-4 mb-4" >   
                <div class="row" style="justify-content: center">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','title' => 'Instituições Parceiras','model' => 'App\Models\Admin\Sesau\Voluntario\Instituicao','form' => 'admin.sesau.voluntario.instituicoes.form','modalId' => 'viewInstituicao'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.crud.crud-component', ['formType' => 'form','title' => 'Instituições Parceiras','model' => 'App\Models\Admin\Sesau\Voluntario\Instituicao','form' => 'admin.sesau.voluntario.instituicoes.form','modalId' => 'viewInstituicao']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div> 
        </div>  
    </div>
</div><?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/voluntario/voluntario-component.blade.php ENDPATH**/ ?>