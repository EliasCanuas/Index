
<?php $__env->startSection('content'); ?>

    <div>
        <form action="<?php echo e(route('productos.store')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="">Nombre del producto: </label>
                <input class="form-control" type="text" name="nombre" id="">
            </div>

            <div class="form-group">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="marca" id="">
            </div>

            <div class="form-group">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="modelo" id="">
            </div>

            <div class="form-group">
                <label for="">Precio: </label>
                <input class="form-control" type="number" name="precio" id="">
            </div>

            <div class="form-group">
                <label for="">Descripción: </label>
                <textarea class="form-control" name="descripcion" id="" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="">Stock: </label>
                <input class="form-control" type="number" name="stock" id="">
            </div>

            <div class="for-group">
                <label for="">¿Esta Disponible?</label>
                <select class="form-control" name="disponible" id="">
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="mt-5">
                <input class="form-control" class="btn btn-primary" type="submit" value="Guardar">
            </div>

        </form>
    </div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app02\resources\views/productos/create.blade.php ENDPATH**/ ?>