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
    header("location: ../View/Empleado_View.php");
} else {
    echo "usuario no encontrado";
    // header("location: 05_Formulario_Inicio.php"); //No hay considencias, redirige a la pagina de login
}
