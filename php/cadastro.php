<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>
    <!--    <script src="./bootstrap-4.5.3-dist/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" href="../css/estilocadastro.css">
        <script src="../js/cadastrousuario.js"></script>
    
        <title>PostEduc | Cadastro</title>


    </head>
    <body>
        <header>
            <?php 
            include_once('../inserts/head.php');
            ?>
        </header>

        <div class="container">
            <div class="col-md-5 mx-auto jumbotron bg-second">
                <h2>Seja Bem-vindo, Faça Aqui seu Cadastro</h2>
                <hr>

                <form class="form" action="processa.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input class="form-control" type="text" name="nome" id="nome" onkeyup="valida_campos()">
                    </div>

                    <div class="form-group">
                        <label for="nome_usuario">Nome de Usuário</label>
                        <input class="form-control" type="text" name="nome_usuario" id="nome_usuario" onkeyup="valida_campos()">
                    </div>

                    <div class="form-group">
                        <label for="nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" name="nascimento" id="nascimento" onkeyup="valida_campos()">
                    </div>

                    <div class="form-group">
                        <label for="genero">Genêro</label>
                        <input class="form-control" type="text" name="genero" id="genero" onkeyup="valida_campos()">
                    </div>
        
                    <div class="form-group">
                        <label for="telefone">Número de Celular ou Telefone</label>
                        <input class="form-control" type="number" name="telefone" id="telefone" onkeyup="valida_campos()">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email" onkeyup="valida_campos()">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input class="form-control" type="password" name="senha" id="senha" onkeyup="valida_campos()">
                    </div>
                    
                    <button type="submit" name="cadastrar" class="btn btn-success" id="cadastrar-usuarios">Cadastrar</button>    
                    <a href="telaLogin.php" name="voltar" class="btn btn-secondary"> Voltar </a>

                 </form>
        
            </div>

        </div>
        <footer>
            <?php 
            include_once('../inserts/footer.php');
            ?>
        </footer>
    </body>
</html>