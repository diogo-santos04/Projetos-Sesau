<div class="form-floating" >
    <select wire:model.prevent="selected" class="form-select" aria-label="Default select example">
        <option value="">---SELECIONE---</option>
        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option  value="<?php echo e($column->$columnId); ?>"><?php echo e($column->$columnName); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="<?php echo e($label); ?>"><?php echo e($title); ?></label>
</div><?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/juridico/select-component.blade.php ENDPATH**/ ?>