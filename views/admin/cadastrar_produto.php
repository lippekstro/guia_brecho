<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/class_produto.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/controllers/inserir_produto_controller.php";



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input,label{
        display: block;
    }
    input,select{
        margin:0rem 0rem 1rem 0rem; 
    }
    iframe{

        width:50%;
        height:40px;


    }

</style>
<body>
    <form action="inserir_img_controller.php" method="post" autocomplete="on" enctype="multipart/form-data" target="alert">
        <fieldset>
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
        <fieldset>
        <legend>Imagem</legend>
        <label for="imagem_produto">Anexe a imagem do produto: </label>
        <input type="file" name="imagem_produto" id="imagem_produto" accept="application/jpeg">
        </fieldset>

        <input type="submit" name="cadProd" value="Cadastrar">
    </form>
    <iframe name="alert"></iframe>
    
</body>
</html>

