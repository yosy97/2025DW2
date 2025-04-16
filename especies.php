<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Especies</title>
</head>
<body>
    <h1>Formulario de Registro de Especies</h1>
    <form action="procesar_especies.php" method="POST">
        <label for="nombre_comun">Nombre común (requerido):</label><br>
        <input type="text" id="nombre_comun" name="nombre_comun" required><br><br>

        <label for="nombre_cientifico">Nombre científico (requerido):</label><br>
        <input type="text" id="nombre_cientifico" name="nombre_cientifico" required><br><br>

        <label for="tipo">Tipo de especie:</label><br>
        <select name="tipo" id="tipo" required>
            <option value="">Seleccione un tipo</option>
            <?php
                $tipos = ["Mamífero", "Ave", "Reptil", "Anfibio", "Pez", "Insecto", "Otro"];
                foreach ($tipos as $tipo) {
                    echo "<option value=\"$tipo\">$tipo</option>";
                }
            ?>
        </select><br><br>

        <label for="info_adicional">Información adicional:</label><br>
        <textarea name="info_adicional" id="info_adicional" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Registrar Especie">
    </form>
</body>
</html>
