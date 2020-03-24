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
         <h3 class="log_CRUD">Aplicacion CRUD</h3>
         <p>El CRUD tiene paginacion<br>
            se uso programacion orientada a objetos <br>
            con el Modelo Vista Controlador</p>
      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form name="form1" method="post" action="Controller/Validar_Usuario_Controller.php">
               <div class="form-group">
                  <label>Usuario</label>
                  <input type="text" class="form-control" name="usuario" id="usuario" placeholder="User Name" value="">
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="">
               </div>
               <button type="submit" class="btn btn-black" name="Enviar" id="Enviar">Entrar</button>
               <button type="button" class="btn btn-black" name="regresar" id="regresar"><a href="#">Regresar</a></button>
            </form>
         </div>
      </div>
   </div>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>