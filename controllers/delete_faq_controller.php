<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/faq.php';
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php";

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

try {
    $id_faq = $_GET['id'];

    $faq = new Faq($id_faq);

    $faq->deletar();

    setcookie('msg', "A FAQ foi deletada com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/listar_faq.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}