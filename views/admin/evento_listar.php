<?php
if (isset($_COOKIE['msg'])) {
    setcookie('msg', '', time() - 3600, '/guia_brecho/');
    setcookie('tipo', '', time() - 3600, '/guia_brecho/');
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/templates/cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/models/evento.php';

/* if (!isset($_SESSION['admin'])) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $eventos = Evento::listar();
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

<section class="d-flex justify-content-center m-5">
    <table class="table table-hover col col-lg-12">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Data/Hora</th>
                <th scope="col">Local</th>
                <th scope="col">Descrição</th>
                <th scope="col" colspan="2"><a href="/guia_brecho/views/admin/evento_cadastrar.php">Adicionar</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventos as $e) : ?>
                <tr>
                    <td class="col-2"><?= $e['nome_evento'] ?></td>
                    <td class="col-2"><?= date('d/m/Y', strtotime($e['data_evento'])) ?> <?= $e['horario'] ?></td>
                    <td class="col-2"><?= $e['local_evento'] ?></td>
                    <td class="col-2"><?= $e['descricao_evento'] ?></td>
                    <td class="col-2"><a href="/guia_brecho/views/admin/evento_editar.php?id=<?= $e['id_evento'] ?>">Editar</a></td>
                    <td class="col-2"><a href="/guia_brecho/controllers/evento_delete_controller.php?id=<?= $e['id_evento'] ?>">Deletar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/templates/rodape.php';
?>