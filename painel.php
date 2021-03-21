<?php
session_start();
include('verifica_login.php');
//Que atire a primeira pedra, aquele q nunca pecou
//sjioadasjisdaokasdodsa
?>
<h2>Olá, <?php echo  $_SESSION['CPF']; ?></h2>
<h2><a href="logout.php">sair</a></h2>
