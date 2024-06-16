<div class="card p-4 m-4">
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session('message')); ?></div>
    <?php endif; ?>

    <div class="row">
        <div class="col-auto">
            <button class="btn btn-primary mb-4" wire:click="create">Adicionar Ficha</button>
        </div>
    </div>

    
        <div class="card p-4 mb-4">
            <form wire:submit.prevent="store">
                <div class="row">

                    <div class="form-floating mb-4 col-12">
                        <input type="text" wire:model.prevent="data.tipo_notificacao" class="form-control" placeholder="Nome do eixo:">
                        <label for="nome">1 - Tipo de Notificação</label>
                    </div>

                    <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="data.agravo" class="form-control" placeholder="2 - Agravo/doença:">
                        <label for="nome">2 - Agravo/doença</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="data.cid" class="form-control" placeholder="Código (CID10)">
                        <label for="nome">2 - Código (CID10)</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="data.data_notificacao" class="form-control">
                        <label for="nome">2 - Data da Notificação</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="data.uf" class="form-control" placeholder="4 - UF:">
                        <label for="nome">4 - UF</label>
                    </div>
                    <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="data.municipio" class="form-control" placeholder="Município de Notificação">
                        <label for="nome">5 - Município de Notificação</label>
                    </div>
                  <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="data.ibge" class="form-control" placeholder="Código (IBGE)">
                        <label for="nome">5 - Código (IBGE)</label>
                    </div>


                    <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="data.unidade" class="form-control" placeholder="2 - Agravo/doença:">
                        <label for="nome">6 - Unidade de Saúde (ou outra fonte notificadora)</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="data.codigo" class="form-control" placeholder="Código (CID10)">
                        <label for="nome">6 - Código</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="data.data_atendimento" class="form-control">
                        <label for="nome">7 - Data da Atendimento</label>
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
            </form>
        </div>

        <div class="card p-4 mb-4">
            <form wire:submit.prevent="store">
                <div class="row">

                    <div class="form-floating mb-4 col-10">
                        <input type="text" wire:model.prevent="data.nome_paciente" class="form-control" placeholder="8 - Nome do Paciente:">
                        <label for="nome">8 - Nome do Paciente</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="data.data_nascimento" class="form-control">
                        <label for="nome">9 - Data de Nascimento</label>
                    </div>
                    <div class="form-floating mb-4 col-1">
                        <input type="text" wire:model.prevent="data.idade" class="form-control" placeholder="ou) Idade">
                        <label for="nome">10 - (ou) Idade</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model.prevent="data.idade" class="form-select">
                            <option value="">Selecione</option>
                            <option value="1">Hora</option>
                            <option value="2">Dia</option>
                            <option value="3">Mês</option>
                            <option value="4">Ano</option>
                        </select>
                        <label for="select">10 - (ou) Idade</label>
                    </div>

                    <div class="form-floating mb-4 col-1">
                        <input type="text" wire:model.prevent="data.sexo" class="form-control" placeholder="11 - Sexo">
                        <label for="nome">11 - Sexo</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model.prevent="data.sexo" class="form-select">
                            <option value="">Selecione um gênero</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="I">Ignorado</option>
                        </select>
                        <label for="sexo">11 - Sexo</label>
                    </div>

                    <div class="form-floating mb-4 col-1">
                        <input type="text" wire:model.prevent="data.gestante" class="form-control" placeholder="12 - Gestante">
                        <label for="nome">12 - Gestante</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <select wire:model.prevent="data.gestante" class="form-select">
                            <option value="">Selecione uma opção</option>
                            <option value="1">1º Trimestre</option>
                            <option value="2">2º Trimestre</option>
                            <option value="3">3º Trimestre</option>
                            <option value="4">Idade gestacional/Ignorada</option>
                            <option value="5">Não</option>
                            <option value="6">Não se aplica</option>
                            <option value="9">Ignorado</option>
                        </select>
                        <label for="select">12 - Gestante</label>
                    </div>

                    <div class="form-floating mb-4 col-1">
                        <input type="text" wire:model.prevent="data.raca" class="form-control" placeholder="13 - Raça/Cor">
                        <label for="nome">13 - Raça/Cor</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <select wire:model.prevent="data.raca" class="form-select">
                            <option value="">Selecione uma opção</option>
                            <option value="1">Branca</option>
                            <option value="2">Preta</option>
                            <option value="3">Amarela</option>
                            <option value="4">Parda</option>
                            <option value="5">Indígena</option>
                            <option value="9">Ignorado</option>
                        </select>
                        <label for="select">13 - Raça/Cor</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <input type="text" wire:model.prevent="data.escolaridade" class="form-control" placeholder="14 - Escolaridade">
                        <label for="nome">14 - Escolaridade</label>
                    </div>

                    <div class="form-floating mb-4 col-10">
                        <select wire:model.prevent="data.escolaridade" class="form-select">
                            <option value="">Selecione uma opção</option>
                            <option value="0">Analfabeto</option>
                            <option value="1">1ª a 4ª série incompleta do EF (antigo primário ou 1º grau)</option>
                            <option value="2">4ª série completa do EF (antigo primário ou 1º grau)</option>
                            <option value="3">5ª à 8ª série incompleta do EF (antigo ginásio ou 1º grau)</option>
                            <option value="4">Ensino fundamental completo (antigo ginásio ou 1º grau)</option>
                            <option value="5">Ensino médio incompleto (antigo colegial ou 2º grau)</option>
                            <option value="6">Ensino médio completo (antigo colegial ou 2º grau)</option>
                            <option value="7">Educação superior incompleta</option>
                            <option value="8">Educação superior completa</option>
                            <option value="9">Ignorado</option>
                            <option value="10">Não se aplica</option>
                        </select>
                        <label for="select">14 - Escolaridade</label>
                    </div>


                    <div class="form-floating mb-4 col-4">
                        <input type="text" wire:model.prevent="data.cartao_sus" class="form-control" placeholder="15 - Número do Cartão SUS">
                        <label for="nome">15 - Número do Cartão SUS</label>
                    </div>
                    <div class="form-floating mb-4 col-8">
                        <input type="text" wire:model.prevent="data.mae" class="form-control" placeholder="16 - Nome da mãe">
                        <label for="nome">16 - Nome da mãe</label>
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
            </form>
        </div>

        <div class="card p-4 mb-4">
            <form wire:submit.prevent="store">
                

                <div class="row">

                    <div class="col">
                        <textarea wire:model.prevent="data.observacao" id="" cols="30" rows="5" placeholder="Observações:" class="form-control"></textarea>
                        <label for="observacao">Observações</label>
                        <?php $__errorArgs = ['observacao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="row form-check form-switch">
                    <div class="mb-4">
                        <label for="status" class="form-check-label">Status</label>
                        <input type="checkbox" wire:model="data.status" id="status"
                            class="form-check-input">
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="error"><?php echo e($mssage); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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

                <div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-secondary"
                        wire:click="closeModal">Cancelar</button>
                </div>
            </form>
        </div>


    

    
</div>
<?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant_02042024\dant\resources\views/livewire/admin/sesau/semraiva/ficha-component.blade.php ENDPATH**/ ?>