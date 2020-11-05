<?php
    //lucas
    $servidor = 'localhost';
    $usuario  = 'root';
    $senha    = '';
    $banco    = 'mural';

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conexao){
        die("a conexão falhou erro: " .mysqli_connect_error());
    }

?>