<?php
session_start();

include('conexao.php');
 if(empty($_POST['CPF'] || empty($_POST['SENHA']))){
    //  <script>echo 'alert'</script>     //Colocar um alert
     header('Location: Login.html');
     exit();
 }
 
 $CPF = mysqli_real_escape_string($conn, $_POST['CPF']);
 $SENHA = mysqli_real_escape_string($conn, $_POST['SENHA']);


 if(isset( $CPF)){
	$CPF = preg_replace("/[^0-9]/", "",  $CPF);}

$sql= "SELECT * FROM usuario WHERE cpf = '{$CPF}'; ";
 $result= mysqli_query($conn, $sql);
 


 $row= mysqli_num_rows($result);

 if($row==1){
     $_SESSION['CPF']= $CPF;
     header('Location: painel.php');
     exit();

 } else{
    
    header('Location: Login.html');
    exit();

 }
 ?>