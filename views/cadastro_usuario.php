<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";

if (isset($_SESSION['usuario'])) {
    setcookie('msg', 'Você ja está logado', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'info', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/views/admin/perfil_admin.php');
    exit();
}
?>
<section class="cadastro_usuario">
    <div class="body-titulo">
        <h1 class="tit-nav">GUIA BRECHÓ - O SEU GUIA ONLINE PARA MODA CONSCIENTE!</h1>
    </div>
    <div class="barra">
        <p class="cad-nav text-white"><strong>CADASTRE-SE</strong></p>
    </div>
    <form class="form-nav" action="/guia_brecho/controllers/usuario_add_controller.php" method="POST">
        <div class="nav-input">
            <fieldset class="box-input">
                <legend>Dados Pessoais</legend>
                <br>
                <br>
                <div>
                    <label for="nome">Nome</label>
                    <input class="box-max-input" type="text" name="nome" id="nome">
                </div>
                <div>
                    <label for="cpf_cnpj">CPF/CNPJ</label>
                    <input class="box-max-input" type="number" name="cpf_cnpj" id="cpf_cnpj">
                </div>
                
                <div>
                    <label for="email">E-mail de Acesso</label>
                    <input class="box-max-input" type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha de Acesso</label>
                    <input class="box-max-input" type="password" name="senha" id="senha">
                </div>
            </fieldset>
        </div>
        <p class="nav-input"><input class="cad_botao_brecho" type="submit" value="Criar Acesso" /></p>
    </form>
</section>
<br>
<br>





<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>