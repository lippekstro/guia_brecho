<?php
if (isset($_COOKIE['msg'])) {
    setcookie('msg', '', time() - 3600, '/guia_brecho/');
    setcookie('tipo', '', time() - 3600, '/guia_brecho/');
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/templates/cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/models/evento.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nivel_acesso'] === 1) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
}

try {
    $evento = new Evento($_GET['id']);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<link rel="stylesheet" href="/guia_brecho/css/style1.css">

<form id="form-evento" action="/guia_brecho/controllers/evento_edit_controller.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="nome_evento" name="id_evento" value="<?= $evento->id_evento ?>">

    <label for="nome_evento">Nome do Evento:</label>
    <input type="text" id="nome_evento" name="nome_evento" value="<?= $evento->nome_evento ?>" required><br><br>

    <label for="data_evento">Data do Evento:</label>
    <input type="date" id="data_evento" name="data_evento" value="<?= $evento->data_evento ?>" required><br><br>

    <label for="horario">Horário do Evento:</label>
    <input type="time" id="horario" name="horario" value="<?= $evento->horario ?>" required><br><br>

    <label for="local_evento">Local do Evento:</label>
    <input type="text" id="local_evento" name="local_evento" value="<?= $evento->local_evento ?>" required><br><br>

    <label for="imagem_evento">Imagem do Evento:</label>
    <input type="file" id="imagem_evento" name="imagem_evento"><br><br>

    <label for="descricao_evento">Descrição do Evento:</label><br>
    <textarea id="descricao_evento" name="descricao_evento" rows="4" required><?= $evento->descricao_evento ?></textarea><br><br>

    <button type="submit">Editar Evento</button>
</form>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>