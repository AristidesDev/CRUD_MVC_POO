<?php 

    require_once "../Model/Empleado_Model.php";
    
    $ID=$_GET["id"];

    $borrar=new Empleado();
    $borrar->Borrar_Empleado($ID);
    
    header("Location: ../CRUD.php?page="  . $_GET['page']);
      
?>