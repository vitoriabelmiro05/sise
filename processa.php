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


//verificação de cpf valido
if(isset( $CPF)){
	$CPF = preg_replace("/[^0-9]/", "",  $CPF);
	$CPF = str_pad( $CPF, 11, '0', STR_PAD_LEFT);
	$RG = preg_replace("/[^0-9]/", "",  $RG);
	$RG = str_pad( $RG, 8, '0', STR_PAD_LEFT);
	$TELEFONE = preg_replace("/[^0-9]/", "",  $TELEFONE);
	$TELEFONE = str_pad( $TELEFONE, 11, '0', STR_PAD_LEFT);
	


   if (strlen($CPF) != 11) {
	   $erro= 1;
	   $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado, CPF invalido</p>";
	   echo "<script type='javascript'>alert('CPF invalido');";
	   header("Location: cadastro.php");
   }
  
   else if ( $CPF== '00000000000' || 
		$CPF == '11111111111' || 
		$CPF == '22222222222' || 
		$CPF == '33333333333' || 
		$CPF == '44444444444' || 
		$CPF == '55555555555' || 
		$CPF == '66666666666' || 
		$CPF == '77777777777' || 
		$CPF == '88888888888' || 
		$CPF == '99999999999') {
	   $erro= 1;
	   $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado, CPF invalido</p>";
			echo "<script type='javascript'>alert('CPF invalido');";
			header("Location: cadastro.php");

	} else {   
	   for ($t = 9; $t < 11; $t++) {

		   for ($d = 0, $c = 0; $c < $t; $c++) {
			   $d +=  $CPF{$c} * (($t + 1) - $c);
		   }
		   $d = ((10 * $d) % 11) % 10;
		   if ( $CPF{$c} != $d) {
				$erro= 1;
			$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado, CPF invalido</p>";
			
			
	header("Location: cadastro.php");

		   }
	   }
	   $erro= 0;
   } 
}

  


$result_usuario = "INSERT INTO usuario (cpf,nome,email,senha,rg,telefone,funcao,visibilidade) VALUES ('$CPF','$NOME','$EMAIL','$SENHA','$RG','$TELEFONE','$FUNCAO', '1')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Usuário não foi cadastrado, erro de conexao. </div>";
	
	header("Location: cadastro.php");
}else{
	$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>
	<h4 class='alert-heading'>Usuário cadastrado com  sucesso!</h4>
  </div>";

    //echo "javascript:window.location='index.php';</script>";
	header("Location: Login.html");
}

