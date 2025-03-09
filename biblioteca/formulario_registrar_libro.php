<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Libro</title>
</head>
<body>
<h2>Registrar Libro</h2>
    <form action="registrar_libro.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>
        <br>
        <button type="submit">Registrar Libro</button>
    </form>
</body>
</html>
