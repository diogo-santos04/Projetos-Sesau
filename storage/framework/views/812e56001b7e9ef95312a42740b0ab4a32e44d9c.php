<div>
    <table class="table rounded-lg text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ano</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($ano->id); ?></td>
                    <td><?php echo e($ano->plano->nome); ?></td>
                    <td><?php echo e($ano->ano); ?></td>
                    <td><?php echo e($ano->status); ?></td>

                    <td>
                        
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.toggle-button-component', ['model' => 'App\Models\Dant\Ano','modelId' => ''.e($ano->id).'','column' => 'status','value' => ''.e($ano->status).'','field' => 'isActive'])->html();
} elseif ($_instance->childHasBeenRendered(''.e($ano->id).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e($ano->id).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e($ano->id).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e($ano->id).'');
} else {
    $response = \Livewire\Livewire::mount('dant.toggle-button-component', ['model' => 'App\Models\Dant\Ano','modelId' => ''.e($ano->id).'','column' => 'status','value' => ''.e($ano->status).'','field' => 'isActive']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e($ano->id).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant\dant\resources\views/livewire/dant/ano-component.blade.php ENDPATH**/ ?>