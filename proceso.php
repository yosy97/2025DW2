<?php
$especies = ["Perro", "Gato", "Elefante", "Tigre", "Loro"];
$habitats = ["Selva", "Desierto", "Bosque", "Océano", "Ciudad"];

$errores = [];
$nombre = $_POST["nombre"] ?? "";
$edad = $_POST["edad"] ?? "";
$especie = $_POST["especie"] ?? "";
$habitat = $_POST["habitat"] ?? "";
$observaciones = $_POST["observaciones"] ?? "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($nombre)) $errores[] = "El nombre es obligatorio.";
    if (empty($edad)) $errores[] = "La edad es obligatoria.";

    if (!in_array($especie, $especies)) $errores[] = "Especie no válida.";
    if (!in_array($habitat, $habitats)) $errores[] = "Hábitat no válido.";

    if (empty($errores)) {
        echo "<h2>Animal Registrado</h2>";
        echo "<ul>";
        echo "<li><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</li>";
        echo "<li><strong>Edad:</strong> " . htmlspecialchars($edad) . "</li>";
        echo "<li><strong>Especie:</strong> " . htmlspecialchars($especie) . "</li>";
        echo "<li><strong>Hábitat:</strong> " . htmlspecialchars($habitat) . "</li>";
        echo "<li><strong>Observaciones:</strong> " . nl2br(htmlspecialchars($observaciones)) . "</li>";
        echo "</ul>";
    } else {
        echo "<h3>Errores:</h3><ul>";
        foreach ($errores as $e) {
            echo "<li style='color:red;'>$e</li>";
        }
        echo "</ul><a href='index.php'>Volver</a>";
    }
} else {
    header("Location: index.php");
    exit();
}
