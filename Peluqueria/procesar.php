<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_cita = $_POST['fecha_cita'];
    $servicio = $_POST['servicio'];

    $sql = "INSERT INTO clientes (nombre, email, telefono, fecha_cita, servicio) 
            VALUES ('$nombre', '$email', '$telefono', '$fecha_cita', '$servicio')";

    if ($conexion->query($sql) === TRUE) {
        echo "Cita reservada con éxito. <a href='index.php'>Volver</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>