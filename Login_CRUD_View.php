<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CRUD Empleados</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <!------ Include the above in your HEAD tag ---------->
   <div class="sidenav">
      <div class="login-main-text">
         <h2>Aplicacion CRUD</h2>
         <p>El CRUD tiene paginacion<br>
            se uso programacion orientada a objetos <br>
            con el Modelo Vista Controlador</p>
      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <?php
            if (!isset($_SESSION["login"])) {
               include "View/Formulario_Login_View.php";
            } else {
               header("Location: ../MVC_CRUD_Paginacion/CRUD.php");
               echo "Usuario: " . $_SESSION["login"];
            }
            ?>
         </div>
      </div>
   </div>

   <?php
      require "Controller/Empleado_controller.php";
   ?>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>