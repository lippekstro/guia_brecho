    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
    require_once $_SERVER["DOCUMENT_ROOT"] ."/guia_brecho/models/produto.php";

    try {
        $lista = Produto::listar();

    } catch (\Throwable $th) {
        echo $th->getMessage();
    }


    ?>

<!--------------------------- aqui o menu lateral do filtro --------------------------------------->

<section>
    <div class="d-flex">
        <h3 style="color:#ffffff;margin-left: 0;">Produtos</h3>
        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="border:none; color:#ffffff; background-color:transparent;font-size: 22px;"><i class="fa-solid fa-sliders" style="color: #ffffff;"></i>Filtrar</button>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color:#fe712a;"><i class="fa-solid fa-sliders" style="color: #ffffff;"></i> Filtrar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">       
            <a href="#">Vestuário</a>
            <a href="#">Calçados</a>
            <a href="#">Acessórios</a>    
            <form action="">
                <label for="customRange3" class="form-label">Valor até: R$ <span id="display">0</span> </label>
                <input type="range" class="form-range" min="0" max="500" value="0" step="5" id="customRange3" oninput="precoRange(this.value)">  
            </form>
        </div>
    </div>
    <!-- <h3 style="color:#ffffff">Produtos</h3> -->
</section>

<!---------------------------------- aqui os cards dos produtos --------------------------------->

<div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 8.5rem;">
    <?php foreach ($album as $produto) : ?>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#<?= $produto['nome_produto'] ?>" class="btn-img">
            <div class="card">
                <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($produto['imagem_produto'])?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $produto['nome_produto'] ?></h5>
                    <p class="card-text"><?= $produto['descricao'] ?><br> <b>R$ <?= $produto['preco']?></b> </p>
                </div>
            </div>
        </button>
    </div>
    <?php endforeach; ?>    
</div>
    <!------------------------------- aqui o efeito modal ------------------------------------------>
<div>
    <?php foreach ($album as $produto) : ?>
    <div class="modal fade" id="<?= $produto['nome_produto'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="<?php echo "../img/". $produto["imagem_produto"]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?= $produto['descricao'] ?> <br></p>
                        <p class="card-text"> <b>R$ <?= $produto['preco'] ?></b>  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>    
</div>

    <!---------------------===============================================------------------------->



    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
    ?>



