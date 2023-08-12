<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";


?>

<section class="form-signin col-11 col-lg-6 mx-auto my-3">
    <h4 class="mb-3">Cadastro Evento</h4>
    <form action="/guia_brecho/controllers/evento_add_controller.php" method="POST" enctype="multipart/form-data">
        <div class="row g-3">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora" placeholder="" >
            </div>

            <div class="col-12">
                <label for="local" class="form-label">Local</label>
                <input type="text" class="form-control" id="local" name="local" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao"></textarea>
            </div>

            <div class="col-12">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="imagem" name="imagem" placeholder="" required="">
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>