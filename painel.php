<?php
session_start();
//include('verifica_login.php');
include('conexao.php');

$consulta= "SELECT * FROM usuario WHERE cpf = '$_SESSION[CPF]'; ";
$con= mysqli_query($conn, $consulta);

?>
<DOCTYPE HTML>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/jquery.mask.min.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript" ></script>
        <script src="js/bootstrap-notify.min.js" type="text/javascript" ></script>
 
            <link rel="stylesheet" href="painel.css" />
           
            
        </head>

            <body>
                <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editar.php">Alterar Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="estagio.html">Estagio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
    </ul>
  </div>
</nav>
                </header>
        
          
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
               
              
  </div>
            </div>
            
               
                

    
            </body>
</html>
</DOCTYPE>