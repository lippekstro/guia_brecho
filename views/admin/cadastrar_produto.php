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
    <h4 class="mb-3">Cadastro Produto</h4>
    <form action="/guia_brecho/controllers/produto_add_controller.php" method="POST" enctype="multipart/form-data">
        <div class="row g-3">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao"></textarea>
            </div>

            <div class="col-12">
                <label for="preco" class="form-label">Preco</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="imagem" name="imagem" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="categoria" class="form-label">Categoria</label>
                <select class="form-select" id="categoria" name="categoria" required="">
                    <option value="vestimentas">Vestimentas</option>
                    <option value="calcados">Calçados</option>
                    <option value="acessorios">Acessórios</option>
                </select>
            </div>

            <input type="hidden" name="id_loja" value="<?= $brecho['id_loja'] ?>" readonly>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>