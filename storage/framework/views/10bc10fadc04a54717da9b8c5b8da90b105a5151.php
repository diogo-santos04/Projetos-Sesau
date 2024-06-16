<?php if($formType == 'form'): ?>
    <button wire:click="$emit('openCloseFormCrud', '<?php echo e($form); ?>')" class="btn btn-primary"><i class="fas fa-plus-circle"></i> ADICIONAR</button>
<?php else: ?>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo e($modal); ?>">
    Modal <?php echo e($modal); ?>

    </button>
<?php endif; ?>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/crud/table/header.blade.php ENDPATH**/ ?>