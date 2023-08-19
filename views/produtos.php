<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";
=======
=======
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";
>>>>>>> f5581de (algoritmo pesquisa)
=======
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1

$produtos = array(
  ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?shirt", "categoria" => "Roupa", "brecho" => "Fofo Brechó", "brecho" => "Fofo Brechó", "img-loja" => "logo-loja.jpg"],
  ["nome" => "Vestido", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?dress", "categoria" => "Acessório", "brecho" => "Brechó da Su", "img-loja" => "logo-loja2.png"],
  ["nome" => "Camisa", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?pants", "categoria" => "Calçado", "brecho" => "Meu Brechó", "img-loja" => "logo-loja3.jpg"],
  ["nome" => "Sapato", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?shoe", "categoria" => "Roupa", "brecho" => "Chic Brechó", "img-loja" => "logo-loja.jpg"],
  ["nome" => "Saia", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?earring", "categoria" => "Calçado", "brecho" => "Brechó Maria Bonita", "img-loja" => "logo-loja2.png"],
  ["nome" => "Blusa", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?shirt", "categoria" => "Acessório", "brecho" => "Brechó da Katia", "img-loja" => "logo-loja3.jpg"],
  ["nome" => "Short", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?dress", "categoria" => "Roupa", "brecho" => "Fofo Brechó", "img-loja" => "logo-loja.jpg"],
  ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?pants", "categoria" => "Calçado", "brecho" => "Fofo Brechó", "img-loja" => "logo-loja3.jpg"]
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d255965 (criei o metodo pesquisarProdutos na classe produto)



$listaBrecho = Brecho::listarNomeBrecho();
?>

<!------------------------------------------ cards produtos -------------------------------------------------------->
=======
=======
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1
);

if (isset($_GET["pesquisa"])) {
}

?>


<<<<<<< HEAD
<<<<<<< HEAD
<!-- cards produtos -->
>>>>>>> f5581de (algoritmo pesquisa)

<section class="grid-produto">
<<<<<<< HEAD
  <!--------------------------------------- aqui a barra de pesquisa -------------------------------------------------->
  <?php if (isset($_GET["pesquisa"])) : ?>
    
    <div class="search">
      <form action="" class="form-search">
        <input type="search" name="pesquisa" id="search" value="<?= $_GET["pesquisa"] ?>" required>
        <i class="fa fa-search"></i>
      </form>
    </div>
    
  <?php else : ?>

<<<<<<< HEAD
    <div class="search">
      <form action="" class="form-search">
        <input type="search" name="pesquisa" id="search" required>
        <i class="fa fa-search"></i>
      </form>
    </div>
=======
=======
=======
<!------------------------------------------ cards produtos -------------------------------------------------------->

<section class="grid-produto">

  <!--------------------------------------- aqui a barra de pesquisa -------------------------------------------------->
>>>>>>> 3157485 (filtro e pesquisa)
  <div class="search">
>>>>>>> d255965 (criei o metodo pesquisarProdutos na classe produto)
=======
<!------------------------------------------ cards produtos -------------------------------------------------------->

<section class="grid-produto">

  <!--------------------------------------- aqui a barra de pesquisa -------------------------------------------------->
  <div class="search">
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1
    <form action="" class="form-search">
      <input type="search" name="pesquisa" id="search" required>
      <i class="fa fa-search"></i>
    </form>
<<<<<<< HEAD
>>>>>>> 6774dab (buscar e modal atualizado)
  </div>
<<<<<<< HEAD

  <?php endif; ?>
=======
>>>>>>> 3157485 (filtro e pesquisa)
=======
  </div>
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1
  <!--------------------------------------------------- // ----------------------------------------------------------------->
  <div class="titulo">
    <h2>Produtos</h2>
  </div>

  <ul class="gallery">
<<<<<<< HEAD
<<<<<<< HEAD
    <!--------------------------------------- aqui o if dos filtros ------------------------------------------------>

<<<<<<< HEAD
    <?= include $_SERVER["DOCUMENT_ROOT"] .  "/guia_brecho/templates/cardsProdutos.php" ?>

  </ul>

  <!------------------------------------------ aqui paginaçao ------------------------------------------------------------->
=======
        </div>
      </li>
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
          <li><a href=""><i class="bi bi-instagram"></i>Instagram</a></li>
          <li><a href=""><i class="bi bi-facebook"></i>Facebook</a></li>
          <li><a href=""><i class="bi bi-whatsapp"></i>Whatsapp</a></li>
        </ul>
=======
=======
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1

    <!--------------------------------------- aqui o if dos filtros ------------------------------------------------>

    <?php if (isset($_GET["categoria"])) : ?>

      <?= $categoria = $_GET["categoria"];

      try {
        $resultadoFiltro = Produto::filtroCategoria($categoria);
      } catch (\Throwable $th) {
        echo $th->getMessage();
      } ?>

      <?php foreach ($resultadoFiltro as $lista) : ?>
        <li class="card-produtos">
          <div class="card-produtos-img">
            <figcaption>
              <img src="<?= $lista["imagem"] ?>" alt="" width="1000" height="1500" alt="" sizes="(max-width: 1000px) 100vw, 1000px">
            </figcaption>
          </div>
          <div class="info-produto">
            <h3><?= $lista["nome"] ?></h3>
            <p style="font-size: .6rem;"><?= $lista["categoria"] ?>/<?= $lista["brecho"] ?></p>
            <p style="font-size: .8rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
            <a href="#modal" id="style-2" class="button-produtos button__link" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></a>
          </div>
        </li>
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
              <li><a href=""><i class="bi bi-instagram"></i>Instagram</a></li>
              <li><a href=""><i class="bi bi-facebook"></i>Facebook</a></li>
              <li><a href=""><i class="bi bi-whatsapp"></i>Whatsapp</a></li>
            </ul>
          </div>
          <a href="#!" class="outside-trigger"></a>
        </div>
      <?php endforeach; ?>

    <?php elseif (isset($_GET["pesquisa"])) : ?>
      <?=
      $nome = htmlspecialchars($_GET["pesquisa"]);
      try {
        $resultadoPesquisa = Produto::pesquisarProdutos($nome);
      } catch (\Throwable $th) {
        echo $th->getMessage();
      }
      ?>
      <?php foreach($resultadoPesquisa as $lista) : ?>
        <li class="card-produtos">
          <div class="card-produtos-img">
            <figcaption>
              <img src="<?= $lista["imagem"] ?>" alt="" width="1000" height="1500" alt="" sizes="(max-width: 1000px) 100vw, 1000px">
            </figcaption>
          </div>
          <div class="info-produto">
            <h3><?= $lista["nome"] ?></h3>
            <p style="font-size: .6rem;"><?= $lista["categoria"] ?>/<?= $lista["brecho"] ?></p>
            <p style="font-size: .8rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
            <a href="#modal" id="style-2" class="button-produtos button__link" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></a>
          </div>
        </li>
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
              <li><a href=""><i class="bi bi-instagram"></i>Instagram</a></li>
              <li><a href=""><i class="bi bi-facebook"></i>Facebook</a></li>
              <li><a href=""><i class="bi bi-whatsapp"></i>Whatsapp</a></li>
            </ul>
          </div>
          <a href="#!" class="outside-trigger"></a>
        </div>
      <?php endforeach; ?>

    <?php else : ?>

      <?php foreach ($produtos as $lista) : ?>
        <li class="card-produtos">
          <div class="card-produtos-img">
            <figcaption>
              <img src="<?= $lista["imagem"] ?>" alt="" width="1000" height="1500" alt="" sizes="(max-width: 1000px) 100vw, 1000px">
            </figcaption>
          </div>
          <div class="info-produto">
            <h3><?= $lista["nome"] ?></h3>
            <p style="font-size: .6rem;"><?= $lista["categoria"] ?>/<?= $lista["brecho"] ?></p>
            <p style="font-size: .8rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
            <a href="#modal" id="style-2" class="button-produtos button__link" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></a>
          </div>
        </li>
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
              <li><a href=""><i class="bi bi-instagram"></i>Instagram</a></li>
              <li><a href=""><i class="bi bi-facebook"></i>Facebook</a></li>
              <li><a href=""><i class="bi bi-whatsapp"></i>Whatsapp</a></li>
            </ul>
          </div>
          <a href="#!" class="outside-trigger"></a>
        </div>
      <?php endforeach; ?>

<<<<<<< HEAD
<<<<<<< HEAD

>>>>>>> f5581de (algoritmo pesquisa)

=======
    <?php endif; ?>
>>>>>>> 3157485 (filtro e pesquisa)
  </ul>
>>>>>>> 6774dab (buscar e modal atualizado)
=======
    <?php endif; ?>
  </ul>
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1

  <!------------------------------------------ aqui paginaçao ------------------------------------------------------------->

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

  <!------------------------------------------------------ sidebar ----------------------------------------------------------->

  <aside class="filtro">

    <h3>FILTRE POR:</h3>

    <div class="accordion-menu">
      <ul class="ul">
        <li class="li">
          <input type="checkbox" checked>
          <i class="arrow"></i>
          <h2 class="h2">Categoria</h2>
          <!-- deixar a tag do link dentro da tag de paragrafo pois fora dela o efeito acordion nao funiona -->
          <p class="p"><a href="?categoria=vestimentas" class="p">Roupas</a></p>
          <p class="p"><a href="?categoria=acessorios" class="p">Acessórios</a></p>
          <p class="p"><a href="?categoria=calcados" class="p">Calçados</a></p>
          <p class="p"><a href="\guia_brecho\views\produtos.php" class="p">Limpar Filtro</a></p>
        </li>
        <li class="li">
          <input type="checkbox" checked>
          <i class="arrow"></i>
          <h2 class="h2"></i>Brechó</h2>
<<<<<<< HEAD
          <?php foreach ($listaBrecho as $lista) : ?>
            <p class="p"><a href="?brecho_nome=<?= $lista["brecho_nome"] ?>" class="p"><?= $lista["brecho_nome"] ?></a></p>
          <?php endforeach; ?>
          <p class="p"><a href="\guia_brecho\views\produtos.php" class="p">Limpar Filtro</a></p>
=======
          <?php foreach ($produtos as $lista) : ?>
            <p class="p"><?= $lista["brecho"] ?></p>
          <?php endforeach; ?>
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1
        </li>
      </ul>
    </div>

  </aside>

</section>







<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";

?>