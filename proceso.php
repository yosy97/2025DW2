<?php
$mensajes = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $ubicacion = trim($_POST['ubicacion']);
    $tipo_entorno = $_POST['tipo_entorno'];
    $descripcion = trim($_POST['descripcion']);

    if (empty($nombre)) {
        $mensajes[] = "El nombre del hábitat es requerido.";
    }

    if (empty($ubicacion)) {
        $mensajes[] = "La ubicación es requerida.";
    }

    if (empty($tipo_entorno)) {
        $mensajes[] = "Por favor, seleccione un tipo de entorno.";
    }

    if (empty($mensajes)) {
        $mensajes[] = "Hábitat registrado exitosamente: <strong>$nombre</strong> en <strong>$ubicacion</strong>.";
        
    }
}

foreach ($mensajes as $mensaje) {
    echo "<p>$mensaje</p>";
}

echo '<a href="index.php">Volver al formulario</a>';
?>