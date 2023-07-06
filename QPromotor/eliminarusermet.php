<?php

require_once "DB/conexion.php";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $conexion = new conexion();
    $conexion->Conectar();

    $rut = $_POST['Rut'];

    $consulta = "DELETE FROM Usuario WHERE Rut = '$rut'";
    $resultado = $conexion->Ejecutar($consulta);
    var_dump($resultado);


    if($resultado)
    {
        echo "Usuario eliminado.";
        header ("Location: crud.php");
    }
    else
    {
        echo "Error al intentar eliminar el usuario.";
    }

    $conexion->Desconectar($conexion);
}

?>