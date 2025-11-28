<?php
$servername = "localhost";
$username = "root"; // padrão do XAMPP
$password = "";     // padrão do XAMPP
$dbname = "loja";

// Criar conexão
$conn = new mysqli($servername, $username, $password);

// Checar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Criar banco de dados se não existir
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sql);

// Selecionar banco de dados
$conn->select_db($dbname);
?>

