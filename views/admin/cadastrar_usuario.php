<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>

<div class="body-titulo">
    <h1 class="tit-nav">GUIA BRECHÓ - O SEU GUIA ONLINE PARA MODA CONSCIENTE!</h1>
</div>
<div class="barra">
    <p class="cad-nav text-white"><strong>CADASTRO</strong></p>
</div>
<form class="form-nav" method="post" action="\guia_brecho\controllers\cadastro_usuario_controller.php">
    <div class="nav-input">
        <fieldset class="box-input">
            <legend>Dados Pessoais</legend>
            <div>
                <label for="nome">Nome</label>
                <input class="box-max-input" type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email">E-mail de Acesso</label>
                <input class="box-max-input" type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha de Acesso</label>
                <input class="box-max-input" type="password" name="password" id="password">
            </div>
            <div>
                <label for="cpf">CPF</label>
                <input class="box-max-input" type="text" name="cpf" id="nome">
            </div>


        </fieldset>
        <fieldset class="box-input">
            <legend>Mídias do Brecho</legend>
            <p>Escolha sua Logo:</p>
            <br>
            <div>
                <input type="file" name="files" id="files" />
            </div>
            <p id="view_photo">
                <img id='output'>
            </p>
            <br>
        </fieldset>
    </div>
    <br>
    
    
    </div>

    <div class="option-termos" >
        <input type="checkbox" id="termo" name="termo" value="termo" required>
        <label for="termo">Estou ciente que meus dados de uso do ambiente poderão ser utilizados para fins de pesquisa.</label><br>
    </div>

    <p class="nav-input"><input class="cad_botao_brecho" type="submit" value="Criar meu Brechó" /></p>
</form>
<br>
<br>





<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>