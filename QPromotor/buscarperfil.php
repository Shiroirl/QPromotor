<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/buscador.css">
    <title>QPromotor: Buscar Perfil</title>
</head>
<body>
    <div>
        <div>
            <h1>QPromotor</h1>
        </div>

        <div class="formulario">
            <h2>Buscar perfil para modificar</h2>
            <form action="modificarformperfil.php" method="POST">
                <div class="label">
                    <label for="Código">Código</label>
                    <input type="text" name="Código">
                </div>
                <div>
                    <button type="submit">Buscar Perfil</button>
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