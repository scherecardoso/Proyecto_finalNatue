<?php
$servidor ="localhost";
$usuario ="root";
$contra ="";
$baseDeDatos ="DB_natue";

$conn = new mysqli($servidor, $usuario, $contra, $baseDeDatos);

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$idproductos = $_GET['idproductos'];

$sql = "DELETE FROM productos WHERE idproductos=$idproductos";

if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado exitosamente";
    header("Location: readProducto.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>