<?php


require_once $_SERVER["DOCUMENT_ROOT"] . "\guia_brecho\models\brecho.php";


//Dados Pessoas do Dono do Brecho:
//Dados Pessoais
if(isset($_POST['nome']) && isset($_POST['sobrenome'])
&& isset($_POST['email']) && isset($_POST['password'])
&&

//Dados do Brecho:
isset($_POST['nomebrecho']) && isset($_POST['cnpj-cpf'])
&& isset($_POST['cidade']) && isset($_POST['endereco'])
&& isset($_POST['numero']) && isset($_POST['bairro'])
&& 
     
//Mídias do Brecho
isset($_FILES['files']) && isset($_POST['redeSocial'])
&& isset($_POST['contato'])
&&
     
//CONTINUE SEU CADASTRO
//Informações para Divulgações
isset($_POST['paga_pix']) && isset($_POST['paga_ted'])
&& isset($_POST['paga_boleto']) && isset($_POST['paga_dinheiro']) 
&& isset($_POST['faixa_preco_ini']) && isset($_POST['faixa_preco_fim'])
&& isset($_POST['hora']) && isset($_POST['entrega'])
&& isset($_POST['story']) && isset($_POST['termo'])
)
{
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
    $brecho_paga_pix = $_POST['paga_pix'];
    $brecho_paga_ted = $_POST['paga_ted'];
    $brecho_paga_boleto = $_POST['paga_boleto'];
    $brecho_paga_dinheiro = $_POST['paga_dinheiro'];

    $brecho_faixa_preco_ini = $_POST['faixa_preco_ini'];
    $brecho_faixa_preco_fim = $_POST['faixa_preco_fim'];

    $brecho_hora = $_POST['hora'];
    $brecho_entrega = $_POST['entrega'];

    $brecho_story = $_POST['story'];
    $brecho_termo = $_POST['termo'];

    
    $pessoa_nome = htmlspecialchars($pessoa_nome);
    $pessoa_sobrenome = htmlspecialchars($pessoa_sobrenome);
    $brecho_faixa_preco_ini  = floatval($brecho_faixa_preco_ini); 
    $brecho_faixa_preco_fim  = floatval($brecho_faixa_preco_fim); 


    $brecho = new Brecho();
    $brecho->cadastrarBrecho(
        $pessoa_nome, $pessoa_sobrenome, $pessoa_email, $pessoa_password,
        $brecho_nome,$brecho_cnpj,$brecho_cidade,$brecho_endereco,$brecho_numero,
        $brecho_bairro,$brecho_img,$brecho_rede, $brecho_contato, $brecho_paga_pix,
        $brecho_paga_ted,$brecho_paga_boleto,$brecho_paga_dinheiro, $brecho_faixa_preco_ini,
        $brecho_faixa_preco_fim,$brecho_hora,$brecho_entrega,$brecho_story,$brecho_termo);
    
}


