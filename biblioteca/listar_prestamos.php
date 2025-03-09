<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
<?php
require 'conexion.php';

$result = mysqli_query($conn, "SELECT p.id, u.nombre, l.titulo, p.fecha_prestamo, p.fecha_devolucion
                               FROM prestamos p
                               JOIN usuarios u ON p.usuario_id = u.id
                               JOIN libros l ON p.libro_id = l.id");

echo "<h2>Lista de Préstamos</h2>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] .
         " - Usuario: " . $row['nombre'] .
         " - Libro: " . $row['titulo'] .
         " - Fecha Préstamo: " . $row['fecha_prestamo'] .
         " - Fecha Devolución: " . ($row['fecha_devolucion'] ? $row['fecha_devolucion'] : "No devuelto") .
         "<br>";
}

mysqli_close($conn);
?>

</body>
</html>
