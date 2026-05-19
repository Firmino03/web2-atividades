

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Detalhes do Usuário</h1>

    <div class="card">
        <div class="card-header">
            <?php echo e($user->name); ?>

        </div>
        <div class="card-body">
            <p><strong>Email:</strong> <?php echo e($user->email); ?></p>
        </div>
    </div>

    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/karol/web2/web2-atividades/atividade_05/resources/views/users/show.blade.php ENDPATH**/ ?>