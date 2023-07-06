<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>QPromotor: Busqueda</title>
</head>
<body>
    <main>
        <h1>Búsqueda de datos</h1>
        <div class="input-container">
            <input type="search" id="search" placeholder="Ingrese algún dato para la búsqueda del usuario.">
        </div>
        <div class="errors-container" style="display: none" >
            <p></p>
        </div>
        <div class="results-container" style="display: none" id="resultsContainer">
            <table id="results">
                <thead>
                    <th>Rut</th>
                    <th>Nombres</th>
                    <th>Apellido materno</th>
                    <th>Apellido paterno</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Clave</th>
                    <th>Tipo de usuario</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </main>
</body>
</html>