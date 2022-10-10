<?php include("inc/header.php"); ?>
	<div class="container">

    <h3>Bienvenido!</h3>
    <p>Tienes los roles necesarios para realizar cambios y revisar a los estudiantes.</p>
    <?php echo anchor("Welcome/addPerson", "Adicionar Persona",['class'=>'btn btn-primary']);?>
    <?php echo anchor("welcome/delete", "Eliminar Persona",['class'=>'btn btn-primary']);?>
    <?php echo anchor("welcome/change", "Edicion de Persona",['class'=>'btn btn-primary']);?>
    <?php echo anchor("welcome/prom", "Promedios x Depto",['class'=>'btn btn-primary']);?>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">CI</th>
                    <th scope="col">Fecha N</th>
                    <th scope="col">Cod Departamento</th>
                  
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                </tr>
            </tbody>
        </table>

    </div>



    </div>


<?php include("inc/footer.php"); ?>