<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/produto.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";


?>


<?php if (isset($_GET["categoria"])) : ?>

    <?php $categoria = $_GET["categoria"];

    try {

        $resultadoFiltro = Produto::filtroCategoria($categoria);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    ?>
    <?php if (count($resultadoFiltro) == 0) : ?>
        <div class="alert alert-danger" role="alert">
            Nenhum produto encontrado!
        </div>
    <?php endif; ?>

    <?php foreach ($resultadoFiltro as $lista) : ?>
        <li class="card-produtos">
            <div class="card-produtos-img">
                <figcaption>
                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($lista["imagem_produto"]) ?>" alt="">
                </figcaption>
            </div>
            <div class="info-produto">
                <h3><?= $lista["nome_produto"] ?></h3>
                <p style="font-size: .6rem;"><?= $lista["categoria"] ?>/<?= $lista["nome_brecho"] ?></p>
                <p style="font-size: .8rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
                <button type="button" id="style-2" class="button__link" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $lista['id_brecho']; ?>" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></button>
            </div>
        </li>

        <!------------------------------ aqui modal ----------------------------------------->
        <?php
        try {
            $infoBrecho = Brecho::buscarBrechoId($lista["id_brecho"]);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        ?>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $lista['id_brecho']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $infoBrecho["brecho_nome"]; ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <div class="container-fluid ">
                            <div class="row ">
                                <div class="col-md-4">
                                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($infoBrecho['brecho_img']) ?>" alt="" class="rounded-circle" style="aspect-ratio: 2/2; object-fit:cover;width: 150px; height: 150px;">
                                </div>
                                <div class="col-md-7 ms-auto">
                                    <ul>
                                        <li><i class="bi bi-telephone-fill"><?php echo $infoBrecho["brecho_contato"];?></i></li>
                                        <li><i class="bi bi-instagram"><?php echo $infoBrecho["brecho_rede"];?></i></li>
                                        <li><i class="bi bi-house-fill"><?php echo $infoBrecho["brecho_endereco"];?></i></li>                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>

<?php elseif (isset($_GET["pesquisa"])) : ?>

    <?php
    $nome = htmlspecialchars($_GET["pesquisa"]);
    try {
        $resultadoPesquisa = Produto::pesquisarProdutos($nome);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    ?>

    <?php if (count($resultadoPesquisa) == 0) : ?>
        <div class="alert alert-danger" role="alert">
            Nenhum resultado encontrado...
        </div>
    <?php endif; ?>

    <?php foreach ($resultadoPesquisa as $lista) : ?>
        <li class="card-produtos">
            <div class="card-produtos-img">
                <figcaption>
                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($lista["imagem_produto"]) ?>" alt="">
                </figcaption>
            </div>
            <div class="info-produto">
                <h3><?= $lista["nome_produto"] ?></h3>
                <p style="font-size: .6rem;"><?= $lista["categoria"] ?>/<?= $lista["nome_brecho"] ?></p>
                <p style="font-size: .8rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
                <button type="button" id="style-2" class="button__link" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $lista['id_brecho']; ?>" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></button>
            </div>
        </li>

        <!------------------------------ aqui modal ----------------------------------------->
        <?php
        try {
            $infoBrecho = Brecho::buscarBrechoId($lista["id_brecho"]);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        ?>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $lista['id_brecho']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $infoBrecho["brecho_nome"]; ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <div class="container-fluid ">
                            <div class="row ">
                                <div class="col-md-4">
                                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($infoBrecho['brecho_img']) ?>" alt="" class="rounded-circle" style="aspect-ratio: 2/2; object-fit:cover;width: 150px; height: 150px;">
                                </div>
                                <div class="col-md-7 ms-auto">
                                    <ul>
                                        <li><i class="bi bi-telephone-fill"><?php echo $infoBrecho["brecho_contato"];?></i></li>
                                        <li><i class="bi bi-instagram"><?php echo $infoBrecho["brecho_rede"];?></i></li>
                                        <li><i class="bi bi-house-fill"><?php echo $infoBrecho["brecho_endereco"];?></i></li>                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>

<?php elseif (isset($_GET["id_brecho"])) : ?>
    <?php
    $id_brecho = $_GET["id_brecho"];

    try {
        $filtroBrecho = Produto::filtroBrecho($id_brecho);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    ?>
    <?php foreach ($filtroBrecho as $lista) : ?>
        <li class="card-produtos">
            <div class="card-produtos-img">
                <figcaption>
                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($lista["imagem_produto"]) ?>" alt="">
                </figcaption>
            </div>
            <div class="info-produto">
                <h3><?= $lista["nome_produto"] ?></h3>
                <p style="font-size: .6rem;">
                    <?= $lista["categoria"] ?>
                    /
                    <?= $lista["nome_brecho"] ?>

                </p>
                <p style="font-size: .8rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
                <button type="button" id="style-2" class="button__link" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $lista['id_brecho']; ?>" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></button>
            </div>
        </li>

        <!------------------------------ aqui modal ----------------------------------------->
        <?php
        try {
            $infoBrecho = Brecho::buscarBrechoId($lista["id_brecho"]);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        ?>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $lista['id_brecho']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $infoBrecho["brecho_nome"]; ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <div class="container-fluid ">
                            <div class="row ">
                                <div class="col-md-4">
                                    <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($infoBrecho['brecho_img']) ?>" alt="" class="rounded-circle" style="aspect-ratio: 2/2; object-fit:cover;width: 150px; height: 150px;">
                                </div>
                                <div class="col-md-7 ms-auto">
                                    <ul>
                                        <li><i class="bi bi-telephone-fill"><?php echo $infoBrecho["brecho_contato"];?></i></li>
                                        <li><i class="bi bi-instagram"><?php echo $infoBrecho["brecho_rede"];?></i></li>
                                        <li><i class="bi bi-house-fill"><?php echo $infoBrecho["brecho_endereco"];?></i></li>                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>

<?php else : ?>

    <?php
    try {
        $produtos = Produto::listar();
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    ?>

    <?php foreach ($produtos as $lista) : ?>
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
                    <?= $lista["nome_brecho"] ?>

                </p>
                <p style="font-size: .8rem; font-weight:200;color:#666565;margin: .7rem 0rem;"><?= $lista["descricao"] ?> </p>
                <button type="button" id="style-2" class="button__link" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $lista['id_brecho']; ?>" data-replace="Saiba+"><span>R$ <?= $lista["preco"] ?></span></button>
            </div>
        </li>

        <!------------------------------ aqui modal ----------------------------------------->
        <?php
        try {
            $infoBrecho = Brecho::buscarBrechoId($lista["id_brecho"]);
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
                                        <li class="my-2"><i class="bi bi-telephone-fill me-1"></i><?php echo $infoBrecho["brecho_contato"];?></li>
                                        <li class="my-2"><i class="bi bi-instagram me-1"></i><?php echo $infoBrecho["brecho_rede"];?></li>
                                        <li class="my-2 lh-sm"><i class="bi bi-house-fill"></i><?php echo $infoBrecho["brecho_endereco"];?></li>                                        
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






    <?php endforeach; ?>

<?php endif; ?>