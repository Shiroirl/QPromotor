<?php

session_start();

if(!isset($_SESSION['rut']))
{
    header ('Location: index.php');
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    session_destroy();
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/panel.css">
    <title>QPromotor: Panel</title>
</head>
<body class="p-3 mb-2 bg-transparent text-body">
    <div class="text-center">
        <h3>Bienvenid@ a QPromotor</h3>
        <p>En las tablas podrás ver los datos correspondientes a los usuarios y perfiles del sistema.</p>
        
        <div class="">
            <h3>Tabla de perfiles</h3>
            <div class="table table-striped table-dark">
            <div class="row align-items-start">
            <?php
                require_once "DB/conexion.php";
                $conexion = new conexion();
                $conexion->Conectar();

                $resultado = $conexion->Ejecutar("SELECT * FROM Perfil");

                if ($resultado->num_rows > 0) 
                {
                echo "<table>";
                echo "<tr><th>Código</th><th>Descripción</th></tr>";
                 while ($fila = $resultado->fetch_assoc()) 
                    {
                        echo "<tr>";
                        echo "<td>" . $fila['Código'] . "</td>";
                        echo "<td>" . $fila['Descripción'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "No existen registros en la tabla de perfiles.";
                }
            ?>
            </div>
            </div>
            <p>Estos son los perfiles creados actualmente en la base de datos.</p>
        </div>
        <div>
            <h3>Tabla de usuarios</h3>
            <div class="table table-striped table-dark">
            <div class="row align-items-start">
            <?php
                require_once "DB/conexion.php";
                $conexion = new conexion();
                $conexion->Conectar();

                $resultado = $conexion->Ejecutar("SELECT * FROM Usuario");

                if ($resultado->num_rows > 0) {
                    echo "<table>";
                    echo "<thead>";
                    echo "<tr><th>Rut</th><th>Nombres</th><th>Apellido paterno</th><th>Apellido materno</th><th>Dirección</th><th>Teléfono</th><th>Clave</th><th>Tipo de usuario</th></tr>";
                    echo "</thead>";
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila['Rut'] . "</td>";
                        echo "<td>" . $fila['Nombres'] . "</td>";
                        echo "<td> " . $fila['Apellido_paterno'] . "</td>";
                        echo "<td>" . $fila['Apellido_materno'] . "</td>";
                        echo "<td>" . $fila['Dirección'] . "</td>";
                        echo "<td>" . $fila['Teléfono'] . "</td>";
                        echo "<td>" . $fila['Clave'] . "</td>";
                        echo "<td>" . $fila['Tipo_Usuario'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No existen registros en la tabla de usuarios.";
                }
            ?>
            </div>
            </div>
            <p>Estos son los usuarios creados actualmente en la base de datos, mediante el botón CRUD se pueden añadir, editar y eliminar.</p>
            <form method="POST" action="crud.php">
            <button type="submit" class="btn btn-outline-success">CRUD</button>
            </form>
        </div>

        <br>

        <div>
        <form action ="" method="POST">
            <button type="submit" class="btn btn-outline-danger">Cerrar sesión</button>
        </form>
        </div>

    </div>
</body>
</html>