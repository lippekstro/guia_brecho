CREATE DATABASE guiabrecho;

CREATE TABLE usuario (
    id_usuario int PRIMARY KEY AUTO_INCREMENT, 
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL,
    cpf_cnpj BIGINT UNIQUE NOT NULL, 
    nivel_acesso int DEFAULT 1
);

CREATE TABLE loja (
    id_loja int PRIMARY KEY AUTO_INCREMENT, 
    nome_loja VARCHAR(255) NOT NULL, 
    cidade VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    numero VARCHAR(255) NOT NULL,
    bairro VARCHAR(255) NOT NULL,
    telefone BIGINT NOT NULL, 
    rede_social VARCHAR(255) NOT NULL,
    logo_loja LONGBLOB,
    paga_pix VARCHAR(255),
    paga_ted VARCHAR(255) ,
    paga_boleto VARCHAR(255),
    paga_dinheiro VARCHAR(255),
    faixa_preco_ini VARCHAR(255),
    faixa_preco_fim VARCHAR(255),
    hora VARCHAR(255),
    entrega VARCHAR(255),
    story VARCHAR(255),
    termo VARCHAR(255),
    id_usuario int NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE produto (
    id_produto int PRIMARY KEY AUTO_INCREMENT, 
    nome_produto VARCHAR(255) NOT NULL, 
    descricao TEXT NOT NULL, 
    categoria ENUM('vestimentas', 'calcados', 'acessorios') NOT NULL, 
    preco FLOAT NOT NULL, 
    estoque BOOLEAN DEFAULT 1, 
    imagem_produto LONGBLOB, 
    id_loja int NOT NULL,
);

CREATE TABLE evento (
    id_evento int PRIMARY KEY AUTO_INCREMENT,
    nome_evento VARCHAR(255) NOT NULL,
    data_evento DATE NOT NULL, 
    horario TIME NOT NULL,
    imagem_evento LONGBLOB, 
    local_evento VARCHAR(255) NOT NULL,
    descricao_evento TEXT NOT NULL
);

CREATE TABLE faqs (
    id_faq INT PRIMARY KEY AUTO_INCREMENT,
    faq_pergunta text not null,
    faq_resposta text not null
);