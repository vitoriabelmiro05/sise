<!DOCTYPE html>
<html>
<heade>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon_io (1)/favicon.ico" type="image/x-icon">

    <?php

    $id= filter_input(INPUT_GET, "id");
    $cpf= filter_input(INPUT_GET, "cpf");
    $nome= filter_input(INPUT_GET, "nome");
    $email= filter_input(INPUT_GET, "email");
    $senha= filter_input(INPUT_GET, "senha");
    $rg= filter_input(INPUT_GET, "rg");
    $telefone= filter_input(INPUT_GET, "telefone");
    
    
?>
</heade>
<body>
    <div id= "conteudo">
        <h1>Alterar dados</h1>
        <p>
            <form action="alterar.php">
                <input type="hidden" name= "id" value="<?php echo $id ?>"/>
                Nome: <input type="text" name= "nome" value="<?php echo $nome ?>"/> <br/>
                CPF: <input type="text" name= "cpf" value="<?php echo $cpf ?>"/> <br/>
                RG: <input type="text" name= "rg" value="<?php echo $rg ?>"/> <br/>
                Email: <input type="text" name= "email" value="<?php echo $email ?>"/> <br/>
                Telefone: <input type="text" name= "telefone" value="<?php echo $telefone ?>"/> <br/>
                Senha: <input type="text" name= "senha" value="<?php echo $senha ?>"/> <br/>
                <input type= "submit" value= "Alterar"/>

            </form>
        </p>
    </div>
</body>


</html>