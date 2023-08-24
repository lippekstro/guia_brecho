<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";

try {
    $brecho = Brecho::buscarMeuBrechoPorIdBrecho($_GET['id']);
    $produtos = Produto::listarSomenteEstocados($_GET['id']);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section class="m-3">
    <div class="row">
        <div class="col-md-6 col-lg-3 p-3 my-3" style="background-color: #fb732c80;">
            <div class="row g-3">
                <div class="col-12">
                    <img src="data:image;charset=utf8;base64,<?= base64_encode($brecho['brecho_img']); ?>" alt="" class="w-100">
                </div>
            </div>

            <div class="row g-3 m-1">
                <div class="col-12 text-center">
                    <p class="fw-bolder"><?= $brecho['brecho_nome'] ?></p>
                </div>
                <div class="col-12">
                    <p class="fw-bold">Endereço: <?= $brecho['brecho_endereco'] ?></p>
                </div>
                <div class="col-12">
                    <p class="fw-bold">Contato: <a href="tel:<?= $brecho['brecho_contato'] ?>"><?= $brecho['brecho_contato'] ?></a></p>
                </div>
                <div class="col-12">
                    <p class="fw-bold">Instagram: <a target="_blank" href="https://www.instagram.com/<?= $brecho['brecho_rede'] ?>">@<?= $brecho['brecho_rede'] ?></a></p>
                </div>
                <div class="col-12" style="text-align: justify;">
                    <p class="fw-bold"><?= $brecho['brecho_bio'] ?></p>
                </div>
                <div class="col-12">
                    <p class="fw-bold">Proprietário(a): <?= $brecho['nome_usuario'] ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-8 my-3">
            <h1>Produtos</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($produtos as $p) : ?>
                    <div class="card m-3" style="width: 18rem;">
                        <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($p['imagem_produto']); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $p['nome_produto'] ?></h5>
                            <p class="card-text">R$ <?= $p['preco'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>