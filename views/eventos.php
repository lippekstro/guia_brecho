<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/evento.php";

try {
  $eventos = Evento::listar();
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>

<?php if (count($eventos) > 0) : ?>
  <section>
    <!-- inicio dos indicadores do carrossel  -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <!-- fim dos indicadores do carrossel  -->

      <!-- inicio do carrossel -->
      <div class="carousel-inner">
        <!-- slide do carrossel -->
        <div class="carousel-item active">
          <img src="/guia_brecho/img/dummy.png" alt="" srcset="" class="bd-placeholder-img " width="100%" height="500px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
        <!-- slide do carrossel -->
        <div class="carousel-item ">
          <img src="/guia_brecho/img/dummy.png" alt="" srcset="" class="bd-placeholder-img " width="100%" height="500px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>

        <div class="carousel-item">
          <img src="/guia_brecho/img/dummy.png" alt="" srcset="" class="bd-placeholder-img " width="100%" height="500px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- fim do carrossel -->

    <!-- divs de views Eventos -->
    <div class="container marketing mt-3">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Evento 1 <span class="text-body-secondary">local&hora</span></h2>
          <p class="lead">descriçao Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quos neque provident repudiandae suscipit facilis dignissimos quis nihil impedit. Quasi officiis soluta velit saepe? In illo necessitatibus culpa explicabo laboriosam!</p>
        </div>
        <div class="col-md-5">
          <img src="/guia_brecho/img/dummy.png" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" focusable="false">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Evento 2 <span class="text-body-secondary">local&hora</span></h2>
          <p class="lead">descriçao evento 2 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae hic omnis neque, harum corporis maiores? Voluptatum quis repellat suscipit eius, voluptatem repudiandae possimus voluptates sunt temporibus, consectetur exercitationem sit sequi.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="/guia_brecho/img/dummy.png" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" focusable="false">
        </div>
      </div>

      <hr class="featurette-divider">

    </div>
  </section>
<?php else : ?>
  <section class="m-3">
    <div class="alert alert-info text-center" role="alert">
      Nenhum Evento cadastrado!
    </div>
  </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>