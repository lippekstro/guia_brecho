<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/evento.php';
/* require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php"; */

/* if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $id = $_GET['id'];

    $evento = new Evento($id);

    $evento->deletar();

    setcookie('msg', "O Evento foi deletado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/evento_listar.php");
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}