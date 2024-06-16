
<div class="col-lg-4 mb-4">
    <div class="card p-4 my-8">
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?>

        <title class="btn btn-primary btn-sm mb-1">Adicionar <?php echo e($title); ?></title>
       
        <div class="card my-3">
            <form wire:submit.prevent="store">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php echo $__env->make($form, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="row form-check form-switch">
                    <div class="mb-4">           
                        <button type="submit" class="btn btn-primary btn-sm ms-2">Salvar</button>
                        <button type="button" class="btn btn-secondary btn-sm" wire:click="closeModal">Cancelar</button>
                    </div>
                </div>
                
            </form>
        </div>

        <div class="card p-4 mb-4">
            <div>
                <h4 class="my-8">Tabela <?php echo e($title); ?></h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($tipo->nome); ?></td>
                                <td>
                                    <button wire:click="edit('<?php echo e($tipo->id); ?>')" class="btn btn-primary">Editar</button>
                                    <button wire:click="destroy('<?php echo e($tipo->id); ?>')" class="btn btn-danger">Deletar</button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/samu/tipo-component.blade.php ENDPATH**/ ?>