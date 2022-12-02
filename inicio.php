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

  <header class="encabezado">
      
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
                <a class="nav-link" href="./inicio.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./nosotros.html">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./producto.html">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./contactanos.html">Contactanos</a>
              </li>              
            </ul>

            <form class="d-flex" role="search">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li> 
              </ul>
              
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>

    <section class="cuerpo">
      <div class="contenido">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <!-- Primer inicio -->
          <div class="col" style="width: 400px;" id="enunciado">
            <div class="card">
              <img src="/img/productos/equipos/imagen-pc_gamer_ryzen_3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pc Gamer Ryzen 5 </h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        <!-- Segundo inicio -->
        <div class="col" style="width: 400px;" id="enunciado">
          <div class="card">
            <img src="/img/productos/equipos/imagen-pc_gamer_ryzen_5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pc Gamer Ryzen 5 5600</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <!-- Tercera inicio -->
 
        <div class="col" style="width: 400px; height: 200px;" id="enunciado">
          <div class="card">
            <img src="/img/productos/equipos/imagen-pc_gamer_ryzen_5_3600.png" class="card-img-top" alt="..." style="width: 
            280px;">
            <div class="card-body">
              <h5 class="card-title">Pc Gamer Ryzen 5 3600</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>       
      </div>
    </section>
      <!-- Carrusel -->
      <div class="carusel">
 
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <!-- carrusel1 -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/productos/carusel/fondo1.jpg" class="d-block w-100" alt="..." id="caruselimagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <!-- carrusel2 -->
            <div class="carousel-item" >
              <img src="./img/productos/carusel/fondo2.jpg" class="d-block w-100" alt="..." id="caruselimagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <!-- carrusel3 -->
            <div class="carousel-item">
              <img src="/img/productos/carusel/fondo3.jpg" class="d-block w-100" alt="..." id="caruselimagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <!-- carrusel4 -->
            <div class="carousel-item">
              <img src="./img/productos/carusel/fondo4.jpg" class="d-block w-100" alt="..." id="caruselimagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
      </div>



      <footer class="pie-pagina">
        <div class="grupo1">
          <div class="box">
            <figure>
              <a href=""><img src="./img/images.png" alt="Logo Techno Solutions"></a>
            </figure>
          </div>
          <div class="box">
            <h2>Sobre Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis iure cupiditate accusamus saepe quisquam mollitia, voluptatem aperiam voluptate commodi consequuntur.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis iure cupiditate accusamus saepe quisquam mollitia, voluptatem aperiam voluptate commodi consequuntur.</p>
          </div>
          <div class="box">
            <h2>Siguenos</h2>
            <div class="redes">
              <a href="" class="fa fa-facebook"></a>
              <a href=""class="fa fa-instagram"></a>
              <a href=""class="fa fa-twitter"></a>
            </div>
          </div>
        </div>
        <div class="grupo2">
          <small>&copy; 2022 <b>Jhonatan Mena</b> <b>Y</b> <b>Miguel Duke</b>  --Todos Los Derechos Reservados</small>
        </div>
      </footer>
      



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/10a0d07bc6.js" crossorigin="anonymous"></script>
<script>
const myCarouselElement = document.querySelector('#myCarousel')
const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  wrap: false
})
</script>
            
</body>
</html>