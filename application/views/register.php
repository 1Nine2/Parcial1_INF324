<?php include("inc/header.php"); ?>
	<div class="container">
        <?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']);?>
        <h3>Registro</h3>
        <hr>
        <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label class="col-md-3 control-label">Nombre de Usuario</label>
                    <div class = "col-md-9">
                        <?php echo form_input(['name' => 'username', 'class' => 'form-control','placeholder' => 'Nombre Usuario']);?>
                    </div>
                </div>
            </div>
            <div class = "col-md-6">
                <?php echo form_error('username','<div class="text-danger">','</div>');?>
            </div>

            <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class = "col-md-9">
                        <?php echo form_input(['name' => 'email', 'class' => 'form-control','placeholder' => 'Email']);?>
                    </div>
                </div>
            </div>
            <div class = "col-md-6">
            <?php echo form_error('email','<div class="text-danger">','</div>');?>

            </div>
        </div>

      

        <div class = "row">
        <div class = "col-md-6">
                <div class = "form-group">
                    <label class="col-md-3 control-label">Genero</label>
                    <select class = "col-lg-9"  name="gender">
                        <option value = "">Select</option>
                        <option value = "Masculino">Masculino</option>
                        <option value = "Femenino">Femenino</option>
                    </select>             
                </div>
            </div>
            <div class = "col-md-6">
            <?php echo form_error('gender','<div class="text-danger">','</div>');?>

            </div>
        </div>

        <div class = "row">
        <div class = "col-md-6">
                <div class = "form-group">
                    <label class="col-md-3 control-label">Rol</label>
                    <select class = "col-lg-9"  name="role_id">
                        <option value = "">Select</option>
                    <?php if(count($roles)):?>
                        <?php foreach($roles as $role):?>
                        <option value = <?php echo $role->rolename?>><?php echo $role->rolename?></option>
                        <?php endforeach;?>
                        <?php endif;?>
                    </select>             
                </div>
            </div>
            <div class = "col-md-6">
            <?php echo form_error('role_id','<div class="text-danger">','</div>');?>

            </div>
        </div>

            <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label class="col-md-3 control-label">Contraseña</label>
                    <div class = "col-md-9">
                        <?php echo form_password(['name' => 'password', 'class' => 'form-control','placeholder' => 'Contraseña']);?>
                    </div>
                </div>
            </div>
            <div class = "col-md-6">
            <?php echo form_error('password','<div class="text-danger">','</div>');?>

            </div>
            </div>

            <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label class="col-md-3 control-label">Contraseña de Nuevo</label>
                    <div class = "col-md-9">
                        <?php echo form_password(['name' => 'confpwd', 'class' => 'form-control','placeholder' => 'Contraseña']);?>
                    </div>
                </div>
            </div>
            <div class = "col-md-6">
            <?php echo form_error('confpwd','<div class="text-danger">','</div>');?>

            </div>
            </div>

            <button type="submit" class="btn btn-primary">Registrarme e Iniciar ya!</button>
            <?php echo anchor("welcome","Volver a la pagina Principal",['class' => 'btn btn-primary']) ;?>
        </div>
        <?php echo form_close();?>
    </div>


<?php include("inc/footer.php"); ?>