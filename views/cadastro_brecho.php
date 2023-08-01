<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>

<div class="body-titulo">
    <h1 class="tit-nav">GUIA BRECHÓ - O SEU GUIA ONLINE PARA MODA CONSCIENTE!</h1>
</div>
<div class="barra">
    <p class="cad-nav text-white"><strong>CADASTRO</strong></p>
</div>
<form class="form-nav" ethod="get" action="\guia_brecho\controller\cadastro_brecho\controller.php">
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
    <hr>
    <div class="barra">
        <p class="cad-nav text-white"><strong>CONTINUE SEU CADASTRO</strong></p>
    </div>
    <div class="nav-input">
        <fieldset class="box-input box-max">
                <legend>Informações para Divulgações</legend>
            
                <label class='cad-label-nd nav-cont-cad' for="">Formas de Pagamento: </label>    
                <div class="nav-cont-cad-paga">
                    
                    <input type="radio" id="a" name="pagamento" value="pix">
                    <label class='cad-produto-radio' for="pagamento">Pix</label>
                    
                    <input type="radio" id="b" name="pagamento" value="ted">
                    <label class='cad-produto-radio' for="pagamento">TED/DOC</label>

                    <input type="radio" id="c" name="pagamento" value="boleto">
                    <label class='cad-produto-radio' for="pagamento">Boleto</label>

                    <input type="radio" id="d" name="pagamento" value="dinheiro">
                    <label class='cad-produto-radio' for="pagamento">À vista</label>
                    
                </div>
                
                <div class="nav-cont-cad">
                    <label for="faixa-preco">Faixa de Preço $:</label>
                    <p class='cad-sifrao-brecho'>R$:<input class="box-max-input preco-cont-cad" type="text" name="faixa-preco" id="faixa-preco"></p>
                    <p><i>Até</i></p>
                    <p class='cad-sifrao-brecho'>R$:<input class="box-max-input preco-cont-cad baixo-cont-cad" type="text" name="faixa-preco" id="faixa-preco"></p>
                </div>
                
                <div class="nav-cont-cad">
                    <label for="hora">Descrição de Horário:</label>
                </div>
                   
                <div class="">
                    <textarea placeholder="Segunda a Sexta, das 10h-18h...." id="hora" name="hora" rows="5" cols="33">
                    
                    </textarea>
                </div>          
                
                <div class="nav-cont-cad">
                    <label class='cad-labe-nd' for="entrega">Entrega:</label>
                    <select class='cad-input cad-select' name="entrega" id="entrega" >
                            <option class= 'cad-opt' value="hidden">Selecione Opção</option>
                            <option class= 'cad-opt' value="Frete-Fixo">Frete Fixo</option>
                            <option class= 'cad-opt' value="Uber-Eares">Uber Eares</option>
                            <option class= 'cad-opt' value="Moto-Boy">Moto Boy</option>
                    </select>
                </div>
                
                
                <div class="nav-cont-cad">
                    <label for="story">Info da Bio:</label>
                </div>
               
                
                <div class="">
                    <textarea placeholder="Informações da bio do seu Instagram...." id="story" name="story" rows="5" cols="33">
    
                    </textarea>
                </div>          
                
        </fieldset>
    </div>

    <div class="option-termos" >
        <input type="checkbox" id="termo1" name="termo1" value="temo1" required>
        <label for="termo1"> Aceito os termos !!</label><br>
        <input type="checkbox" id="termo2" name="termo2" value="termo2" required>
        <label for="termo2"> Aceito de novo!!</label><br>
    </div>

    <p class="nav-input"><input class="cad_botao_brecho" type="submit" value="Cadastrar" /></p>
</form>
<br>
<br>





<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>