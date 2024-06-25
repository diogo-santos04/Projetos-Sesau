<div class="card p-4 m-4 border-dark" style="background-color: rgb(169, 232, 251)">
    <h2 class="mb-4" style="padding-left: 33%">Inscrições para Residência Médica</h2>
    {{-- @if ($openTipoProcesso == false) --}}
    @include('livewire.admin.crud.table.message')
    @livewire('admin.sesau.residencia.candidato-component')
    {{-- @endif --}}
    {{-- @if ($openTipoProcesso == true) --}}
    <div class="card p-4 m-4 border-dark">
        <p>dados do usuario</p>
        <p>nome: {{ $nome }}</p>
        <p>nome_social: {{ $nome_social }}</p>
        <p>celular: {{ $celular }}</p>
        <p>email: {{ $email }}</p>
        <p>cpf: {{ $cpf }}</p>
    </div>
    @include('livewire.admin.sesau.residencia.tipo-processo-component')
    @include('livewire.admin.sesau.residencia.formulario-component')
    {{-- @endif --}}
</div>
