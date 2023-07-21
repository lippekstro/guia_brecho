<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>


<body>
    <div class='barra-cadastro'>
        <h1 class='barra-cadastro-texto'>CADASTRE SEUS PRODUTOS</h1>
    </div>
    <div class='nav-master-cad-produto'>
        <form action="\guia_brecho\controllers\inserir_produto_controller.php" method="post" autocomplete="on" enctype="multipart/form-data" target="alert">
            
            <div class='nav-cad-master'>
                <fieldset class='nav-cadastro-produto'>
                    <legend>Dados do produto</legend>
                    <label class='cad-label' for="nome_produto">Nome produto: </label>
                    <input class='cad-input' type="text" name="nome_produto" id="nome_produto">
                    <label class='cad-label' for="descricao">Descrição: </label>
                    <input class='cad-input' type="text" name="descricao" id="descricao">
                    <label class='cad-label' for="categoria">Categoria do produto:</label>
                    <select class='cad-input cad-select' name="categoria" id="categoria">
                        <option class= 'cad-opt' value="vestimentas">Roupa</option>
                        <option class= 'cad-opt' value="calcados">Calçado</option>
                        <option class= 'cad-opt' value="acessorios">Acessório</option>
                    </select>
                    <label class='cad-label' for="preco">Preço: </label>
                    <p class='cad-sifrao'>R$:<input class='cad-input cad-input-preco' type="number" name="preco" id="preco"></p>
                    <label class='cad-label' for="estoque">Produto em estoque: </label>
                    <select class='cad-input cad-select'  name="estoque" id="estoque">
                        <option class= 'cad-opt' value="1">Sim</option>
                        <option class= 'cad-opt' value="0">Não</option>
                    </select>
                </fieldset>
            </div>
            <div class='nav-cad-master nav-img'>
                <fieldset class='nav-cadastro-produto'>
                    <legend>Imagem</legend>
                    <label class='cad-label' for="imagem_produto">Anexe a imagem do produto: </label>
                    <input type="file" name="imagem_produto" id="imagem_produto" accept="application/jpeg">
                </fieldset>
            </div>
            <div class='nav-cad-botao'>
                <input class='cad-botao' type="submit" name="cadProd" value="Cadastrar">
            </div>
            
        </form>
        <!--<iframe name="alert"></iframe>-->
        
        <div class='div_photo_cad_produto'>
            <p class= 'legendinha'>Preview da imagem:<p>
            <p id="view_photo_cad_produto">
                <img id='outputCadProduto'>
            </p>
        </div>
    </div>
</body>



<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>