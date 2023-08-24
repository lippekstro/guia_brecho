<?php
if (isset($_COOKIE['msg'])) {
    setcookie('msg', '', time() - 3600, '/guia_brecho/');
    setcookie('tipo', '', time() - 3600, '/guia_brecho/');
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/templates/cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/models/produto.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/models/brecho.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nivel_acesso'] > 1) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

$brecho = Brecho::buscarMeuBrecho($_SESSION['usuario']['id_usuario']);
try {
    $produtos = Produto::filtroBrecho($brecho['id_brecho']);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section>
    <?php if (isset($_COOKIE['msg'])) : ?>
        <?php if ($_COOKIE['tipo'] === 'sucesso') : ?>
            <div class="alert alert-success text-center m-3" role="alert">
                <?= $_COOKIE['msg'] ?>
            </div>
        <?php elseif ($_COOKIE['tipo'] === 'perigo') : ?>
            <div class="alert alert-danger text-center m-3" role="alert">
                <?= $_COOKIE['msg'] ?>
            </div>
        <?php else : ?>
            <div class="alert alert-info text-center m-3" role="alert">
                <?= $_COOKIE['msg'] ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal" style="color: var(--bs-orange);">Gerenciamento de Produtos</h1>
</div>

<section class="d-flex justify-content-center">
    <div class="table-responsive-xxl m-3 w-100">
        <table class="table table-hover table-dark table-striped col col-lg-12">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Em Estoque?</th>
                    <th scope="col" colspan="2"><a href="/guia_brecho/views/admin/produto_cadastrar.php">Adicionar</a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $p) : ?>
                    <tr>
                        <td class="col-2"><?= $p['nome_produto'] ?></td>
                        <td class="col-2"><?= $p['descricao'] ?></td>
                        <td class="col-2"><?= $p['categoria'] ?></td>
                        <td class="col-2"><?= $p['preco'] ?></td>
                        <td class="col-2"><?= $p['estoque'] == 1 ? 'Sim' : 'Não' ?></td>
                        <td class="col-2"><a href="/guia_brecho/views/admin/produto_editar.php?id=<?= $p['id_produto'] ?>">Editar</a></td>
                        <td class="col-2"><a href="/guia_brecho/controllers/produto_delete_controller.php?id=<?= $p['id_produto'] ?>">Deletar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/templates/rodape.php';
?>