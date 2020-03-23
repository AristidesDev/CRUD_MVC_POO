<?php

class Login
{
    private $base;
    // private $cantidad_usuarios;

    public function __construct()
    {
        require_once "Conexion.php";
        $this->base = Conectar::conexion();
    }

    public function consultar_Login($usuario, $password)
    {
        $SQL = "SELECT * FROM usuario_password WHERE USUARIO= :login AND PASSWORD= :password";
        $resultado = $this->base->prepare($SQL);
        $resultado->bindParam(":login", $usuario); //
        $resultado->bindParam(":password", $password);
        $resultado->execute();
        $this->cantidad_usuarios = $resultado->rowCount();
        return $this->cantidad_usuarios;
    }
}
