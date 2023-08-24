<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/brecho.php';

if (!isset($_SESSION['usuario'])) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

try {
    $id = $_GET['id'];

    $brecho = new Brecho($id);

    $brecho->deletar();

    setcookie('msg', "O Brecho foi deletado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/perfil_admin.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}