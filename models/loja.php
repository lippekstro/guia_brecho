<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

session_start();

class Loja {
    public $id_loja;
    public $nome_loja;
    public $endereco;
    public $telefone;
    public $rede_social;
    public $logo_loja;
    public $id_usuario;

    public function __construct($id_loja = false)
    {
        if ($id_loja) {
            $this->id_loja = $id_loja;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT * FROM loja WHERE id_loja = :id_loja";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_loja', $this->id_loja);
        $stmt->execute();

        $loja = $stmt->fetch();
        $this->nome_loja = $loja['nome_loja'];
        $this->endereco = $loja['endereco'];
        $this->telefone = $loja['telefone'];
        $this->rede_social = $loja['rede_social'];
        $this->logo_loja = $loja['logo_loja'];
        $this->id_usuario = $loja['id_usuario'];
    }

    public function criar()
    {
        $query = "INSERT INTO loja (nome_loja, endereco, telefone, rede_social, logo_loja, id_usuario) VALUES (:nome, :endereco, :tel, :rede, :logo, :dono)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_loja);
        $stmt->bindValue(':endereco', $this->endereco);
        $stmt->bindValue(':tel', $this->telefone);
        $stmt->bindValue(':rede', $this->rede_social);
        $stmt->bindValue(':logo', $this->logo_loja);
        $stmt->bindValue(':dono', $this->id_usuario);
        
        $stmt->execute();
        $this->id_loja = $conexao->lastInsertId();
        return $this->id_loja;
    }

    public static function listar()
    {
        $conexao = Conexao::conectar();
        $query = "SELECT l.id_loja, u.id_usuario FROM loja l JOIN usuario u ON l.id_usuario = u.id_usuario";        
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }
    public static function listarId($id_usuario)
    {
        $conexao = Conexao::conectar();
        $query = "SELECT l.id_loja, u.id_usuario FROM loja l JOIN usuario u ON l.id_usuario = u.$id_usuario";        
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE loja SET nome = :nome, endereco = :endereco, telefone = :tel, rede_social = :rede WHERE id_loja = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome_loja);
        $stmt->bindValue(":endereco", $this->endereco);
        $stmt->bindValue(":tel", $this->telefone);
        $stmt->bindValue(":rede", $this->rede_social);
        $stmt->bindValue(":id", $this->id_loja);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM loja WHERE id_loja = :id_loja";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_loja', $this->id_loja);
        $stmt->execute();
    }
}