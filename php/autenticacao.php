<?php
    session_start();
    require_once("../conexoes/conexao.php");

    

    if (isset($_POST['nome_usuario'], $_POST['senha'])) {
        $nome_usuario = mysqli_real_escape_string($conexao, $_POST['nome_usuario']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        
        
        if (empty($nome_usuario) || empty($senha)) {
            echo "<strong>Todos os campos são obrigatórios!</strong>";
            echo "<a href='telaLogin.php'><br><button>Voltar</button></a>";
            exit();
            
        } else {

            $query = "select * from cadastro_usuario where nome_usuario = '$nome_usuario' and senha = '$senha';";
            
            $result = mysqli_query($conexao, $query);

            $row = mysqli_num_rows($result);           
        }   
    }

    if($row ==1) {
        $_SESSION['nome_usuario'] = $nome_usuario;  
        header('Location: cadastroevento.php');
        exit();

    }  else {
        echo "<strong>Nome de usuário e/ou senha inválidos</strong>";
        echo "<a href='telaLogin.php'><br><button>Voltar</button></a>";
        exit();                  

    }
?>
