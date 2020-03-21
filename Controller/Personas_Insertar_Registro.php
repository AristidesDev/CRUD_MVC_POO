<?php 

    require_once "../Model/Personas_Model.php";
    
    $nombre=$_GET["nombre"];
    $email=$_GET["email"];
    $direccion=$_GET["direccion"];
    $telefono=$_GET["telefono"];

    $insertar=new Personas_Modificar();
    $insertar->insertar_Registro($nombre, $email, $direccion, $telefono);
    
    header("Location: ../CRUD.php?");
      
?>