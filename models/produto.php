<?php

require_once "../db/conexao.php";

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
            
            $this->carregar();
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
    
    public static function listar(){

        $conexao = conexao::conectar();
        $sql = "SELECT * FROM produto";
        $list = $conexao->query($sql);
        $array = $list->fetchAll();
        return $array;
    }

    public function inserir($arq_img_blob){

        $conexao = Conexao::conectar();
        $sql = $sql = "INSERT INTO produto (nome_produto,descricao,categoria,preco,estoque,imagem_produto) VALUES (:nome_produto,:descricao,:categoria,:preco,:estoque,:imagem_produto)";
        $insert = $conexao->prepare($sql);
        $insert->bindParam(':nome_produto',$this->nome_produto);        
        $insert->bindParam(':descricao',$this->descricao);
        $insert->bindParam(':categoria',$this->categoria);
        $insert->bindParam(':preco',$this->preco);
        $insert->bindParam(':estoque',$this->estoque);
        $insert->bindParam(':imagem_produto',$arq_img_blob);
        $insert->execute();

        if ($insert->rowCount()) {
            
            //header("location:javascript:alert(\"Arquivo cadastrado com Sucesso!\");location.href=\"index.php\";");
            /* header('location: index.php');

            echo  "<script>alert('Arquivo cadastrado com sucesso!);</script>"; */
            echo "<p> Arquivo cadastrado com sucesso!</p>";
        }else {
            echo "<p> Arquivo nao cadastrado!</p>";
        }
    }

/*     public static function editar(){

        $conexao = conexao::conectar();
        $sql = "UPDATE pessoa SET nome=:nome,email=:email,nascimento=:nascimento WHERE id_pessoa=:is_pessoa";
        $edit = $conexao->prepare($sql);
        $edit->bindValue(':nome',$this->nome);
        $edit->bindValue(':email',$this->email);
        $edit->bindValue(':nascimento',$this->nascimento);
        $edit->bindValue(':id_pessoa',$this->id_pessoa);
        $edit->execute();
    } */
}