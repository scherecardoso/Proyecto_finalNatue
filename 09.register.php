<!DOCTYPE html>
<html lang="es">
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
    font-family:Arial, Helvetica, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f5f3f2;
}


.caja-login{
    width:460px;
    background:white;
    padding:40px;
    border-radius:30px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    border:1px solid #ececec;
    margin-top:50px;
}


.menu-login{
    display:flex;
    justify-content:center;
    gap:40px;
    margin-bottom:40px;
}

.menu-login a{
    text-decoration:none;
    color:#777;
    font-size:18px;
}

.menu-login .activo{
    color:#111;
    border-bottom:2px solid #111;
    padding-bottom:8px;
}


.titulo{
    text-align:center;
    font-size:45px;
    font-family:serif;
    color:#222;
    margin-bottom:10px;
}

.subtitulo{
    text-align:center;
    color:#777;
    margin-bottom:35px;
}



.campo{
    width:100%;
    height:58px;
    border:1px solid #e5e5e5;
    border-radius:40px;
    display:flex;
    align-items:center;
    padding:0 20px;
    margin-bottom:20px;
    background:#fafafa;
}

.campo i{
    color:#999;
    margin-right:10px;
}

.campo input{
    width:100%;
    border:none;
    outline:none;
    background:transparent;
    font-size:15px;
}



.extra{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
    font-size:14px;
    color:#666;
}

.extra a{
    text-decoration:none;
    color:#666;
}


.boton-login{
    width:100%;
    padding:16px;
    border:none;
    border-radius:40px;
    background:#d5ceca;
    color:white;
    font-size:17px;
    cursor:pointer;
    transition:0.3s;
}

.boton-login:hover{
    background:#c3bbb5;
}



.linea{
    text-align:center;
    color:#888;
    margin:30px 0 25px;
    position:relative;
}

.linea::before,
.linea::after{
    content:"";
    width:35%;
    height:1px;
    background:#ddd;
    position:absolute;
    top:50%;
}

.linea::before{
    left:0;
}

.linea::after{
    right:0;
}



.redes{
    display:flex;
    justify-content:center;
    gap:20px;
    margin-bottom:25px;
}

.redes a{
    width:60px;
    height:60px;
    border-radius:50%;
    border:1px solid #ddd;
    display:flex;
    justify-content:center;
    align-items:center;
    text-decoration:none;
    color:#333;
    font-size:24px;
}



.registro{
    text-align:center;
    color:#666;
}

.registro a{
    color:#444;
}

</style>

</head>

<body>

<form class="caja-login" method="post">

    <div class="menu-login"><a href="login.php" class="activo">Iniciar sesión</a><a href="formUsuarios.php">Registrarse</a></div>
    <h1 class="titulo">Bienvenida</h1>
    <div class="campo">
    <input type="email"name="correo"placeholder="Correo electrónico"required></div>
    <div class="campo"><input type="password"name="password"placeholder="Contraseña"required></div>
    <button type="submit" class="boton-login">Ingresar</button>
</form>

</body>

</html>