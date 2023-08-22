<li class="card-produtos">
    <div class="card-produtos-img">
        <figcaption>
            <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($lista['imagem_produto']) ?>" alt="">
        </figcaption>
    </div>
    <div class="info-produto">
        <h3><?= $lista["nome_produto"] ?></h3>
        <p style="font-size: .6rem;">
            <?= $lista["categoria"] ?>
            /
            <?= $lista["brecho_nome"] ?>

        </p>
        <p style="font-size: .8rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
        <button type="button" id="style-2" class="button__link" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $lista['id_brecho']; ?>" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></button>
    </div>
</li>


<!------------------------------ aqui modal ----------------------------------------->
<?php
try {
    $infoBrecho = Brecho::buscarMeuBrechoPorIdBrecho($lista["id_brecho"]);
} catch (\Throwable $th) {
    echo $th->getMessage();
}
?>


<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $lista['id_brecho']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title fs-3" id="exampleModalLabel"><?php echo $infoBrecho["brecho_nome"]; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-md-4">
                            <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($infoBrecho['brecho_img']) ?>" alt="" class="rounded-circle" style="aspect-ratio: 2/2; object-fit:cover;width: 150px; height: 150px;">
                        </div>
                        <div class="col-md-7 ms-auto">
                            <ul class="info-brecho">
                                <li class="my-2"><i class="bi bi-telephone-fill me-1"></i><?php echo $infoBrecho["brecho_contato"]; ?></li>
                                <li class="my-2"><i class="bi bi-instagram me-1"></i><?php echo $infoBrecho["brecho_rede"]; ?></li>
                                <li class="my-2 lh-sm"><i class="bi bi-house-fill"></i><?php echo $infoBrecho["brecho_endereco"]; ?></li>
                            </ul>

                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-modal" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>