
<?php $__env->startSection('content'); ?>

    Formulario para crear un nuevo resgistro

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10"></div>
            <div class="row">
                <form action="<?php echo e(route('people.store')); ?>" method="POST">
                    
                    <?php echo csrf_field(); ?>

                <div class="cold-md-6">

                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="name" id="">
                    </div>

                    <div class="form-group">
                        <label>Apellido Paterno:</label>
                        <input type="text" class="form-control" name="lastname" id="">
                    </div>

                    <div class="form-group">
                        <label>Apellido Materno:</label>
                        <input type="text" class="form-control" name="lastname2" id="">
                    </div>

                    <div class="form-group">
                        <label>CURP:</label>
                        <input type="text" minlength="18" maxlength="18" 
                        style="text-transform: uppercase;" class="form-control" name="curp" id="">
                    </div>
                 </div>


                <div class="cold-md-6">

                <div class="form-group">
                        <label>RFC:</label>
                        <input type="text" minlength="13" maxlength="13"
                        style="text-transform: uppercase;" class="form-control" name="rfc" id="">
                    </div>

                    <div class="form-group">
                        <label>Fecha de nacimiento:</label>
                        <input type="date" class="form-control" name="Birthday" id="">
                    </div>

                    <div class="form-group">
                        <label>Tipo de sangre:</label>
                        <select name="BloodType" class="form-control">
                            <option value="A+">A positivo (A+)</option>
                            <option value="A-">A negativo (A-)</option>
                            <option value="B+">B positivo (B+)</option>
                            <option value="B-">B negativo (B-)</option>
                            <option value="AB+">AB positivo (AB+)</option>
                            <option value="AB-">AB negativo (AB-)</option>
                            <option value="O+">O positivo (O+)</option>
                            <option value="O-">O negativo (O-)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="email" id="">
                    </div>

                    <div class="form-group">
                        <label>Sexo:</label>
                        <div>
                            <input type="radio" name="Sex" id="Sex01" value="Femenino">
                            <label for="Sex01">Mujer</label>

                            <input type="radio" name="Sex" id="Sex02" value="Masculino">
                            <label for="Sex02">Hombre</label>
                        </div>
                        
                    </div>

                </div>

                    

                    <div class="mt-2">
                        <input class="btn vbt-primary" type="submit" value="Guardar">
                    </div>

                </form>
            </div>
        <div class="col-1"></div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app02\resources\views/people/create.blade.php ENDPATH**/ ?>