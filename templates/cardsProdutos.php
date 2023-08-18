<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";


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

$listaBrecho = Brecho::listarTudo();

?>


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
    
    <?php foreach ($resultadoPesquisa as $lista) : ?>
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

<?php endif; ?>