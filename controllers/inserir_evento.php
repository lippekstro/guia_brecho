<!DOCTYPE html>
<html>
<head>
    <title>inserir eventos</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <nav>
        <ul>
        <li> <img src="img/logo guia brecho.png"  class="logo"> </li>
        </ul>
    </nav>        
</header>
<body>
<div class="event-card">
<?php


// Configurações do banco de dados
define('DB_HOST', 'localhost'); // Endereço do servidor MySQL
define('DB_USER', 'root'); // Usuário do banco de dados
define('DB_PASSWORD', ''); // Senha do banco de dados
define('DB_NAME', 'evento'); // Nome do banco de dados


// Estabelecer a conexão com o banco de dados
$conexao = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verificar se ocorreu algum erro na conexão
if ($conexao->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
}


$nome_evento = $_POST['nome_evento'];
$data_evento = $_POST['data_evento'];
$horario = $_POST['horario'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$uf = $_POST['uf'];
$descricao_evento = $_POST['descricao_evento'];

// Processar a imagem do evento
$imagem_evento = addslashes(file_get_contents($_FILES['imagem_evento']['tmp_name']));

$sql = "INSERT INTO cadastro_evento (nome_evento, data_evento, horario, logradouro, numero, complemento, bairro, Uf, imagem_evento, descricao_evento)
        VALUES ('$nome_evento', '$data_evento', '$horario', '$logradouro', $numero, '$complemento', '$bairro', '$uf', '$imagem_evento', '$descricao_evento')";

if ($conexao->query($sql) === TRUE) {
    echo "Evento cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar evento: " . $conexao->error;
}

// Preparar a consulta para inserção
$stmt = $conexao->prepare("INSERT INTO imagens (nome, tipo_mime, dados_imagem) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $_FILES['imagem']['name'], $_FILES['imagem']['type'], $imagem);
$stmt->execute();

$conexao->close();
?>
</div>
</body>
</html>

