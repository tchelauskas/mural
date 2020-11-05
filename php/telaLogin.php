<?php include_once('../inserts/head.php')?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <script src="../js/login.js"></script>
    <title>PostEduc | Seu divulgador de eventos educacionais </title>
</head> 
<body>
    <header>
        <?php 
        include_once('../inserts/menu.php');
        ?>
    </header>
    <div class="container">
        <div class="row">
                <div class="col-4 mx-auto pt-4 container-login">
                    <h3 class="mb-4">Entrar</h3>
                    <form method="post" action="autenticacao.php">

                        <div class="form-group">
                            <label class="label-form" for="email"> Nome de Usuário: </label>
                            <input class="form-control" type="text" name="nome_usuario" id="email">
                        </div>
 
                        <div class="form-group">
                            <label class="label-form" for="senha"> Senha:</label>
                            <input class="form-control" type="password" name="senha" id="senha">
                        </div>
                            <button type="submit" value = "Entrar" name="logar" class=" btn btn-primary mb-4"> Entrar </button>

                            <a href="cadastro.php " name="logar" class="btn btn-success mb-4"> Cadastrar </a>
                    </form>
                </div>
            </div>
        </div>
   </div>

   <footer>
   <?php 
        include_once('../inserts/footer.php');
    ?>
   </footer>
</body>
</html>