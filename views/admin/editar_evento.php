<?php
//require_once 'evento.php';

/* $id_evento = $_GET['id'];

try{
    $evento = new Evento ($id_evento);
}catch(PDOException $e){
    echo $e->getMessage();
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atualiza_controller.php" method="post">
        <input type="hidden" name="id_evento" value="<?= $evento->id_evento ?>">
        <label for="nome">Nome do Evento</label>
        <input type="text" name="nome" id="nome" value="<?= $evento->nome ?>">
        <br>
        <label for="descricao_evento">Descricao do Evento</label>
        <input type="text" name="descricao_evento" id="descricao_evento" value="<?= $evento->descricao_evento ?>">
        <br>
        <label for="data_evento">Data do Evento</label>
        <input type="date" name="data_evento" id="data_evento" value="<?= $evento->data_evento ?>">
        <br>
        <label for="nome">Horario do Evento</label>
        <input type="time" name="horario" id="horario" value="<?= $evento->horario ?>">
        <br>
        <label for="nome">Local do Evento</label>
        <input type="text" name="local_evento" id="local_evento" value="<?= $evento->local_evento ?>">
        <br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>



