<?php
$servername = "localhost";  // Puede ser "127.0.0.1" o "localhost"
$username = "root";  // Tu usuario de MySQL, por defecto es "root"
$password = "";  // La contraseña para el usuario MySQL, por defecto es ""
$dbname = "judapi_tech";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>