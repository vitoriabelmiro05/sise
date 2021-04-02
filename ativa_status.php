<?php
session_start();
include_once("conexao.php");

$result_s = "UPDATE usuario SET visibilidade = '1' WHERE (cpf = '$_SESSION[CPF]');";
$result_s = mysqli_query($conn, $result_s);

if($result_s){
    header("Location: painel.php");
    
}else{
    die("Erro: ". mysqli_error($conn));
        
}

?>