<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>QPromotor Inicio</title>
</head>
<body>
    <div class="formulario">
        <div>
            <h1>Inicio de Sesión</h1>
        </div>
        <form action="login.php" method="POST">
        <div class="label">
            <input type="text" name="rut" required>
            <label>Rut</label>
        </div>
        <div class="label">
            <input type="password" name="clave" required>
            <label>Clave</label>
        </div>
        <div 
        class="recordar">¿Olvidaste tu contraseña?
        </div>
        <br>
        <div>
        <button type="submit">Iniciar</button>
        </div>
        <br>
        <div class="registrarse">
            Quiero hacer el <a href="registrarlogin.php">registro</a>
        </div>
        </form>
        <br>
    </div>
</body>
</html>