<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>

<div class="body-titulo">
    <h1 class="tit-nav">GUIA BRECHÓ - O SEU GUIA ONLINE PARA MODA CONSCIENTE!</h1>
</div>
<div class="barra">
    <p class="cad-nav text-white"><strong>CADASTRO</strong></p>
</div>
<form class="form-nav" method="post" action="#">
    <div class="nav-input">
        <fieldset class="box-input">
            <legend>Dados Pessoais</legend>
            <div>
                <label for="nome">Nome</label>
                <input class="box-max-input" type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="sobrenome">Sobrenome</label>
                <input class="box-max-input" type="text" name="sobrenome" id="sobrenome">
            </div>
            <div>
                <label for="email">E-mail de Acesso</label>
                <input class="box-max-input" type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha de Acesso</label>
                <input class="box-max-input" type="password" name="password" id="password">
            </div>


        </fieldset>
        <fieldset class="box-input box-max">
            <legend>Dados do Brechó</legend>
            <div>
                <label for="nomebrecho">Nome do Brechó</label>
                <input class="box-max-input" type="text" name="nomebrecho" id="nomebrecho">
            </div>
            <div>
                <label for="cnpj-cpf">CNPJ</label>
                <input class="box-max-input" type="text" name="cnpj-cpf" id="cnpj-cpf">
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <input class="box-max-input" type="text" name="cidade" id="cidade">

            </div>

            <div>
                <label for="endereco">Endereço</label>
                <input class="box-max-input" type="text" name="endereco" id="endereco">
            </div>
            <div>
                <label for="numero">Numero</label>
                <input class="box-max-input" type="text" name="numero" id="numero">

            </div>
            <label for="bairro">Bairro</label>
            <input class="box-max-input" type="text" name="bairro" id="bairro">
            <div>

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
            <div>
                <label for="redeSocial">Rede Social</label>
                <input class="box-max-input" type="text" name="redeSocial" id="redeSocial">
            </div>
            <div>
                <label for="contato">WhatsApp/Telefone</label>
                <input class="box-max-input" type="contato" name="contato" id="contato">
            </div>
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