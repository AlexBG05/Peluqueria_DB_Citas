<?php
$host = 'localhost';
$usuario = 'root';
$password = ''; // vacío en XAMPP por defecto
$base_datos = 'peluqueria_db';

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$conexion->set_charset("utf8");
?>