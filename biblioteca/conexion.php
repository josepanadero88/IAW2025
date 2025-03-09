<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
<?php
$server = "localhost";
$user = "root";
$password = "userUSER2";
$database = "biblioteca";

$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
?>

</body>
</html>
