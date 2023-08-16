<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/produto.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome_produto"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];

    try {
        $produto = new Produto();
        $produto->nome_produto = $nome;
        $produto->descricao = $descricao;
        $produto->categoria = $categoria;
        $produto->preco = $preco;

        $produto->id_loja = Loja::listarId($_SESSION["id_usuario"]);
     
        

        if (!empty($_FILES["imagem_produto"])) {
            
            $img = file_get_contents($_FILES["imagem_produto"]["tmp_name"]);
            $produto->imagem_produto = $img;
        }

        $produto->criar();

        header("Location: /guia_brecho/views/admin/cadastrar_produto.php");        
        exit();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}



?>