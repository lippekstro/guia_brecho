<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";
/* require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php"; */


/* if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $nome = Utilidades::sanitizaString($_POST['brecho_nome']);
    $endereco = Utilidades::sanitizaString($_POST['brecho_endereco']);
    $rede = Utilidades::sanitizaString($_POST['brecho_rede']);
    $contato = Utilidades::sanitizaString($_POST['brecho_contato']);
    $faixa_ini = Utilidades::sanitizaString($_POST['brecho_faixa_preco_ini']);
    $faixa_fim = Utilidades::sanitizaString($_POST['brecho_faixa_preco_fim']);
    $bio = Utilidades::sanitizaString($_POST['brecho_bio']);
    if (!empty($_FILES['brecho_img']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['brecho_img']['tmp_name']);
    }
    $dono = $_SESSION['usuario']['id_usuario'];

    $brecho = new Brecho();
    $brecho->brecho_nome = $nome;
    $brecho->brecho_endereco = $endereco;
    $brecho->brecho_rede = $rede;
    $brecho->brecho_contato = $contato;
    $brecho->brecho_faixa_preco_ini = $faixa_ini;
    $brecho->brecho_faixa_preco_fim = $faixa_fim;
    $brecho->brecho_bio = $bio;
    $brecho->brecho_img = $imagem;
    $brecho->id_usuario = $dono;
    $brecho->criar();

    setcookie('msg', "O Brecho foi criado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/perfil_admin.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}