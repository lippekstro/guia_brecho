<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>

<section class="form-signin col-11 col-lg-6 mx-auto my-3">
    <h4 class="mb-3">Cadastro Brechó</h4>
    <form action="/guia_brecho/controllers/add_brecho_controller.php" method="POST" enctype="multipart/form-data">
        <div class="row g-3">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" required="">
            </div>

            <div class="col-12">
                <label for="rede" class="form-label">Rede Social</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="rede" placeholder="" required="">
                </div>
            </div>

            <div class="col-12">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" id="logo" name="logo" placeholder="" required="">
            </div>

            <input type="hidden" name="usuario" value="<?= $_SESSION['usuario']['id'] ?>" readonly>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>