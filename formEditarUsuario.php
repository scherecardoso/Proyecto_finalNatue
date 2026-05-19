<?php
    
$servidor ="localhost";
$usuario ="root";
$contra ="";
$baseDeDatos ="DB_natue";

$conn = new mysqli($servidor, $usuario, $contra, $baseDeDatos);

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$CI = $_GET['CI'];

$sql ="SELECT * FROM usuario WHERE CI=$CI"; 

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){

    while($fila = $resultado->fetch_assoc()){

        $nombre = $fila['nombre'];
        $direccion = $fila['direccion'];
        $celular = $fila['celular'];
        $rol = $fila['rol'];
        $estado = $fila['estado'];
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background: linear-gradient(135deg, #ffd6e7, #ffeef5);
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding:20px;
        }

        .contenedor{
            background:#fff;
            width:420px;
            padding:40px 35px;
            border-radius:30px;
            box-shadow:0 10px 30px rgba(0,0,0,0.15);
        }

        .logo{
            text-align:center;
            margin-bottom:15px;
        }

        .logo i{
            font-size:60px;
            color:#ff4f87;
        }

        .titulo{
            text-align:center;
            margin-bottom:30px;
        }

        .titulo h2{
            color:#333;
            font-size:32px;
            margin-bottom:5px;
        }

        .titulo p{
            color:#777;
            font-size:15px;
        }

        .input-box{
            background:#ffe6ef;
            border-radius:18px;
            margin-bottom:18px;
            padding:14px 16px;
            display:flex;
            align-items:center;
            transition:0.3s;
        }

        .input-box:hover{
            transform:scale(1.02);
        }

        .input-box i{
            color:#ff4f87;
            font-size:18px;
            margin-right:12px;
        }

        .input-box input{
            border:none;
            outline:none;
            background:transparent;
            width:100%;
            font-size:15px;
            color:#444;
        }

        .input-box input::placeholder{
            color:#999;
        }

        .btn{
            width:100%;
            padding:15px;
            border:none;
            border-radius:18px;
            background:#ff4f87;
            color:white;
            font-size:18px;
            cursor:pointer;
            transition:0.3s;
            margin-top:10px;
            font-weight:600;
        }

        .btn:hover{
            background:#e63e74;
            transform:translateY(-2px);
        }

        .footer{
            text-align:center;
            margin-top:20px;
            color:#666;
            font-size:14px;
        }

    </style>

</head>

<body>

    <div class="contenedor">

        <div class="logo">
            <i class="fa-solid fa-user-pen"></i>
        </div>

        <div class="titulo">
            <h2>Editar Usuario</h2>
            <p>Actualiza la información del usuario 💖</p>
        </div>

        <form action="actualizarUsuario.php" method="post">

            <input type="hidden" name="CI" value="<?=$CI?>">

            <div class="input-box">
                <i class="fa-solid fa-user"></i>
                <input type="text" 
                name="nombre" 
                value="<?=$nombre?>"
                placeholder="Nombre">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-location-dot"></i>
                <input type="text" 
                name="direccion" 
                value="<?=$direccion?>"
                placeholder="Dirección">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-phone"></i>
                <input type="text" 
                name="celular" 
                value="<?=$celular?>"
                placeholder="Celular">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-briefcase"></i>
                <input type="text" 
                name="rol" 
                value="<?=$rol?>"
                placeholder="Rol">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-circle-check"></i>
                <input type="text" 
                name="estado" 
                value="<?=$estado?>"
                placeholder="Estado">
            </div>

            <input type="submit" 
            value="Actualizar Usuario" 
            class="btn">

        </form>

        <div class="footer">
        </div>

    </div>

</body>
</html>