<div class="p-4">
    <div class="row">
        <div class="col-6"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.tipo-indicador-component')->html();
} elseif ($_instance->childHasBeenRendered('l3942153223-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3942153223-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3942153223-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3942153223-0');
} else {
    $response = \Livewire\Livewire::mount('dant.tipo-indicador-component');
    $html = $response->html();
    $_instance->logRenderedChild('l3942153223-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
        <div class="col-6"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.setor-component')->html();
} elseif ($_instance->childHasBeenRendered('l3942153223-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3942153223-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3942153223-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3942153223-1');
} else {
    $response = \Livewire\Livewire::mount('dant.setor-component');
    $html = $response->html();
    $_instance->logRenderedChild('l3942153223-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.plano-component')->html();
} elseif ($_instance->childHasBeenRendered('l3942153223-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3942153223-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3942153223-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3942153223-2');
} else {
    $response = \Livewire\Livewire::mount('dant.plano-component');
    $html = $response->html();
    $_instance->logRenderedChild('l3942153223-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php if($openEixoId): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.eixo-component')->html();
} elseif ($_instance->childHasBeenRendered('l3942153223-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l3942153223-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3942153223-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3942153223-3');
} else {
    $response = \Livewire\Livewire::mount('dant.eixo-component');
    $html = $response->html();
    $_instance->logRenderedChild('l3942153223-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php if($openEstrategiaId): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.estrategia-component')->html();
} elseif ($_instance->childHasBeenRendered('l3942153223-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l3942153223-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3942153223-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3942153223-4');
} else {
    $response = \Livewire\Livewire::mount('dant.estrategia-component');
    $html = $response->html();
    $_instance->logRenderedChild('l3942153223-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                
                <?php if($openIndicadorId): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.indicador-component')->html();
} elseif ($_instance->childHasBeenRendered('l3942153223-5')) {
    $componentId = $_instance->getRenderedChildComponentId('l3942153223-5');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3942153223-5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3942153223-5');
} else {
    $response = \Livewire\Livewire::mount('dant.indicador-component');
    $html = $response->html();
    $_instance->logRenderedChild('l3942153223-5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                        <?php if($openAvaliacaoId): ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.avaliacao-component')->html();
} elseif ($_instance->childHasBeenRendered('l3942153223-6')) {
    $componentId = $_instance->getRenderedChildComponentId('l3942153223-6');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3942153223-6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3942153223-6');
} else {
    $response = \Livewire\Livewire::mount('dant.avaliacao-component');
    $html = $response->html();
    $_instance->logRenderedChild('l3942153223-6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php endif; ?>
                <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
        
</div>
<?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant\dant\resources\views/livewire/dant/dant-component.blade.php ENDPATH**/ ?>