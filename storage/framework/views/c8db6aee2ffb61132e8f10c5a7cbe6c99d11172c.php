
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo e($model); ?>"  wire:click="$emit('deleteTipoFormComponent', <?php echo e($model); ?>)">Deleta</button>
<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo e($model); ?>" wire:click="$emit('editTipoFormComponent', <?php echo e($model); ?>)">Edita</button>

<button  class="btn btn-danger"  wire:click="$emit('deleteComponent', <?php echo e($model); ?>)">Deleta</button>
<button  class="btn btn-success"  wire:click="$emit('editComponent', <?php echo e($model); ?>)">Edita</button>

<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/semraiva/unidade/table/table-actions.blade.php ENDPATH**/ ?>