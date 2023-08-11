<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

class Usuario {
    public $id_usuario;
    public $nome;
    public $senha;
    public $email;
    public $cpf_cnpj;
    public $nivel_acesso;

    public function __construct($id_usuario = false)
    {
        if ($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT * FROM usuario WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();

        $usuario = $stmt->fetch();
        $this->nome = $usuario['nome'];
        $this->senha = $usuario['senha'];
        $this->email = $usuario['email'];
        $this->cpf_cnpj = $usuario['cpf_cnpj'];
        $this->nivel_acesso = $usuario['nivel_acesso'];
    }

    public function criar()
    {
        $query = "INSERT INTO usuario (nome, senha, email, cpf_cnpj) VALUES (:nome, :senha, :email, :doc)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':doc', $this->cpf_cnpj);
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
        $query = "UPDATE usuario SET nome = :nome, email = :email, cpf_cnpj = :doc WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":doc", $this->cpf_cnpj);
        $stmt->bindValue(":id", $this->id_usuario);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM usuario WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
    }
}