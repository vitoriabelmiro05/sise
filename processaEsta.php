
<?php
session_start();
include_once("conexao.php");


$NOME = filter_input(INPUT_POST, 'NOME', FILTER_SANITIZE_STRING);
$NOMEP = filter_input(INPUT_POST, 'NOMEMP', FILTER_SANITIZE_EMAIL);
$DATAI = filter_input(INPUT_POST, 'DATAI', FILTER_SANITIZE_STRING);
$DATAF = filter_input(INPUT_POST, 'DATAF', FILTER_SANITIZE_STRING);
$NOMEO = filter_input(INPUT_POST, 'NOMEO', FILTER_SANITIZE_STRING);
$MATRICULA = filter_input(INPUT_POST, 'MATRICULA', FILTER_SANITIZE_STRING);
$CARGA = filter_input(INPUT_POST, 'CARGA', FILTER_SANITIZE_STRING);



             

$result_usuario = "INSERT INTO estagio (nome_aluno,nome_empresa,inicio_estagio,fim_estagio,matricula,nome_orientador,carga_horaria, cpf_usuario) VALUES ('$NOME','$NOMEP','$DATAI','$DATAF','$MATRICULA','$NOMEO','$CARGA', '$_SESSION[CPF]')";
$result_usuario = mysqli_query($conn, $result_usuario);



if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>estagio cadastrado com sucesso</p>";
	header("Location: painel.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>estagio não foi cadastrado com sucesso</p>";
	header("Location: painel.php");
}



?>