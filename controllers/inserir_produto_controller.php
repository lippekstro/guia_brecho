<<<<<<< HEAD
<<<<<<< HEAD
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/produto.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/brecho.php';
=======
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/produto.php';
>>>>>>> b0dc0f2 (commit)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome_produto"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];

    try {
        $produto = new Produto();
        $produto->nome_produto = $nome;
        $produto->descricao = $descricao;
        $produto->categoria = $categoria;
        $produto->preco = $preco;
<<<<<<< HEAD

        $id_brecho = Brecho::buscarMeuBrecho($_SESSION['usuario']['id_usuario']);
        $produto->id_brecho = $id_brecho;
=======
>>>>>>> b0dc0f2 (commit)
     
        

        if (!empty($_FILES["imagem_produto"])) {
            
            $img = file_get_contents($_FILES["imagem_produto"]["tmp_name"]);
            $produto->imagem_produto = $img;
        }

        $produto->criar();

        header("Location: /guia_brecho/views/admin/cadastrar_produto.php");        
        exit();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}



<<<<<<< HEAD
?>
=======
>>>>>>> 1a27c58 (commit)
=======
?>
>>>>>>> b0dc0f2 (commit)
