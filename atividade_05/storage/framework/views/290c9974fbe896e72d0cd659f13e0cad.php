<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="mb-4">Bem-vindo ao Laravel</h1>

            <p class="lead">
                Sistema configurado com Laravel, autenticação e Bootstrap.
            </p>

            <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">
                    Login
                </a>

                <a href="<?php echo e(route('register')); ?>" class="btn btn-outline-primary">
                    Registrar
                </a>
            <?php else: ?>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-success">
                    Acessar o sistema
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/karol/web2/web2-atividades/atividade_04/resources/views/welcome.blade.php ENDPATH**/ ?>