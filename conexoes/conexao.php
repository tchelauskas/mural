<?php
    //lucas
    $servidor = 'localhost';
    $usuario  = 'root';
    $senha    = 'root';
    $banco    = 'mural';

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conexao){
        die("a conexão falhou erro: " .mysqli_connect_error());
    }

?>