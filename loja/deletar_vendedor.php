<?php
include 'conexao.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM vendedores WHERE id=$id";
    if($conn->query($sql) === TRUE){
        echo "Vendedor deletado com sucesso! <a href='listar_vendedores.php'>Voltar</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
