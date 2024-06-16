<div class="col-lg-2 mb-4">
    <div class="card <?php echo e($cor); ?> <?php echo e($text_color); ?>">
        <div class="card-body">
                <i class="<?php echo e($icon); ?>"></i>
                <h5 class="card-title"><?php echo e($title); ?></h5>
                <p class="card-text"><?php echo e($text); ?></p>
                <?php if($modalId): ?>
                    <a class="btn btn-custom " data-bs-toggle="modal" data-bs-target="#<?php echo e($modalId); ?>"> <?php echo e($title); ?> </a>
                <?php else: ?>
                    <a href="<?php echo e($link); ?>" target="_blank" class="btn btn-custom"> Saiba Mais</a>
                <?php endif; ?>      
        </div>
    </div>
</div>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/semraiva/card-component.blade.php ENDPATH**/ ?>