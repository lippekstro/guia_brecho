<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/loja.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php';
/* require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php"; */

/* if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $id_loja = htmlspecialchars($_POST['id_loja']);
    $nome = Utilidades::sanitizaString($_POST['nome']);
    $endereco = Utilidades::sanitizaString($_POST['endereco']);
    $telefone = Utilidades::sanitizaString($_POST['telefone']);
    $rede = Utilidades::sanitizaString($_POST['rede']);

    $loja = new Loja($id_loja);
    $loja->nome_loja = $nome;
    $loja->endereco = $endereco;
    $loja->telefone = $telefone;
    $loja->rede_social = $rede;
    $loja->editar();

    setcookie('msg', "A Loja foi atualizada com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/perfil_admin.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}