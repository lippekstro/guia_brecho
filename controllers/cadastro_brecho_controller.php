<?php


require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";



if(

// Dados do Brecho:
isset($_POST['nomebrecho']) 
&& isset($_POST['bio'])
&& isset($_POST['endereco']) 
     
// Mídias do Brecho
&& isset($_FILES['files']) 
&& isset($_POST['redeSocial'])
&& isset($_POST['contato'])

//CONTINUE SEU CADASTRO
//Informações para Divulgações
&& isset($_POST['faixa_preco_ini']) && isset($_POST['faixa_preco_fim'])

)
    {

    //Dados do Brecho:
    $brecho_nome = $_POST['nomebrecho'];
    $brecho_bio = $_POST['bio'];
    $brecho_endereco = $_POST['endereco'];

    //Mídias do Brecho    
    $brecho_img = $_FILES['files']['name'];
    $brecho_rede= $_POST['redeSocial'];
    $brecho_contato= $_POST['contato'];

    //Informações para Divulgações   
    $brecho_faixa_preco_ini = $_POST['faixa_preco_ini'];
    $brecho_faixa_preco_fim = $_POST['faixa_preco_fim'];


    $brecho = new Brecho();
    $brecho->cadastrarBrecho(

        //Dados do Brecho:
        $brecho_nome,
        $brecho_endereco,
        $brecho_img,
        $brecho_rede,
        $brecho_contato,
        $brecho_bio, 
        
        //Informações para Divulgações
        $brecho_faixa_preco_ini,
        $brecho_faixa_preco_fim,
    );        
}