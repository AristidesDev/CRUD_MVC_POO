<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Actualizar Empleado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

    <?php
        $page=$_GET['page'];
        $ID_act=$_GET["id"];
        $nomb_act=$_GET["nomb_act"];
        $email_act=$_GET["email_act"];
        $direc_act=$_GET["direc_act"];
        $tel_act=$_GET["tel_act"];
    ?>

</head>
<body>
    <div class="container">
        <div class="container">
            <header class="header">
                <h1 class="text-center">Modelo Vista Controlador</h1>
                <h2 class="text-center">CRUD - Paginacion</h2><br>
            </header>
        </div>
<!----------------------------------------- Modal Editar Empleado -------------------------------------->
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="../Controller/Actualizar_Empleado_Controller.php" method="get">
                    <div class="modal-header">						
                            <h4 class="modal-title">Editar Empleado</h4>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="page" id="page" value="<?php echo $page?>">
                            <input type="hidden" name="id1" id="id1" value="<?php echo $ID_act?>">				
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre1" id="nombre1" value="<?php echo $nomb_act=$_GET["nomb_act"]?>" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email1" id="email1" value="<?php echo $email_act=$_GET["email_act"]?>" required>
                            </div>
                            <div class="form-group">
                                <label>Direccion</label>
                                <input type="text" class="form-control" name="direccion1" id="direccion1" value="<?php echo $direc_act=$_GET["direc_act"]?>" required></input>
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control"  name="telefono1" id="telefono1" value="<?php echo $tel_act=$_GET["tel_act"]?>" required>
                            </div>					
                        </div>
                        <div class="modal-footer">
                            <a href="../CRUD.php"><input type="button" class="btn btn-default" value="Cancelar"></a>
                            <input type="submit" class="btn btn-info" name="actualizar" id="actualizar" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>