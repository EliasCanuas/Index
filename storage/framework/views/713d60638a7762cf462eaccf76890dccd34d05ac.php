
<?php $__env->startSection('content'); ?>

<?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div>
        <ul>
            <li><?php echo e($producto->nombre); ?></li>
            <p><?php echo e($producto->descripcion); ?></p>
            <p><strong><?php echo e($producto->marca); ?></strong> <?php echo e($producto->modelo); ?> </p>
        </ul>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h3>NO hay registros en la base de datos</h3>
<?php endif; ?>


@ensection
<?php echo $__env->make('layout.app02', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app02\resources\views/Productos/index.blade.php ENDPATH**/ ?>