<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/evento.php";

try {
  $eventos = Evento::listar();
  $proximos = Evento::listarProximos();
} catch (PDOException $e) {
  echo $e->getMessage();
}

$alternar = false;
$primeiro = true;

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
    <?php foreach ($proximos as $p) : ?>
    <div class="carousel-item <?= $primeiro ? 'active' : "" ?>">
      <img src="data:image;charset=utf8;base64,<?= base64_encode($p['imagem_evento']); ?>" alt="" srcset="" class="bd-placeholder-img " width="100%" height="500px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
    </div>
    <?php $primeiro = false?>
    <?php endforeach; ?>
    <!-- slide do carrossel -->
  </div>
  <!-- botões do carrossel -->
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
<hr class="featurette-divider">
      <?php  foreach ($eventos as $e):?>
  <div class="row featurette d-flex justify-content-center align-items-center">
    <div class="col-md-7 d-flex flex-column <?= $alternar ? 'order-lg-2' : "" ?>">
      <h2 class="featurette-heading fw-normal align-itens-center display-1 text-center d-flex flex-column"><?= $e['nome_evento'] ?><span class="text-body-secondary h3 "><?=" ". $e['local_evento'] ?> <?= " ". date('d/m/Y',strtotime($e['data_evento']))  ?> <?= " ".$e['horario'] ?></span></h2>
      <p class=" text-center lead"><?= $e['descricao_evento']?></p>
    </div>
    <div class="col-md-5 <?= $alternar ? 'order-lg-1' : "" ?>">
      <img src="data:image;charset=utf8;base64,<?= base64_encode($e['imagem_evento']); ?>" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
    </div>
  </div>
  <hr class="featurette-divider">
  <?php $alternar = !$alternar ?>
  <?php endforeach;?>
  
  
<!-- /END THE FEATURETTES -->
</div><!-- /.container -->
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