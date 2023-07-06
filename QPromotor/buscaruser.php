<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/buscador.css">
    <title>QPromotor: Buscar Usuario</title>
</head>
<body>
    <div>
        <div>
            <h1>QPromotor</h1>
        </div>

        <div class="formulario">
        <h2>Buscar usuario para modificar</h2>
            <form action="modificarformuser.php" method="POST">
                <div class="label">
                    <label for="Rut">Rut</label>
                    <input type="text" name="Rut">
                </div>
                <div>
                    <button type="submit">Buscar Usuario</button>
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