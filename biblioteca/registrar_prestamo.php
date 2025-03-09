<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = trim($_POST['usuario_id']);
    $libro_id = trim($_POST['libro_id']);
    $fecha_prestamo = date('Y-m-d');

    if (!empty($usuario_id) && !empty($libro_id)) {
        $sql = "INSERT INTO prestamos (usuario_id, libro_id, fecha_prestamo) VALUES ('$usuario_id', '$libro_id', '$fecha_prestamo')";
        $sql_update = "UPDATE libros SET disponible = 0 WHERE id = '$libro_id'";

        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql_update)) {
            echo "Préstamo registrado correctamente.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: Todos los campos son obligatorios.";
    }

    mysqli_close($conn);
}
?>
</body>
</html>







