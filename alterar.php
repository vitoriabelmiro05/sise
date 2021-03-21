<?php
//passando os dados
 $id= filter_input(INPUT_GET, "id");
 $cpf= filter_input(INPUT_GET, "cpf");
 $nome= filter_input(INPUT_GET, "nome");
 $email= filter_input(INPUT_GET, "email");
 $senha= filter_input(INPUT_GET, "senha");
 $rg= filter_input(INPUT_GET, "rg");
 $telefone= filter_input(INPUT_GET, "telefone");

//abrindo a conexao
 $link= mysqli_connect("108.179.253.195", "proje500_sise","#.Ju[H]Icwm+", "proje500_sise");

//testando a conexao
 if($link){
     //alterando os dados
     $query = mysqli_query($link, "update usuario set cpf= '$cpf', email = '$email', senha = '$senha', rg= '$rg', nome = '$nome', telefone= '$telefone' where id = '$id';" );
     if($query){
         header("Location: alterar.php");
         
     }else{
         die("Erro: ". mysqli_error($link));
             
    }


 } else {
     die("Erro: ". mysqli_error($link));
 }
