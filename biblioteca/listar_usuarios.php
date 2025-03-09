<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <?php
    require 'conexion.php';

    $result = mysqli_query($conn, "SELECT * FROM usuarios");

    echo "<h2>Lista de Usuarios</h2>";

        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " - Nombre: " . $row['nombre'] . " - Email: " . $row['email'] . "<br>";
    }
    } else {
        echo "No hay usuarios registrados.";
    }

        mysqli_close($conn);
    ?>

</body>
</html>
