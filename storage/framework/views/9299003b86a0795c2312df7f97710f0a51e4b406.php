<div wire:ignore.self class="dropdown d-grid gap-2">
    <fieldset disabled="disabled" class="d-grid gap-2">
        <button wire:ignore.self type="button"class="btn btn-lg btn-<?php echo e($color); ?> dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false"data-bs-auto-close="outside">
            <?php echo e($title); ?>

        </button>
    </fieldset>
    <div wire:ignore.self class="dropdown-menu p-4 " style="width: 100%;">
        <div class="mb-3">
            <input type="text" wire:model.debounce.500ms="search" class="form-control" placeholder="Pesquise aqui">
        </div>
        <?php $__currentLoopData = $colunas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label wire:ignore.self class="d-block" for="<?php echo e($label); ?>">
                <input class="radio_animated mt-2 mx-2" type="radio" wire:model="selected"
                    value="<?php echo e($column); ?>"><?php echo e($column->$columnName); ?>

            </label>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div wire:ignore.self class="m-3">
            <?php echo e($colunas->links()); ?>

        </div>
    </div>
</div>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/voluntario/dropdown-component.blade.php ENDPATH**/ ?>