<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>

    <?php require("./componentes/header.php") ?>

    <section class="cuerpo">
        <div class="section">
            <?php require("./controladores/consultarCarrito.php") ?>
        </div>

    </section>

    <?php require("./componentes/footer.php") ?>



</body>

</html>