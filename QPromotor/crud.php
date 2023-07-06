<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/panel.css">
    <title>Panel CRUD</title>
</head>
<body class="p-3 mb-2 bg-transparent text-body">
    <header class="text-center">
        <h1>QPromotor<h1>
    </header>

    <div class="text-center">
        <div>
            <h3>Datos de tablas de usuarios y perfiles.</h3>
        <div>
        <h4>Perfiles</h4>
        <div>
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
        </div>
        <div>
        <h4>Usuarios</h4>
            <div class="table table-striped table-dark">
            <div class="row align-items-start">
            <?php
                require_once "DB/conexion.php";
                $conexion = new conexion();
                $conexion->Conectar();

                $resultado = $conexion->Ejecutar("SELECT * FROM Usuario");

                if ($resultado->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>Rut</th><th>Nombres</th><th>Apellido paterno</th><th>Apellido materno</th><th>Dirección</th><th>Teléfono</th><th>Clave</th><th>Tipo de usuario</th></tr>";
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila['Rut'] . "</td>";
                        echo "<td>" . $fila['Nombres'] . "</td>";
                        echo "<td>" . $fila['Apellido_paterno'] . "</td>";
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
        </div>
        </div>
        <div>
            <div>
                <form method="POST" action="registrar.php">
                <button type="submit" class="btn btn-outline-success">Crear un nuevo usuario</button>
                </form>
            </div>
            <br>
            <div>
                <form method="POST" action="buscaruser.php">
                <button class="btn btn-outline-success">Modificar usuario</button>
                </form>
            </div>
            <br>
            <div>
                <form method="POST" action="buscarperfil.php">
                <button class="btn btn-outline-success">Modificar perfil</button>
                </form>
            </div>
            <br>
            <div>
            <form method="POST" action="eliminaruser.php">
                <button class="btn btn-outline-danger">Eliminar usuario</button>
            </form>
            </div>
            <br>
            <div>
            <form method="POST" action="eliminarperfil.php">
                <button class="btn btn-outline-danger">Eliminar perfil</button>
            </form>
            </div>
            </div>
            <br>
            <div>
            <a href="panel.php" class="btn btn-outline-primary">Volver</a>
            </div>
        </div>
</body>
</html>