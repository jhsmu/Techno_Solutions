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

            <form action="" method="POST">
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Pagar">
                </div>
            </form>  
        </div>

    </section>

    <?php require("./componentes/footer.php") ?>



</body>

</html>