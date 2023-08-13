<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

class Usuario
{
    public $email;
    public $senha;

    public static function logar($email, $senha)
    {
        $query = "SELECT id_usuario, email, senha FROM usuario WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt ->bindValue(":email", $email);
        
        //$stmt ->bindValue(":senha", $senha);
        $stmt -> execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);
            
        if ($senha === $registro['senha']) {
            session_start();
            $_SESSION['id_usuario'] = $registro['id_usuario'];
            $_SESSION['usuario']['nome'] = $registro['nome_usuario'];
            $_SESSION['usuario']['nv_acesso'] = $registro['nv_acesso'];
            
            if (isset($_COOKIE['erro'])) {
                setcookie('erro', '', time() - 3600, '/');
                
            }
            header("Location: /guia_brecho/index.php");
            exit();
        } else {

            setcookie('erro', 'Email ou Senha Incorreto!!', time() + 3600, '/');
            header("Location: /guia_brecho/views/login.php");
            exit();
        }
    }

}