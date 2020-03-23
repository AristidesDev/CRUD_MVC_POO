<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" href="06_style.css">
</head>

<body>
  <form name="form1" method="post" action="Controller/Login_CRUD_Controller.php">
    <div class="form-group">
      <label>Usuario</label>
      <input type="text" class="form-control" placeholder="User Name" name="usuario" id="usuario">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-black" name="Enviar" id="Enviar">Entrar</button>
    <button type="button" class="btn " name="regresar" id="regresar"><a class="btn-black" href="#">Regresar</a></button>
    <p><a href="Controller/Cerrar_Sesion_Controller.php">Cerrar Sesion</a></p>
  </form>
</body>

</html>