<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/evento.php";
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
    $data = Utilidades::sanitizaString($_POST['data']);
    $hora = Utilidades::sanitizaString($_POST['hora']);
    $local = Utilidades::sanitizaString($_POST['local']);
    $descricao = Utilidades::sanitizaString($_POST['descricao']);
    if (!empty($_FILES['imagem']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
    }


    $evento = new Evento();
    $evento->nome_evento = $nome;
    $evento->data_evento = $data;
    $evento->horario = $hora;
    $evento->local_evento = $local;
    $evento->descricao_evento = $descricao;
    $evento->imagem_evento = $imagem;
    $evento->criar();

    setcookie('msg', "O Evento foi adicionado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/listar_eventos.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}