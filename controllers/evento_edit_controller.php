<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/evento.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php';
/* require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php"; */

/* if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $id = htmlspecialchars($_POST['id']);
    $nome = Utilidades::sanitizaString($_POST['nome']);
    $data = Utilidades::sanitizaString($_POST['data']);
    $hora = Utilidades::sanitizaString($_POST['hora']);
    $local = Utilidades::sanitizaString($_POST['local']);
    $descricao = Utilidades::sanitizaString($_POST['descricao']);

    $evento = new Evento($id);
    $evento->nome_evento = $nome;
    $evento->data_evento = $data;
    $evento->horario = $hora;
    $evento->local_evento = $local;
    $evento->descricao_evento = $descricao;

    if ($imagem_evento) {
        $evento->imagem_evento = $imagem_evento;
        $evento->editarImagem();
    }
    $evento->editar();

    setcookie('msg', "O Evento foi atualizado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/listar_eventos.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
