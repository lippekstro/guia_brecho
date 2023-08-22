<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inserir Eventos</title>
    <link rel="stylesheet" href="css/ANA.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><img src="img/logo_guia_brecho.png" class="logo"></li>
        </ul>
    </nav>
</header>
<div class="event-card">
    <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'evento');

    $conexao = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

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

    $imagem_evento = addslashes(file_get_contents($_FILES['imagem_evento']['tmp_name']));

    $sql = "INSERT INTO cadastro_evento (nome_evento, data_evento, horario, logradouro, numero, complemento, bairro, Uf, imagem_evento, descricao_evento)
            VALUES ('$nome_evento', '$data_evento', '$horario', '$logradouro', '$numero', '$complemento', '$bairro', '$uf', '$imagem_evento', '$descricao_evento')";

    if ($conexao->query($sql) === TRUE) {
        echo "Evento cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar evento: " . $conexao->error;
    }

    $conexao->close();
    ?>
</div>
</body>
</html>
