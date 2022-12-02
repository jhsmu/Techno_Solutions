<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <?php require("./validaciones/validarSesionEnRegistro.php"); ?>
    <?php require("./validaciones/validarError.php"); ?>

    <header class="encabezado">
    </header>
    <div class="logo">
        <form action="./controladores/login.php" method="POST">
            <img class="avatar" src="img/images.png" alt="logo">
            <h1>Iniciar Sesion</h1>
            <form action="">

                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario">
                <label for="clave">Contraseña</label>
                <input type="password" id="clave" name="clave">
                <button type="submit">Iniciar Session</button>
                <a href="registrate.html">Registrarse</a>
            </form>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>