<?php
$servidor = "localhost";
$usuario = "root";
$contra = "";
$baseDeDatos = "DB_natue";

$conn = new mysqli($servidor, $usuario, $contra, $baseDeDatos);

if ($conn->connect_error) {
    die("Error de conexión");
}

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Productos</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f6f8;
    margin:0;
    padding:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:pin;
    border-radius:10px;
    overflow:hidden;
}

thead{
    background:pink;
    color:#fff;
}

th, td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #eee;
}

tr:hover{
    background:#f1f1f1;
}

.btn{
    padding:6px 12px;
    border:none;
    border-radius:6px;
    text-decoration:none;
    color:#fff;
    font-size:14px;
}

.editar{
    background:pink;
}

.editar:hover{
    background:pink;
}

.eliminar{
    background:#e74c3c;
}

.eliminar:hover{
    background:#c0392b;
}
</style>

</head>
<body>

<table>
<thead>
<tr>
    <th>Código</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Costo</th>
    <th>Stock</th>
    <th>Acciones</th>
</tr>
</thead>

<tbody>

<?php
if ($result && $result->num_rows > 0) {
    while($fila = $result->fetch_assoc()) {
        $idproductos = $fila["idproductos"];
?>

<tr>
    <td><?= $fila["codigo"] ?></td>
    <td><?= $fila["nombre"] ?></td>
    <td><?= $fila["descripcion"] ?></td>
    <td>$<?= $fila["precio"] ?></td>
    <td>$<?= $fila["costo"] ?></td>
    <td><?= $fila["stock"] ?></td>
    <td>
        <a href="formEditarProductos.php?idproductos=<?= $idproductos ?>" class="btn editar">Editar</a>
        <a href="eliminarProducto.php?idproductos=<?= $idproductos ?>" class="btn eliminar">Eliminar</a>
    </td>
</tr>

<?php
    }
}
$conn->close();
?>

</tbody>
</table>

</body>
</html>