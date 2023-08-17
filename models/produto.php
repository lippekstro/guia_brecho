<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/db/conexao.php";

class Produto{

    public $nome_produto;
    public $id_produto;
    public $descricao;
    public $categoria;
    public $preco;
    public $estoque;
    public $imagem_produto;


    public function __constructor($id_produto=false){

        if ($id_produto) {
            $this->id_produto = $id_produto;
            
            self::carregar();
        }
    }
    
    public function carregar(){

        $conexao = Conexao::conectar();
        $sql = "SELECT id_produto,nome_produto,descricao,categoria,preco,estoque,imagem_produto FROM produto WHERE id_produto = :id_produto";
        $query = $conexao->prepare($sql);
        $query->bindValue(':id_produto',$this->id_produto);        
        $query->execute();
        $array = $query->fetch();

        $this->nome_produto = $array["nome_produto"];
        $this->descricao = $array["descricao"];
        $this->categoria = $array["categoria"];
        $this->preco=$array["preco"];
        $this->estoque=$array["estoque"];
        $this->imagem_produto=$array["imagem_produto"];
    }


    public function deletar(){

        $conexao = conexao::conectar();
        $sql = "DELETE FROM produto WHERE id_produto=:id_produto";
        $delete = $conexao->prepare($sql);
        $delete->bindValue(':id_produto',$this->id_produto);
        $delete->execute();
    }
    
    public static function listarLimiteProdutos($inicio,$limite){

        $conexao = conexao::conectar();
        $sql = "SELECT * FROM produto LIMIT $inicio,$limite";
        $list = $conexao -> query($sql);        
        $array = $list->fetchAll();
        return $array;
    }

    public static function pesquisarProdutos($nome){
        $conexao = Conexao::conectar();        
        $sql = "SELECT * FROM produto WHERE nome_produto LIKE '%$nome%' OR descricao LIKE '%$nome%'";
        $query = $conexao->prepare($sql);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);

        if (count($res)== 0) {
            $_SESSION["resultado_pesquisa"]["sem_sucesso"] = "Nenhum resultado encontrado...";
        }else {
            $_SESSION["resultado_pesquisa"]["com_sucesso"] = count($res);
            return $res;
        }
    }
    public static function filtroCategoria($categoria){
        $conexao = Conexao::conectar();
        $sql = "SELECT * FROM produto WHERE categoria = :categoria";
        $query = $conexao->prepare($sql);
        $query->bindValue(":categoria",$categoria);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function inserir(){

        $conexao = Conexao::conectar();
        $sql = $sql = "INSERT INTO produto (nome_produto,descricao,categoria,preco,estoque,imagem_produto) VALUES (:nome_produto,:descricao,:categoria,:preco,:estoque,:imagem_produto)";
        $insert = $conexao->prepare($sql);
        $insert->bindParam(':nome_produto',$this->nome_produto);        
        $insert->bindParam(':descricao',$this->descricao);
        $insert->bindParam(':categoria',$this->categoria);
        $insert->bindParam(':preco',$this->preco);
        $insert->bindParam(':estoque',$this->estoque);
        $insert->bindParam(':imagem_produto',$this->imagem_produto);
        $insert->execute();
    }

    public function editar(){

        $conexao = conexao::conectar();
        $sql = "UPDATE produto SET nome_produto=:nome_produto,descricao=:descricao,categoria=:categoria,preco=:preco,estoque=:estoque,imagem_produto=:imagem_produto WHERE id_produto=:id_produto";
        $edit = $conexao->prepare($sql);
        $edit->bindValue(':nome_produto',$this->nome_produto);
        $edit->bindValue(':descricao',$this->descricao);
        $edit->bindValue(':categoria',$this->categoria);
        $edit->bindValue(':id_produto',$this->id_produto);
        $edit->execute();
    }
}