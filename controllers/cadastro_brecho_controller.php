<?php


require_once $_SERVER["DOCUMENT_ROOT"] . "\guia_brecho\models\brecho.php";


if (isset($_POST['nomebrecho']) && isset($_POST['cnpj-cpf']) && isset($_POST['cidade'])
     && isset($_POST['endereco']) && isset($_POST['numero']) && isset($_POST['bairro'])
     && isset($_FILES['files']) && isset($_POST['contato']) && isset($_POST['pagamento']) 
     && isset($_POST['faixa-preco']) && isset($_POST['hora']) && isset($_POST['entrega'])
     && isset($_POST['story']) && isset($_POST['termo']) 

     ) {
    $nomebrecho = $_POST['nomebrecho'];
    $cnpj = $_POST['cnpj-cpf'];
    $cidade = $_POST['cidade'];


    $img_brecho = $_FILES['files']['name'];



    $nomebrecho = htmlspecialchars($nomebrecho);
    $faixapreco = floatval($faixapreco); 

  
    $brecho = new Brecho();
    $brecho->inserirProduto($nomebrecho, $cnpj, $cidade, $);
}

