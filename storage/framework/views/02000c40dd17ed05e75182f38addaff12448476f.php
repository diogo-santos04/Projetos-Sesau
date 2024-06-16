
<?php if($tableAction): ?>
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo e($modal); ?>"  wire:click="$emit('deleteTipoFormComponent', <?php echo e($model); ?>)"><i class="fas fa-times"></i> Remover</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo e($modal); ?>" wire:click="$emit('editTipoFormComponent', <?php echo e($model); ?>)"><i class="fas fa-edit"></i> Edita</button>
<?php else: ?>
<button  class="btn btn-danger"  wire:click="$emit('openDeleteFormCrud', <?php echo e($model); ?>, '<?php echo e($form); ?>')"><i class="fas fa-times"></i> Remover</button>
<button  class="btn btn-success"  wire:click="$emit('openEditFormCrud', <?php echo e($model); ?>, '<?php echo e($form); ?>')"><i class="fas fa-edit"></i> Editar</button>
<?php endif; ?>
<?php /**PATH D:\Projetos\sesau1\resources\views/admin/sesau/voluntario/table-actions.blade.php ENDPATH**/ ?>