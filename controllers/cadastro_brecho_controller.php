<?php
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";


//Dados Brecho:
if($_SERVER["REQUEST_METHOD"] == "POST")    {
    
    $brecho_nome = $_POST['brecho_nome'];
    $brecho_endereco = $_POST['brecho_endereco'];    
    $brecho_rede = $_POST['brecho_rede'];
    $brecho_contato = $_POST['brecho_contato'];
    $brecho_faixa_preco_ini = $_POST['brecho_faixa_preco_ini'];
    $brecho_faixa_preco_fim = $_POST['brecho_faixa_preco_fim'];
    $brecho_bio = $_POST['brecho_bio'];
  



        //Tratamento para ataques de Injeção INICIO 
        //continuar colocando as outras variáveis...
    try {
/*         $brecho_nome = Utilidades::sanitizaString($brecho_nome);
        $brecho_endereco = Utilidades::sanitizaString($brecho_endereco);
        $brecho_contato = Utilidades::sanitizaString($brecho_contato);
        $brecho_bio =  Utilidades::sanitizaString($brecho_bio); */

        $brecho = new Brecho();
        $brecho->brecho_nome = $brecho_nome;
        $brecho->brecho_endereco =$brecho_endereco;         
        $brecho->brecho_rede = $brecho_rede;
        $brecho->brecho_contato = $brecho_contato;
        $brecho->brecho_faixa_preco_ini = $brecho_faixa_preco_ini;
        $brecho->brecho_faixa_preco_fim = $brecho_faixa_preco_fim;
        $brecho->brecho_bio = $brecho_bio ;
        $brecho->id_usuario = $_SESSION["usuario"]["id_usuario"];
        
        if (!empty($_FILES["brecho_img"])) {
            
            $brecho_img = file_get_contents($_FILES["brecho_img"]["tmp_name"]);
            $brecho->brecho_img = $brecho_img;
        }

        $brecho->criar();
        header("Location: /guia_brecho/index.php");
        exit(); 
    
        } 
    
    catch(PDOException $error)
    {
        $errorMessage = $error->getMessage();
         echo "Erro no Banco de Dados, Fale com Administrador:" . $errorMessage;
        
        exit();
    }



  
}