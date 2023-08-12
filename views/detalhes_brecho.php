<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/loja.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";

try {
    $brecho = Loja::getBrecho($_GET['id']);
    $produtos = Produto::listarSomenteEstocados($_GET['id']);
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>

<section class="m-3">
    <div class="row">
        <div class="col-lg-4">
            <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($brecho['logo_loja']); ?>" alt="" class="w-100">
            <div class="row g-3">
                <div class="col-12 text-center">
                    <p><?= $brecho['nome_loja'] ?></p>
                </div>
                <div class="col-12">
                    <p>endereço: <?= $brecho['endereco'] ?></p>
                </div>
                <div class="col-12">
                    <p>tel: <?= $brecho['telefone'] ?></p>
                </div>
                <div class="col-12">
                    <p>@<?= $brecho['rede_social'] ?></p>
                </div>
                <div class="col-12">
                    <p>Proprietário(a): <?= $brecho['nome'] ?></p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <h1>Produtos</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <?php foreach ($produtos as $p) : ?>
                    <div class="card m-3" style="width: 18rem;">
                        <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($p['imagem_produto']); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $p['nome_produto'] ?></h5>
                            <p class="card-text">R$ <?= $p['preco'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>