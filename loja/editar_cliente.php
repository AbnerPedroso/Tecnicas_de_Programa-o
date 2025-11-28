<?php
include 'conexao.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM clientes WHERE id=$id");
    $cliente = $result->fetch_assoc();
}

if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', endereco='$endereco' WHERE id=$id";
    if($conn->query($sql) === TRUE){
        echo "Cliente atualizado com sucesso! <a href='listar_clientes.php'>Voltar</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form method="POST" action="">
        Nome: <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $cliente['email']; ?>" required><br><br>
        Telefone: <input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>"><br><br>
        Endereço: <input type="text" name="endereco" value="<?php echo $cliente['endereco']; ?>"><br><br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
    <br>
    <a href="listar_clientes.php">Voltar</a>
</body>
</html>
