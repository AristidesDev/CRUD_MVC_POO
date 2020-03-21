<?php 

    require_once "../Model/Personas_Model.php";
    
    $ID=$_GET["id"];

    $borrar=new Personas_Modificar();
    $borrar->Borrar_Registro($ID);
    
    header("Location: ../CRUD.php?page="  . $_GET['page']);
      
?>