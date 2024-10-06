<?php
include 'conexion.php';  // Incluimos el archivo de conexión

$sql = "SELECT * FROM productos";  // Consulta SQL
$result = $conn->query($sql);  // Ejecutamos la consulta

if ($result->num_rows > 0) {
    // Mostrar cada producto
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<h3>" . $row['nombre'] . "</h3>";
        echo "<p>" . $row['descripcion'] . "</p>";
        echo "<p>Precio: $" . $row['precio'] . "</p>";
        echo "<p>Categoría: " . $row['categoria'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No hay productos disponibles.";
}

$conn->close();  // Cerrar la conexión
?>