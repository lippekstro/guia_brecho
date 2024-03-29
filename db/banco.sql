CREATE DATABASE guiabrecho;

CREATE TABLE usuario (
    id_usuario int PRIMARY KEY AUTO_INCREMENT, 
    nome_usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL UNIQUE,
    cpf_cnpj BIGINT UNIQUE NOT NULL, 
    nivel_acesso int DEFAULT 1
);

CREATE TABLE brecho (
    id_brecho int PRIMARY KEY AUTO_INCREMENT,
    brecho_nome VARCHAR(255) NOT NULL,
    brecho_endereco VARCHAR(255) NOT NULL,
    brecho_img LONGBLOB,
    brecho_rede VARCHAR(255),
    brecho_contato VARCHAR(255) NOT NULL,
    brecho_faixa_preco_ini DECIMAL(10,2),
    brecho_faixa_preco_fim DECIMAL(10,2),
    brecho_bio VARCHAR(255) NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) ON DELETE CASCADE
);

CREATE TABLE produto (
    id_produto int PRIMARY KEY AUTO_INCREMENT, 
    nome_produto VARCHAR(255) NOT NULL, 
    descricao TEXT NOT NULL, 
    categoria ENUM('vestimentas', 'calcados', 'acessorios') NOT NULL, 
    preco FLOAT NOT NULL, 
    imagem_produto LONGBLOB,
    estoque BOOLEAN DEFAULT 1, 
    id_brecho int NOT NULL,
    FOREIGN KEY (id_brecho) REFERENCES brecho (id_brecho) ON DELETE CASCADE
);

CREATE TABLE evento (
    id_evento int PRIMARY KEY AUTO_INCREMENT,
    nome_evento VARCHAR(255) NOT NULL,
    data_evento DATE NOT NULL, 
    horario TIME NOT NULL,
    local_evento VARCHAR(255) NOT NULL,
    imagem_evento LONGBLOB, 
    descricao_evento TEXT NOT NULL
);

CREATE TABLE faqs (
    id_faq INT PRIMARY KEY AUTO_INCREMENT,
    faq_pergunta text not null,
    faq_resposta text not null
);
