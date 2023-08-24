<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/produto.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nivel_acesso'] > 1) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

try {
    $id = $_GET['id'];

    $produto = new Produto($id);

    $produto->deletar();

    setcookie('msg', "O Produto foi deletado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/produto_listar.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}
