<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5><?php echo e($title); ?></h5>
    </div>
         <?php echo $__env->make('livewire.admin.crudtab.table.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form wire:submit.prevent="<?php echo e(isset($data['id']) ? $type == 'update' ? 'update' : 'destroy' : 'store'); ?>">

            <?php echo $__env->make($form, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if(isset($data['id'])): ?>
                <?php if($type == 'update'): ?>
                    <button type="submit" class="btn btn-primary">ATUALIZAR</button>
                <?php endif; ?>
                <?php if($type == 'delete'): ?>
                    
                    <button type="submit" class="btn btn-danger ">REMOVER</button>
                <?php endif; ?>
            <?php else: ?>
                <button type="submit" class="btn btn-primary">SALVAR</button>
            <?php endif; ?>
            <button wire:click="$emit('closeFormCrudTab')" type="button" class="btn btn-secondary">CANCELAR</button>
        </form>

</div>
<?php /**PATH C:\diogo\sesau1\resources\views/livewire/admin/crudtab/crud-form-component.blade.php ENDPATH**/ ?>