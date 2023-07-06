<?php
require_once 'DB/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $conexion = new Conexion();
    $conexion->Conectar();

    $Rut = $_POST['Rut'];
    $Nombres = $_POST['Nombres'];
    $ApellidoPat = $_POST['Apellido_paterno'];
    $ApellidoMat = $_POST['Apellido_materno'];
    $Dirección = $_POST['Dirección'];
    $Teléfono = $_POST['Teléfono'];
    $Clave = $_POST['Clave'];
    $Tipo_Usuario = $_POST['Tipo_Usuario'];

    $consulta = "UPDATE Usuario SET Nombres = '$Nombres', Apellido_paterno = '$ApellidoPat', Apellido_materno = '$ApellidoMat', Dirección = '$Dirección', Teléfono = '$Teléfono', Clave = '$Clave', Tipo_Usuario = '$Tipo_Usuario' WHERE Rut = '$Rut'";

    $resultado = $conexion->Ejecutar($consulta);

    if($resultado)
    {
        echo "Datos del Usuario actualizados.";
        header('Location: crud.php');
    }
    else
    {
        echo "Error al modificar el usuario.";
    }
}

?>