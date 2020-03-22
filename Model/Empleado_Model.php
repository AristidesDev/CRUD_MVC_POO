<?php

     class Empleado{

        private $base;

        public function __construct(){
            require_once "Conexion.php";        
            $this->base=Conectar::conexion();
        }

        public function insertar_Empleado($nombre,$email,$direccion,$telefono){
            $SQL = "INSERT INTO empleados (NOMBRE, EMAIL, DIRECCION,TELEFONO) VALUES (:nombre, :email, :direccion, :telefono)";
            $resultado = $this->base->prepare($SQL);
            $resultado->bindParam(":nombre", $nombre);
            $resultado->bindParam(":email", $email);
            $resultado->bindParam(":direccion", $direccion);
            $resultado->bindParam(":telefono", $telefono);
            $resultado->execute();
        }

        public function actualizar_Empleado($ID,$nombre,$email,$direccion,$telefono){
            $SQL = "UPDATE empleados SET NOMBRE=:nomb, EMAIL=:apell, DIRECCION=:direcc, TELEFONO=:telef WHERE ID=:id";
            $resultado = $this->base->prepare($SQL);
            $resultado->bindParam(":id", $ID);
            $resultado->bindParam(":nomb", $nombre);
            $resultado->bindParam(":apell", $email);
            $resultado->bindParam(":direcc", $direccion);
            $resultado->bindParam(":telef", $telefono);
            $resultado->execute();
        }
        
        public function Borrar_Empleado($Id){
            $SQL = "DELETE FROM empleados WHERE ID = :valor";
            $resultado = $this->base->prepare($SQL);
            $resultado->bindParam(":valor", $Id);
            $resultado->execute();
        }
    }
 
?>