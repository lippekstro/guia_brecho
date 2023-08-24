<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/evento.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";

try {
  $listarUltimos = Produto::listarUltimos();
  $listarproximos = Evento::listarproximos();
  $lojas = Brecho::listarDestaques();
} catch (PDOException $th) {
  echo $th->getMessage();
}
?>

<link href="/guia_brecho/css/bootstrap.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
<link rel="stylesheet" href="/guia_brecho/css/indexhome.css">
<!--  <script src="/guia_brecho/js/bootstrap.bundle.js" defer></script>  -->
<script src="/guia_brecho/js/home.js" defer></script>

<section class="index">
  <!-- CARROSSEL  ------------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">


  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Guia Brechó</h5>
          <p>Bem-vindo ao nosso mundo de produtos de brechó cuidadosamente selecionados! Aqui, você encontrará uma coleção única de peças que vão desde roupas e calçados até acessórios, todos em ótimo estado e prontos para uma nova vida com você.</p>
          <p><a href="/guia_brecho/views/cadastro_usuario.php" class="btn btn-warning mt-3 butao_nav">Cadastre-se</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/guia_brecho/img/img_carrossel01.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Guia Brechó</h5>
          <p>Explore os Eventos que acontecem na ilha - Moda, Sustentabilidade e Diversão!</p>
          <p><a href="/guia_brecho/views/eventos.php" class="btn btn-warning mt-3 butao_nav">Eventos</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carrossel2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Guia Brechó</h5>
          <p>Nossos produtos abrangem uma ampla variedade de estilos, tamanhos e marcas, para atender às necessidades de todos os nossos clientes.</p>
          <p><a href="/guia_brecho/views/produtos.php?pagina=1" class="btn btn-warning mt-3 butao_nav">Produtos</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section id="latest-collection">
    <div class="container">
      <div class="product-collection row">
        <div class="col-lg-7 col-md-12 left-content">
          <div class="collection-item">
            <div class="products-thumb">
              <img src="/guia_brecho/img/banner04.webp" alt="collection item" class="large-image image-rounded">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
              <div class="categories text_banner_color">Faça sua coleção</div>
              <h3 class="item-title text_banner_color1">Estilo pessoal.</h3> <br>
              <p class="text_banner_color"> Na busca por um guarda-roupa que reflita sua autenticidade, oferecemos uma ampla gama de opções. </p><br>
              <div>
                <button class="btn-56">
                  <a href="/guia_brecho/views/produtos.php?pagina=1" class="text_banner_link">Veja Mais</a>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 right-content flex-wrap">
          <div class="collection-item top-item">
            <div class="products-thumb">
              <img src="/guia_brecho/img/sapatilha.jpg.png" alt="collection item " class="small-image image-rounded">
            </div>
            <div class="col-md-6 product-entry">
              <div class="categories"></div>
              <h3 class="item-title text_banner_color1">Conforto em cada passo.</h3>
            </div>
          </div>
          <div class="collection-item bottom-item">
            <div class="products-thumb">
              <img src="/guia_brecho/img/banner02.png" alt="collection item" class="small-image image-rounded">
            </div>
            <div class="col-md-6 product-entry">
              <div class="categories text_banner_color">Descubra nossas coleções.</div>
              <h3 class="item-title text_banner_color1">Arte em Movimento.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if (count($listarUltimos) > 0) : ?>
    <section class="product">
      <h2 class="product-category ">Produtos</h2>
      <button class="pre-btn"><img src="/guia_brecho/img/arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="/guia_brecho/img/arrow.png" alt=""></button>
      <div class="product-container">
        <?php foreach ($listarUltimos as $p) : ?>
          <div class="product-card">
            <div class="product-image">
              <span class="discount-tag"></span>
              <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($p['imagem_produto']) ?>" class="product-thumb" alt="">
              <button class="card-btn">Veja Mais</button>
            </div>
            <div class="product-info">
              <h2 class="product-brand"><?php echo $p['nome_produto']; ?></h2>
              <p class="product-short-description"><?php echo $p['descricao']; ?></p>
              <span class="price"><?php echo $p['preco']; ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>

  <section class="card1">
    <div id="card-area">
      <div class="wrapper">
        <div class="box-area">
          <div class="box">
            <img src="img/acessorios.png" alt="">
            <div class="overlay">
              <h3>Acessórios</h3>
              <p>Acreditamos que os detalhes fazem toda a diferença, e nossos acessórios únicos irão adicionar um toque especial a qualquer look.</p>
              <a href="/guia_brecho/views/produtos.php?categoria=acessorios">VEJA MAIS</a>
            </div>
          </div>
          <div class="box">
            <img src="img/calça.png" alt="">
            <div class="overlay">
              <h3>Roupas</h3>
              <p>Nossas calças são cuidadosamente selecionadas por nossos clientes, garantindo qualidade e conforto para que você se sinta confiante em qualquer ocasião. </p>
              <a href="/guia_brecho/views/produtos.php?categoria=vestimentas">VEJA MAIS </a>
            </div>
          </div>
          <div class="box">
            <img src="/guia_brecho/img/produto_calçados.jpg" alt="">
            <div class="overlay">
              <h3>Calçados</h3>
              <p>Nossos calçados são selecionados com carinho, garantindo que cada par esteja em ótimo estado e pronto para uma nova jornada com você.</p>
              <a href="/guia_brecho/views/produtos.php?categoria=calcados">VEJA MAIS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if (count($listarproximos) > 0) : ?>
    <section id="latest-blog" class="padding-large">
      <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title">Eventos</h2>
          <div class="btn-wrap align-right">
            <a href="/guia_brecho/views/eventos.php" class="d-flex align-items-center">Veja Mais<i class="icon icon icon-arrow-io"></i>
            </a>
          </div>
        </div>
        <div class="row d-flex flex-wrap">
          <?php foreach ($listarproximos as $artigo) : ?>
            <article class="col-md-4 post-item">
              <div class="image-holder zoom-effect">
                <!-- <a href=""> -->
                <img src="data:image;charset=utf8;base64,<?= base64_encode($artigo['imagem_evento']); ?>" alt="post" class="post-image">
                <!-- </a> -->
              </div>
              <div class="post-content d-flex">
                <div class="meta-date">
                  <div class="meta-day text-primary"><?= date('d', strtotime($artigo['data_evento'])); ?></div>
                  <div class="meta-month"><?= date('m', strtotime($artigo['data_evento'])); ?></div>
                </div>
                <div class="post-header">
                  <h3 class="post-title">
                    <!-- <a href="single-post.html"> --><?= $artigo['nome_evento']; ?><!-- </a> -->
                  </h3>
                  <!-- <a href="blog.html" class="blog-categories"> --><?php echo $artigo['descricao_evento']; ?><!-- </a> -->
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if (count($lojas) > 0) : ?>
    <section class="flexbox02" id="portfolio" class="portfolio section-padding">
      <div class="wrapper_caixa">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h2 class="h2_lojas">Guia Lojas</h2>
                <p class="p_serviço">Lojas em destaque:</p>
              </div>
            </div>
          </div>
          <div class="row">
            <?php foreach ($lojas as $l) : ?>
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="data:image;charset=utf8;base64,<?= base64_encode($l['brecho_img']); ?>" class="img-fluid" alt="">
                    </div>
                    <h3 class="card-title"><?= $l['brecho_nome']; ?></h3>
                    <p class="lead"><?= $l['brecho_bio']; ?></p>
                    <a href="/guia_brecho/views/brechosaibamais.php?id=<?= $l['id_brecho']; ?>" class="bnt_loja btn bg-warning text-dark">Veja Mais</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="flexbox">
    <div class="wrapper_caixa">
      <div class="section-header text-center pb-5  text-black">
        <h2 class="h2_sevirço">Sobre os nossos serviços:</h2>
      </div>
      <div class="caixa-area">
        <div class="icon-area">

        </div>
        <h6 class="text_serviços">Comunidade Engajada</h6>
        <p>O que torna nosso site brechó verdadeiramente especial é a comunidade engajada que construímos ao longo do tempo. Nossos clientes não são apenas compradores, são membros valiosos da nossa família fashion sustentável.</p>
      </div>
      <div class="caixa-area custom">
        <div class="icon-area">
          <i class="lni lni-mashroom"></i>
        </div>
        <h6 class="text_serviços">Sustentabilidade</h6><br>
        <p>Uma das qualidades mais distintas e valorizadas do nosso site brechó é o compromisso inabalável com a sustentabilidade. Acreditamos que a moda pode ser bonita e responsável ao mesmo tempo, e por isso, priorizamos o conceito de reutilização e reciclagem em tudo o que fazemos.</p>
      </div>
      <div class="caixa-area">
        <div class="icon-area">
          <i class="lni lni-trees"></i>
        </div>
        <h6 class="text_serviços">Autenticidade</h6><br>
        <p>No Guia brechó, a autenticidade é uma das características que nos define. Cada peça em nosso acervo tem uma história única e carrega consigo um charme que apenas itens vintage podem proporcionar.</p>
      </div>
    </div>
  </section>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>