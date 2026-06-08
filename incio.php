<?php
$servidor ="localhost";
$usuario ="root";
$contra ="";
$baseDeDatos ="DB_natue";

$conn = new mysqli($servidor, $usuario, $contra, $baseDeDatos);
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
$session_start();
$id=$_SESSION['id'];
$sql="selectt * from personas where id='id'";
$resultado = $conexion->query($sql);
if ($resultado->num_rows>0){
    while($fila=$resultado->fetch_assoc()){
        session_¨start();
        $SESION ['CI']= $fila['CI']."<br>".$fila['nombre']."<br>".$fila['direccion']."<br>".$fila['celular']"<br>".$fila['rol']."<br>".$fila['estado'];
}
}