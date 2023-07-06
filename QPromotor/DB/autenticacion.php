<?php
require ("DB/conexion.php");
session_start();

Class autenticacion{
    private $rut;
    private $clave;

    public function __construct($rut,$clave){
        $this->rut = $rut;
        $this->clave = $clave;

    }

    public function Validar(){
        $conexion = new conexion();
        $conexion->Conectar();

        $consulta = "SELECT * FROM Usuario WHERE Rut = '$this->rut' AND Clave = '$this->clave'";

        $resultado = $conexion->Ejecutar($consulta);

        if ($resultado->num_rows == 1) 
        {
            $_SESSION["rut"] = $this->rut;
            header('Location: panel.php');
        } 
        else 
        {
            header('Location: index.php');
        }

    }

    
}


?>