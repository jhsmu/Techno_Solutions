 <?php require("./validaciones/validarSesionEnInicio.php"); ?>
 <?php require("./validaciones/validarError.php"); ?>
 <?php require("./validaciones/validarMensaje.php"); ?>

 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <link rel="stylesheet" href="./css/style.css">
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <!-- iconocs -->
 <script src="https://kit.fontawesome.com/10a0d07bc6.js" crossorigin="anonymous"></script>

 <div class="encabezado1">
     <nav class="navbar navbar-expand-lg ">
         <div class="container-fluid">
             <a class="navbar-brand" href="#"><img src="./img/images.png" alt="" width="100px" style="border-radius: 50px;"></a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <!-- Menu navegacio -->
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                     <li class="nav-item">
                         <a class="nav-link" href="./inicio.php">Inicio</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="./nosotros.php">Nosotros</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="./producto.php">Productos</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="./contactanos.php">Contactanos</a>
                     </li>
                 </ul>

                 <form class="d-flex" role="search">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 Opciones
                             </a>
                             <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="carrito.php">Ir al carrito</a></li>
                                 <li>
                                     <hr class="dropdown-divider">
                                 </li>
                                 <li><a class="dropdown-item" href="./controladores/cerrarSesion.php">Cerrar sesión</a></li>
                             </ul>
                         </li>
                     </ul>

                 </form>
             </div>
         </div>
     </nav>
 </div>