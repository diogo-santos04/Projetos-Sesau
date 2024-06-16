<?php if($formType == 'form'): ?>
    <button  class="btn btn-danger"  wire:click="$emit('openDeleteFormCrudTab', <?php echo e($model); ?>, '<?php echo e($form); ?>')"><i class="fas fa-times"></i> Deletar x</button>
    <button  class="btn btn-success"  wire:click="$emit('openEditFormCrudTab', <?php echo e($model); ?>,  '<?php echo e($form); ?>')"><i class="fas fa-edit"></i> Editar x</button>
   
    <button  class="btn btn-warning"  wire:click=""><i class="fa fa-file-text"></i> Visualize</button>
    <button class="btn btn-warningr"><i class="fas fa-print"></i>Imprima</button>
    <?php endif; ?>

<?php if($formType == 'modal'): ?>
    <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?php echo e($modal); ?>" wire:click="$emit('openDeleteFormCrudTab', <?php echo e($model); ?>, '<?php echo e($form); ?>')">Deletar y</button>
    <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#<?php echo e($modal); ?>"  wire:click="$emit('openEditFormCrudTab', <?php echo e($model); ?>, '<?php echo e($form); ?>')">Editar y</button>
<?php endif; ?>


<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/crudtab/table/actions.blade.php ENDPATH**/ ?>