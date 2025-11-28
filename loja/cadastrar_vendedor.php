<?php
include 'conexao.php';

if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $comissao = $_POST['comissao'];

    // Criar tabela vendedores se não existir
    $sql_create = "CREATE TABLE IF NOT EXISTS vendedores (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        telefone VARCHAR(20),
        comissao DECIMAL(5,2)
    )";
    $conn->query($sql_create);

    // Inserir vendedor
    $sql = "INSERT INTO vendedores (nome, email, telefone, comissao) VALUES ('$nome', '$email', '$telefone', '$comissao')";
    if($conn->query($sql) === TRUE){
        echo "Vendedor cadastrado com sucesso! <a href='listar_vendedores.php'>Ver lista</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Vendedor</title>
</head>
<body>
    <h1>Cadastrar Vendedor</h1>
    <form method="POST" action="">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Telefone: <input type="text" name="telefone"><br><br>
        Comissão (%): <input type="number" step="0.01" name="comissao"><br><br>
        <input type="submit" name="salvar" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
