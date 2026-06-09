<?php
    
$servidor ="localhost";
$usuario ="root";
$contra ="";
$baseDeDatos ="db_natue";

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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Quicksand:wght@400;500&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">


<style>

  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Open Sans', sans-serif;
    }

  body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#ffffff;
    padding:20px;
    }

  .contenedor{
    width:450px;
    background:#fff;
    padding:40px;
    border-radius:30px;
    border:1px solid #ececec;
    box-shadow:0 10px 30px rgba(0,0,0,0.06);
    }

  .titulo{
    text-align:center;
    margin-bottom:25px;
    }

  .titulo h2{
    font-family:'Playfair Display', serif;
    font-size:32px;
    color:#222;
    }

  .titulo p{
    color:#888;
    font-size:14px;
  }

  form{
    display:flex;
    flex-direction:column;
    gap:15px;
  }

  .caja{
    display:flex;
    align-items:center;
    gap:10px;
    border:1px solid #e8e8e8;
    border-radius:40px;
    padding:12px 18px;
    background-color:#fafafa;
    transition:.3s;
  }

  .caja{
    border:1px solid #d8d8d8;
    background:#fff;
  }

  .caja i{
    color:#999;
  }

  .caja input{
    width:100%;
    border:none;
    outline:none;
    background:transparent;
    font-size:14px;
  }

  .btn{
    margin-top:10px;
    padding:14px;
    border:none;
    border-radius:40px;
    background:#d5ceca;
    color:#fff;
    font-size:16px;
    cursor:pointer;
    transition:.3s;
  }

  .btn:hover{
    background:#c6beb9;
    transform:translateY(-2px);
  }
  
</style>
</head>

<body>

  <div class="contenedor">
  <div class="titulo"><h2>Editar Producto</h2></div>
  <form action="actualizarProducto.php" method="post">

   <input type="hidden" name="idproductos" value="<?=$idproductos?>">
    <div class="caja"><i class="fa-solid fa-barcode"></i><input type="number" name="codigo" value="<?=$codigo?>"></div>
    <div class="caja"><i class="fa-solid fa-box"></i><input type="text" name="nombre" value="<?=$nombre?>"></div>
    <div class="caja"><i class="fa-solid fa-file-lines"></i><input type="text" name="descripcion" value="<?=$descripcion?>"></div>
    <div class="caja"><i class="fa-solid fa-dollar-sign"></i><input type="number" name="precio" value="<?=$precio?>"></div>
    <div class="caja"><i class="fa-solid fa-money-bill"></i><input type="number" name="costo" value="<?=$costo?>"></div>
    <div class="caja"><i class="fa-solid fa-warehouse"></i><input type="number" name="stock" value="<?=$stock?>"></div>
   <button type="submit" class="btn">Actualizar Producto</button>
  </form>

  </div>

</body>
</html>