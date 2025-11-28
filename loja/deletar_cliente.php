<?php
include 'conexao.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id=$id";
    if($conn->query($sql) === TRUE){
        echo "Cliente deletado com sucesso! <a href='listar_clientes.php'>Voltar</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
