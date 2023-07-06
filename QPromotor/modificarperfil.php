<?php
require_once 'DB/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $Código = $_POST['Código'];
    $Tipo_Usuario = $_POST['Tipo_Usuario'];

    $conexion = new Conexion();
    $conexion->Conectar();

    $consulta = "UPDATE Perfil SET Código = '$Código', Tipo_Usuario = '$Tipo_Usuario' WHERE  Código'= '$Código'";
    $resultado = $conexion->Ejecutar($consulta);

    if ($resultado) 
    {
        echo "Perfil actualizado modificado.";
        header('Location: crud.php');
    } 
    else 
    {
        echo "Error al intentar modificar el perfil.";
    }

    $conexion->Desconecta($conexion);
}
?>