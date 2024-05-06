<?php

$servername = "db"; 
$username = "user"; 
$password = "password"; 
$database = "db"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida ao banco de dados!";
}

$conn->close();
?>
