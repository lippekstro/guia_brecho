<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";

try {
    $brecho = Brecho::getBrecho($_GET['id']);
    $produtos = Produto::listarSomenteEstocados($_GET['id']);
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>

<section class="m-3">
    <div class="row">
        <div class="col-lg-4">
            <img src="data:image;charset=utf8;base64,<?= base64_encode($brecho['brecho_img']); ?>" alt="" class="w-100">
            <div class="row g-3">
                <div class="col-12 text-center">
                    <p><?= $brecho['brecho_nome'] ?></p>
                </div>
                <div class="col-12">
                    <p>Endereço: <?= $brecho['brecho_endereco'] ?></p>
                </div>
                <div class="col-12">
                    <p>Contato: <?= $brecho['brecho_contato'] ?></p>
                </div>
                <div class="col-12">
                    <p>Instagram:<?= $brecho['brecho_rede'] ?></p>
                </div>
                <div class="col-12">
                    <p>Proprietário (a): <?= $brecho['nome_usuario'] ?></p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
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