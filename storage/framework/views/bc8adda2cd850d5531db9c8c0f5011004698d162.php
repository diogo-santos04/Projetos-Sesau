<div>
    <div wire:ignore.self class="modal fade" id="staticBackdrop<?php echo e($modal); ?>" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?php echo e($modal); ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel<?php echo e($modal); ?>">Modal title
                        <?php echo e($title); ?> </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php echo e($form); ?>

                    <?php echo $__env->make($form, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="row form-check form-switch">
                        <div class="mb-4">



                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php if(isset($data['id'])): ?>
                        <?php if($type == 'update'): ?>
                            <button type="button" wire:click="update(<?php echo e($data['id']); ?>)" data-bs-dismiss="modal"
                                class="btn btn-primary ">ATUALIZAR</button>
                        <?php endif; ?>
                        <?php if($type == 'delete'): ?>
                            <button type="button" wire:click="destroy(<?php echo e($data['id']); ?>)" data-bs-dismiss="modal"
                                class="btn btn-danger ">DELETAR</button>
                        <?php endif; ?>
                    <?php else: ?>
                        <button type="button" wire:click="store" type="submit" class="btn btn-primary">SALVAR</button>
                    <?php endif; ?>
                    <button type="button" class="btn btn-secondary  ">CANCELAR</button>

                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/voluntario/tipo-form-component.blade.php ENDPATH**/ ?>