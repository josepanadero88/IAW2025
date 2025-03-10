<?php
$servidor = "localhost";
$usuario = "panadero";
$contrasena = "";
$base_datos = "concesionario";
$socket = "/var/run/mysqld/mysqld.sock";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos, null, $socket);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
