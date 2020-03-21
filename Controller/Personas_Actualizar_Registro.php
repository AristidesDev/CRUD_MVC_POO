<?php 

    require_once "../Model/Personas_Model.php";
    
    $id1=$_GET["id1"];
    $nombre1=$_GET["nombre1"];
    $email1=$_GET["email1"];
    $direccion1=$_GET["direccion1"];
    $telefono1=$_GET["telefono1"];

    $insertar=new Personas_Modificar();
    $insertar->actualizar_Registro($id1, $nombre1, $email1, $direccion1, $telefono1);
    
    header("Location: ../CRUD.php?page="  . $_GET['page']);
      
?>