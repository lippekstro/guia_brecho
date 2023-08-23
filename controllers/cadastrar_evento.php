<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/evento.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome_evento"];
    $data_evento = $_POST["data_evento"];
    $horario = $_POST["horario"];
    $local_evento = $_POST["local_evento"];
    $descricao_evento = $_POST["descricao_evento"];

    try {
        $evento = new Evento();
        $evento->nome_evento = $nome;
        $evento->data_evento = $data_evento;
        $evento->horario = $horario;
        $evento->local_evento = $local_evento;
        $evento->descricao_evento = $descricao_evento;

        if (!empty($_FILES["imagem_evento"])) {
            $img = file_get_contents($_FILES["imagem_evento"]["tmp_name"]);
            $evento->imagem_evento = $img;
        }

        $evento->criar();

        header("Location: /guia_brecho/views/admin/cadastrar_evento.php");        
        exit();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>
