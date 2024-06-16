<div wire:ignore.self class="modal fade" id="<?php echo e($modalId); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?php echo e($modalId); ?>Label" aria-hidden="true" >
    <div class="modal-dialog <?php echo e($tamanho); ?>">
    <div class="modal-content" style="background-color: rgba(135, 170, 209, 0.69)" >
        <div class="modal-header" >
            <h1 class="modal-title fs-5" id="<?php echo e($modalId); ?>Label"><?php echo e($title); ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="background-color: <?php echo e($corSecundaria); ?>">
            <?php echo $__env->make($form, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="$emit('closeFormCrud')">FECHAR</button>
        </div>
    </div>
    </div>
</div>

<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/card/modal-component.blade.php ENDPATH**/ ?>