<?php
require_once 'eventos.php';

$id_evento = $_POST['id_evento'];
$nome_evento = $_POST ['nome_evento']
$data_evento = $_POST['data'];
$horario = $_POST['horario'];
$local_evento = $_POST['local_evento'];
$descricao_evento = $_POST['descricao_evento'];
if (!empty($_FILES['imagem_evento']['tmp_name'])) {
    $imagem_evento = $_POST['imagem_evento'];
}

try {
    $evento = new Evento ($id_evento);
    $evento->nome = $nome;
    $evento->data_evento = $data_evento;
    $evento->horario = $horario;
    $evento->local_evento = $local_evento;
    $evento->descricao_evento = $descricao_evento;
    if (imagem_evento) {
        $evento->imagem_evento = $imagem_evento;
        $evento->editarImagem();
    }
   
    $evento->editar();

    header('Location: index.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}