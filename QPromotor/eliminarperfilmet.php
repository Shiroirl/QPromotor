<?php

require_once "DB/conexion.php";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $conexion = new conexion();
    $conexion->Conectar();

    $Código = $_POST['Código'];

    $consulta = "DELETE FROM Perfil WHERE Código = '$Código";
    $resultado = $conexion->Ejecutar($consulta);
    var_dump($resultado);


    if($resultado)
    {
        echo "Perfil eliminado.";
        header ("Location: crud.php");
    }
    else
    {
        echo "Error al intentar eliminar el perfil.";
    }

    $conexion->Desconectar($conexion);
}

?>