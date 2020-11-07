<?php
session_start();
if(!$_SESSION['nome_usuario']) {
    header('Location: telalogin.php');
    exit();
    }
?>
