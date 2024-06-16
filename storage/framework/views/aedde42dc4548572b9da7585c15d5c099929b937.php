<div class="card p-4 my-4">
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session('message')); ?></div>
    <?php endif; ?>

    <div class="row">
        <div class="col-auto">
            <button class="btn btn-primary mb-4" wire:click="create">Adicionar plano</button>
        </div>
    </div>

    <?php if($isOpen): ?>
        <div class="card p-4 mb-4">
            <form wire:submit.prevent="store">
                <div class="row">
                    <div class="form-floating my-4 col-6">
                        <input type="text" wire:model="nome" class="form-control"
                            placeholder="Nome do plano:">
                        <label for="nome">Nome do plano:</label>
                    </div> 

                    <div class="form-floating my-4 col-3">
                        <input type="number" wire:model="ano_inicial" class="form-control"
                            placeholder="Ano inicial:" min=2023 value="2023" <?php if($plano_id): ?> readonly <?php endif; ?>>
                        <label for="nome">Ano inicial:</label>
                    </div> 

                    <div class="form-floating my-4 col-3">
                        <input type="number" wire:model="ano_final" class="form-control"
                            placeholder="Ano final:"  min="2023" value="2023" <?php if($plano_id): ?> readonly <?php endif; ?>>
                        <label for="nome">Ano final:</label>
                    </div> 
                </div>

                <div class="row form-check form-switch">
                    <div class="">
                        <label for="status" class="form-check-label">Status</label>
                        <input type="checkbox" wire:model="status" id="status"
                            class="form-check-input">
                    </div>
                    

                    <div class="mb-4">
                        <label for="consolidar" class="form-check-label">Consolidar</label>
                        <input type="checkbox" wire:model="consolidar" id="consolidar"
                            class="form-check-input">
                    </div> 
                </div>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
        
                <div class="">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-secondary" wire:click="closeModal">Cancelar</button>
                </div>
            </form>

            <?php if($plano_id): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dant.ano-component', ['plano_id' => $plano_id])->html();
} elseif ($_instance->childHasBeenRendered('l3460163850-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3460163850-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3460163850-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3460163850-0');
} else {
    $response = \Livewire\Livewire::mount('dant.ano-component', ['plano_id' => $plano_id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3460163850-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <table class="table rounded-lg text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ano inicial</th>
                <th>Ano final</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $planos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($plano->id); ?></td>
                    <td><?php echo e($plano->nome); ?></td>
                    <td><?php echo e($plano->ano_inicial); ?></td>
                    <td><?php echo e($plano->ano_final); ?></td>
                    <td>
                        <button class="btn" wire:click="$emit('openEixo', <?php echo e($plano->id); ?>)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                              </svg>
                        </button>
                        <button class="btn" wire:click="edit(<?php echo e($plano->id); ?>)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                            </svg>
                        </button>  
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#planoModal<?php echo e($plano->id); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                        
                        <div wire:ignore.self class="modal fade" id="planoModal<?php echo e($plano->id); ?>" tabindex="-1" aria-labelledby="planoModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5 class="fs-5">Deseja realmente excluir <?php echo e($plano->nome); ?>?</h5>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-around">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-danger" wire:click.prevent="delete(<?php echo e($plano->id); ?>)">Remover</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div><?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant\dant\resources\views/livewire/dant/plano-component.blade.php ENDPATH**/ ?>