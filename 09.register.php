<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bienvenido</title>

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
    width:320px;
    background:#fff;
    padding:25px;
    border-radius:18px;
    border:1px solid #e6e6e6;
    text-align:center;
}

h1{
    font-size:22px;
    color:#c0c0c0;
    margin-bottom:10px;
}

p{
    font-size:13px;
    color:#777;
    margin-bottom:20px;
}

.btn{
    display:block;
    width:100%;
    padding:10px;
    margin-bottom:10px;
    border-radius:10px;
    text-decoration:none;
    font-size:14px;
}

.login{
    background:#c0c0c0;
    color:#fff;
}

.registro{
    background:#f89dbe;
    color:#fff;
}

</style>
</head>

<body>

<div class="contenedor">

    <h1>Natué</h1>

    <p>Bienvenido al sistema</p>

    <a href="10.htmllogin.php" class="btn login">Iniciar sesión</a>

    <a href="formUsuarios.html" class="btn registro">Registrarse</a>

</div>

</body>
</html>