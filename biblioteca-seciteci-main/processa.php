<?php
include("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$sql = "INSERT INTO usuarios (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Cadastro realizado com sucesso!</h2>";
} else {
  echo "Erro: " . $conn->error;
}

$conn->close();
?>