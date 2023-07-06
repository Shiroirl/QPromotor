<?php

require_once 'DB/conexion.php'

$conexion = new conexion();
$conexion->Conectar();

$search_criteria = $_POST['search_criteria'];

$query = "SELECT * FROM Usuario WHERE Rut LIKE '$".$search_criteria."$' OR Nombres LIKE '$".$search_criteria."$'";

$usuario = [''];
$errors = ['data' => false];

$getusuario = $conexion->query($query);

if($getusuario->num_rows > 0)
{
    while($data = $getusuario->fetch_assoc())
    {
        $usuario[] = $data;
    }

    echo json_encode($usuario);
}
else
{
    echo json_encode($errors);
}

?>