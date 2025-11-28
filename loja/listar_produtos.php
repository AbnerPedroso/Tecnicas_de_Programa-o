<?php
include 'conexao.php';

// Criar tabela caso não exista
$sql_create = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL
)";
$conn->query($sql_create);

$result = $conn->query("SELECT * FROM produtos");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="cadastrar_produto.php">Cadastrar Novo Produto</a><br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['nome']."</td>
                        <td>".$row['preco']."</td>
                        <td>".$row['quantidade']."</td>
                        <td>
                            <a href='editar_produto.php?id=".$row['id']."'>Editar</a> |
                            <a href='deletar_produto.php?id=".$row['id']."'>Deletar</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum produto cadastrado</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
