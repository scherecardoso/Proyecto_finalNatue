<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial;
}

.form{
    background-color:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
    width:300px;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ddd;
    border-radius:10px;
}

button{
    width:100%;
    padding:12px;
    background-color:pink;
    color:white;
    border:none;
    border-radius:10px;
    cursor:pointer;
}

button:hover{
    background-color:#e63e74;
}
</style>

</head>

<body>

<form class="form" action="07.vendedor.php" method="post">

    <h2 style="text-align:center;">Iniciar Sesión</h2>

    <input type="email" name="correo" placeholder="Correo" required>

    <input type="password" name="password" placeholder="Contraseña" required>

    <button type="submit">Entrar</button>

</form>

</body>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $correo = $_POST["correo"];
    $password = $_POST["password"];

    $admins = [
    "nahio171403@gmail.com"
    ];
    $vendedores = [
    "agredasancheznahia@pedropoveda.edu.bo"
];
    if(in_array($correo, $admins)){

    echo "<script>
        alert('Bienvenido ADMIN');
        window.location.href='06.admin.php';
    </script>";

}elseif(in_array($correo, $vendedores)){

    echo "<script>
        alert('Bienvenido VENDEDOR');
        window.location.href='07.vendedor.php';
    </script>";

}else{

    echo "<script>
        alert('Bienvenido usuario');
        window.location.href='08.usuario.html';
    </script>";
}}

?>
</html>