<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro Producto</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#ffffff;
}

.contenedor{
    width:360px;
    padding:25px;
    border-radius:18px;
    background:rgba(255,255,255,0.6);
    border:1px solid #e6e6e6;
}

h2{
    text-align:center;
    font-size:22px;
    color:#b8b8b8;
    margin-bottom:10px;
}

p{
    text-align:center;
    font-size:13px;
    color:#999;
    margin-bottom:20px;
}

.input-box{
    margin-bottom:12px;
    padding:10px;
    border:1px solid #eaeaea;
    border-radius:12px;
    display:flex;
    align-items:center;
    background:#fff;
}

.input-box i{
    color:#c0c0c0;
    margin-right:10px;
}

.input-box input{
    border:none;
    outline:none;
    width:100%;
    font-size:14px;
    color:#444;
}

.btn{
    width:100%;
    padding:10px;
    border:none;
    border-radius:12px;
    background:#c0c0c0;
    color:#fff;
    margin-top:10px;
}

.footer{
    text-align:center;
    margin-top:15px;
    font-size:12px;
    color:#aaa;
}

</style>
</head>

<body>

<div class="contenedor">

<h2>Registro</h2>
<p>Datos del producto</p>

<form action="" method="post">

    <div class="input-box">
        <i class="fa-solid fa-barcode"></i>
        <input type="number" name="codigo" placeholder="Código">
    </div>

    <div class="input-box">
        <i class="fa-solid fa-box"></i>
        <input type="text" name="nombre" placeholder="Nombre">
    </div>

    <div class="input-box">
        <i class="fa-solid fa-file"></i>
        <input type="text" name="descripcion" placeholder="Descripción">
    </div>

    <div class="input-box">
        <i class="fa-solid fa-dollar-sign"></i>
        <input type="number" name="precio" placeholder="Precio">
    </div>

    <div class="input-box">
        <i class="fa-solid fa-money-bill"></i>
        <input type="number" name="costo" placeholder="Costo">
    </div>

    <div class="input-box">
        <i class="fa-solid fa-warehouse"></i>
        <input type="text" name="stock" placeholder="Stock">
    </div>

    <input type="submit" value="Guardar" class="btn">

</form>

<div class="footer">
</div>

</div>

</body>
</html>