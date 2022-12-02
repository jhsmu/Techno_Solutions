<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style1.css">
    <title>Document</title>
</head>

<body>

    <?php require("./validaciones/validarError.php"); ?>

    <header class="encabezado">

    </header>

    <div class="logo">
        <img class="avatar" src="./img/images.png" alt="logo">
        <h1>Registrarse</h1>
        <form action="./controladores/registro.php" method="POST">
            <div class="row">
                <div class="col-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div class="col-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido">
                </div>
                <div class="col-6">
                    <label for="documento">Numero Documento</label>
                    <input type="text" id="documento" name="documento">
                </div>
                <div class="col-6">
                    <label for="correo">Correo Electronico</label>
                    <input type="text" id="correo" name="correo">
                </div>
                <div class="col-6">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario">
                </div>
                <div class="col-6">
                    <label for="clave">Contraseña</label>
                    <input type="password" id="clave" name="clave">
                </div>
                <div class="col-6">
                    <label for="direccion">Direccion</label>
                    <input type="text" id="direccion" name="direccion">
                </div>
                <div class="col-6">
                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono" name="telefono">
                </div>

            </div>

            <button type="submit">Registrarse</button>
            <a href="http://localhost/Techno_Solutions/login.html">Iniciar Sesion</a>
        </form>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>