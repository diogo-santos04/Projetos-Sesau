<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="mb-4" style="padding-left: 33%">Inscrições para Residência Médica</h2>
    <div class="page-content compass container-fluid border-dark">
        <div class="row">
            <div class="page-content edit-add container-fluid ">
                <div class="row">
                    <div class="card p-2 mb-4 bg-light border-dark">
                        <div class="row">
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
                        </div>
                        <div class="col-md-12">
                            <div class="card p-2 mb-4 bg-light border-dark">
                                <livewire:admin.crud.crud-component key="{{ Str::random(5) }}" formType="form"
                                    title="Inscrições Residencia Médica"
                                    model="App\Models\Admin\Sesau\Residencia\Formulario"
                                    form="admin.sesau.residencia.formulario.form" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div style="background-color: rgb(169, 232, 251)"></div> --}}
