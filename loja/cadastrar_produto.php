<?php
include 'conexao.php';

if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    // Criar tabela produtos se não existir
    $sql_create = "CREATE TABLE IF NOT EXISTS produtos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        quantidade INT NOT NULL
    )";
    $conn->query($sql_create);

    // Inserir produto
    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade')";
    if($conn->query($sql) === TRUE){
        echo "Produto cadastrado com sucesso! <a href='listar_produtos.php'>Ver lista</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form method="POST" action="">
        Nome: <input type="text" name="nome" required><br><br>
        Preço: <input type="number" step="0.01" name="preco" required><br><br>
        Quantidade: <input type="number" name="quantidade" required><br><br>
        <input type="submit" name="salvar" value="Cadastrar">
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
