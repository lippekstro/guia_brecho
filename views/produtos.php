    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
    require_once $_SERVER["DOCUMENT_ROOT"] ."/guia_brecho/models/class_produto.php";

    try {
        $lista = Produto::listar();

    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
/* 
    <?php foreach ($lista as $produto) : ?>
        <?= $produto['nome_produto'] ?>
                <?= $produto['nome_produto'] ?>
                        <?= $produto['descricao'] ?>
                        <?= $produto['preco']?>
        <?php endforeach; ?>  */
    ?>
  
   


    <div class="container">
    <?php foreach ($lista as $produto) : ?>
        <div class="full-card">
            <div class="stack">
                <div class="card">          
                    <div class="image">
                        <figure>
                            <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($produto['imagem_produto'])?>" alt="">
                            <figcaption>
                                <h3><?= $produto['nome_produto'] ?></h3>
                                <p><small>R$ <?= $produto['preco']?></small></p>                  
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="detalhes-produto">
                <h3><?= $produto['nome_produto'] ?></h3>
                <p style="font-weight: 100;font-size: 1.5rem;">R$ <?= $produto['preco']?></p>
                <p><?= $produto['descricao'] ?></p>        
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
        <symbol id="close" viewBox="0 0 18 18">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
                S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
                l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
                c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
                s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
        </symbol>
    </svg>
    













    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
    ?>



