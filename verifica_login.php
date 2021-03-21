<?php
//session_start();
if(!$_SESSION['CPF']){
    header('Location: Login.html');
    exit;
}
?>