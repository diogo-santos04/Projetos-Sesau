<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="mb-4">I Formulários de Inscrição de Residência Médica</h2>
    <div class="page-content compass container-fluid border-dark">
        <div class="row">
            <div class="page-content edit-add container-fluid ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-2 mb-4 bg-light border-dark">
                            <h5>RESIDENCIA</h5>
                        </div>
                        <div class="card p-2 mb-4 bg-light border-dark">
                            <livewire:admin.crud.crud-component key="{{ Str::random(5) }}" formType="form"
                            title="Inscrições Residencia Médica" model="App\Models\Admin\Sesau\Residencia\Formulario"
                            form="admin.sesau.residencia.formulario.form" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div style="background-color: rgb(169, 232, 251)"></div> --}}