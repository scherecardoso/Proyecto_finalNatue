<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Quicksand:wght@400;500&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
  
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


.caja-registro{
    width:500px;
    background:white;
    padding:40px;
    border-radius:30px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    border:1px solid #ececec;
}


.menu-registro{
    display:flex;
    justify-content:center;
    gap:40px;
    margin-bottom:40px;
}

.menu-registro a{
    text-decoration:none;
    color:#777;
    font-size:18px;
}

.menu-registro .activo{
    color:#111;
    border-bottom:2px solid #111;
    padding-bottom:8px;
}


.titulo{
    text-align:center;
    font-size:42px;
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
    margin-bottom:18px;
    background:#fafafa;
}

.campo i{
    color:#999;
    margin-right:10px;
}

.campo input{
    width:100%;
    height:100%;
    border:none;
    outline:none;
    background:transparent;
    font-size:15px;
}


.boton-registro{
    width:100%;
    padding:16px;
    border:none;
    border-radius:40px;
    background:#d5ceca;
    color:white;
    font-size:17px;
    cursor:pointer;
    margin-top:10px;
    transition:0.3s;
}

.boton-registro:hover{
    background:#c2bab5;
}


.login{
    text-align:center;
    margin-top:25px;
    color:#666;
}

.login a{
    color:#444;
}
@media (max-width: 768px){

body{
    padding:20px;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.caja-registro{
    width:90%;
    max-width:430px;
    padding:35px;
    border-radius:25px;
    margin:auto;
}

.menu-registro{
    gap:30px;
    margin-bottom:35px;
}

.menu-registro a{
    font-size:17px;
}

.titulo{
    font-size:38px;
}

.subtitulo{
    font-size:15px;
    margin-bottom:30px;
}


.campo{
    height:54px;
    padding:0 18px;
    border-radius:35px;
    margin-bottom:18px;
}

.campo i{
    font-size:15px;
}

.campo input{
    font-size:15px;
}

.boton-registro{
    padding:15px;
    font-size:16px;
    border-radius:35px;
}


.login{
    font-size:15px;
    margin-top:25px;
}

}

label.error{
    display:block;
    color:red;
    font-size:11px;
    margin-top:-12px;
    margin-bottom:12px;
    margin-left:10px;
}

input.error{
    border:2px solid red !important;
    border-radius:40px;
}
</style>
</head>

<body>

<div class="caja-registro">

    <div class="menu-registro">
    <a href="09.register.php">Iniciar sesión</a>

    <a href="formUsuarios.html" class="activo">Registrarse</a>
</div>

    <h1 class="titulo">Crear cuenta</h1>


 <form action="registroUsuario.php" method="post" id="formusuarios">

    <div class="campo"><input type="number" name="CI" placeholder="Carnet de identidad" required></div>

    <div class="campo"><input type="text" name="nombre" placeholder="Nombre completo" required></div>

    <div class="campo"><input type="text" name="direccion" placeholder="Dirección" required></div>

    <div class="campo"><input type="number" name="celular" placeholder="Celular" required></div>

    <div class="campo"><input type="text" name="rol" placeholder="Rol" required></div>

    <div class="campo"><input type="text" name="estado" placeholder="Estado" required></div>

    <button type="submit" class="boton-registro">Guardar Usuario</button>
</form>

<script>
        $(document).ready(function(){
            $("#formusuarios").validate({
                rules:{
                    CI:{
                        required: true,
                        number: true,
                        minlength: 8,
                    },
                    nombre:{
                        required: true,
                    },
                    direccion:{
                        required: true
                    },
                    celular:{
                        required: true,
                        number: true,
                        minlength: 8
                    },
                    rol:{
                        required: true
                    },
                    estado:{
                        required: true
                    }
                },
                messages:{
                    CI:{
                        required: "Este campo no puede ir vacio",
                        number: "Solo se aceptan números",
                        minlength: "El CI debe tener al menos 8 números"
                    },
                    nombre:{
                        required: "El nombre de usuario es requerido"
                    },
                    direccion:{
                        required: "Este campo no puede ir vacio"
                    },
                    celular:{
                        required: "Este campo no puede ir vacio",
                        number: "Solo se aceptan números",
                        minlength: "El celular debe tener al menos 8 números"
                    },
                    rol:{
                        required: "El campo es obligatorio"
                    },
                    estado:{
                        required: "El campo es obligatorio"
                    }
                }
            });
        });
    </script>

</div>
</body>
</html>