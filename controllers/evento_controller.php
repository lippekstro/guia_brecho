<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/evento.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/config.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php';

// Estabelecer a conexão com o banco de dados
try {
    $conn = new PDO(SGBD . ':host=' . DBLOCAL . ';dbname=' . DBNOME, USUARIO, SENHA);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro na conexão com o banco de dados: ' . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_evento = $_POST["nome_evento"];
    $data_evento = $_POST["data_evento"];
    $horario = $_POST["horario"];
    $local_evento = $_POST["local_evento"];
    $descricao_evento = $_POST["descricao_evento"];

    try {
        $evento = new Evento();
        $evento->nome_evento = $nome_evento;
        $evento->data_evento = $data_evento;
        $evento->horario = $horario;
        $evento->local_evento = $local_evento;
        $evento->descricao_evento = $descricao_evento;

        if (!empty($_FILES["imagem_evento"]["tmp_name"])) {
            $imagem_evento = file_get_contents($_FILES["imagem_evento"]["tmp_name"]);
            $evento->imagem_evento = $imagem_evento;
        }

        $evento->criar();

        // Redirecionar para uma página de sucesso ou fazer outra ação
        header("Location: /guia_brecho/views/admin/cadastrar_eventos.php");
        exit();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
