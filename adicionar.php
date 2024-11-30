<?php
session_start();
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$resultado_cadastro = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')"; 
$resultadoado_cadastro = mysqli_query($conn, $resultado_cadastro);
	header("Location: index.php");
?>