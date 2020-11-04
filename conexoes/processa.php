


<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>

    <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>
    <script src="./bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

</head>
<body class="container">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "eventos";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn){
            die("A conexão com o banco de dados falhou: " .mysqli_connect_error());
        }

        if(isset($_POST["nome"]) && isset($_POST["nome_usuario"]) && isset($_POST["nascimento"])
        && isset($_POST["genero"]) && isset($_POST["telefone"]) && isset($_POST["email"])
            && isset($_POST["senha"])){
                $nome = $_POST["nome"];
                $nome_usuario = $_POST["nome_usuario"];
                $nascimento = $_POST["nascimento"];
                $genero = $_POST["genero"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];

                $sql = "insert into cadastroUsuario (nome, nome_usuario, nascimento, genero, telefone, email, senha)
                values ('$nome', '$nome_usuario', '$nascimento', '$genero', '$telefone', '$email', '$senha')";
                $result = $conn->query($sql);
                $show = "select * from cadastroUsuario";
                $showResult = $conn->query($show);
                

            }else{
                $show = "select * from cadastroUsuario";
                $showResult = $conn->query($show);
            }
    
    mysqli_close($conn)

    ?>
    <?php while($row = $showResult->fetch_assoc()){ ?>
    <div class="table-responsive">
        <table class="mt-5 table table-striped table-bordered table-responsive">
            <tr>
                <th>Nome</th>
                <td><?php echo $row['nome'];?></td>
            <tr>
                <th>Nome de Usuário</th>
                <td><?php echo $row['nome_usuario'];?></td>
            </tr>
            <tr>
                <th>Data de Nascimento</th>
                <td><?php echo $row['nascimento'];?></td>
            </tr>
            <tr>
                <th>Genêro</th>
                <td><?php echo $row['genero'];?></td>
            </tr>
            <tr>
                <th>Número de Celular ou Telefone</th>
                <td><?php echo $row['telefone'];?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $row['email'];?></td>
            </tr>
            <tr>
                <th>Senha</th>
                <td><?php echo $row['senha'];?></td>
            </tr>    
            
        </table>
    <?php } ?>

        <a href="cadastro.php"><button class="mb-5 btn btn-primary btn=lg">Voltar a Tela de Cadastro</button></a>
    </div>
</body>
</html>