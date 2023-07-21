    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";


    $produtos = array(
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?shirt"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?dress"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?pants"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?shoe"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?earring"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?shirt"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?dress"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?pants"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?shoe"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?earring"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?shirt"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?dress"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?pants"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?shoe"],
        ["nome" => "Calça", "preco" => 100.00, "descricao" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae natus quibusdam sequi debitis dolorum.", "loja" => "Brecho Teste", "imagem" => "https://source.unsplash.com/random/1920x1080/?earring"]
    );


    ?>

    <div class="container">
        <?php foreach ($produtos as $lista) : ?>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="<?= $lista["imagem"] ?>" alt="" class="img card" width="194px" height="300px">
                    </div>
                    <div class="card-back">
                        <span><?= $lista['nome'] ?></h1>
                            <p><?= $lista["descricao"] ?></p>
                            <p>R$<?= $lista["preco"] ?></p>
                            <span><?= $lista["loja"] ?></span>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>



    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
    ?>