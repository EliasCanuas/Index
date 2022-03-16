

<?php $__env->startSection('content'); ?>

<a class ="btn btn-primary" href="/people/create">Nuevo</a>

<h1>Personas Registradas en la base de datos awa</h1>

<div>
    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


    <div class="col">
        <div class="car">
            <div class="card-body">
                <div class="card-title">
                <?php echo e($person->name); ?>  
                <?php echo e($person->lastname); ?> 
                <?php echo e($person->lastname2); ?>

                </div>
                <div class="card-subtitle">
                    <?php echo e($person->email); ?>

                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-info">Ver</button>
                <button class="btn btn-warning">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>

       
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>No users</p>
    <?php endif; ?>    
</div>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app02\resources\views/people/index.blade.php ENDPATH**/ ?>