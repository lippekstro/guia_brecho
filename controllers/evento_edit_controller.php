<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/evento.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nivel_acesso'] === 1) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

try {
    $id = htmlspecialchars($_POST['id_evento']);
    $nome = Utilidades::sanitizaString($_POST['nome_evento']);
    $data = Utilidades::sanitizaString($_POST['data_evento']);
    $hora = Utilidades::sanitizaString($_POST['horario']);
    $local = Utilidades::sanitizaString($_POST['local_evento']);
    $descricao = Utilidades::sanitizaString($_POST['descricao_evento']);
    if (!empty($_FILES['imagem_evento']['tmp_name'])) {
        $imagem_evento = file_get_contents($_FILES['imagem_evento']['tmp_name']);
    }

    $evento = new Evento($id);
    $evento->nome_evento = $nome;
    $evento->data_evento = $data;
    $evento->horario = $hora;
    $evento->local_evento = $local;
    $evento->descricao_evento = $descricao;
    if ($imagem_evento) {
        $evento->imagem_evento = $imagem_evento;
        $evento->editarImagem();
    } else {
        $evento->editar();
    }


    setcookie('msg', "O Evento foi atualizado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/evento_listar.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
