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
    <div class="contenido">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Primer inicio -->
        <div class="col" style="width: 400px;" id="enunciado">
          <div class="card">
            <img src="./img/productos/equipos/imagen-pc_gamer_ryzen_3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pc Gamer Ryzen 5 </h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <!-- Segundo inicio -->
        <div class="col" style="width: 400px;" id="enunciado">
          <div class="card">
            <img src="./img/productos/equipos/imagen-pc_gamer_ryzen_5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pc Gamer Ryzen 5 5600</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <!-- Tercera inicio -->

        <div class="col" style="width: 400px; height: 200px;" id="enunciado">
          <div class="card">
            <img src="./img/productos/equipos/imagen-pc_gamer_ryzen_5_3600.png" class="card-img-top" alt="..." style="width: 
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
        <div class="carousel-item">
          <img src="./img/productos/carusel/fondo2.jpg" class="d-block w-100" alt="..." id="caruselimagen">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <!-- carrusel3 -->
        <div class="carousel-item">
          <img src="./img/productos/carusel/fondo3.jpg" class="d-block w-100" alt="..." id="caruselimagen">
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

  <?php require("./componentes/footer.php") ?>

  <script>
    const myCarouselElement = document.querySelector('#myCarousel')
    const carousel = new bootstrap.Carousel(myCarouselElement, {
      interval: 2000,
      wrap: false
    })
  </script>

</body>

</html>