<?php 

    require_once "../Model/Empleado_Model.php";
    
    $nombre=$_GET["nombre"];
    $email=$_GET["email"];
    $direccion=$_GET["direccion"];
    $telefono=$_GET["telefono"];

    $insertar=new Empleado();
    $insertar->insertar_Empleado($nombre, $email, $direccion, $telefono);
    
    header("Location: ../View/Empleado_View.php");
      
?>