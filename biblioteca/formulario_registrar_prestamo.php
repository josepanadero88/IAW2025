<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Préstamo</title>
</head>
<body>
    <h2>Registrar Préstamo</h2>
    <form action="registrar_prestamo.php" method="post">
        <label for="usuario_id">ID Usuario:</label>
        <input type="number" id="usuario_id" name="usuario_id" required>
        <br>
        <label for="libro_id">ID Libro:</label>
        <input type="number" id="libro_id" name="libro_id" required>
        <br>
        <button type="submit">Registrar Préstamo</button>
    </form>
</body>
</html>
