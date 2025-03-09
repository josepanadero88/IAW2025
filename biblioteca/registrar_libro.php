
<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = trim($_POST['titulo']);
    $autor = trim($_POST['autor']);

    if (!empty($titulo) && !empty($autor)) {
        $sql = "INSERT INTO libros (titulo, autor, disponible) VALUES ('$titulo', '$autor', 1)";

        if (mysqli_query($conn, $sql)) {
            echo "Libro registrado correctamente.";
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
