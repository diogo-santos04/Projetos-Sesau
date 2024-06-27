<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="mb-4" style="padding-left: 36%">Inscrições para Residência Médica</h2>
    @if (!$openCategoria)
    @include('livewire.admin.crud.table.message')
    @livewire('admin.sesau.residencia.candidato-component')
    @endif
    @if ($openCategoria)
    <div class="card p-4 m-4 border-dark">
        <p>dados do usuario</p>
        <p>nome: {{ $nome }}</p>
        <p>nome_social: {{ $nome_social }}</p>
        <p>celular: {{ $celular }}</p>
        <p>email: {{ $email }}</p>
        <p>cpf: {{ $cpf }}</p>
    </div>

    <div class="card p-4 m-4 border-dark">
        <h2 class="mx-auto p-2" style="width: 500px">Escolha qual a sua categoria</h2>
        <div class="row" style="justify-content: center">
            <div class="col-lg-2 mb-4" style="width: 40%">
                <div class="card text-white bg-primary border border-black">
                    <div class="card-body">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">MÉDICO</h5>
                        <p class="card-text">Inscreva-se nesta categoria</p>
                        @if ($categoriaSelecionada === 'medico')
                            <button type="button" wire:click="cancelarSelecao"
                                class="btn btn-success"><i class="fas fa-check-circle"></i> Selecionado</button>
                        @else
                            <button type="button" wire:click="categoriaSelecionada('medico')" class="btn btn-success"
                                @if ($categoriaSelecionada) disabled @endif>Escolher</button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4" style="width: 40%">
                <div class="card text-white bg-danger border border-black">
                    <div class="card-body">
                        <i class="fas fa-heartbeat h3"></i>
                        <h5 class="card-title">MULTIPROFISSIONAL</h5>
                        <p class="card-text">Inscreva-se nesta categoria</p>
                        @if ($categoriaSelecionada === 'multiprofissional')
                            <button type="button" wire:click="cancelarSelecao"
                                class="btn btn-success"><i class="fas fa-check-circle"></i> Selecionado</button>
                        @else
                            <button type="button" wire:click="categoriaSelecionada('multiprofissional')"
                                class="btn btn-success"
                                @if ($categoriaSelecionada) disabled @endif>Escolher</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-success" wire:click="openForm">Prosseguir</button>
        </div>
    </div>

    @endif
    @if ($openForm)
    <div class="row">
        <div class="col-md-12">
            <div class="card p-2 mb-4 bg-light border-dark">
                <livewire:admin.sesau.residencia.crud-form-component key="{{ Str::random(5) }}" formType="form"
                    title="Inscrições Residencia Médica" model="App\Models\Admin\Sesau\Residencia\Formulario"
                    form="admin.sesau.residencia.formulario.form" :dados=$dados />
            </div>
        </div>
    </div>
    @endif
    @if ($openTipoProcesso)
    <div class="card p-4 m-4 border-dark">
        <h2 class="mx-auto p-2" style="width: 500px">Escolha o seu tipo de processo</h2>
        @livewire('admin.sesau.residencia.tipo-processo-component')
    </div>


    <div class="card p-4 m-4 border-dark">
        <p>dados do processo do usuario</p>
        <p>categoria: {{ $categoriaSelecionada }}</p>
        <p>tipos de processo: {{ $tipoProcesso }} </p>
    </div>
    @endif
</div>
