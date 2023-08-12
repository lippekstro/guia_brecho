<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/loja.php";

try {
    $brecho = Loja::getMeuBrecho($_SESSION['usuario']['id']);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<div class="m-3">
    <a href="/guia_brecho/views/admin/perfil_admin.php" class="btn btn-primary my-2">Voltar</a>
</div>


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
            <a href="/guia_brecho/views/admin/listar_produtos.php" class="btn btn-primary my-2">Listar Produtos</a>
            <a href="/guia_brecho/views/admin/cadastrar_produto.php" class="btn btn-primary my-2">Adicionar Produto</a>
        </div>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>