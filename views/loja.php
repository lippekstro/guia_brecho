<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/loja.php";

try {
    $lojas = Loja::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<?php if (count($lojas) > 0) : ?>
    <h1 class="text-center mt-3" style="color: var(--bs-orange);">Encontre os melhores brechós de São Luís aqui ⇩</h1>

    <section class="loja">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <?php foreach ($lojas as $loja) : ?>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($loja['logo_loja']); ?>" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name"><?= $loja['nome_loja'] ?></h2>
                                    <p class="description"><?= $loja['endereco'] ?></p>
                                    <a href="/guia_brecho/views/detalhes_brecho.php?id=<?= $loja['id_loja'] ?>" class="btn btn-primary">Detalhes</a>
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
    </section>
<?php else : ?>
    <section class="m-3">
        <div class="alert alert-info text-center" role="alert">
            Nenhuma Loja cadastrada!
        </div>
    </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>