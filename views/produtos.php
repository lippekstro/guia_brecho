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
  ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/200x300/?pants", "categoria" => "Calçado", "brecho" => "Fofo Brechó", "img-loja" => "logo-loja3.jpg"]
);


?>

<!------------------------------------------ cards produtos -------------------------------------------------------->

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
    <!--------------------------------------- aqui o if dos filtros ------------------------------------------------>

    <?= include $_SERVER["DOCUMENT_ROOT"] .  "/guia_brecho/templates/cardsProdutos.php" ?>

  </ul>

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
          <?php foreach ($listaBrecho as $lista) : ?>
            <p class="p"><a href="?brecho_nome=<?= $lista["brecho_nome"] ?>" class="p"><?= $lista["brecho_nome"] ?></a></p>
          <?php endforeach; ?>
          <p class="p"><a href="\guia_brecho\views\produtos.php" class="p">Limpar Filtro</a></p>
        </li>
      </ul>
    </div>

  </aside>

</section>







<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";

?>