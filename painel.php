<?php
session_start();
//include('verifica_login.php');
include('conexao.php');
$consulta= "SELECT * FROM usuario WHERE cpf= CPF";
$con= mysqli_query($conn, $consulta);

?>
<DOCTYPE HTLM>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="painel.css" />
           
            
        </head>
            <body>
        
          
            <div class="flex-box container-box">
  <div class="content-box">

                <table  border="2">

                    <tr class="topo">
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>RG</td>
                        <td>EMAIL</td>
                        <td>SENHA</td>
                        <td>TELEFONE</td>
                    </tr>
                    <?php while($dado = $con -> fetch_array() ){?>
                    <tr>
                        <td><?php echo $dado["nome"];?></td>
                        <td><?php echo $dado["cpf"];?></td>
                        <td><?php echo $dado["rg"];?></td>
                        <td><?php echo $dado["email"];?></td>
                        <td><?php echo $dado["senha"];?></td>
                        <td><?php echo $dado["telefone"];?></td>
                        
                        
                    </tr>
                    <?php } ?>
                </table>
                <button onclick="window.location.href = 'editar.php'">EDITAR</button> 
                 <button onclick="window.location.href = 'logout.php'">SAIR</button>
  </div>
            </div>
            
               
                

    
            </body>
</html>
</DOCTYPE>