<?php
// Array de tipos válidos
$tipos_validos = ["Mamífero", "Ave", "Reptil", "Anfibio", "Pez", "Insecto", "Otro"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errores = [];

    // Validación y saneamiento
    $nombre_comun = trim($_POST["nombre_comun"] ?? "");
    $nombre_cientifico = trim($_POST["nombre_cientifico"] ?? "");
    $tipo = $_POST["tipo"] ?? "";
    $info_adicional = trim($_POST["info_adicional"] ?? "");

    if ($nombre_comun === "") {
        $errores[] = "El nombre común es obligatorio.";
    }

    if ($nombre_cientifico === "") {
        $errores[] = "El nombre científico es obligatorio.";
    }

    if (!in_array($tipo, $tipos_validos)) {
        $errores[] = "Debe seleccionar un tipo de especie válido.";
    }

    // Mostrar errores o datos ingresados
    if (!empty($errores)) {
        echo "<h3 style='color:red;'>Errores:</h3><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='especies.html'>Volver al formulario</a>";
    } else {
        echo "<h2>Especie registrada con éxito</h2>";
        echo "<p><strong>Nombre común:</strong> " . htmlspecialchars($nombre_comun) . "</p>";
        echo "<p><strong>Nombre científico:</strong> " . htmlspecialchars($nombre_cientifico) . "</p>";
        echo "<p><strong>Tipo:</strong> " . htmlspecialchars($tipo) . "</p>";
        echo "<p><strong>Información adicional:</strong><br>" . nl2br(htmlspecialchars($info_adicional)) . "</p>";
        echo "<br><a href='especies.html'>Registrar otra especie</a>";
    }
} else {
    echo "<p>Método no válido.</p>";
}
?>
