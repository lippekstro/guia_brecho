CREATE DATABASE guiabrecho;

USE guiabrecho;

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT, 
    nome VARCHAR(255) NOT NULL, 
    senha VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL,
    cpf_cnpj BIGINT UNIQUE NOT NULL, 
    nivel_acesso INT DEFAULT 1
);

CREATE TABLE loja (
    id_loja INT PRIMARY KEY AUTO_INCREMENT, 
    nome_loja VARCHAR(255) NOT NULL, 
    endereco VARCHAR(255) NOT NULL, 
    telefone BIGINT NOT NULL, 
    rede_social VARCHAR(255) NOT NULL,
    logo_loja LONGBLOB,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE produto (
    id_produto INT PRIMARY KEY AUTO_INCREMENT, 
    nome_produto VARCHAR(255) NOT NULL, 
    descricao TEXT NOT NULL, 
    categoria ENUM('vestimentas', 'calcados', 'acessorios') NOT NULL, 
    preco FLOAT NOT NULL, 
    estoque BOOL DEFAULT 1, 
    imagem_produto LONGBLOB, 
    id_loja INT NOT NULL,
    FOREIGN KEY (id_loja) REFERENCES loja(id_loja)
);

CREATE TABLE evento (
    id_evento INT PRIMARY KEY AUTO_INCREMENT,
    nome_evento VARCHAR(255) NOT NULL,
    data_evento DATE NOT NULL, 
    horario TIME NOT NULL,
    local_evento VARCHAR(255) NOT NULL,
    logradouro VARCHAR(255),
    numero INT,
    complemento VARCHAR(255),
    bairro VARCHAR(255),
    Estado ENUM ('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC'),
    imagem_evento LONGBLOB, 
    descricao_evento TEXT NOT NULL
);

CREATE TABLE faqs (
    id_faq INT PRIMARY KEY AUTO_INCREMENT,
    faq_pergunta TEXT NOT NULL,
    faq_resposta TEXT NOT NULL
);
