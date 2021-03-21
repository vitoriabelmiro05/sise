<?php
session_start();
include_once("conexao.php");

$CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$NOME = filter_input(INPUT_POST, 'NOME', FILTER_SANITIZE_STRING);
$EMAIL = filter_input(INPUT_POST, 'EMAIL', FILTER_SANITIZE_EMAIL);
$SENHA = filter_input(INPUT_POST, 'SENHA', FILTER_SANITIZE_STRING);
$RG = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_STRING);
$TELEFONE = filter_input(INPUT_POST, 'TELEFONE', FILTER_SANITIZE_STRING);
$FUNCAO = filter_input(INPUT_POST, 'FUNCAO', FILTER_SANITIZE_STRING);



$result_usuario = "INSERT INTO usuario (cpf,nome,email,senha,rg,telefone,funcao) VALUES ('$CPF','$NOME','$EMAIL','$SENHA','$RG','$TELEFONE','$FUNCAO')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: Login.html");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: Login.html");
}

