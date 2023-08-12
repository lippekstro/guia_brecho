<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/produto.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php';
/* require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php"; */

/* if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $id = htmlspecialchars($_POST['id_produto']);
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

    $categoria = $_POST['categoria'];

    $estoque = $_POST['estoque'];

    $produto = new Produto($id);
    $produto->nome_produto = $nome;
    $produto->descricao = $descricao;
    $produto->preco = $preco;
    $produto->categoria = $categoria;
    $produto->estoque = $estoque;
    $produto->editar();

    setcookie('msg', "O Produto foi atualizado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/listar_produtos.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}