<?php if($formType == 'form'): ?>
    <button wire:click="$emit('openCloseFormCrudTab', '<?php echo e($form); ?>','<?php echo e($modelName); ?>',<?php echo e($emitId); ?>)" class="btn btn-primary">+ ADICIONAR</button>
<?php else: ?>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo e($modal); ?>">
    Modal <?php echo e($modal); ?>

    </button>
<?php endif; ?>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/crudtab/table/header.blade.php ENDPATH**/ ?>