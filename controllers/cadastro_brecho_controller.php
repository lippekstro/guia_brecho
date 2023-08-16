<?php


require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";


//Dados Pessoas do Dono do Brecho:
if(isset($_POST['nome']) && isset($_POST['sobrenome'])
&& isset($_POST['email']) && isset($_POST['password'])
&& isset($_POST['cnpj-cpf'])

//Dados do Brecho:
&& isset($_POST['nomebrecho']) && isset($_POST['cidade'])
&& isset($_POST['endereco']) && isset($_POST['numero'])
&& isset($_POST['bairro'])

     
//Mídias do Brecho
&& isset($_FILES['files']) && isset($_POST['redeSocial'])
&& isset($_POST['contato'])

//CONTINUE SEU CADASTRO
//Informações para Divulgações
&& isset($_POST['paga_pix']) && isset($_POST['paga_ted'])
&& isset($_POST['paga_boleto']) && isset($_POST['paga_dinheiro']) 
&& isset($_POST['faixa_preco_ini']) && isset($_POST['faixa_preco_fim'])
&& isset($_POST['hora']) && isset($_POST['entrega'])
&& isset($_POST['story']) && isset($_POST['termo'])

)
    {
        //Dados do Pessoa:
    $pessoa_nome = $_POST['nome'];
    $pessoa_sobrenome= $_POST['sobrenome'];
    $pessoa_email = $_POST['email'];
    $pessoa_password = $_POST['password'];
    $pessoa_cnpj_cpf = $_POST['cnpj-cpf'];

    //Dados do Brecho:
    $brecho_nome = $_POST['nomebrecho'];
    $brecho_cidade = $_POST['cidade'];
    $brecho_endereco = $_POST['endereco'];
    $brecho_numero = $_POST['numero'];
    $brecho_bairro = $_POST['bairro'];
    
    //Mídias do Brecho    
    $brecho_img = $_FILES['files']['name'];
    $brecho_rede= $_POST['redeSocial'];
    $brecho_contato= $_POST['contato'];

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


/*
        //Tratamento para ataques de Injeção INICIO 
        //continuar colocando as outras variáveis...
    try {
        $pessoa_nome = Utilidades::sanitizaString($pessoa_nome);
    
        if(Utilidades::validaEmail($pessoa_email)){
            $pessoa_email = Utilidades::sanitizaString($pessoa_email);
        } else {
            setcookie('msg', "Email Inválido!!", time() +3600, '/');
            header("Location: /guia_brecho/views/admin/cadastro_brecho.php");
            exit();
        } 
    }
    catch(PDOException $error)
    {
        $errorMessage = $error->getMessage();
    
        if ($sqlStateCode === '23000' && strpos($errorMessage, 'Duplicate entry') !== false)
        {
            setcookie('msg', "O email já está cadastrado. Favor, utilizar outro email", time() +3600, '/');
            setcookie('tipo', 'info', time() + 3600, '/guia_brecho');
            header('Location: /guia_brecho/index.php');
        } else{
            echo "Erro no Banco de Dados, Fale com Administrador:" . $errorMessage;
        }
        exit();
    }
*/

    $brecho = new Brecho();
    $brecho->cadastrarBrecho(
        //Dados Pessoais
        $pessoa_nome,
        $pessoa_sobrenome,
        $pessoa_email,
        $pessoa_password,
        $pessoa_cnpj_cpf,

        //Dados do Brecho:
        $brecho_nome,
        $brecho_endereco,
        $brecho_img,
        $brecho_rede,
        $brecho_contato,
        $brecho_cidade, 
        $brecho_numero, 
        $brecho_bairro,
        
        //Informações para Divulgações
        $brecho_paga_pix,
        $brecho_paga_ted,
        $brecho_paga_boleto,
        $brecho_paga_dinheiro,
        $brecho_faixa_preco_ini,
        $brecho_faixa_preco_fim,
        $brecho_hora,
        $brecho_entrega,
        $brecho_story,
        $brecho_termo
    );        
}
