
<?php
session_start();
?> 
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>s
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon_io (1)/favicon.ico" type="image/x-icon">
    <script type="text/javascript">
    $(document).ready(function(){
      $('#TELEFONE').mask('(00) 0000-0000');
     $('#CPF').mask('000.000.000-00');
      $('#RG').mask('00000.000-0'); 
      
     });
</script>
    
    <title>Sistema de estágio</title>
    <style>
         body {
           background-color: #f18322;
            font-family: cursive;
            font-size: 20px;
            text-align: justify;
            
            
        }
input[type=text], select {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 15px;
  box-sizing: border-box;
}
        input[type=password], select {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 15px;
  box-sizing: border-box;
}
        input[type=email], select {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 15px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #028c8c;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 15px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
         #menu ul li a:hover {
    background-color:#D6D6D6;
    color: #6D6D6D;
    border-bottom:3px solid #f18322;
}
        #menu ul {
    padding:0px;
    margin:0px;
    background-color:#000000;
    list-style:none;
                         

}
        #menu ul li { display: inline; }
        #menu ul li a {
    padding: 2px 50px;
    display: inline-block;

    /* visual do link */
    background-color:#000000;
    color: #ffffff;
    text-decoration: none;
    border-bottom:3px solid #EDEDED;
}
        .container{
            width: 900px;
            background-color: black;
             border-radius: 40px;
                        
            display: flex;
  align-items: center;
  justify-content: center;
        }
</style>
<body>
  
    <?php
 if(isset($_SESSION["msg"])):
   print $_SESSION["msg"];
   unset($_SESSION["msg"]);
endif; 
?>

 <nav id="menu">
    <ul>
       
        <li><a href="index.html">Página Inicial</a></li>
        <li><a href="Login.html">Login</a></li>
       
    </ul>
</nav>
    <p>              </p>
   
<div class="container" >
    <img src="imagens/LOGO.png" style="width: 300px;">

    
  <form method="POST" action="processa.php">
    <label style="font-size: 30px; color: white;">Cadastre-se</label>
    <input type="text" id="NOME" name="NOME" placeholder="Nome Completo">

   <input type="email" id="EMAIL" name="EMAIL" placeholder="E-mail">
    <input type="text" id="RG" name="RG" placeholder="RG">
 <input type="text" id="CPF" name="CPF" placeholder="CPF">
<input type="text" id="TELEFONE" name="TELEFONE" placeholder="Telefone">
 
    <input type="password" id="SENHA" name="SENHA" placeholder="Senha"  minlength="5" maxlength="10" required>
    
  <select id="FUNCAO" name="FUNCAO">
      <option value="professor">Professor Orientador</option>
      <option value="chefe">Chefe do Departamento</option>
      <option value="coordenador">Coordenador</option>
      <option value="setor de estagio">responsavel pelo setor de Estágio</option>
    </select>
  
  
    <input type="submit" value="ENVIAR" placeholder="ENVIAR">
  </form>
</div>

</body>
</html>

