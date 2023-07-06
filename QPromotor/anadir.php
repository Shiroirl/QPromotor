<?php
require_once 'DB/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $connect = new conexion();
    $connect->Conectar();

    $Rut = $_POST['Rut'];
    $Nombres = $_POST['Nombres'];
    $ApellidoPat = $_POST['Apellido_paterno'];
    $ApellidoMat = $_POST['Apellido_materno'];
    $Dirección = $_POST['Dirección'];
    $Teléfono = $_POST['Teléfono'];
    $Clave = $_POST['Clave'];
    $Tipo_Usuario = $_POST['Tipo_Usuario'];
    $Código = $_POST['Código'];
    $Descripción = $_POST['Descripción'];

    $consulta = "INSERT INTO Usuario (Rut, Nombres, Apellido_paterno, Apellido_materno, Dirección, Teléfono, Clave, Tipo_Usuario) VALUES ('$Rut', '$Nombres', '$ApellidoPat', '$ApellidoMat', '$Dirección', $Teléfono, '$Clave', '$Tipo_Usuario')";
    $consulta2 = "INSERT INTO Perfil (Código,Descripción) VALUES ($Código,'$Descripción')";
    $resultado = $connect->Ejecutar($consulta,$consulta2);

    if ($resultado) 
    {
        echo "Usuario añadido.";
        header ("Location: login.php");
    } 
    else 
    {
        echo "Error al añadir el usuario.";
    }

}
?>