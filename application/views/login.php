<?php include("inc/header.php"); ?>
	<div class="container">
        <?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']);?>
        <h3>Login</h3>
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

            <button type="submit" class="btn btn-primary">Iniciar ya!</button>
            <?php echo anchor("welcome","Volver a la pagina Principal",['class' => 'btn btn-primary']) ;?>
        </div>
        <?php echo form_close();?>
    </div>


<?php include("inc/footer.php"); ?>