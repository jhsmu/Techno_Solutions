<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


  <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>

  <?php require("./componentes/header.php") ?>

  <section class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="card_cont swiper-slide">
        <div class="card_image ">
          <img src="" alt="Leandro">
        </div>
        <div class="card_contenido">
          <span class="card_titulo">Desarrollador</span>
          <span class="card_nombre">Leandro Pastor</span>
          <p class="card_texto">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, eaque cumque. Provident tempora amet explicabo tenetur, voluptate vitae quos natus culpa atque dignissimos minima. Quas?
          </p>
          <button class="card_btn">View More</button>
        </div>
      </div>

      <div class="card_cont swiper-slide">
        <div class="card_image ">
          <img src="" alt="Leandro">
        </div>
        <div class="card_contenido">
          <span class="card_titulo">Gestor De Base de Datos</span>
          <span class="card_nombre">Freymer Sepulveda</span>
          <p class="card_texto">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, eaque cumque. Provident tempora amet explicabo tenetur, voluptate vitae quos natus culpa atque dignissimos minima. Quas?
          </p>
          <button class="card_btn">View More</button>
        </div>
      </div>

      <div class="card_cont swiper-slide">
        <div class="card_image ">
          <img src="" alt="Leandro">
        </div>
        <div class="card_contenido">
          <span class="card_titulo">Diseño Grafico</span>
          <span class="card_nombre">Susana </span>
          <p class="card_texto">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, eaque cumque. Provident tempora amet explicabo tenetur, voluptate vitae quos natus culpa atque dignissimos minima. Quas?
          </p>
          <button class="card_btn">View More</button>
        </div>
      </div>


    </div>
  </section>

  <?php require("./componentes/footer.php") ?>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</body>

</html>