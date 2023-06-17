    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";

    $lista = array(        
        array("img" => "https://source.unsplash.com/random/1920x1080/?flower", "texto" => "flor","preco"=>15.00,"descricao"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea doloribus neque, eveniet illum reiciendis vero ad amet voluptatem cum laboriosam placeat est, sequi quisquam ab quidem assumenda atque soluta a!"),
        array("img" => "https://source.unsplash.com/random/1920x1080/?city", "texto" => "cidade","preco"=>25.00,"descricao"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea doloribus neque, eveniet illum reiciendis vero ad amet voluptatem cum laboriosam placeat est, sequi quisquam ab quidem assumenda atque soluta a!"),
        array("img" => "https://source.unsplash.com/random/1920x1080/?mountain", "texto" => "montanha","preco"=>30.00,"descricao"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea doloribus neque, eveniet illum reiciendis vero ad amet voluptatem cum laboriosam placeat est, sequi quisquam ab quidem assumenda atque soluta a!"),
        array("img" => "https://source.unsplash.com/random/1920x1080/?beach", "texto" => "praia","preco"=>52.00,"descricao"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea doloribus neque, eveniet illum reiciendis vero ad amet voluptatem cum laboriosam placeat est, sequi quisquam ab quidem assumenda atque soluta a!"),
        array("img" => "https://source.unsplash.com/random/1920x1080/?robot", "texto" => "robo","preco"=>9.00,"descricao"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea doloribus neque, eveniet illum reiciendis vero ad amet voluptatem cum laboriosam placeat est, sequi quisquam ab quidem assumenda atque soluta a!"),
        array("img" => "https://source.unsplash.com/random/1920x1080/?cat", "texto" => "gato","preco"=>12.00,"descricao"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea doloribus neque, eveniet illum reiciendis vero ad amet voluptatem cum laboriosam placeat est, sequi quisquam ab quidem assumenda atque soluta a!")    
    )
    ?>

<!---------------------------------- aqui o menu lateral do filtro --------------------------------------------->
<section>
    <div class="d-flex justify-content-end">
        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="border:none; color:#fe712a; background-color:transparent;font-size: 22px;"><i class="fa-solid fa-sliders" style="color: #fe712a;"></i>Filtrar</button>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color:#fe712a;"><i class="fa-solid fa-sliders" style="color: #fe712a;"></i> Filtrar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">       
            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vestuário</a>
            <a href="#">Calçados</a>
            <a href="#">Acessórios</a>    
            <form action="">
                <label for="customRange3" class="form-label">Valor até: R$ <span id="display">0</span> </label>
                <input type="range" class="form-range" min="0" max="500" value="0" step="5" id="customRange3" oninput="precoRange(this.value)">  
            </form>
        </div>
    </div>
</section>

<!------------------------------------ aqui os cards dos produtos --------------------------------------------->
<h3 style="color:#fe712a">Produtos</h3>
<div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 8.5rem;">
    <?php foreach ($lista as $produto) : ?>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#<?= $produto['texto'] ?>" class="btn-img">
            <div class="card">
                <img src="<?= $produto['img'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $produto['texto'] ?></h5>
                    <p class="card-text"><?= $produto['descricao'] ?><br> <b>R$ <?= $produto['preco']?></b> </p>
                </div>
            </div>
        </button>
    </div>
    <?php endforeach; ?>    
</div>
    <!----------------------------------------- aqui o efeito modal ------------------------------------------>
<div>
    <?php foreach ($lista as $produto) : ?>
    <div class="modal fade" id="<?= $produto['texto'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="<?= $produto['img'] ?>" class="card-img-top" alt="...">
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

    <!---------------------========================================================------------------------->

<<<<<<< HEAD
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>
=======


    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
    ?>




>>>>>>> 6f07a23 (alt layout para card e implmentacao menu lateral)
