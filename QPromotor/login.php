<?php

include "DB/autenticacion.php";

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(isset($_POST["rut"]) && isset($_POST["clave"]))
    {
        $rut = $_POST["rut"];
        $clave = $_POST["clave"];

        $autent = new autenticacion($rut,$clave);
        $autent->Validar();
    }
    else
    {
        echo "Ingrese los datos faltantes requeridos para el inicio de sesión.";
    }
}
else
{
    echo "Error.";
}

?>