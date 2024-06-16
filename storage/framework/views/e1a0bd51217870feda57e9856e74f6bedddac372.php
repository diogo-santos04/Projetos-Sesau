<div class="row">

    <div class="form-floating mb-4 col-12">
        <input type="text" wire:model.defer="data.nome" class="form-control">
        <label for="nome">nome</label>
    </div>  
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.cpf" class="form-control">
        <label for="cpf">cpf</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.cnpj" class="form-control">
        <label for="cnpj">cnpj</label>
    </div>
    <div class="form-floating mb-4 col-6">
        <input type="text" wire:model.defer="data.oab" class="form-control">
        <label for="oab">oab</label>
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
</div><?php /**PATH C:\katiane\sesau\resources\views/admin/sesau/juridico/pessoa/form_pessoa.blade.php ENDPATH**/ ?>