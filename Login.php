<?php
session_start();

include('conexao.php');
 if(empty($_POST['CPF'] || empty($_POST['SENHA']))){
    //  <script>echo 'alert'</script>     //Colocar um alert
    $CPF = mysqli_real_escape_string($conn, $_POST['CPF']);
    $SENHA = mysqli_real_escape_string($conn, $_POST['SENHA']);
     header('Location: Login.html');
     exit();
 }
 




 $query= "SELECT CPC FROM usuario WHERE cpf = '$CPF'";
 $result= mysqli_query($conn, $query);
 

 $row= mysqli_num_rows($result);
 //echo $row; exit;
 if($row==1){
    $_SESSION['logged'] = true;
     $_SESSION['CPF']= $CPF;
     if(strpos($_SERVER['REQUEST_URI'], '?success'))
     header('Location: painel.php');
     exit();

 } else{
    
    header('Location: Login.html');
    exit();

 }

   
