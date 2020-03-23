<?php 

    require_once "../Model/Empleado_Model.php";
    
    $ID=$_GET["id"];

    $borrar=new Empleado();
    $borrar->Borrar_Empleado($ID);
    
    header("Location: ../View/Empleado_View.php?page="  . $_GET['page']);
      
?>