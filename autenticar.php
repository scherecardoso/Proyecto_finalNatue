<?php
$servidor ="localhost";
$usuario ="root";
$contra ="";
$baseDeDatos ="db_natue";

$conn = new mysqli($servidor, $usuario, $contra, $baseDeDatos);
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$contraseña = $_POST['contrseña'];
$sql = "SELECT * FROM usuario WHERE nombre='$nombre' AND contraseña='$contraseña'";
$resultado = $conn->query($sql);
if($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()){
        session_start();
        $_SESSION['id'] = $fila['id'];
        $_SESSION['nombre'] = $fila['nombre'];
        header("Location: 02.inicio.php");
    }
}else{
    echo "credenciales incorrectas";
}
?>