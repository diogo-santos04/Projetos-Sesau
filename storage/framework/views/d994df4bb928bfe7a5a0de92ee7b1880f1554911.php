<div wire:ignore.self class="modal fade" id="<?php echo e($modalId); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?php echo e($modalId); ?>Label" aria-hidden="true">
    <div class="modal-dialog <?php echo e($tamanho); ?>">
    <div class="modal-content ">
        <div class="modal-header mx-auto p-7" >
        <i class="<?php echo e($icon); ?> "></i>
        <h1 class="modal-title fs-5" id="<?php echo e($modalId); ?>Label"><?php echo e($title); ?></h1>
        
        </div>
        <div class="modal-body">
            <?php echo $__env->make($form, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
        </div>
    </div>
    </div>
</div><?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/samu/modal-component.blade.php ENDPATH**/ ?>