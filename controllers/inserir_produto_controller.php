<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/produto.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/brecho.php';

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

        $id_brecho = Brecho::buscarMeuBrecho($_SESSION['usuario']['id_usuario']);
        $produto->id_brecho = $id_brecho["id_brecho"];
        $produto->nome_brecho = $id_brecho["brecho_nome"];
     
        

        if (isset($_POST["imagem_produto"])) {
            
            $img = file_get_contents($_FILES["imagem_produto"]["tmp_name"]);
            $produto->imagem_produto = $img;

        } else {

            $caminho_da_imagem = $_SERVER["DOCUMENT_ROOT"] . '\guia_brecho\img\produto-sem-imagem.jpg';
            $conteudo_da_imagem = file_get_contents($caminho_da_imagem);
            $produto->imagem_produto = $conteudo_da_imagem;            
        }

        $produto->criar();

        header("Location: /guia_brecho/views/admin/cadastrar_produto.php");
                
        exit();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
