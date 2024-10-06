<?php
include 'conexion.php';  // Conectar a la base de datos

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];

// Insertar datos en la tabla de productos
$sql = "INSERT INTO productos (nombre, descripcion, precio, categoria) 
        VALUES ('$nombre', '$descripcion', '$precio', '$categoria')";

if ($conn->query($sql) === TRUE) {
    echo "Producto agregado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  // Cerrar conexión
?>