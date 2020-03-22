<?php

    class Pagina{

        private $base;

        public function __construct(){
            require_once "Conexion.php";        
            $this->base=Conectar::conexion();
        }

        public function Obtener_Empleados_Totales(){
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
 
?>