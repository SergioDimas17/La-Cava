<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario de presupuesto</title>
</head>
<body>

<h1>Formulario de presupuesto</h1>

<form action="index.php" method="post">

    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" name="correo" placeholder="Correo electrónico">
    <input type="date" name="fecha" placeholder="Fecha">
    <input type="time" name="hora" placeholder="Hora">
    <input type="tel" name="telefono" placeholder="Teléfono">

    <input type="submit" value="Enviar">

</form>

<?php

// Si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $telefono = $_POST['telefono'];

    // Crear la matriz de datos
    $datos = array(
        'nombre' => $nombre,
        'correo' => $correo,
        'fecha' => $fecha,
        'hora' => $hora,
        'telefono' => $telefono
    );

    // Guardar los datos en el archivo TXT
    $fp = fopen('presupuesto.txt', 'a');
    fwrite($fp, json_encode($datos) . "\n");
    fclose($fp);

    // Mostrar mensaje de éxito
    echo '<div class="alert alert-success">Los datos se guardaron correctamente.</div>';
}

?>

</body>
</html>
