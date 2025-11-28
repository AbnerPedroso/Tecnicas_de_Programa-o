<?php
include 'conexao.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM vendedores WHERE id=$id");
    $vendedor = $result->fetch_assoc();
}

if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $comissao = $_POST['comissao'];

    $sql = "UPDATE vendedores SET nome='$nome', email='$email', telefone='$telefone', comissao='$comissao' WHERE id=$id";
    if($conn->query($sql) === TRUE){
        echo "Vendedor atualizado com sucesso! <a href='listar_vendedores.php'>Voltar</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Vendedor</title>
</head>
<body>
    <h1>Editar Vendedor</h1>
    <form method="POST" action="">
        Nome: <input type="text" name="nome" value="<?php echo $vendedor['nome']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $vendedor['email']; ?>" required><br><br>
        Telefone: <input type="text" name="telefone" value="<?php echo $vendedor['telefone']; ?>"><br><br>
        Comissão (%): <input type="number" step="0.01" name="comissao" value="<?php echo $vendedor['comissao']; ?>"><br><br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
    <br>
    <a href="listar_vendedores.php">Voltar</a>
</body>
</html>
