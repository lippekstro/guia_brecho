<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/loja.php";
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
    $endereco = Utilidades::sanitizaString($_POST['endereco']);
    $telefone = Utilidades::sanitizaString($_POST['telefone']);
    $rede = Utilidades::sanitizaString($_POST['rede']);
    if (!empty($_FILES['logo']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['logo']['tmp_name']);
    }
    $usuario = $_POST['usuario'];

    $loja = new Loja();
    $loja->nome_loja = $nome;
    $loja->endereco = $endereco;
    $loja->telefone = $telefone;
    $loja->rede_social = $rede;
    $loja->logo_loja = $imagem;
    $loja->id_usuario = $usuario;
    $loja->criar();

    header("Location: /guia_brecho/views/admin/perfil_admin.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
