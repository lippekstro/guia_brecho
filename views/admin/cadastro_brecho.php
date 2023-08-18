<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/menu.php";

if (isset($_SESSION['usuario']['nivel_acesso']) && $_SESSION['usuario']['nivel_acesso'] == 1) {
    header("Location: /guia_brecho/index.php");
    echo "<p>nada</p>";
}

?>

<section class="cadastro_brecho">
    <div class="body-titulo">
        <h1 class="tit-nav">GUIA BRECHÓ - O SEU GUIA ONLINE PARA MODA CONSCIENTE!</h1>
    </div>
    <div class="barra">
        <p class="cad-nav text-white">CADASTRE SEU BRECHO</p>
    </div>
    <form class="form-nav" action="/guia_brecho/controllers/cadastro_brecho_controller.php" method="POST" enctype="multipart/form-data" >
        <div class="nav-input">
            <fieldset class="box-input box-max">
                <legend>Dados do Brechó</legend>
                <br>
                <br>   
                <br>
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
                <legend>Informações para Divulgações</legend>
                <br>
                <br>
                <br>
                    <label for="faixa-preco">Faixa de Preço $:</label>
                    <!--<div>
                        <p class='cad-sifrao-brecho'>R$:<input class="box-max-input preco-cont-cad" type="text" name="faixa_preco_ini" id="faixa-preco"></p>
                        <p><i>Até</i></p>
                        <p class='cad-sifrao-brecho'>R$:<input class="box-max-input preco-cont-cad baixo-cont-cad" type="text" name="faixa_preco_fim" id="faixa-preco"></p>
                    -->
                    <div>
                        <p class='cad-sifrao-brecho'> <i>de: </i> R$:<input class="box-max-input box-max-input-valor" type="number" name="brecho_faixa_preco_ini" id="faixa-preco"> <i>até:</i>R$:<input class="box-max-input box-max-input-valor" type="number" name="brecho_faixa_preco_fim" id="faixa-preco"> </p>
                    </div>
                                            
                    <div class="nav-cont-cad nav-cont-cad-bio">
                        <label for="bio">Info da Bio:</label>
                    </div>
                
                    <div >
                        <textarea  class="area_bio" placeholder= "Informações da bio do seu Instagram...." id="bio" name="brecho_bio" rows="5" cols="34"></textarea>
                    </div>          
            </fieldset>
        </div>
        <div class="nav-input">
            <fieldset class="box-input  box-max">
                <legend>Mídias do Brecho</legend>
                <br>
                <br>   
                <br>
                <p>Escolha sua Logo:</p>
                <br>
                <div>
                    <input class="nav-input-midia" type="file" name="files" id="files" />
                </div>
                <p id="view_photo">
                    <img id='output'>
                </p>
                <br>
            </fieldset>
        </div>
        <br> 
    </form>
    <p class="button-input" ><input class="cad_botao_brecho" type="submit" value="Criar meu Brechó" /></p>
    
    <br>
    <br>
</section>
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>