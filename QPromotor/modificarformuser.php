<?php
require_once 'DB/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $Rut = $_POST['Rut'];

    $conexion = new Conexion();
    $conexion->Conectar();

    $consulta = "SELECT * FROM Usuario WHERE Rut = '$Rut'";
    $resultado = $conexion->Ejecutar($consulta);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="CSS/modificaruser.css">
            <title>QPromotor: Modificar Usuario</title>
        </head>
        <body>
            <div>
                <h2>QPromotor</h2>
            </div>

            <div>
                <p>Modificar</p>
            </div>
            <form action="modificaruser.php" method="POST">
                <div class="txtModificar">
                    <label for="Rut">Rut:</label><br>
                    <input type="text" name="Rut" value="<?php echo $fila['Rut']?>" readonly>
                </div>
                <div class="txtModificar">
                    <label for="Nombres">Nombres:</label><br>
                    <input type="text" name="Nombres" value="<?php echo $fila['Nombres']?>">
                </div>
                <div class="txtModificar">
                    <label for="Apellido_paterno">Apellido Paterno:</label><br>
                    <input type="text" name="Apellido_paterno" value="<?php echo $fila['Apellido_paterno']?>">
                </div>
                <div class="txtModificar">
                    <label for="Apellido_materno">Apellido Materno:</label><br>
                    <input type="text" name="Apellido_materno" value="<?php echo $fila['Apellido_materno']?>">
                </div>
                <div class="txtModificar">
                    <label for="Dirección">Dirección</label><br>
                    <input type="text" name="Dirección" value="<?php echo $fila['Dirección']?>">
                </div>
                <div class="txtModificar">
                    <label for="Teléfono">Teléfono:</label><br>
                    <input type="text" name="Teléfono" value="<?php echo $fila['Teléfono']?>">
                </div>
                <div class="txtModificar">
                    <label for="Clave">Clave</label><br>
                    <input type="text" name="Clave" value="<?php echo $fila['Clave']?>">
                </div>
                <div class="txtModificar">
                    <label for="Tipo_Usuario">Tipo de Usuario</label><br>
                    <input type="text" name="Tipo_Usuario" value="<?php echo $fila['Tipo_Usuario']?>">
                </div>
                <br>
                <div >
                    <button type="submit">Actualizar</button>
                </div>
            </form>
        </body>
        </html>
        <?php
    }
    else
    {
        echo "El usuario no fue encontrado para ser modificado.";
    }

}

 ?>


