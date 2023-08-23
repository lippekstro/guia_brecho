<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";

try {
    $brecho = Brecho::getBrecho($_SESSION['usuario']['id_usuario']);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<section>
    <div class='barra-cadastro'>
        <h1 class='barra-cadastro-texto'>ATUALIZE OS DADOS DO SEU BRECHÓ</h1>
    </div>
    <div class='nav-master-cad-produto'>
        <form action="/guia_brecho/controllers/brecho_edit_controller.php" method="post" enctype="multipart/form-data">

            <div class='nav-cad-master'>
                <fieldset class='nav-cadastro-produto'>
                    <legend>Dados do Brechó</legend>
                    <input type="hidden" name="id_brecho" value="<?= $brecho['id_brecho'] ?>">
                    <label class='cad-label' for="nomebrecho">Nome do Brechó: </label>
                    <input class='cad-input' type="text" name="brecho_nome" id="nomebrecho" value="<?= $brecho['brecho_nome'] ?>">
                    <label class='cad-label' for="endereco">Endereço: </label>
                    <input class='cad-input' type="text" name="brecho_endereco" id="endereco" value="<?= $brecho['brecho_endereco'] ?>">
                    <label class='cad-label' for="redeSocial">Rede Social: </label>
                    <input class='cad-input' type="text" name="brecho_rede" id="redeSocial" value="<?= $brecho['brecho_rede'] ?>">
                    <label class='cad-label' for="contato">WhatsApp/Telefone: </label>
                    <input class='cad-input' type="text" name="brecho_contato" id="contato" value="<?= $brecho['brecho_contato'] ?>">
                </fieldset>
            </div>
            <br>
            <div class='nav-input nav-area_bio'>
                <fieldset class='nav-cadastro-produto'>
                    <legend>Informações para Divulgações</legend>
                    <br>
                    <br>
                    <label class='cad-label' for="faixa-preco">Faixa de Preço $:</label>
                    <input class='cad-input box-max-input-valor' type="number" name="brecho_faixa_preco_ini" id="faixa-preco" value="<?= $brecho['brecho_faixa_preco_ini'] ?>">
                    <label class='cad-label' for="faixa_preco_fim">Até:</label>
                    <input class='cad-input box-max-input-valor' type="number" name="brecho_faixa_preco_fim" id="faixa_preco_fim" value="<?= $brecho['brecho_faixa_preco_fim'] ?>">
                    <label class='cad-label' for="bio">Info da Bio:</label>
                    <textarea class='cad-input area_bio' id="brecho_bio" name="brecho_bio" rows="5" cols="34"><?= $brecho['brecho_bio'] ?></textarea>
                </fieldset>
            </div>
            <br>
            <div class='nav-input'>
                <fieldset class='nav-cadastro-produto'>
                    <legend>Mídias do Brechó</legend>
                    <br>
                    <br>
                    <br>
                    <p>Escolha sua Logo:</p>
                    <br>
                    <br>
                    <br>
                    <input class='nav-input-midia' type="file" name="brecho_img" id="files" />
                    <p id="view_photo">
                        <img id='output'>
                    </p>
                    <br>
                </fieldset>
            </div>
            <br>
            <p class='button-input'><input class='cad_botao_brecho' type="submit" value="Atualizar Brechó" /></p>
            <br>
        </form>
    </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>