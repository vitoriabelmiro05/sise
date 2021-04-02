<?php
session_start();
include_once("conexao.php");

$result_status = "UPDATE usuario SET visibilidade = '0' WHERE (cpf = '$_SESSION[CPF]');";
$result_status = mysqli_query($conn, $result_status);

if($result_status){
    header("Location: Login.html");
    
}else{
    die("Erro: ". mysqli_error($conn));
        
}

?>