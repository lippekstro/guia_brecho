<?php

if (isset($_COOKIE['msg'])) {
    setcookie('msg', '', time() - 3600, '/guia_brecho/');
    setcookie('tipo', '', time() - 3600, '/guia_brecho/');
}

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
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

<section class="form-signin col-11 col-lg-3 mx-auto my-3">
    <form action="/guia_brecho/controllers/login_controller.php" method="POST">
        <div class="row g-3">
            <h1 class="h3 fw-normal text-center">Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="nome@exemplo.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Senha">
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="text-center">
                <a href="/guia_brecho/views/cadastro.php">Cadastre-se</a>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>