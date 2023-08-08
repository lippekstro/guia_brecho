<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";

$produtos = array(
    ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?shirt", "categoria" => "Roupa", "brecho" => "Fofo Brechó", "brecho" => "Fofo Brechó", "img-loja" => "logo-loja.jpg"],
    ["nome" => "Vestido", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?dress", "categoria" => "Acessório", "brecho" => "Brechó da Su", "img-loja" => "logo-loja2.png"],
    ["nome" => "Camisa", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?pants", "categoria" => "Calçado", "brecho" => "Meu Brechó", "img-loja" => "logo-loja3.jpg"],
    ["nome" => "Sapato", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?shoe", "categoria" => "Roupa", "brecho" => "Chic Brechó", "img-loja" => "logo-loja.jpg"],
    ["nome" => "Saia", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?earring", "categoria" => "Calçado", "brecho" => "Brechó Maria Bonita", "img-loja" => "logo-loja2.png"],
    ["nome" => "Blusa", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?shirt", "categoria" => "Acessório", "brecho" => "Brechó da Katia", "img-loja" => "logo-loja3.jpg"],
    ["nome" => "Short", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?dress", "categoria" => "Roupa", "brecho" => "Fofo Brechó", "img-loja" => "logo-loja.jpg"],
    ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?pants", "categoria" => "Calçado", "brecho" => "Fofo Brechó", "img-loja" => "logo-loja3.jpg"],
  
  
  
  );

?>

<section class="header">
    <!-- First container -->
    <div class="container-produtos container_solid">
      <div class="title_wrapper">
        <h1>GUIA BRECHO </h1>
      </div>
    </div>

    <!-- Second container -->
    <div class="container-produtos container_image" aria-hidden="true">
      <div class="title_wrapper">
        <h1>GUIA BRECHO</h1>
      </div>
    </div>
  </section>

  <!-- cards produtos -->

  <section class="grid-produto">
    <div class="titulo">
      <h2>Produtos</h2>
    </div>
    <ul class="gallery">
      <?php foreach ($produtos as $lista) : ?>
        <li>
          <div class="card-produtos">
            <figcaption>
              <img src="<?= $lista["imagem"] ?>" alt="" width="1000" height="1500" alt="" sizes="(max-width: 1000px) 100vw, 1000px">
            </figcaption>
          </div>
          <div class="info-produto">
            <h3><?= $lista["nome"] ?></h3>
            <p style="font-size: .9rem;"><?= $lista["categoria"] ?> / <?= $lista["brecho"] ?></p>
            <p style="font-size: .7rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
            <a href="#modal" id="style-2" class="button-produtos button__link" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></a>

          </div>
        </li>

      <?php endforeach; ?>
    </ul>

    <!-- Modal -->
    <?php foreach ($produtos as $lista) : ?>
      <div class="modal-wrapper" id="modal">
        <div class="modal-body">
          <div class="img-loja">
            <img src="<?= $lista["img-loja"] ?>" alt="">
          </div>
          <div class="modal-header">
            <h2 class="heading"><?= $lista["brecho"] ?></h2>
            <a href="#!" role="button" class="close" aria-label="close this modal">
              <svg viewBox="0 0 24 24">
                <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
              </svg>
            </a>
          </div>
          <ul>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Whatsapp</li>
          </ul>
          
        </div>
        <a href="#!" class="outside-trigger"></a>
      </div>
    <?php endforeach; ?>

    <!-- paginacao -->

    <div class="cont-pag">
      <ul class="pagination modal-3">
        <li><a href="#" class="prev">&laquo</a></li>
        <li><a href="#" class="active">1</a></li>
        <li> <a href="#">2</a></li>
        <li> <a href="#">3</a></li>
        <li> <a href="#">4</a></li>
        <li><a href="#" class="next">&raquo;</a></li>
      </ul>
    </div>

    <!-- sidebar -->

    <aside class="filtro">
      <h3>FILTRE POR:</h3>
      <div class="accordion-menu">
        <ul class="ul">
          <li class="li">
            <input type="checkbox" checked>
            <i class="arrow"></i>
            <h2 class="h2">Categoria</h2>
            <p class="p">Roupas</p>
            <p class="p">Acessórios</p>
            <p class="p">Calçados</p>
          </li>
          <li class="li">
            <input type="checkbox" checked>
            <i class="arrow"></i>
            <h2 class="h2"></i>Brechó</h2>
            <p class="p"><?= $lista["brecho"] ?></p>
            <p class="p"><?= $lista["brecho"] ?></p>
            <p class="p"><?= $lista["brecho"] ?></p>
          </li>
        </ul>
      </div>
    </aside>

  </section>







<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";

?>