<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/db/conexao.php";

class Brecho 
{
    public $pessoa_nome;
    public $pessoa_sobrenome;
    public $pessoa_email;
    public $pessoa_password;
    public $pessoa_cnpj_cpf;
    public $usuario;

    public $brecho_nome;
    public $brecho_endereco;
    public $brecho_img;
    public $brecho_rede;
    public $brecho_contato;

    public $brecho_cidade;
    public $brecho_numero;
    public $brecho_bairro;
        
        //Informações para Divulgações
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


    //Inserir no Banco de Dados PESSOA

    public function cadastrarBrecho(
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
        
        
        )

        {   
            $erroUsuario = 0; // Inicializa a variável
            $query_usuario = "INSERT INTO usuario (nome, sobrenome, senha, email, cpf_cnpj)
                    VALUES (:pessoa_nome, :pessoa_sobrenome, :pessoa_password, :pessoa_email, :pessoa_cnpj_cpf)";

            try {
                $conexao = Conexao::conectar();
            } catch (PDOException $error) {
                echo "Erro na conexão: " . $error->getMessage();
            }
            $stmt_usuario = $conexao->prepare($query_usuario);

            $stmt_usuario ->bindValue(':pessoa_nome', $pessoa_nome );
            $stmt_usuario ->bindValue(':pessoa_sobrenome', $pessoa_sobrenome );
            $stmt_usuario ->bindValue(':pessoa_password', $pessoa_password );
            $stmt_usuario ->bindValue(':pessoa_email', $pessoa_email );
            $stmt_usuario ->bindValue(':pessoa_cnpj_cpf', $pessoa_cnpj_cpf );
            
            try {
                $stmt_usuario->execute();
            }
            catch (PDOException $error)
            {echo "Erro na para a tabela de usuario: " . $error->getMessage();
                $erroUsuario = 1;
            }

            if ($erroUsuario==1)
            {
                header("Location: \guia_brecho\views\admin\cadastro_brecho.php");
                
            }
            else{

                $query_busca_usuario = "SELECT id_usuario FROM usuario WHERE email = :pessoa_email";

                $stmt_busca_usuario = $conexao->prepare($query_busca_usuario);

                $stmt_busca_usuario ->bindValue(':pessoa_email', $pessoa_email );

                $stmt_busca_usuario->execute();
                $id_usuario = $stmt_busca_usuario->fetch(PDO::FETCH_ASSOC)['id_usuario'];

                $query_loja = "INSERT INTO loja (nome_loja, cidade, endereco, numero, bairro, telefone, rede_social, paga_pix, paga_ted,paga_boleto, paga_dinheiro, faixa_preco_ini, faixa_preco_fim, hora, entrega, story, termo, id_usuario)
                VALUES (:brecho_nome, :brecho_cidade, :brecho_endereco, :brecho_numero, :brecho_bairro, :brecho_contato, :brecho_rede, :brecho_paga_pix,:brecho_paga_ted, :brecho_paga_boleto,:brecho_paga_dinheiro,:brecho_faixa_preco_ini, :brecho_faixa_preco_fim, :brecho_hora, :brecho_entrega,:brecho_story, :brecho_termo, :id_usuario)";
                
                // FALTOU A IMAGEM.... :brecho_img....logo_loja

                $stmt_loja = $conexao->prepare($query_loja);

                $stmt_loja ->bindValue(':id_usuario', $id_usuario ); //select acima, item Usuario

                $stmt_loja ->bindValue(':brecho_nome', $brecho_nome );
                $stmt_loja ->bindValue(':brecho_cidade', $brecho_cidade );
                $stmt_loja ->bindValue(':brecho_endereco', $brecho_endereco );
                $stmt_loja ->bindValue(':brecho_numero', $brecho_numero );
                $stmt_loja ->bindValue(':brecho_bairro', $brecho_bairro );
                
                $stmt_loja ->bindValue(':brecho_contato', $brecho_contato );
                $stmt_loja ->bindValue(':brecho_rede', $brecho_rede );

                $stmt_loja ->bindValue(':brecho_paga_pix', $brecho_paga_pix );
                $stmt_loja ->bindValue(':brecho_paga_ted', $brecho_paga_ted );
                $stmt_loja ->bindValue(':brecho_paga_boleto', $brecho_paga_boleto );
                $stmt_loja ->bindValue(':brecho_paga_dinheiro', $brecho_paga_dinheiro );

                $stmt_loja ->bindValue(':brecho_faixa_preco_ini', $brecho_faixa_preco_ini );
                $stmt_loja ->bindValue(':brecho_faixa_preco_fim', $brecho_faixa_preco_fim );

                $stmt_loja ->bindValue(':brecho_hora', $brecho_hora );
                $stmt_loja ->bindValue(':brecho_entrega', $brecho_entrega );

                $stmt_loja ->bindValue(':brecho_story', $brecho_story);
                $stmt_loja ->bindValue(':brecho_termo', $brecho_termo);

                /*

                if (!empty($brecho_img)) {
                    $brecho_img_tmp = $_FILES['brecho_img']['tmp_name'];
                    $brecho_img_contents = file_get_contents($brecho_img_tmp);
                    
                    $stmt_loja->bindValue(':brecho_img', $brecho_img_contents, PDO::PARAM_LOB);
                } else {
        
                    $stmt_loja->bindValue(':brecho_img', null, PDO::PARAM_NULL);
                    
                }

                $stmt_loja ->bindValue(':brecho_img', $brecho_img );
                */


                try {
                    $stmt_loja->execute();
                    header("Location: \guia_brecho\index.php"); //redirecionando para a pagina principal
                } catch (PDOException $e) 
                    {echo "Erro na para a tabela da loja: " . $e->getMessage();}
                

            }




        }    



} //fim
