<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/loja.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";

try {
    $lojas = Loja::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<section class="d-flex justify-content-center">
    <div class="col-10">
        <?php foreach ($lojas as $l) : ?>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"><?= $l['nome_loja'] ?></h1>
            </div>

            <div class="loja">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <?php $produtos = Produto::listarMinhaLoja($l['id_loja']); ?>
                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                <?php foreach ($produtos as $p) : ?>
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <span class="overlay"></span>
                                            <div class="card-image">
                                                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($p['imagem_produto']); ?>" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name"><?= $p['nome_produto'] ?></h2>
                                            <p class="description">R$ <?= $p['preco'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>


<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>