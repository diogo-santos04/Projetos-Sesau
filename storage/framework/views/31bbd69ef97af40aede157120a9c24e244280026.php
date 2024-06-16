
<?php if($formType == 'form'): ?>
    <button  class="btn btn-danger"  wire:click="$emit('openDeleteFormCrud', <?php echo e($model); ?>,  '<?php echo e($form); ?>')"><i class="fas fa-times"></i> Remover</button>
    <button  class="btn btn-success"  wire:click="$emit('openEditFormCrud', <?php echo e($model); ?>,  '<?php echo e($form); ?>')"><i class="fas fa-edit"></i> Editar</button>
    <button  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#<?php echo e($modalId); ?>" wire:click="$emit('openViewFormCrud', <?php echo e($model); ?>, '<?php echo e($form); ?>')"><i class="fas fa-eye"></i> Visualizar</button>
    <button  class="btn btn-info"><i class="fas fa-print"></i> Imprimir</button>
    <?php endif; ?>

<?php if($formType == 'modal'): ?>
    <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?php echo e($modal); ?>" wire:click="$emit('openDeleteFormCrud', <?php echo e($model); ?>)"><i class="fas fa-times"></i> Remover</button>
    <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#<?php echo e($modal); ?>"  wire:click="$emit('openEditFormCrud', <?php echo e($model); ?>)"><i class="fas fa-edit"></i> Editar<?php echo e($modal); ?></button>
<?php endif; ?>


<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/crud/table/actions.blade.php ENDPATH**/ ?>