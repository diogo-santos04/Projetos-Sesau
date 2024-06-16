<div class="p-4">
    <div class="row">
        <div class="col-6"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tipo-indicador-component')->html();
} elseif ($_instance->childHasBeenRendered('l1744007853-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1744007853-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1744007853-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1744007853-0');
} else {
    $response = \Livewire\Livewire::mount('tipo-indicador-component');
    $html = $response->html();
    $_instance->logRenderedChild('l1744007853-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
        <div class="col-6"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('setor-component')->html();
} elseif ($_instance->childHasBeenRendered('l1744007853-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1744007853-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1744007853-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1744007853-1');
} else {
    $response = \Livewire\Livewire::mount('setor-component');
    $html = $response->html();
    $_instance->logRenderedChild('l1744007853-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('plano-component')->html();
} elseif ($_instance->childHasBeenRendered('l1744007853-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1744007853-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1744007853-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1744007853-2');
} else {
    $response = \Livewire\Livewire::mount('plano-component');
    $html = $response->html();
    $_instance->logRenderedChild('l1744007853-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php if($openEixoId): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('eixo-component')->html();
} elseif ($_instance->childHasBeenRendered('l1744007853-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l1744007853-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1744007853-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1744007853-3');
} else {
    $response = \Livewire\Livewire::mount('eixo-component');
    $html = $response->html();
    $_instance->logRenderedChild('l1744007853-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php if($openEstrategiaId): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('estrategia-component')->html();
} elseif ($_instance->childHasBeenRendered('l1744007853-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l1744007853-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1744007853-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1744007853-4');
} else {
    $response = \Livewire\Livewire::mount('estrategia-component');
    $html = $response->html();
    $_instance->logRenderedChild('l1744007853-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                
                <?php if($openIndicadorId): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('indicador-component')->html();
} elseif ($_instance->childHasBeenRendered('l1744007853-5')) {
    $componentId = $_instance->getRenderedChildComponentId('l1744007853-5');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1744007853-5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1744007853-5');
} else {
    $response = \Livewire\Livewire::mount('indicador-component');
    $html = $response->html();
    $_instance->logRenderedChild('l1744007853-5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                        <?php if($openAvaliacaoId): ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('avaliacao-component')->html();
} elseif ($_instance->childHasBeenRendered('l1744007853-6')) {
    $componentId = $_instance->getRenderedChildComponentId('l1744007853-6');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1744007853-6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1744007853-6');
} else {
    $response = \Livewire\Livewire::mount('avaliacao-component');
    $html = $response->html();
    $_instance->logRenderedChild('l1744007853-6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php endif; ?>
                <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
        
</div>
<?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant\dant\resources\views/livewire/dant-component.blade.php ENDPATH**/ ?>