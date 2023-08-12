<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";

try {
    $produto = new Produto($_GET['id']);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<section class="form-signin col-11 col-lg-6 mx-auto my-3">
    <h4 class="mb-3">Cadastro Produto</h4>
    <form action="/guia_brecho/controllers/produto_edit_controller.php" method="POST">
        <div class="row g-3">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $produto->nome_produto ?>" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao"><?= $produto->descricao ?></textarea>
            </div>

            <div class="col-12">
                <label for="preco" class="form-label">Preco</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" value="<?= $produto->preco ?>" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="categoria" class="form-label">Categoria</label>
                <select class="form-select" id="categoria" name="categoria" required="">
                    <option value="vestimentas" <?= $produto->categoria == 'vestimentas' ? 'selected' : '' ?>>Vestimentas</option>
                    <option value="calcados" <?= $produto->categoria == 'calcados' ? 'selected' : '' ?>>Calçados</option>
                    <option value="acessorios" <?= $produto->categoria == 'acessorios' ? 'selected' : '' ?>>Acessórios</option>
                </select>
            </div>

            <div class="col-12">
                <label for="" class="form-label">Em estoque?</label>
                <div class="form-check">
                    <input id="sim" name="estoque" value="1" type="radio" class="form-check-input" <?= $produto->estoque == 1 ? 'checked' : '' ?> required="">
                    <label class="form-check-label" for="sim">Sim</label>
                </div>
                <div class="form-check">
                    <input id="nao" name="estoque" value="0" type="radio" class="form-check-input" <?= $produto->estoque == 0 ? 'checked' : '' ?> required="">
                    <label class="form-check-label" for="nao">Não</label>
                </div>
            </div>

            <input type="hidden" name="id_produto" value="<?= $produto->id_produto ?>" readonly>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>