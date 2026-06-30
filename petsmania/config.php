<?php
// Configurações do banco de dados MySQL
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "pets_mania_db";

// Criar a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Definir charset para evitar erros de acentuação
$conn->set_charset("utf8mb4");
?>
