<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/loja.php";

try {
    $brecho = Loja::getMeuBrecho($_SESSION['usuario']['id']);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<section class="form-signin col-11 col-lg-6 mx-auto my-3">
    <h4 class="mb-3">Atualizar Brechó</h4>
    <form action="/guia_brecho/controllers/brecho_edit_controller.php" method="POST">
        <div class="row g-3">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $brecho['nome_loja'] ?>" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $brecho['endereco'] ?>" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?= $brecho['telefone'] ?>" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="rede" class="form-label">Rede Social</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="rede" name="rede" value="<?= $brecho['rede_social'] ?>" placeholder="" required="">
                </div>
            </div>

            <input type="hidden" name="id_loja" value="<?= $brecho['id_loja'] ?>" readonly>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar</button>
            <a href="/guia_brecho/controllers/brecho_del_controller.php?id=<?= $brecho['id_loja'] ?>" class="btn btn-danger my-2">Excluir Brecho</a>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>