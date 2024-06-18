<div class="row">
    <div class="form-floating mb-4 col-12">
        <select wire:model.prevent="data.tipo_inscricao" class="form-select">
            <option value="">Selecione</option>
            <option value="Residência Médica em Família e Comunidade">Residência Médica em Família e Comunidade</option>
            <option value="Residência Médica em Psiquiatria ">Residência Médica em Psiquiatria</option>
        </select>
        <label for="select">1 - Inscrição para:* (pode selecionar as duas)</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.nome" class="form-control">
        <label for="nome">2 - Nome Completo*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.nome_social" class="form-control">
        <label for="nomesocial">3 - Nome Social</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="number" wire:model.prevent="data.cpf" class="form-control">
        <label for="cpf">4 - CPF*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="number" wire:model.prevent="data.celular" class="form-control">
        <label for="celular">5 - Celular*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.email" class="form-control">
        <label for="email">6 - Email*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="date" wire:model.prevent="data.data_nascimento" class="form-control">
        <label for="datanascimento">7 - Data de Nascimento*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="number" wire:model.prevent="data.rg" class="form-control">
        <label for="rg">8 - RG*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="string" wire:model.prevent="data.orgao_expedidor" class="form-control">
        <label for="orgaoexpedidor">9 - Orgão Expedidor*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="date" wire:model.prevent="data.expedicao_rg" class="form-control">
        <label for="expedicaorg">10 - Data expedição RG*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="number" wire:model.prevent="data.crm" class="form-control">
        <label for="crm">11 - CRM*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <select wire:model.prevent="data.crm_estado" class="form-select">
            <option value="">--Selecione--</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <label for="crm_estado">12 - CRM - Estado*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <select wire:model.prevent="data.sexo" class="form-select">
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
        <label for="select">13 - Sexo</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.pais_naturalidade" class="form-control">
        <label for="pais_naturalidade">14 - Pais de Naturalidade*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <select wire:model.prevent="data.estado_civil" class="form-select">
            <option value="">Selecione</option>
            <option value="solteiro">solteiro</option>
        </select>
        <label for="estadocivil">15 - Estado Civil*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.cep" class="form-control">
        <label for="cep">16 - CEP*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.cidade" class="form-control">
        <label for="cidade">17 - Cidade*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <select wire:model.prevent="data.estado" class="form-select">
            <option value="">--Selecione--</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <label for="select">18 - Estado*</label>
    </div>

    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.estado" class="form-control">
        <label for="estado">19 - Endereço*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.bairro" class="form-control">
        <label for="bairro">20 - Bairro*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="number" wire:model.prevent="data.numero" class="form-control">
        <label for="numero">21 - Numero*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.complemento" class="form-control">
        <label for="complemento">22 - Complemento</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.instituicao_graduacao" class="form-control">
        <label for="instituicao_graduacao">23 - Instituição onde obteve a graduação*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.ano_conclusao" class="form-control">
        <label for="conclusao">24 - Ano de conclusão*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.cidade_instituicao" class="form-control">
        <label for="cidade_instituicao">25 - Cidade da instituição*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <select wire:model.prevent="data.estado_instituicao" class="form-select">
            <option value="">--Selecione--</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <label for="estado_instituicao">26 - Estado da Instituição*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.ocupacao_profissao" class="form-control">
        <label for="ocupacao_profissao">27 - Ocupação/Profissão*</label>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="text" wire:model.prevent="data.curriculo" class="form-control">
        <label for="curriculo">28 - Currículo Lattes</label>
    </div>
    <div class="form-floating mb-3 col-12">
        <h6 class="form-floating mb-3 col-3">29 - Possui PROVAB*</h6>
        <div class="row form-check form-switch">
            <div class="mb-3">
                <label for="provab" class="form-check-label">Sim</label>
                <input type="checkbox" wire:model.prevent="data.provab" id="status" class="form-check-input">
                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <?php if(!empty($data['provab'])): ?>
            <div class="form-floating m-1 col-12">
                <input type="file" wire:model="data.documento_provab" class="form-control-file">
                <?php $__errorArgs = ['data.documento_provab'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="form-floating mb-4 col-12">
        <select wire:model.prevent="data.tipo_vaga" class="form-select">
            <option value="">Selecione</option>
            <option value="1">a. Negro</option>
            <option value="2">b. Índio</option>
            <option value="3">c. Pessoa com deficiência</option>
            <option value="4">d. Ampla Concorrência</option>
            
        </select>
        <label for="tipo_vaga">30 - Vaga para*</label>
        <?php if(!empty($data['tipo_vaga']) && $data['tipo_vaga'] == '4'): ?>
            <div class="form-floating m-2 col-12">
                <input type="file" wire:model="data.documento_ampla_concorrencia" class="form-control-file" id="documentoAmplaConcorrencia">
                <?php $__errorArgs = ['data.documento_ampla_concorrencia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="form-floating mb-4 col-3">
        <input type="boolean" wire:model.prevent="data.leitura_edital" class="form-control">
        <label for="edital">31 - Leitura do Edital*</label>
    </div>
    <div class="form-floating mb-3 col-12">
        <h6 class="form-floating mb-3 col-3">32 - Solicitação de Isenção de Inscrição</h6>
        <div class="row form-check form-switch">
            <div class="mb-3">
                <label for="solicitacao_isencao" class="form-check-label">Solicitar</label>
                <input type="checkbox" wire:model.prevent="data.solicitacao_isencao" id="status"
                    class="form-check-input">
                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <?php if(!empty($data['solicitacao_isencao'])): ?>
            <div class="form-floating m-1 col-12">
                <input type="file" wire:model="data.documento_solicitacao_isencao" class="form-control-file">
                <?php $__errorArgs = ['data.documento_solicitacao_isencao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="form-floating mb-4 col-12">
        <h6 class="form-floating mb-4 col-3">33 - Termo de Aceitacao</h6>
        <p><strong>a. O candidato requer a inscrição para este ato e declara estar ciente e de acordo com as normas do
                mesmo constantes no Edital ANEXO e que os dados aqui registrados são expressão da verdade. Acompanhe
                as informações sobre residência, editais, avisos, listas de resultados, etc. pelo site da Prefeitura
                Municipal de Campo Grande.</strong></p>
        <div class="row form-check form-switch">
            <div class="mb-2">
                <label for="termo_aceitacao" class="form-check-label">Aceitar</label>
                <input type="checkbox" wire:model="data.termo_aceitacao" id="status" class="form-check-input">
                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error"><?php echo e($mssage); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Projetos\sesau1\resources\views/admin/sesau/residencia/formulario/form.blade.php ENDPATH**/ ?>