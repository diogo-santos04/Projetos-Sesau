<div class="row" style="justify-content: center">
    <div class="col-lg-2 mb-4" style="width: 40%">
        <div class="card text-white bg-primary border border-black">
            <div class="card-body">
                <i class="fas fa-heartbeat h3"></i>
                <h5 class="card-title">Residência Médica em Família e Comunidade</h5>
                <p class="card-text">Inscreva-se nesta categoria</p>
                <button type="button" wire:click="inscrito" wire:model.prevent='data.residencia_familia_comunidade'
                    class="btn btn-success">Inscrever-se</button>

                @if (isset($data['residencia_familia_comunidade']))
                    <button type="button" class="btn btn-success">INSCRITO</button>
                @else
                    <button type="button" wire:click="inscrever"
                        wire:model.prevent='data.residencia_familia_comunidade'
                        class="btn btn-success">Inscrever-se</button>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-2 mb-4" style="width: 40%">
        <div class="card text-white bg-danger border border-black">
            <div class="card-body">
                <i class="fas fa-heartbeat h3"></i>
                <h5 class="card-title">Residência Médica em Psiquiatria </h5>
                <p class="card-text">Inscreva-se nesta categoria</p>
                <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off">
                <label class="btn btn-outline-secondary" for="btn-check-2-outlined">Checked</label><br>
            </div>
        </div>
    </div>
</div>
