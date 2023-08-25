<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";

if (!isset($_SESSION['usuario'])) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

?>

<section class="cadastro_brecho">
    <div class="body-titulo">
        <h1 class="tit-nav">GUIA BRECHÓ - O SEU GUIA ONLINE PARA MODA CONSCIENTE!</h1>
    </div>
    <div class="barra">
        <p class="cad-nav text-white">CADASTRE SEU BRECHO</p>
    </div>
    <form class="form-nav" action="/guia_brecho/controllers/brecho_add_controller.php" method="POST" enctype="multipart/form-data">
        <div class="nav-input row">
            <fieldset class="box-input box-max">
                <legend class="mb-3">Dados do Brechó</legend>
                <div>
                    <label for="nomebrecho">Nome do Brechó</label>
                    <input class="box-max-input" type="text" name="brecho_nome" id="nomebrecho">
                </div>
                <div>
                    <label for="endereco">Endereço</label>
                    <input class="box-max-input" type="text" name="brecho_endereco" id="endereco">
                </div>
                <div>
                    <label for="redeSocial">Rede Social</label>
                    <input class="box-max-input" type="text" name="brecho_rede" id="redeSocial">
                </div>
                <div>
                    <label for="contato">WhatsApp/Telefone</label>
                    <input class="box-max-input" type="contato" name="brecho_contato" id="contato">
                </div>
            </fieldset>
        </div>
        <div class="nav-input nav-area_bio">
            <fieldset class="box-input box-max">
                <legend class="mb-3">Informações para Divulgações</legend>
                <label class="mb-3" for="faixa-preco">Faixa de Preço $:</label>
                <div>
                    <i>de: </i> R$:<input class="box-max-input box-max-input-valor" type="number" name="brecho_faixa_preco_ini" id="faixa-preco">
                </div>
                <div>
                    <i>até:</i>R$:<input class="box-max-input box-max-input-valor" type="number" name="brecho_faixa_preco_fim" id="faixa-preco">
                </div>

                <div class="nav-cont-cad nav-cont-cad-bio">
                    <label for="bio">Info da Bio:</label>
                </div>

                <div>
                    <textarea class="area_bio" placeholder="Informações da bio do seu Instagram...." id="bio" name="brecho_bio" rows="5" cols="34"></textarea>
                </div>
            </fieldset>
        </div>
        <div class="nav-input">
            <fieldset class="box-input  box-max">
                <legend class="mb-3">Mídias do Brecho</legend>
                <p>Escolha sua Logo:</p>
                <div>
                    <input class="nav-input-midia" type="file" name="brecho_img" id="files" />
                </div>
                <p id="view_photo">
                    <img id='output'>
                </p>
            </fieldset>
        </div>
        <div>
            <input class="cad_botao_brecho" type="submit" value="Criar meu Brechó" />
        </div>

    </form>

</section>
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>