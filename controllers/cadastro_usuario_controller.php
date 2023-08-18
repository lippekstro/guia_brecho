<?php


require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/usuario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";


//Dados Pessoas:
if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])
&& isset($_POST['cnpj-cpf'])

)
{
        //Dados do Pessoa:
    $nome_usuario = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf_cnpj = $_POST['cnpj-cpf'];

/*

        //Tratamento para ataques de Injeção INICIO 
        //continuar colocando as outras variáveis...
    $nome_usuario = Utilidades::sanitizaString($nome_usuario);
    
    if(Utilidades::validaEmail($pessoa_email)){
        $email = Utilidades::sanitizaString($email);
    } else {
        setcookie('msg', "Email Inválido!!", time() +3600, '/');
        header("Location: /guia_brecho/views/cadastro_usuario.php");
        exit();
    } 

*/
    $usuario = new Usuario();
    $usuario->criar(
        //Dados Pessoais
        $nome_usuario,
        $email,
        $senha,
        $cpf_cnpj
    );        
}