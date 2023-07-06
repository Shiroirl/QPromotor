<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/fondo.css">
    <title>QPromotor: Registro</title>
</head>
<body>
    <div>
        <div class="formulario">
            <h1>Ingrese los datos para el registro.</h1>
            <form action="anadir.php" method="POST">
                <div class="label">
                    <label for="Rut">Rut:</label>
                    <input type="text" name="Rut">
                </div>
                <div class="label">
                    <label for="Nombres">Nombres:</label>
                    <input type="text" name="Nombres">
                </div>
                <div class="label">
                    <label for="Apellido_paterno">Apellido Paterno:</label>
                    <input type="text" name="Apellido_paterno">
                </div>
                <div class="label">
                    <label for="Apellido_materno">Apellido Materno:</label>
                    <input type="text" name="Apellido_materno">
                </div>
                <div class="label">
                    <label for="Dirección">Dirección:</label>
                    <input type="text" name="Dirección">
                </div>
                <div class="label">
                    <label for="Teléfono">Teléfono:</label>
                    <input type="text" name="Teléfono">
                </div>
                <div class="label">
                    <label for="Clave">Clave:</label>
                    <input type="text" name="Clave">
                </div>
                <div class="label">
                    <label for="Tipo_Usuario">Tipo de Usuario:</label>
                    <input type="text" name="Tipo_Usuario">
                </div>
                <div class="label">
                    <label for="Código">Código:</label>
                    <input type="text" name="Código">
                </div>
                <div class="label">
                    <label for="Descripción">Ingrese nuevamente el tipo de usuario:</label>
                    <input type="text" name="Descripción">
                </div>
                <div>
                    <button type="submit">Añadir</button>
                </div>
            </form>
            <div>
                <ul>
                    <li>
                        <a href="crud.php">Volver</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>