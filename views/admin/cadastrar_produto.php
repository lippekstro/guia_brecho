<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>


<body>
    <form action="\guia_brecho\controllers\inserir_produto_controller.php" method="post" autocomplete="on" enctype="multipart/form-data" target="alert">
        <div class='barra-cadastro'>
            <h1 class='barra-cadastro-texto'>CADASTRE SEUS PRODUTOS</h1>
        </div>
        <div class='nav-cad-master'>
            <fieldset class='nav-cadastro-produto'>
                <legend>Dados do produto</legend>
                <label for="nome_produto">Nome produto: </label>
                <input type="text" name="nome_produto" id="nome_produto">
                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao" id="descricao">
                <label for="categoria">Categoria do produto:</label>
                <select name="categoria" id="categoria">
                    <option value="vestimentas">Roupa</option>
                    <option value="calcados">Calçado</option>
                    <option value="acessorios">Acessório</option>
                </select>
                <label for="preco">Preço: </label>
                <input type="number" name="preco" id="preco">
                <label for="estoque">Produto em estoque: </label>
                <select name="estoque" id="estoque">
                    <option value="1">SIM</option>
                    <option value="0">NÃO</option>
                </select>
            </fieldset>
        </div>
        <div class='nav-cad-master nav-img'>
            <fieldset class='nav-cadastro-produto'>
                <legend>Imagem</legend>
                <label for="imagem_produto">Anexe a imagem do produto: </label>
                <input type="file" name="imagem_produto" id="imagem_produto" accept="application/jpeg">
            </fieldset>
        </div>
        <div class='nav-cad-master'>
            <input type="submit" name="cadProd" value="Cadastrar">
        </div>
        
    </form>
    <iframe name="alert"></iframe>
    
</body>



<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>