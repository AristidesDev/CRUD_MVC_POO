<?php

    class Paginar{

        private $base;

        public function __construct(){
            require_once "Conexion.php";        
            $this->base=Conectar::conexion();
        }

        public function Obtener_registros_Totales(){
            $SQL = "SELECT * FROM empleados";
            $resultado = $this->base->prepare($SQL);
            $resultado->execute();
            $total_registro=$resultado->rowCount();
            return $total_registro;
        }    

        public function consultar_Limite($empezar_desde, $registro_por_paginas){
            $SQL_Limit="SELECT * FROM empleados ORDER BY ID DESC LIMIT $empezar_desde, $registro_por_paginas";
            $consulta=$this->base->query($SQL_Limit);
            while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->empleados[]=$fila;
            }
            return $this->empleados;
        }

    }   

    class Personas_Modificar{

        private $base;

        public function __construct(){
            require_once "Conexion.php";        
            $this->base=Conectar::conexion();
        }

        public function insertar_Registro($nombre,$email,$direccion,$telefono){
            $SQL = "INSERT INTO empleados (NOMBRE, EMAIL, DIRECCION,TELEFONO) VALUES (:nombre, :email, :direccion, :telefono)";
            $resultado = $this->base->prepare($SQL);
            $resultado->bindParam(":nombre", $nombre);
            $resultado->bindParam(":email", $email);
            $resultado->bindParam(":direccion", $direccion);
            $resultado->bindParam(":telefono", $telefono);
            $resultado->execute();
        }

        public function actualizar_Registro($ID,$nombre,$email,$direccion,$telefono){
            $SQL = "UPDATE empleados SET NOMBRE=:nomb, EMAIL=:apell, DIRECCION=:direcc, TELEFONO=:telef WHERE ID=:id";
            $resultado = $this->base->prepare($SQL);
            $resultado->bindParam(":id", $ID);
            $resultado->bindParam(":nomb", $nombre);
            $resultado->bindParam(":apell", $email);
            $resultado->bindParam(":direcc", $direccion);
            $resultado->bindParam(":telef", $telefono);
            $resultado->execute();
        }
        
        public function Borrar_Registro($Id){
            $SQL = "DELETE FROM empleados WHERE ID = :valor";
            $resultado = $this->base->prepare($SQL);
            $resultado->bindParam(":valor", $Id);
            $resultado->execute();
        }
    }
 
?>