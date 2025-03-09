<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
</head>
<body>
<?php
require 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Usuario registrado correctamente";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
  </body>
</html>
