<div class="card p-4 m-4">
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session('message')); ?></div>
    <?php endif; ?>
    <style>
        .meu-card1 {
          border: 3px solid #0a777c;
          border-radius: 10px;
          box-shadow: 0 4px 8px rgba(5, 5, 5, 0.466);
          padding: 5px;
        }
      </style>

    <style>
        .meu-formulario1 {
           background-color: #0a788633;
           padding: 20px;
           border-radius: 10px;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
      </style>

<div class="card mb-3" style="max-width: 2000px;">
    <div class="row g-0">
      <div class="col-md-4" style="display: flex; justify-content: center; align-items: center; height: 300px;">
        <img src="<?php echo e(asset("imagemSesau.jpg")); ?>" class="img-fluid rounded-start"  width="500" height="150" alt="...">
      </div>
      <div class="col-md-8 ">
        <div class="card-body">
          <h5 class="card-title">Protocolo - Telefone (2020-1648)</h5>
        
        

            <form class="meu-formulario1">
            <form wire:submit.prevent="store">
                <div class="row">

                    <div class="form-floating mb-4 col-10">
                        <input type="text" wire:model.prevent="protocolo.nome" class="form-control">
                        <label for="nome">1 - Nome</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <select wire:model.prevent="protocolo.prazo" class="form-select">
                            <option value="">Selecione</option>
                            <?php $__currentLoopData = $prazos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prazo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($prazo->nome); ?>"><?php echo e($prazo->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="prazo">2 -  Prazo</label>
                    </div>


                    <div class="form-floating mb-4 col-10">
                        <input type="text" wire:model.prevent="protocolo.solicitacao" class="form-control">
                        <label for="solicitacao">3 - Solicitação</label>
                    </div>
                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="protocolo.data_solicitacao" class="form-control">
                        <label for="data_solicitacao">4 - Data da solicitação</label>
                    </div>
                    

                    <div class="form-floating mb-4 col-10">
                        <input type="text" wire:model.prevent="protocolo.servidor" class="form-control">
                        <label for="servidor">5 - Servidor</label>
                    </div>

                    <div class="form-floating mb-4 col-2">
                        <input type="date" wire:model.prevent="protocolo.data_retirada" class="form-control">
                        <label for="data_retirada">6 - Data de retirada</label>
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
</div>
</div>
</div>
</div><?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/samu/protocolo-component.blade.php ENDPATH**/ ?>