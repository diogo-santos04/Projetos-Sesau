<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5><?php echo e($title); ?></h5>
    </div>

    <div class="p-2">
        <?php echo $__env->make('livewire.admin.crud.table.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <form wire:submit.prevent="<?php echo e(isset($data['id']) ? ($type == 'update' ? 'update' : 'destroy') : 'store'); ?>">
        <?php echo $__env->make($form, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="text-center">
            <?php if(isset($data['id'])): ?>
                <?php if($type == 'update'): ?>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> ATUALIZAR</button>
                <?php endif; ?>
                <?php if($type == 'delete'): ?>
                    <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-times"></i> REMOVER</button>
                <?php endif; ?>
            <?php else: ?>
                <button type="button" wire:click="store" class="btn btn-primary btn-block"><i class="fa fa-save"></i> SALVAR</button>
            <?php endif; ?>
            <button data-bs-dismiss="modal" wire:click="$emit('closeFormCrud')" type="button" class="btn btn-secondary btn-block"><i
                    class="fas fa-times"></i> CANCELAR</button>
        </div>
    </form>
</div>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/residencia/crud-form-component.blade.php ENDPATH**/ ?>