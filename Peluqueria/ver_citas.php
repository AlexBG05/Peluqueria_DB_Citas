<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Citas Registradas</title>
</head>
<body>
    <h1>Citas Registradas</h1>
    <table border="1">
        <tr>
            <th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Fecha</th><th>Servicio</th><th>Fecha registro</th>
        </tr>
        <?php
        $resultado = $conexion->query("SELECT * FROM clientes ORDER BY creado_en DESC");
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['email']}</td>
                <td>{$fila['telefono']}</td>
                <td>{$fila['fecha_cita']}</td>
                <td>{$fila['servicio']}</td>
                <td>{$fila['creado_en']}</td>
            </tr>";
        }
        ?>
    </table>
    <br><a href="index.php">Reservar nueva cita</a>
</body>
</html>