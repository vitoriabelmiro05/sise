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
//  $NOME = mysqli_real_escape_string($conn, $_POST['NOME']); 
//  $RG = mysqli_real_escape_string($conn, $_POST['RG']); 
//  $EMAIL = mysqli_real_escape_string($conn, $_POST['EMAIL']); 
//  $FUNCAO = mysqli_real_escape_string($conn, $_POST['FUNCAO']); 
//  $TELEFONE = mysqli_real_escape_string($conn, $_POST['TELEFONE']); 

 $query= "select * from usuario where cpf= '{$CPF}' and senha = '{$SENHA}'; ";
 $result= mysqli_query($conn, $query);
 //$sql = mysqli_fetch_assoc($result);
 
 //$NOME = $sql['NOME'];

 $row= mysqli_num_rows($result);
 //echo $row; exit;
 if($row==1){
     $_SESSION['CPF']= $CPF;
     header('Location: painel.php');
     exit();

 } else{
    
    header('Location: Login.html');
    exit();

 }