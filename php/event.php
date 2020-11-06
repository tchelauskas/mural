<?php require_once('../conexoes/conexao.php');?>


<?php
    $evento_id = $_GET['evento'];

    $sql_select = "SELECT * FROM curso where id_curso = $evento_id";

    $res = mysqli_query($conexao,$sql_select);

    $id            = [];
    $modulo        = [];
    $nome_curso    = [];
    $tipo_curso    = [];
    $data_postagem = [];
    $hora_postagem = [];
    $data_curso    = [];
    $hora_curso    = [];
    $criador       = [];
    $organizadores = [];
    $descricao     = [];
    $link          = [];
    $pais          = [];
    $estado        = [];
    $cidade        = [];
    $bairro        = [];
    $rua           = [];
    $numero        = [];
    $complemento   = [];
    $cep           = [];
    $certificado   = [];
    $carga_horaria = [];
    $imagem        = [];

    while($row = mysqli_fetch_assoc($res)){
        
        $data_ =  explode('-' ,$row['data_postagem']);
        $data_nova = $data_[2].'-'.$data_[1].'-'.$data_[0];

        $data_cur = explode('-' ,$row['data_curso']);
        $nova_data = $data_cur[2].'-'.$data_cur[1].'-'.$data_cur[0];
            
        array_push($id,$row['id_curso']);
        array_push($modulo,$row['presencial']);
        array_push($nome_curso,$row['nome']);
        array_push($tipo_curso,$row['tipo']);
        array_push($data_postagem,$data_nova);
        array_push($hora_postagem,$row['hora_postagem']);
        array_push($data_curso,$nova_data);
        array_push($hora_curso,$row['hora_curso']);
        array_push($criador,$row['criador']);
        array_push($organizadores,$row['organizadores']);
        array_push($descricao,$row['descricao']);
        array_push($link,$row['link']);
        array_push($pais,$row['pais']);
        array_push($estado,$row['estado']);
        array_push($cidade,$row['cidade']);
        array_push($bairro,$row['bairro']);
        array_push($rua,$row['rua']);
        array_push($numero,$row['numero']);
        array_push($complemento,$row['complemento']);
        array_push($cep,$row['cep']);
        array_push($certificado,$row['certificado']);
        array_push($carga_horaria,$row['carga_horaria']);
        array_push($imagem,$row['imagem']);
    }


?>
<?php include_once('../inserts/head.php');?>

</head>
<body>
<?php include_once('../inserts/menu.php');?>
<?php $data = new DateTime(); ?>
    <div class="container">
        <div class="row flex-column">
            <p>Postado em <?php echo $data_postagem[0].' as '.$hora_postagem[0];?></p>
            <p>Por <?php echo $criador[0];?></p>
        </div>

        <div class="row  ">
            
            <div class="container col-5">
                <h2 class="text-center"> <?php echo $nome_curso[0];?></h2>
                    <hr>

                <h4>Descrição</h4>
                <p class="text-justify " ><?php echo $descricao[0];?></p>
                
                    <p >Curso Oferecido por: <?php echo $organizadores[0]?></p>
                    <p> Carga Horaria: <?php echo $carga_horaria[0].' Horas'?></p>
                
            </div>
            
            <div class="container col-5 ml-2">
                <img src="<?php echo $imagem[0];?>" alt="imagem" width="450px" height="300px">
                <div class="row">
                    <div class="col">
                        <p>Disponivel: <?php echo $modulo[0]?></p>
                    </div>
                    <div class="col">
                        <p>Classificado como: <?php echo $tipo_curso[0]?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p>Iniciara dia: <?php echo $data_curso[0]?></p>
                    </div>
                    <div class="col">
                        <p>Horario do curso: <?php echo $hora_curso[0]?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Certificado: <?php echo $certificado[0]?></p>
                    </div>
                    <div class="col">
                        <p>Link: <?php echo $link[0];?></p>
                    </div>
                </div>

                <h4 class="text-center mt-2 mb-3">Localização</h4>


                <div class="row">
                    <div class="col">
                        <p>País: <?php echo $pais[0]?></p>
                    </div>
                    <div class="col">
                        <p>Estado: <?php echo $estado[0];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Cidade: <?php echo $cidade[0]?></p>
                    </div>
                    <div class="col">
                        <p>Bairro: <?php echo $bairro[0];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Rua: <?php echo $rua[0]?></p>
                    </div>
                    <div class="col">
                        <p>Numero: <?php echo $numero[0];?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Complemento: <?php echo $complemento[0]?></p>
                    </div>
                    <div class="col">
                        <p>Cep: <?php echo $cep[0];?></p>
                    </div>
                </div>

            </div>


        </div>


    </div>



    <footer class="page-footer mt-1 font-small text-white-50 bg-dark" style="position:relative;">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color: #504456">PostEduc © 2020 - Todos os direitos reservados</div>
        <!-- Copyright -->
    </footer>
    <!-- Fim do Footer -->

</body>
</html>