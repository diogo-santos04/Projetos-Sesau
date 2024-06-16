<div class="card p-4 m-4">
<div class="card p-4 mb-4">
    <style>
        .meu-card {
          border: 3px solid #0a777c;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.37);
          padding: 5px;
        }
      </style>
    <style>
        .meu-formulario {
           background-color: #0a788633;
           padding: 20px;
           border-radius: 10px;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
      </style>


    <div class="card-title card text-center  border: 2px solid #ac1a1a card meu-card">
        <h5>Atendimento</h5>
    </div>

    <form class="meu-formulario">
    <form wire:submit.prevent="store">
        <div class="row">

            <div class="form-floating mb-4 col-2">
                <input type="date" wire:model.prevent="atendimento.data_atendimento" class="form-control">
                <label for="nome">1 - Data de Atendimento:</label>
            </div>

            <div class="form-floating mb-4 col-2">
                <input type="time" wire:model.prevent="atendimento.horario" class="form-control">
                <label for="nome">2 - Horário:</label>
            </div>

            <div class="form-floating mb-4 col-8">
                <input type="text" wire:model.prevent="atendimento.endereco" class="form-control">
                <label for="nome">3 - Endereço:</label>
            </div>

            <div class="form-floating mb-4 col-8">
                <input type="text" wire:model.prevent="atendimento.fato_acontecido" class="form-control">
                <label for="nome">4 - Fato Acontecido:</label>
            </div>
            
            <div class="form-floating mb-4 col-4">
                <input type="text" wire:model.prevent="atendimento.transportado_para" class="form-control">
                <label for="nome">5 - Transportado Para:</label>
            </div>
            <div class="form-floating mb-4 col-12">
                <input type="text" wire:model.prevent="atendimento.observacao" class="form-control">
                <label for="nome">6 - Observações:</label>
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
</div>
</div><?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/samu/atendimento-component.blade.php ENDPATH**/ ?>