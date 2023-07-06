<?php
require_once 'DB/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $Código = $_POST['Código'];

    $conexion = new Conexion();
    $conexion->Conectar();

    $consulta = "SELECT * FROM Perfil WHERE Código = '$Código'";
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
        <title>Document</title>
    </head>
    <body>
    <div>
                <h2>QPromotor</h2>
            </div>

            <div>
                <p>Modificar</p>
            </div>
            <form action="modificarperfil.php" method="POST">
                <div>
                    <label for="Código">Código:</label>
                    <input type="text" name="Código" value="<?php echo $fila['Código']?>">
                </div>
                <div>
                    <label for="Descripción">Tipo de Usuario:</label>
                    <input type="text" name="Descripción" value="<?php echo $fila['Descripción']?>" readonly>
                </div>
                <div>
                <div>
                    <button type="submit">Actualizar</button>
                </div>
            </form>
    </body>
    </html>

    <?php
    }
    else
    {
        echo "No se encontro ningun perfil para modificar.";
    }

}

$conexion->Desconectar($conexion);

?>