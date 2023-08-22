create data evento;
use evento ;

 CREATE TABLE cadastro_evento(
    id_evento INT PRIMARY KEY AUTO_INCREMENT,
    nome_evento VARCHAR(255) NOT NULL,
    data_evento DATE NOT NULL, 
    horario TIME NOT NULL,
    logradouro VARCHAR(255) NOT NULL,
    numero INT,
    complemento VARCHAR(255),
    bairro VARCHAR(255),
    Uf ENUM ('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC'),
    imagem_evento LONGBLOB, 
    descricao_evento TEXT NOT NULL
);







