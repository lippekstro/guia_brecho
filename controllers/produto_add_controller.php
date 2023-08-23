<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/produto.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/brecho.php';

try {
    $nome = $_POST["nome_produto"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];
    if (!empty($_FILES['imagem_produto']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem_produto']['tmp_name']);
    } else {
        $imagem = file_get_contents($_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/img/dummy_1920x1080.png');
    }
    $brecho = Brecho::getBrecho($_SESSION['usuario']['id_usuario']);

    $produto = new Produto();
    $produto->nome_produto = $nome;
    $produto->descricao = $descricao;
    $produto->categoria = $categoria;
    $produto->preco = $preco;
    $produto->imagem_produto = $imagem;
    $produto->id_brecho = $brecho['id_brecho'];
    $produto->criar();

    setcookie('msg', "O Produto foi criado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/produto_listar.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
