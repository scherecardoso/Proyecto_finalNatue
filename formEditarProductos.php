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

$sql ="SELECT * FROM productos WHERE idproductos=$idproductos";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){

    while($fila = $resultado->fetch_assoc()){

        $codigo = $fila['codigo'];
        $nombre = $fila['nombre'];
        $descripcion = $fila['descripcion'];
        $precio = $fila['precio'];
        $costo = $fila['costo'];
        $stock = $fila['stock'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            background: linear-gradient(135deg, #ffd6e7, #ffeef5);
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .contenedor{
            background:#fff;
            width:400px;
            padding:40px 30px;
            border-radius:30px;
            box-shadow:0 10px 25px rgba(0,0,0,0.15);
        }

        .logo{
            text-align:center;
            font-size:50px;
            color:#ff4f87;
            margin-bottom:10px;
        }

        .titulo{
            text-align:center;
            margin-bottom:30px;
        }

        .titulo h2{
            color:#333;
            font-size:30px;
        }

        .titulo p{
            color:#777;
            margin-top:5px;
        }

        .input-box{
            background:#ffe6ef;
            border-radius:15px;
            margin-bottom:18px;
            padding:14px;
            display:flex;
            align-items:center;
        }

        .input-box i{
            color:#ff4f87;
            margin-right:12px;
            font-size:18px;
        }

        .input-box input{
            border:none;
            outline:none;
            background:transparent;
            width:100%;
            font-size:16px;
            color:#444;
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
        }

        .btn:hover{
            background:#e63e74;
            transform:scale(1.03);
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
            <i class="fa-solid fa-pen-to-square"></i>
        </div>

        <div class="titulo">
            <h2>Editar Producto</h2>
            <p>Actualiza los datos del producto</p>
        </div>

        <form action="actualizarProducto.php" method="post">

            <input type="hidden" name="idproductos" value="<?=$idproductos?>">

            <div class="input-box">
                <i class="fa-solid fa-barcode"></i>
                <input type="number" 
                name="codigo" 
                value="<?=$codigo?>">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-box"></i>
                <input type="text" 
                name="nombre" 
                value="<?=$nombre?>">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-file-lines"></i>
                <input type="text" 
                name="descripcion" 
                value="<?=$descripcion?>">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-dollar-sign"></i>
                <input type="number" 
                name="precio" 
                value="<?=$precio?>">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-money-bill"></i>
                <input type="number" 
                name="costo" 
                value="<?=$costo?>">
            </div>

            <div class="input-box">
                <i class="fa-solid fa-warehouse"></i>
                <input type="number" 
                name="stock" 
                value="<?=$stock?>">
            </div>

            <input type="submit" 
            value="Actualizar Producto" 
            class="btn">

        </form>

        <div class="footer">
        </div>

    </div>

</body>
</html>