<?php


require_once $_SERVER["DOCUMENT_ROOT"] . "\guia_brecho\models\brecho.php";


if  ()    {
    //Dados Pessoais
    $pessoa_nome = $_POST['nome'];
    $pessoa_sobrenome= $_POST['sobrenome'];
    $pessoa_email = $_POST['email'];
    $pessoa_password = $_POST['password'];
    
    //Dados do Brecho:
    $brecho_nome = $_POST['nomebrecho'];
    $brecho_cnpj = $_POST['cnpj-cpf'];
    $brecho_cidade = $_POST['cidade'];
    $brecho_endereco = $_POST['endereco'];
    $brecho_numero = $_POST['numero'];
    $brecho_bairro = $_POST['bairro'];
    
    //Mídias do Brecho    
    $brecho_img = $_FILES['files']['name'];
    $brecho_rede= $_POST['redeSocial'];
    $brecho_contato= $_POST['contato'];

    //Informações para Divulgações   
    $brecho_paga_pix $_POST['paga_pix'];



    $nomebrecho = htmlspecialchars($nomebrecho);
    $faixapreco = floatval($faixapreco); 

  
    $brecho = new Brecho();
    $brecho->inserirProduto($nomebrecho, $cnpj, $cidade, $);
}

