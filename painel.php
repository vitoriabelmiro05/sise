<?php
session_start();
include('verifica_login.php');

?>
<h2>Olá, <?php echo  $_SESSION['CPF']; ?></h2>
<h2><a href="logout.php">sair</a></h2>