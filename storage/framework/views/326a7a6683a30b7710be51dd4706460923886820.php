<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="mb-4" style="padding-left: 33%">Inscrições para Residência Médica</h2>
    
    <?php echo $__env->make('livewire.admin.crud.table.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.residencia.candidato-component')->html();
} elseif ($_instance->childHasBeenRendered('l101663583-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l101663583-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l101663583-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l101663583-0');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.residencia.candidato-component');
    $html = $response->html();
    $_instance->logRenderedChild('l101663583-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
    
    <div class="card p-4 m-4 border-dark">
        <p>dados do usuario</p>
        <p>nome: <?php echo e($nome); ?></p>
        <p>nome_social: <?php echo e($nome_social); ?></p>
        <p>celular: <?php echo e($celular); ?></p>
        <p>email: <?php echo e($email); ?></p>
        <p>cpf: <?php echo e($cpf); ?></p>
    </div>
    <?php echo $__env->make('livewire.admin.sesau.residencia.tipo-processo-component', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.admin.sesau.residencia.formulario-component', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</div>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/residencia/residente-component.blade.php ENDPATH**/ ?>