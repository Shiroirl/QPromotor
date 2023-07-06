<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/buscador.css">
    <title>QPromotor: Eliminar Perfil</title>
</head>
<body>
    <div class="formulario">
        <div>
            <h1>Eliminar Perfil</h1>
            <form action="eliminarusermet.php" method="POST">
                <div class="label">
                    <label for="Código">Código:</label>
                    <input type="text" name="Código">
                </div>
                <div>
                <button type="submit">Eliminar</button>
                </div>
            </form>
            <div>
                <ul>
                    
                     <a href="crud.php">Volver</a>
                
                </ul>
            </div>
        </div>
    </div>
</body>
</html>