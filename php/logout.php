<?php
session_start();
header('Location: telaLogin.php');
unset($_SESSION['nome_usuario']);
exit();

#unset($_SESSION['nome_usuario']);