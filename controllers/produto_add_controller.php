<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";
/* require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php"; */


/* if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $nome = Utilidades::sanitizaString($_POST['nome']);
    $descricao = Utilidades::sanitizaString($_POST['descricao']);

    if(Utilidades::validaFloat($_POST['preco'])){
        $preco = $_POST['preco'];
    } else {
        setcookie('msg', "Preço Invalido!", time() + 3600, '/guia_brecho/');
        setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
        header("Location: /guia_brecho/views/admin/cadastro_produto.php");
        exit();
    }
    
    if (!empty($_FILES['imagem']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
    }

    $categoria = $_POST['categoria'];
    $loja = $_POST['id_loja'];

    $produto = new Produto();
    $produto->nome_produto = $nome;
    $produto->descricao = $descricao;
    $produto->preco = $preco;
    $produto->imagem_produto = $imagem;
    $produto->categoria = $categoria;
    $produto->id_loja = $loja;
    $produto->criar();

    setcookie('msg', "O Produto foi adicionado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/listar_produtos.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}