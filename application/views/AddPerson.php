<?php include("inc/header.php"); ?>
	<div class="container">
        <?php echo form_open("welcome/createPerson", ['class' => 'form-horizontal']);?>
       
        <h3>Registro Personas</h3>
        <hr>
        <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label class="col-md-3 control-label">Nombre Completo</label>
                    <div class = "col-md-9">
                        <?php echo form_input(['name' => 'name', 'class' => 'form-control','placeholder' => 'Nombre y Apellido']);?>
                    </div>
                </div>
            </div>
            <div class = "col-md-6">
                <?php echo form_error('username','<div class="text-danger">','</div>');?>
            </div>

            <div class = "row">
            <div class = "col-md-6">
                <div class = "form-group">
                    <label class="col-md-3 control-label">CI</label>
                    <div class = "col-md-9">
                        <?php echo form_input(['name' => 'ci', 'class' => 'form-control','placeholder' => 'CI']);?>
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
                    <label class="col-md-3 control-label">Fecha Nacimiento</label>
                    <div class = "col-md-9">
                        <?php echo form_input(['name' => 'fechan', 'class' => 'form-control','placeholder' => 'dd/mm/aa']);?>
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
                    <label class="col-md-3 control-label">Codigo de Depto</label>
                    <div class = "col-md-9">
                        <?php echo form_input(['name' => 'deptoc', 'class' => 'form-control','placeholder' => 'Codigo de Departamento']);?>
                    </div>
                </div>
            </div>
            <div class = "col-md-6">
            <?php echo form_error('confpwd','<div class="text-danger">','</div>');?>

            </div>
            </div>

            <button type="submit" class="btn btn-primary">Adicionar!</button>
            <?php echo anchor("welcome","Volver a la pagina Principal",['class' => 'btn btn-primary']) ;?>
        </div>
        <?php echo form_close();?>
    </div>


<?php include("inc/footer.php"); ?>