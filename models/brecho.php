<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '\guia_brecho\db\conexao.php';

class Brecho {
    public $pessoa_nome;
    public $pessoa_sobrenome;
    public $pessoa_email;
    public $pessoa_password;
    
    public $brecho_nome;
    public $brecho_cnpj;
    public $brecho_cidade;
    public $brecho_endereco;
    public $brecho_numero;
    public $brecho_bairro;

    public $brecho_img;
    public $brecho_rede;
    public $brecho_contato;

    public $brecho_paga_pix;
    public $brecho_paga_ted;
    public $brecho_paga_boleto;
    public $brecho_paga_dinheiro;

    public $brecho_faixa_preco_ini;
    public $brecho_faixa_preco_fim;

    public $brecho_hora;
    public $brecho_entrega;

    public $brecho_story;
    public $brecho_termo;


    //INSERIR NO BANCO OS DADOS DO BRECHÓ

    public function cadastrarBrecho($pessoa_nome, $pessoa_sobrenome, $pessoa_email, $pessoa_password,$brecho_nome,$brecho_cnpj,$brecho_cidade,$brecho_endereco,$brecho_numero,$brecho_bairro,$brecho_img,
    $brecho_rede, $brecho_contato, $brecho_paga_pix, $brecho_paga_ted,$brecho_paga_boleto,$brecho_paga_dinheiro, $brecho_faixa_preco_ini, $brecho_faixa_preco_fim,$brecho_hora,$brecho_entrega,
    $brecho_story,$brecho_termo)
    {
        $query = "INSERT INTO produto (pessoa_nome, pessoa_sobrenome, pessoa_email, pessoa_password,....)
                VALUES (:pessoa_nome, :pessoa_sobrenome, :pessoa_email, :pessoa_password)";

        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stm ->bindValue(':pessoa_nome', $pessoa_nome );
        $stm ->bindValue(':pessoa_sobrenome', $pessoa_sobrenome );
        $stm ->bindValue(':pessoa_email', $pessoa_email );
        $stm ->bindValue(':pessoa_password', $pessoa_password );

        $stm ->bindValue(':brecho_nome', $brecho_nome );
        $stm ->bindValue(':brecho_cnpj', $brecho_cnpj );
        $stm ->bindValue(':brecho_cidade', $brecho_cidade );
        $stm ->bindValue(':brecho_endereco', $brecho_endereco );
        $stm ->bindValue(':brecho_numero', $brecho_numero );
        $stm ->bindValue(':brecho_bairro', $brecho_bairro );

        $stm ->bindValue(':brecho_img', $brecho_img );
        $stm ->bindValue(':brecho_rede', $brecho_rede );
        $stm ->bindValue(':brecho_contato', $brecho_contato );

        $stm ->bindValue(':brecho_paga_pix', $brecho_paga_pix );
        $stm ->bindValue(':brecho_paga_ted', $brecho_paga_ted );
        $stm ->bindValue(':brecho_paga_boleto', $brecho_paga_boleto );
        $stm ->bindValue(':brecho_paga_dinheiro', $brecho_paga_dinheiro );

        $stm ->bindValue(':brecho_faixa_preco_ini', $brecho_faixa_preco_ini );
        $stm ->bindValue(':brecho_faixa_preco_fim', $brecho_faixa_preco_fim );

        $stm ->bindValue(':brecho_hora', $brecho_hora );
        $stm ->bindValue(':brecho_entrega', $brecho_entrega );

        $stm ->bindValue(':brecho_story', $brecho_story);
        $stm ->bindValue(':brecho_termo', $brecho_termo);
        
        if (!empty($brecho_img)) {
            $brecho_img_tmp = $_FILES['brecho_img']['tmp_name'];
            $brecho_img_contents = file_get_contents($img_produto_tmp);
            $stmt->bindValue(':brecho_img', $img_produto_contents, PDO::PARAM_LOB);
        } else {
            $stmt->bindValue(':brecho_img', null, PDO::PARAM_NULL);
        }

        $stmt->execute();
        header("Location: \guia_brecho\index.php"); //redirecionando para a pagina principal
    }




}