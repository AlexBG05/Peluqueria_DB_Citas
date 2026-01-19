<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reservar Cita - Peluquería</title>
</head>
<body>
    <h1>Reservar Cita</h1>
    <form action="procesar.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Teléfono: <input type="text" name="telefono" required><br><br>
        Fecha cita: <input type="date" name="fecha_cita" required><br><br>
        Servicio: <select name="servicio" required>
            <option value="Corte">Corte</option>
            <option value="Tinte">Tinte</option>
            <option value="Peinado">Peinado</option>
        </select><br><br>
        <button type="submit">Reservar</button>
    </form>

    <hr>
    <a href="ver_citas.php">Ver todas las citas</a>
</body>
</html>