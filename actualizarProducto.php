<?php
$servidor ="localhost";//Este archivo es para actualizar nuevos datos ingresados tras averlo editado
$usuario ="root";
$contra ="";
$baseDeDatos ="DB_natue";

$conn = new mysqli($servidor, $usuario, $contra, $baseDeDatos);

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$idproductos = $_POST['idproductos'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$costo = $_POST['costo'];
$stock = $_POST['stock'];

$sql = "UPDATE productos SET codigo='$codigo', nombre='$nombre', descripcion='$descripcion', precio='$precio', costo='$costo', stock='$stock' WHERE idproductos=$idproductos";

if ($conn->query($sql) === TRUE) {
    echo "Producto actualizado exitosamente";
    header("Location: readProducto.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>