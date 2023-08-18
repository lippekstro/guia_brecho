<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

class Usuario
{
    public $id_usuario;
<<<<<<< HEAD
    public $nome_usuario;
    public $email;
    public $senha;
    public $cpf_cnpj;
    public $nivel_acesso;

=======
    public $email;
    public $senha;
    public $nome;
    public $cpf_cnpj;
    public $nivel_acesso;


>>>>>>> 17a24d4 (commit)
    public function __construct($id_usuario = false)
    {
        if ($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();

        $usuario = $stmt->fetch();
<<<<<<< HEAD
        $this->nome_usuario = $usuario['nome_usuario'];
        $this->email = $usuario['email'];
        $this->senha = $usuario['senha'];
=======
        $this->id_usuario = $usuario['id_usuario'];
        $this->email = $usuario['email'];
        $this->senha = $usuario['senha'];
        $this->nome = $usuario['nome'];
>>>>>>> 17a24d4 (commit)
        $this->cpf_cnpj = $usuario['cpf_cnpj'];
        $this->nivel_acesso = $usuario['nivel_acesso'];
    }

    public function criar()
    {
<<<<<<< HEAD
        $query = "INSERT INTO usuario (nome_usuario, email, senha, cpf_cnpj) VALUES (:nome, :email, :senha, :doc)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_usuario);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':doc', $this->cpf_cnpj);
=======
        $query = "INSERT INTO usuario (email,senha,nome,cpf_cnpj) VALUES (:email, :senha, :nome, :cpf_cnpj)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':cpf_cnpj', $this->cpf_cnpj);
>>>>>>> 17a24d4 (commit)
        $stmt->execute();
        $this->id_usuario = $conexao->lastInsertId();
        return $this->id_usuario;
    }

    public static function listar()
    {
        $query = "SELECT * FROM usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function editar()
    {
<<<<<<< HEAD
        $query = "UPDATE usuario SET nome_usuario = :nome, email = :email, cpf_cnpj = :doc WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_usuario);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':doc', $this->cpf_cnpj);
        $stmt->bindValue(":id_usuario", $this->id_usuario);
=======
        $query = "UPDATE usuario SET email = :email, senha = :senha, nome = :nome WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":senha", $this->senha);
        $stmt->bindValue(":nome", $this->nome);
>>>>>>> 17a24d4 (commit)
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM usuario WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();
    }

    public static function logar($email, $senha)
    {
<<<<<<< HEAD
        $query = "SELECT * FROM usuario WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if (count($registro) > 0 && password_verify($senha, $registro['senha'])) {
            session_start();
            $_SESSION['usuario']['id_usuario'] = $registro['id_usuario'];
            $_SESSION['usuario']['nome'] = $registro['nome_usuario'];
            $_SESSION['usuario']['email'] = $registro['email'];
            $_SESSION['usuario']['nivel_acesso'] = $registro['nivel_acesso'];

=======
        $query = "SELECT id_usuario, nome, nivel_acesso, email, senha FROM usuario WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt ->bindValue(":email", $email);
        
        
        $stmt -> execute();
        $registro = $stmt->fetchAll();
            
        if ( $senha == password_verify($registro['senha'],PASSWORD_DEFAULT)) {
            session_start();
            $_SESSION['id_usuario'] = $registro['id_usuario'];
            $_SESSION['usuario']['nome'] = $registro['nome'];
            $_SESSION['usuario']['nivel_acesso'] = $registro['nivel_acesso'];
            
            if (isset($_COOKIE['erro'])) {
                setcookie('erro', '', time() - 3600, '/guia_brecho/');
                
            }
>>>>>>> 17a24d4 (commit)
            header("Location: /guia_brecho/index.php");
            exit();
        } else {

<<<<<<< HEAD
<<<<<<< HEAD
            setcookie('erro', 'Email ou Senha Incorreto!!', time() + 3600, '/guia_brecho/');
=======
            setcookie('erro', 'Email ou Senha Incorreto!!', time() + 3600, '/');
>>>>>>> 17a24d4 (commit)
=======
            setcookie('erro', 'Email ou Senha Incorreto!!', time() + 3600, '/guia_brecho/');
>>>>>>> 5c79635 (commit do dia 17/08)
            header("Location: /guia_brecho/views/login.php");
            exit();
        }
        var_dump($registro);
    }
<<<<<<< HEAD
}
=======

}
>>>>>>> 17a24d4 (commit)
