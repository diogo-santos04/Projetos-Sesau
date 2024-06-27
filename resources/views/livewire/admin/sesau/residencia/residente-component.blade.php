<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="text-center mb-4">Inscrições para Residência Médica</h2>
    {{-- @if ($openCadastro) --}}
    @include('livewire.admin.crud.table.message')
    @livewire('admin.sesau.residencia.candidato-component')
    {{-- @endif
    @if ($openCategoria) --}}
    <div class="card p-4 m-4 border-dark">
        <p>dados do usuario</p>
        <p>nome: {{ $nome }}</p>
        <p>nome_social: {{ $nome_social }}</p>
        <p>celular: {{ $celular }}</p>
        <p>email: {{ $email }}</p>
        <p>cpf: {{ $cpf }}</p>
    </div>

    <div class="card p-4 m-4 border-dark">
        <h2 class="text-center p-2">Escolha qual a sua categoria</h2>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-white bg-primary border border-black">
                    <div class="card-body text-center">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">Médico</h5>
                        <p class="card-text">Inscreva-se nesta categoria</p>
                        @if ($categoriaSelecionada === 'medico')
                            <button type="button" wire:click="cancelarSelecao" class="btn btn-success">
                                <i class="fas fa-check-circle"></i> Selecionado
                            </button>
                        @else
                            <button type="button" wire:click="categoriaSelecionada('medico')" class="btn btn-success"
                                @if ($categoriaSelecionada) disabled @endif>Escolher</button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card text-white bg-danger border border-black">
                    <div class="card-body text-center">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">Multiprofissional</h5>
                        <p class="card-text">Inscreva-se nesta categoria</p>
                        @if ($categoriaSelecionada === 'multiprofissional')
                            <button type="button" wire:click="cancelarSelecao" class="btn btn-success">
                                <i class="fas fa-check-circle"></i> Selecionado
                            </button>
                        @else
                            <button type="button" wire:click="categoriaSelecionada('multiprofissional')"
                                class="btn btn-success"
                                @if ($categoriaSelecionada) disabled @endif>Escolher</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-success mx-auto p-2" wire:click="openForm" style="max-width: 500px;">
            <i class="fas fa-check-circle"></i> Confirmar
        </button>
    </div>
{{-- 
    @endif
    @if ($openForm) --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card p-2 mb-4 bg-light border-dark">
                <livewire:admin.sesau.residencia.crud-form-component key="{{ Str::random(5) }}" formType="form"
                    title="Inscrições Residencia Médica" model="App\Models\Admin\Sesau\Residencia\Formulario"
                    form="admin.sesau.residencia.formulario.form" :dados=$dados />
            </div>
        </div>
    </div>
    {{-- @endif
    @if ($openTipoProcesso) --}}
    <div class="card p-4 m-4 border-dark">
        <h2 class="text-center p-2">Escolha o seu tipo de processo</h2>
        @livewire('admin.sesau.residencia.tipo-processo-component')
        <div class="text-center">
            <button type="button" class="btn btn-success p-2" wire:click="" style="max-width: 500px;">
                <i class="fas fa-check-circle"></i> Confirmar
            </button>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-hover table-striped-columns">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col"><i class="fas fa-user-alt h5"></i> Nome do Candidato</th>
                    <th scope="col"><i class="fas fa-user-md h5"></i> Categoria</th>
                    <th scope="col"><i class="fas fa-heartbeat h5"></i> Tipo do Processo</th>
                    <th scope="col"><i class="fas fa-edit h5"></i> Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Candidato A</td>
                    <td>Médico</td>
                    <td>Residência Médica em Família e Comunidade</td>
                    <td><button class="btn btn-info"><i class="fas fa-print"></i> Boleto</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Candidato B</td>
                    <td>Médico</td>
                    <td>Residência Médica em Psiquiatria</td>
                    <td><button class="btn btn-info"><i class="fas fa-print"></i> Boleto</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- @endif --}}
</div>
