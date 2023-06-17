CREATE DATABASE guiabrecho;

CREATE TABLE usuario (
    id_usuario int PRIMARY KEY AUTO_INCREMENT, 
    nome VARCHAR(255) NOT NULL, 
    senha VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL,
    cpf_cnpj BIGINT UNIQUE NOT NULL, 
    nivel_acesso int DEFAULT 1
)

CREATE TABLE loja (
    id_loja int PRIMARY KEY AUTO_INCREMENT, 
    nome_loja VARCHAR(255) NOT NULL, 
    endereco VARCHAR(255) NOT NULL, 
    telefone BIGINT NOT NULL, 
    rede_social VARCHAR(255) NOT NULL,
    logo_loja LONGBLOB,
    id_usuario int NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
)

CREATE TABLE produto (
    id_produto int PRIMARY KEY AUTO_INCREMENT, 
    nome_produto VARCHAR(255) NOT NULL, 
    descricao TEXT NOT NULL, 
    categoria ENUM('vestimentas', 'calcados', 'acessorios') NOT NULL, 
    preco FLOAT NOT NULL, 
    estoque BOOL DEFAULT 1, 
    imagem_produto LONGBLOB, 
    id_loja int NOT NULL,
    FOREIGN KEY (id_loja) REFERENCES loja(id_loja)
)

CREATE TABLE evento (
    id_evento int PRIMARY KEY AUTO_INCREMENT,  
    data_evento DATE NOT NULL, 
    horario TIME NOT NULL, 
    local_evento VARCHAR(255) NOT NULL,
    descricao_evento TEXT NOT NULL
)

