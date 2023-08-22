<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";



$listaBrecho = Brecho::listar();
?>

<section class="grid-produto">
  <!--------------------------------------- aqui a barra de pesquisa -------------------------------------------------->
  <?php if (isset($_GET["pesquisa"])) : ?>

    <div class="search">
      <form action="" class="form-search">
        <input type="search" name="pesquisa" id="search" value="<?= $_GET["pesquisa"] ?>" required>
        <i class="fa fa-search"></i>
      </form>
    </div>

  <?php else : ?>

    <div class="search">
      <form action="" class="form-search">
        <input type="search" name="pesquisa" id="search" required>
        <i class="fa fa-search"></i>
      </form>
    </div>

  <?php endif; ?>
  <!--------------------------------------------------- // ----------------------------------------------------------------->
  <div class="titulo">
    <h2>Produtos</h2>
  </div>

  <ul class="gallery">

    <?php if (isset($_SESSION["resultado_pesquisa"]["sem_sucesso"])) : ?>

      <div class="alert alert-danger" role="alert">
        <?= $_SESSION["resultado_pesquisa"]["sem_sucesso"] ?>
      </div>

    <?php endif; ?>

    <!--------------------------------------- // aqui todos os cards dos produtos //------------------------------------------------>
    <?php if (isset($_GET["categoria"])) : ?>

      <?php $categoria = $_GET["categoria"];

      try {

        $resultadoFiltro = Produto::filtroCategoria($categoria);
      } catch (\Throwable $th) {
        echo $th->getMessage();
      }
      ?>
      <?php if (count($resultadoFiltro) == 0) : ?>
        <div class="alert alert-danger" role="alert">
          Nenhum produto encontrado!
        </div>
      <?php endif; ?>

      <?php foreach ($resultadoFiltro as $lista) : ?>

        <!---------------------------- AQUI O INCLUDE DOS CARDS  -------------------->

        <?php include $_SERVER['DOCUMENT_ROOT'] . '\guia_brecho\templates\cardProduto.php'; ?>

      <?php endforeach; ?>

    <?php elseif (isset($_GET["pesquisa"])) : ?>

      <?php
      $nome = htmlspecialchars($_GET["pesquisa"]);
      try {
        $resultadoPesquisa = Produto::pesquisarProdutos($nome);
      } catch (\Throwable $th) {
        echo $th->getMessage();
      }
      ?>

      <?php if (count($resultadoPesquisa) == 0) : ?>
        <div class="alert alert-danger" role="alert">
          Nenhum resultado encontrado...
        </div>
      <?php endif; ?>

      <?php foreach ($resultadoPesquisa as $lista) : ?>

        <!---------------------------- AQUI O INCLUDE DOS CARDS  -------------------->

        <?php include $_SERVER['DOCUMENT_ROOT'] . '\guia_brecho\templates\cardProduto.php'; ?>

      <?php endforeach; ?>

    <?php elseif (isset($_GET["id_brecho"])) : ?>
      <?php
      $id_brecho = $_GET["id_brecho"];

      try {
        $filtroBrecho = Produto::filtroBrecho($id_brecho);
      } catch (\Throwable $th) {
        echo $th->getMessage();
      }
      ?>
      <?php foreach ($filtroBrecho as $lista) : ?>

        <!---------------------------- AQUI O INCLUDE DOS CARDS  -------------------->

        <?php include $_SERVER['DOCUMENT_ROOT'] . '\guia_brecho\templates\cardProduto.php'; ?>

      <?php endforeach; ?>

    <?php else : ?>
      
        <!------------------------------- AQUI PAGINACAO ----------------------------------->
      <?php

      /* --aqui define o numero de cards por pagina----*/

      $limiteCards = 8;

      if (isset($_GET["pagina"])) {
        $pagina = filter_input(INPUT_GET,"pagina",FILTER_VALIDATE_INT);
        $MinPag = ($pagina-1 == 0) ? 1 : $pagina-1;
      }

      /* --aqui pega a pagina atual- */

      $inicioCards = ($pagina * $limiteCards) - $limiteCards;

      try {
        $produtosPaginacao = Produto::paginacaoProdutos($inicioCards, $limiteCards);
      } catch (\Throwable $th) {
        echo $th->getMessage();
      }

      $numTotalProdutos = count(Produto::listar());

      $numPaginas = ceil($numTotalProdutos / $limiteCards)

      

      ?>
      <?php if (count($produtosPaginacao) > 0) { ?>
        <?php foreach ($produtosPaginacao as $lista) : ?>

          <!---------------------------- AQUI O INCLUDE DOS CARDS  -------------------->

          <?php include $_SERVER['DOCUMENT_ROOT'] . '\guia_brecho\templates\cardProduto.php'; ?>

        <?php endforeach; ?>
      <?php } ?>
      <div class="cont-pag">
        <ul class="pagination modal-3">
          <li><a href="?pagina=<?php echo $MinPag; ?>" class="prev">&laquo</a></li>

          <?php for ($i = 1; $i <= $numPaginas; $i++) : ?>

            <li><a href="?pagina=<?= $i ?>" 
            <?php if($pagina == $i) :?>
              class="active"
              <?php endif;?>
            
            ><?= $i ?></a></li>

          <?php endfor; ?>

           
          
          <li><a href="?pagina=<?php
          $maxPag = ($pagina+1 > $numPaginas) ? $numPaginas : $pagina+1;
          echo $maxPag;?>" class="next">&raquo;</a></li>
        </ul>
      </div>

    <?php endif; ?>

  </ul>

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
          <p class="p"><a href="\guia_brecho\views\produtos.php?pagina=1" class="p">Limpar Filtro</a></p>
        </li>
        <li class="li">
          <input type="checkbox" checked>
          <i class="arrow"></i>
          <h2 class="h2"></i>Brechó</h2>
          <?php foreach ($listaBrecho as $lista) : ?>
            <p class="p"><a href="?id_brecho=<?= $lista["id_brecho"] ?>" class="p"><?= $lista["brecho_nome"] ?></a></p>
          <?php endforeach; ?>
          <p class="p"><a href="\guia_brecho\views\produtos.php?pagina=1" class="p">Limpar Filtro</a></p>
        </li>
      </ul>
    </div>

  </aside>

</section>


<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";

?>
