<?php
require_once 'produtos.php';

$id_produto = $_POST['id_produto'];
$nome_produto = $_POST['nome_produto'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$estoque = $_POST ['estoque'];
if (!empty($_FILES['imagem_produto']['tmp_name'])) {
    $imagem_produto = $_POST['imagem_produto'];
}

try {
    $produto = new Produto($id_produto);
    $produto->nome_produto = $nome_produto;
    $produto->descricao = $descricao;
    $produto->categoria = $categoria;
    $produto->preco = $preco;
    $produto->estoque = $estoque;
    if (imagem_produto) {
        $produto->imagem_produto = $imagem_produto;
        $produto->editarImagem();
    }
    $produto->editar();

    header('Location: /guia_brecho/views/admin/produto.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}