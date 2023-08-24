<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nivel_acesso'] > 1) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

try {
    $produto = new Produto($_GET['id']);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<section>
    <div class='barra-cadastro'>
        <h1 class='barra-cadastro-texto'>EDITE SEUS PRODUTOS</h1>
    </div>
    <div class='nav-master-cad-produto'>
        <form action="/guia_brecho/controllers/produto_edit_controller.php" method="post" autocomplete="on" enctype="multipart/form-data">
            <div class='nav-cad-master'>
                <fieldset class='nav-cadastro-produto'>
                    <legend>Dados do produto</legend>
                    <input type="hidden" name="id_produto" value="<?= $produto->id_produto ?>">
                    <label class='cad-label' for="nome_produto">Nome produto: </label>

                    <input class='cad-input' type="text" name="nome_produto" id="nome_produto" value="<?= $produto->nome_produto ?>">
                    <label class='cad-label' for="descricao">Descrição: </label>

                    <input class='cad-input' type="text" name="descricao" id="descricao" value="<?= $produto->descricao ?>">
                    <label class='cad-label' for="categoria">Categoria do produto:</label>

                    <select class='cad-input cad-select' name="categoria" id="categoria">
                        <option class='cad-opt' value="vestimentas" <?= $produto->categoria == 'vestimentas' ? 'selected' : '' ?>>Roupa</option>
                        <option class='cad-opt' value="calcados" <?= $produto->categoria == 'calcados' ? 'selected' : '' ?>>Calçado</option>
                        <option class='cad-opt' value="acessorios" <?= $produto->categoria == 'acessorios' ? 'selected' : '' ?>>Acessório</option>
                    </select>

                    <label class='cad-label' for="preco">Preço: </label>
                    <p class='cad-sifrao'>R$:<input class='cad-input cad-input-preco' type="number" name="preco" id="preco" step="0.010" value="<?= $produto->preco ?>"></p>

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
                </fieldset>
            </div>
            <br>
            <div class='nav-cad-master nav-img'>
                <fieldset class='nav-cadastro-produto onde'>
                    <legend>Imagem</legend>
                    <label class='cad-label onde' for="imagem_produto">Anexe a imagem do produto: </label>
                    <input type="file" name="imagem_produto" id="imagem_produto" accept="application/jpeg">
                </fieldset>
            </div>
            <div class='nav-cad-botao'>
                <input class='cad-botao' type="submit" name="editProd" value="Atualizar">
            </div>
        </form>

        <div class='div_photo_cad_produto'>
            <p class='legendinha'>Preview da imagem:</p>
            <p id="view_photo_cad_produto">
                <img id='outputCadProduto'>
            </p>
        </div>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>