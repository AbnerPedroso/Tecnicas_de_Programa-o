<?php
include 'conexao.php';

if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    // Criar tabela clientes se não existir
    $sql_create = "CREATE TABLE IF NOT EXISTS clientes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        telefone VARCHAR(20),
        endereco VARCHAR(255)
    )";
    $conn->query($sql_create);

    // Inserir cliente
    $sql = "INSERT INTO clientes (nome, email, telefone, endereco) VALUES ('$nome', '$email', '$telefone', '$endereco')";
    if($conn->query($sql) === TRUE){
        echo "Cliente cadastrado com sucesso! <a href='listar_clientes.php'>Ver lista</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form method="POST" action="">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Telefone: <input type="text" name="telefone"><br><br>
        Endereço: <input type="text" name="endereco"><br><br>
        <input type="submit" name="salvar" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
