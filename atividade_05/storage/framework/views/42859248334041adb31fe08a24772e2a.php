

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Adicionar Livro informando IDs</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('books.store.id')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="<?php echo e(old('title')); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID do Autor</label>
            <input type="number" name="author_id" class="form-control" value="<?php echo e(old('author_id')); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID da Editora</label>
            <input type="number" name="publisher_id" class="form-control" value="<?php echo e(old('publisher_id')); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID da Categoria</label>
            <input type="number" name="category_id" class="form-control" value="<?php echo e(old('category_id')); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?php echo e(route('books.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/karol/web2/web2-atividades/atividade_05/resources/views/books/create-id.blade.php ENDPATH**/ ?>