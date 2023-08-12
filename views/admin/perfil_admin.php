<?php

if (isset($_COOKIE['msg'])) {
    setcookie('msg', '', time() - 3600, '/guia_brecho/');
    setcookie('tipo', '', time() - 3600, '/guia_brecho/');
}

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/usuario.php";
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

<?php if($_SESSION['usuario']['nv_acesso'] == 1) : ?>
<section class="m-3">
    <?php if (!Usuario::criouBrecho($_SESSION['usuario']['id'])) : ?>
        <a href="/guia_brecho/views/admin/cadastro_brecho.php" class="btn btn-primary my-2">Criar Brecho</a>
    <?php else : ?>
        <a href="/guia_brecho/views/admin/editar_brecho.php" class="btn btn-primary my-2">Editar Brecho</a>
        <a href="/guia_brecho/views/admin/perfil_loja.php" class="btn btn-primary my-2">Perfil Brecho</a>
    <?php endif; ?>
    <a href="/guia_brecho/controllers/logout_controller.php" class="btn btn-primary my-2">Sair</a>
</section>
<?php endif; ?>

<?php if($_SESSION['usuario']['nv_acesso'] == 2) : ?>
<section class="m-3">
    <a href="/guia_brecho/views/admin/listar_brechos.php" class="btn btn-primary my-2">Listar Brechos</a>
    <a href="/guia_brecho/views/admin/listar_produtos.php" class="btn btn-primary my-2">Listar Produtos</a>
    <a href="/guia_brecho/views/admin/listar_eventos.php" class="btn btn-primary my-2">Listar Eventos</a>
    <a href="/guia_brecho/views/admin/listar_faqs.php" class="btn btn-primary my-2">Listar Faqs</a>
    <a href="/guia_brecho/controllers/logout_controller.php" class="btn btn-primary my-2">Sair</a>
</section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>