<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/guia_brecho/models/evento.php';

try {
    $evento = new Evento($_GET['id']);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<section class="form-signin col-11 col-lg-6 mx-auto my-3">
    <h4 class="mb-3">Cadastro Evento</h4>
    <form action="/guia_brecho/controllers/evento_edit_controller.php" method="POST" enctype="multipart/form-data">
        <div class="row g-3">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $evento->nome_evento ?>" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" value="<?= $evento->data_evento ?>" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora" value="<?= $evento->horario ?>" placeholder="" >
            </div>

            <div class="col-12">
                <label for="local" class="form-label">Local</label>
                <input type="text" class="form-control" id="local" name="local" value="<?= $evento->local_evento ?>" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao"><?= $evento->descricao_evento ?></textarea>
            </div>

            <input type="hidden" class="form-control" id="floatingInput" name="id" value="<?= $evento->id_evento ?>">

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>