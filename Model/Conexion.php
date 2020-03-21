<?php

    class Conectar {

        public static function conexion(){     
                try {
                    $conexion = new PDO ('mysql:host=localhost; dbname=web_personal', 'root', '');
                    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $conexion -> exec('SET CHARACTER SET UTF8'); 
                } catch (Exception $e) {
                    die ("Error: " . $e->getMessage());
                    echo "Linea del error es: " . $e -> getLine();
                }
            return $conexion;
        }
    }

?>