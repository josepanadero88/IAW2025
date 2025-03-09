<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <?php
    require 'conexion.php';

    $result = mysqli_query($conn, "SELECT * FROM libros");

        echo "<h2>Lista de Libros</h2>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " - Título: " . $row['titulo'] . " - Autor: " . $row['autor'] . " - Disponible: " . ($row['disponible'] ? "Sí" : "No") . "<br>";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
