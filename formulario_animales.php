<?php
// Arrays para especies y hábitats
$especies = ["Perro", "Gato", "Elefante", "Tigre", "Loro"];
$habitats = ["Selva", "Desierto", "Bosque", "Océano", "Ciudad"];

// Variables para guardar los datos ingresados
$nombre = $edad = $especie = $habitat = $observaciones = "";
$errores = [];

// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validaciones básicas
    $nombre = trim($_POST["nombre"] ?? "");
    $edad = trim($_POST["edad"] ?? "");
    $especie = $_POST["especie"] ?? "";
    $habitat = $_POST["habitat"] ?? "";
    $observaciones = trim($_POST["observaciones"] ?? "");

    if (empty($nombre)) $errores[] = "El nombre es obligatorio.";
    if (empty($edad)) $errores[] = "La edad es obligatoria.";

    // Mostrar respuesta si no hay errores
    if (empty($errores)) {
        echo "<h2>Datos del animal ingresado:</h2>";
        echo "<ul>";
        echo "<li><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</li>";
        echo "<li><strong>Edad:</strong> " . htmlspecialchars($edad) . "</li>";
        echo "<li><strong>Especie:</strong> " . htmlspecialchars($especie) . "</li>";
        echo "<li><strong>Hábitat:</strong> " . htmlspecialchars($habitat) . "</li>";
        echo "<li><strong>Observaciones:</strong> " . nl2br(htmlspecialchars($observaciones)) . "</li>";
        echo "</ul>";
    }
}
?>

<!-- Formulario HTML -->
<h1>Formulario de Gestión de Animales</h1>

<?php if (!empty($errores)): ?>
    <div style="color: red;">
        <ul>
            <?php foreach ($errores as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="">
    <label>Nombre del animal:* <input type="text" name="nombre" value="<?= htmlspecialchars($nombre) ?>"></label><br><br>

    <label>Edad:* <input type="number" name="edad" value="<?= htmlspecialchars($edad) ?>"></label><br><br>

    <label>Especie:*
        <select name="especie">
            <?php foreach ($especies as $item): ?>
                <option value="<?= $item ?>" <?= $especie === $item ? 'selected' : '' ?>><?= $item ?></option>
            <?php endforeach ?>
        </select>
    </label><br><br>

    <label>Hábitat:*
        <select name="habitat">
            <?php foreach ($habitats as $item): ?>
                <option value="<?= $item ?>" <?= $habitat === $item ? 'selected' : '' ?>><?= $item ?></option>
            <?php endforeach ?>
        </select>
    </label><br><br>

    <label>Observaciones:<br>
        <textarea name="observaciones" rows="4" cols="40"><?= htmlspecialchars($observaciones) ?></textarea>
    </label><br><br>

    <button type="submit">Enviar</button>
</form>
