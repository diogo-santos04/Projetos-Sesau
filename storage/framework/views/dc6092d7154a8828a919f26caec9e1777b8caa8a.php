<div>
    <?php if($categoria == 'medico'): ?>
        <div class="row" style="justify-content: center">
            <div class="col-lg-2 mb-4" style="width: 40%">
                <div class="card text-white bg-primary border border-black">
                    <div class="card-body">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">Residência Médica em Família e Comunidade</h5>
                        <p class="card-text">Inscreva-se neste processo</p>
                        <?php if(isset($data['residencia_familia_comunidade']) && $data['residencia_familia_comunidade']): ?>
                            <button type="button" wire:model.prevent="data.residencia_familia_comunidade"
                                wire:click="inscrever('residencia_familia_comunidade')" class="btn btn-success"><i
                                    class="fas fa-check-circle"></i> Inscrito</button>
                        <?php else: ?>
                            <button type="button" wire:model.prevent='data.residencia_familia_comunidade'
                                wire:click="inscrever('residencia_familia_comunidade')" class="btn btn-success"><i
                                    class="fas fa-pencil-alt"></i> Inscrever-se</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4" style="width: 40%">
                <div class="card text-white bg-danger border border-black">
                    <div class="card-body">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">Residência Médica em Psiquiatria </h5>
                        <p class="card-text">Inscreva-se neste processo</p>
                        <?php if(isset($data['residencia_medica_psiquiatria']) && $data['residencia_medica_psiquiatria']): ?>
                            <button type="button" wire:model.prevent="data.residencia_medica_psiquiatria"
                                wire:click="inscrever('residencia_medica_psiquiatria')" class="btn btn-success"><i
                                    class="fas fa-check-circle"></i> Inscrito</button>
                        <?php else: ?>
                            <button type="button" wire:model.prevent='data.residencia_medica_psiquiatria'
                                wire:click="inscrever('residencia_medica_psiquiatria')" class="btn btn-success">
                                <i class="fas fa-pencil-alt"></i> Inscrever-se</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-2" style="">
            <button type="button" class="btn btn-success" wire:click="store">Confirmar</button>
        </div>
    <?php else: ?>
        <div class="row" style="justify-content: center">
            <div class="col-lg-2 mb-4" style="width: 40%">
                <div class="card text-white bg-primary border border-black">
                    <div class="card-body">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">Residência Multiprofissional em Saúde da Família</h5>
                        <p class="card-text">Inscreva-se neste processo</p>
                        <?php if(isset($data['residencia_multiprofissional_saude_familia']) && $data['residencia_multiprofissional_saude_familia']): ?>
                            <button type="button" wire:model.prevent="data.residencia_multiprofissional_saude_familia"
                                wire:click="inscrever('residencia_multiprofissional_saude_familia')"
                                class="btn btn-success"><i class="fas fa-check-circle"></i> Inscrito</button>
                        <?php else: ?>
                            <button type="button" wire:model.prevent='data.residencia_multiprofissional_saude_familia'
                                wire:click="inscrever('residencia_multiprofissional_saude_familia')"
                                class="btn btn-success"><i class="fas fa-pencil-alt"></i>
                                Inscrever-se</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4" style="width: 40%">
                <div class="card text-white bg-danger border border-black">
                    <div class="card-body">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">Residência Multiprofissional em Saúde Mental </h5>
                        <p class="card-text">Inscreva-se neste processo</p>
                        <?php if(isset($data['residencia_multiprofissional_saude_mental']) && $data['residencia_multiprofissional_saude_mental']): ?>
                            <button type="button" wire:model.prevent="data.residencia_multiprofissional_saude_mental"
                                wire:click="inscrever('residencia_multiprofissional_saude_mental')"
                                class="btn btn-success"><i class="fas fa-check-circle"></i> Inscrito</button>
                        <?php else: ?>
                            <button type="button" wire:model.prevent='data.residencia_multiprofissional_saude_mental'
                                wire:click="inscrever('residencia_multiprofissional_saude_mental')"
                                class="btn btn-success"><i class="fas fa-pencil-alt"></i>
                                Inscrever-se</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 mb-2" style="">
            <button type="button" class="btn btn-success" wire:click="store">Confirmar</button>
        </div>

    <?php endif; ?>
</div>
<?php /**PATH D:\Projetos\sesau1\resources\views/livewire/admin/sesau/residencia/tipo-processo-component.blade.php ENDPATH**/ ?>