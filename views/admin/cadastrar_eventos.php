<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>

<link rel="stylesheet" href="/guia_brecho/css/style1.css">

<form id="form-evento" action="/guia_brecho/controllers/evento_controller.php" method="post" enctype="multipart/form-data">
  
<form action="evento_controller.php" method="post" enctype="multipart/form-data">
        <label for="nome_evento">Nome do Evento:</label>
        <input type="text" id="nome_evento" name="nome_evento" required><br><br>

        <label for="data_evento">Data do Evento:</label>
        <input type="date" id="data_evento" name="data_evento" required><br><br>

        <label for="horario">Horário do Evento:</label>
        <input type="time" id="horario" name="horario" required><br><br>

        <label for="local_evento">Local do Evento:</label>
        <input type="text" id="local_evento" name="local_evento" required><br><br>

        <label for="imagem_evento">Imagem do Evento:</label>
        <input type="file" id="imagem_evento" name="imagem_evento"><br><br>

        <label for="descricao_evento">Descrição do Evento:</label><br>
        <textarea id="descricao_evento" name="descricao_evento" rows="4" required></textarea><br><br>

        <button type="submit">Cadastrar Evento</button>
    </form>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>
