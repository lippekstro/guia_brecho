<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/usuario.php";

try {
    $usuario = new Usuario($_SESSION['usuario']['id_usuario']);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<section>
    <div class='barra-cadastro'>
        <h1 class='barra-cadastro-texto'>EDITAR USUÁRIO</h1>
    </div>
    <div class='nav-master-cad-produto'>
        <form action="/guia_brecho/controllers/usuario_edit_controller.php" method="post" enctype="multipart/form-data">
            <div class='nav-input'>
                <fieldset class='box-input'>
                    <legend>Dados Pessoais</legend>
                    <input type='hidden' name='id_usuario' id='id_usuario' value='<?= $usuario->id_usuario ?>'>
                    <div>
                        <label for="nome">Nome</label>
                        <input class='box-max-input' type='text' name='nome_usuario' id='nome' value='<?= $usuario->nome_usuario ?>'>
                    </div>
                    <div>
                        <label for="email">E-mail de Acesso</label>
                        <input class='box-max-input' type='email' name='email' id='email' value='<?= $usuario->email ?>'>
                    </div>
                </fieldset>
            </div>
            <p class='nav-input'><input class='cad_botao_brecho' type='submit' value='Atualizar Usuário' /></p>
        </form>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>