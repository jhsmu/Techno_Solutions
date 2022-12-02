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

  <div class="container">
    <?php require("./controladores/consultarProductos.php") ?>

    <!-- video -->
    <div style="margin: 3em;">
      <video src="./video/Asus Rog elite  Animated Wallpaper 1080p.mp4" controls autoplay loop style="width: 100%;"></video>
    </div>

  </div>

  <?php require("./componentes/footer.php") ?>

</body>

</html>