<div>
    <!-- Botão para adicionar novo post -->
    <button class="btn btn-primary mb-3" wire:click="create">Adicionar Novo</button>

    <!-- Card com a tabela de posts -->
    <div class="card">
        <div class="card-header">
            Lista de Posts
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Data do Post</th>
                            <th>Tipo do Post</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post->id); ?></td>
                            <td><?php echo e($post->nome); ?></td>
                            <td><?php echo e($post->descricao); ?></td>
                            <td><?php echo e($post->data_post); ?></td>
                            <td><?php echo e($post->tipo_post); ?></td>
                            <td><?php echo e($post->status ? 'Ativo' : 'Inativo'); ?></td>
                            <td>
                                <!-- Botão para editar post (abrir modal) -->
                                <button class="btn btn-sm btn-primary" wire:click="edit(<?php echo e($post->id); ?>)">Editar</button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Inclua o modal de adição/edição de posts -->
    <?php echo $__env->make('posts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\Apache24\htdocs\cuba_geneses_2024\dant_02042024\sesau\resources\views/livewire/post/post-component.blade.php ENDPATH**/ ?>