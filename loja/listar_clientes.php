<?php
include 'conexao.php';

// Criar tabela caso não exista
$sql_create = "CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(255)
)";
$conn->query($sql_create);

$result = $conn->query("SELECT * FROM clientes");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="cadastrar_cliente.php">Cadastrar Novo Cliente</a><br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['nome']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['telefone']."</td>
                        <td>".$row['endereco']."</td>
                        <td>
                            <a href='editar_cliente.php?id=".$row['id']."'>Editar</a> |
                            <a href='deletar_cliente.php?id=".$row['id']."'>Deletar</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nenhum cliente cadastrado</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>
