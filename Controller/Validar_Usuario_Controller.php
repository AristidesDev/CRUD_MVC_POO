<?php

require_once "../Model/Login_Model.php";
$usuario = htmlentities(addslashes($_POST["usuario"]));
$password = htmlentities(addslashes($_POST["password"]));
$loguear = new Login();
$nun = $loguear->consultar_Login($usuario, $password);
// $numero_conexion = $loguear->rowCount();

echo $nun;

if ($nun == 1) {
    session_start();
    $_SESSION["autentica"] = "SIP";
    $_SESSION["usuarioactual"] = $usuario;
    header("location: ../View/Empleado_View.php");
} else {
    // header("location: ../Login_CRUD_View.php");
    // echo "<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=..\'Login_CRUD_View.php'\</script>";
    echo "usuario no encontrado";
}
