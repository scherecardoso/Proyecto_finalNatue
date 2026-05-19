<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial;
}

body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #ffffff;
}

.contenedor{
    width: 340px;
    background: #ffffff;
    padding: 25px;
    border-radius: 15px;
    border: 1px solid #f2c2d6;
}

h2{
    text-align: center;
    margin-bottom: 20px;
    color: #ff6fa3;
    font-size: 22px;
}

form{
    display: flex;
    flex-direction: column;
}

label{
    margin-bottom: 5px;
    font-size: 14px;
    color: #444;
}

input{
    margin-bottom: 12px;
    padding: 10px;
    border: 1px solid #e6e6e6;
    border-radius: 10px;
}

input[type="submit"]{
    background: #ff6fa3;
    color: white;
    border: none;
    padding: 10px;
    font-weight: bold;
}
    </style>
</head>

<body>

    <div class="contenedor">
        <h2>Crear Usuario</h2>

        <form action="08.usuario.html" method="post">

            <label>CI</label>
            <input type="number" name="CI" required>

            <label>Nombre</label>
            <input type="text" name="nombre" required>

            <label>Dirección</label>
            <input type="text" name="direccion" required>

            <label>Celular</label>
            <input type="text" name="celular" required>

            <label>Rol</label>
            <input type="text" name="rol" required>

            <label>Estado</label>
            <input type="text" name="estado" required>

            <input type="submit" value="Guardar Usuario">

        </form>
    </div>

</body>
</html>