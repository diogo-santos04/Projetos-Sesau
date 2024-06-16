<div class="card p-4 mb-4">
    <div class="card p-2 mb-4 bg-light">
        <h5>Distrito</h5>
    </div>

    <?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session('message')); ?></div>
    <?php endif; ?>

    <button wire:click="openForm()" class="btn btn-primary mb-3 col-1">ADICIONAR</button>
    <?php if($openForm): ?>
        <form wire:submit.prevent="<?php echo e($distritoId ? 'update' : 'store'); ?>">
            <div class="row">
                <div class="form-floating mb-4 col-6">
                    <input type="text" wire:model.prevent="data.nome" class="form-control">
                    <label for="nome">1 - Nome do Distrito</label>
                </div>
                <div class="form-floating mb-4 col-6">
                    <input type="text" wire:model.prevent="data.codigo" class="form-control">
                    <label for="nome">2 - Código</label>
                </div>

                <div class="row form-check form-switch">
                    <div class="mb-4 px-4">
                        <label for="status" class="form-check-label">Status</label>
                        <input type="checkbox" wire:model="data.status" id="status" class="form-check-input">
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
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
            <?php if(isset($data['id'])): ?>
                <?php if($type == 'update'): ?>
                    <button type="button" wire:click="update(<?php echo e($data['id']); ?>)" 
                        class="btn btn-primary ">ATUALIZAR</button>
                <?php endif; ?>
                <?php if($type == 'delete'): ?>
                    <button type="button" wire:click="destroy(<?php echo e($data['id']); ?>)" 
                        class="btn btn-danger ">DELETAR</button>
                <?php endif; ?>
            <?php else: ?>
                <button type="button" wire:click="store" type="submit" class="btn btn-primary">SALVAR</button>
            <?php endif; ?>
            <button wire:click="closeForm" type="button" class="btn btn-secondary">CANCELAR</button>
            
        </form>
    <?php endif; ?>
    <div class="card p-4 mt-3">
        <div>
            <h2 class="my-4">Tabela de Distritos</h2>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.sesau.semraiva.semraiva-table-component', ['model' => 'App\Models\Admin\Sesau\Semraiva\Distrito','title' => 'Distrito'])->html();
} elseif ($_instance->childHasBeenRendered(''.e(Str::random(5)).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e(Str::random(5)).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e(Str::random(5)).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e(Str::random(5)).'');
} else {
    $response = \Livewire\Livewire::mount('admin.sesau.semraiva.semraiva-table-component', ['model' => 'App\Models\Admin\Sesau\Semraiva\Distrito','title' => 'Distrito']);
    $html = $response->html();
    $_instance->logRenderedChild(''.e(Str::random(5)).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\katiane\sesau\resources\views/livewire/admin/sesau/semraiva/distrito-component.blade.php ENDPATH**/ ?>