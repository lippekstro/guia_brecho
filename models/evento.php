<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

class Evento {
    public $id_evento;
    public $nome_evento;
    public $data_evento;
    public $horario;
    public $imagem_evento;
    public $local_evento;
    public $descricao_evento;

    public function __construct($id_evento = false)
    {
        if ($id_evento) {
            $this->id_evento = $id_evento;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT * FROM evento WHERE id_evento = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_evento);
        $stmt->execute();

        $evento = $stmt->fetch();
        $this->nome_evento = $evento['nome_evento'];
        $this->data_evento = $evento['data_evento'];
        $this->horario = $evento['horario'];
        $this->imagem_evento = $evento['imagem_evento'];
        $this->local_evento = $evento['local_evento'];
        $this->descricao_evento = $evento['descricao_evento'];
    }

    public function criar()
    {
        $query = "INSERT INTO evento (nome_evento, data_evento, horario, imagem_evento, local_evento, descricao_evento) VALUES (:nome, :data_evento, :hora, :imagem, :local_evento, :descricao)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_evento);
        $stmt->bindValue(':data_evento', $this->data_evento);
        $stmt->bindValue(':hora', $this->horario);
        $stmt->bindValue(':imagem', $this->imagem_evento);
        $stmt->bindValue(':local_evento', $this->local_evento);
        $stmt->bindValue(':descricao', $this->descricao_evento);
        $stmt->execute();
        $this->id_evento = $conexao->lastInsertId();
        return $this->id_evento;
    }

    public static function listar()
    {
        $query = "SELECT * FROM evento ORDER BY data_evento ASC";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE evento SET nome_evento = :nome, data_evento = :data_evento, horario = :hora, local_evento = :local_evento, descricao_evento = :descricao WHERE id_evento = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome_evento);
        $stmt->bindValue(":data_evento", $this->data_evento);
        $stmt->bindValue(":hora", $this->horario);
        $stmt->bindValue(":local_evento", $this->local_evento);
        $stmt->bindValue(":descricao", $this->descricao_evento);
        $stmt->bindValue(":id", $this->id_evento);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM evento WHERE id_evento = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_evento);
        $stmt->execute();
    }
    public static function listarProximos(){
        $query = "SELECT * FROM evento ORDER BY data_evento ASC limit 3";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }
}
