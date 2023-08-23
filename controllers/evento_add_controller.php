<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/evento.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/config.php';
/* require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php'; */



try {
    $nome_evento = $_POST["nome_evento"];
    $data_evento = $_POST["data_evento"];
    $horario = $_POST["horario"];
    $local_evento = $_POST["local_evento"];
    $descricao_evento = $_POST["descricao_evento"];
    if (!empty($_FILES['imagem_evento']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem_evento']['tmp_name']);
    } else {
        $imagem = file_get_contents($_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/img/evento_sem_img.png');
    }

    $evento = new Evento();
    $evento->nome_evento = $nome_evento;
    $evento->data_evento = $data_evento;
    $evento->horario = $horario;
    $evento->local_evento = $local_evento;
    $evento->descricao_evento = $descricao_evento;
    $evento->imagem_evento = $imagem;

    $evento->criar();

    setcookie('msg', "O Evento foi criado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/evento_listar.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
