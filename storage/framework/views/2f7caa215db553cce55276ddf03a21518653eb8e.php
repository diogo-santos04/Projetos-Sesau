<div class="row">
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.prevent="data.nome" class="form-control">
        <label for="nome">1 - Unidade de Saúde (ou outra fonte notificadora)</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.prevent="data.codigo" class="form-control">
        <label for="nome">2 - Código</label>
    </div>

    <div class="row form-check form-switch">
        <div class="mb-4 px-4">
            <label for="status" class="form-check-label">Status</label>
            <input type="checkbox" wire:model="data.status" id="status" class="form-check-input">
            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
</div><?php /**PATH D:\Projetos\sesau1\resources\views/admin/sesau/semraiva/unidade/form_unidade.blade.php ENDPATH**/ ?>