<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>Investigador</h5>
    </div>
    <form wire:submit.prevent="storeInvestigador()">
        <div class="row">

            <div class="form-floating mb-4 col-8">
                <input type="text" wire:model.prevent="data.municipio_unidade_saude" class="form-control" placeholder="62 - Município/Unidade de Saúde">
                <label for="municipio_unidade_saude">62 - Município/Unidade de Saúde</label>
            </div>

            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model.prevent="data.cod_unidade_saude" class="form-control" placeholder="63 - Cód. da Unid. de Saúde">
                <label for="cod_unidade_saude">63 - Cód. da Unid. de Saúde</label>
            </div>

            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model.prevent="data.nome_investigador" class="form-control" placeholder="64 - Nome">
                <label for="nome_investigador">64 - Nome</label>
            </div>

            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model.prevent="data.funcao_investigador" class="form-control" placeholder="65 - Função">
                <label for="funcao_investigador">65 - Função</label>
            </div>

            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model.prevent="data.assinatura_investigador" class="form-control" placeholder="66 - Assinatura">
                <label for="assinatura_investigador">66 - Assinatura</label>
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
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div><?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/semraiva/investigador-component.blade.php ENDPATH**/ ?>