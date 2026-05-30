<?php
    
$servidor ="localhost";
$usuario ="root";
$contra ="";
$baseDeDatos ="natue";

$conn = new mysqli($servidor, $usuario, $contra, $baseDeDatos);
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
session_start();
$id = $_SESSION['id'];
$sql = "SELECT * FROM usuario WHERE id='$id'";
$resultado = $conn->query($sql);
if($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()){
        echo $fila['nombre']."<br>".$fila['apellido']."<br>".$fila['fecha']."<br>".$fila['ciudad']."<br>".$fila['colegio'];
    }
}
?>