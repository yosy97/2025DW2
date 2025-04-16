<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Habitats</title>
</head>
<body>
    <h1>Formulario de Registro de Habitats</h1>
    <form action="process.php" method="POST">
        <label for="nombre">Nombre del habitat (requerido):</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="ubicacion">Ubicación (requerido):</label>
        <input type="text" id="ubicacion" name="ubicacion" required><br><br>

        <label for="tipo_entorno">Tipo de entorno:</label>
        <select id="tipo_entorno" name="tipo_entorno">
            <option value="">Seleccione un tipo</option>
            <option value="Terrestre">Terrestre</option>
            <option value="Acuático">Acuático</option>
            <option value="Aéreo">Aéreo</option>
            <option value="Subterráneo">Subterráneo</option>
        </select><br><br>

        <label for="descripcion">Descripción (opcional):</label>
        <textarea id="descripcion" name="descripcion"></textarea><br><br>

        <input type="submit" value="Registrar Hábitat">
    </form>
</body>
</html>