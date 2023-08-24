<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/produto.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nivel_acesso'] > 1) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

try {
    $id = htmlspecialchars($_POST['id_produto']);
    $nome = Utilidades::sanitizaString($_POST['nome_produto']);
    $descricao = Utilidades::sanitizaString($_POST['descricao']);
    $categoria = $_POST['categoria'];

    if (Utilidades::validaFloat($_POST['preco'])) {
        $preco = $_POST['preco'];
    } else {
        setcookie('msg', "Preço Invalido!", time() + 3600, '/guia_brecho/');
        setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
        header("Location: /guia_brecho/views/admin/produto_editar.php");
        exit();
    }

    if (!empty($_FILES['imagem_produto']['tmp_name'])) {
        $imagem_produto = file_get_contents($_FILES['imagem_produto']['tmp_name']);
    }

    $estoque = $_POST['estoque'];

    $produto = new Produto($id);
    $produto->nome_produto = $nome;
    $produto->descricao = $descricao;
    $produto->preco = $preco;
    $produto->categoria = $categoria;
    $produto->estoque = $estoque;
    if ($imagem_produto) {
        $produto->imagem_produto = $imagem_produto;
        $produto->editarImagem();
    } else {
        $produto->editar();
    }

    setcookie('msg', "O Produto foi atualizado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/produto_listar.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
