<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/class_produto.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $imagem_produto= filter_input_array(INPUT_POST,FILTER_DEFAULT);

    
    if (!empty($imagem_produto["cadProd"])) {


        $arq_img = $_FILES["imagem_produto"];

        if (($arq_img["type"] == "image/jpg")||($arq_img["type"] == "image/jpeg")) {

            $arq_img_blob = file_get_contents($arq_img["tmp_name"]);
            
            try {

                $img_produto = new Produto();

                $img_produto -> nome_produto=$_POST['nome_produto'];
                $img_produto -> descricao=$_POST['descricao'];
                $img_produto -> categoria=$_POST['categoria'];
                $img_produto -> preco=floatval($_POST['preco']);
                $img_produto -> estoque=intval($_POST['estoque']);            
                
                Produto::inserir($arq_img_blob);
                
            
            } catch (PDOException $th) {
            
                echo $th->getMessage();
            }          
            

        }else {
            echo "<p>ERROR: Necessario cadastrar imagem.</p>";

        }
        
    }



}