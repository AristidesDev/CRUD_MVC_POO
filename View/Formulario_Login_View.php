<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form name="form1" method="post" action="Controller/Validar_Usuario_Controller.php">
    <div class="form-group">
      <label>Usuario</label>
      <input type="text" class="form-control" name="usuario" id="usuario" placeholder="User Name">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-black" name="Enviar" id="Enviar">Entrar</button>
    <button type="button" class="btn btn-black" name="regresar" id="regresar"><a href="#">Regresar</a></button>
  </form>
</body>

</html>