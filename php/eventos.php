<?php require_once('../conexoes/conexao.php');?>
<?php include_once('../inserts/head.php');?>

</head>
<body>
<?php include_once('../inserts/menu.php');?>

<a href="../php/cadastroevento.php"> volta la que deu ruim</a>
<br>

<?php 
    $sql_select = "SELECT * FROM curso";

    $resposta = mysqli_query($conexao,$sql_select);

    if($resposta){
   /* 
        $qts           = 0 ;
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

        while($row = mysqli_fetch_assoc($resposta)){

            array_push($id,$row['id_curso']);
            array_push($modulo,$row['presencial']);
            array_push($nome_curso,$row['nome']);
            array_push($tipo_curso,$row['tipo']);
            array_push($data_postagem,$row['data_postagem']);
            array_push($hora_postagem,$row['hora_postagem']);
            array_push($data_curso,$row['data_curso']);
            array_push($hora_postagem,$row['hora_curso']);
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

            $qts++;
        }
    */
        while($row = mysqli_fetch_assoc($resposta)){
           echo $row['id_curso'];
           echo "<br>";
           echo $row['presencial'];
           echo "<br>";
           echo $row['nome'];
           echo "<br>";
           echo $row['tipo'];
           echo "<br>";
           echo $row['data_postagem'];
           echo "<br>";
           echo $row['hora_postagem'];
           echo "<br>";
           echo $row['data_curso'];
           echo "<br>";
           echo $row['hora_curso'];
           echo "<br>";
           echo $row['criador'];
           echo "<br>";
           echo $row['organizadores'];
           echo "<br>";
           echo $row['descricao'];
           echo "<br>";
           echo $row['link'];
           echo "<br>";
           echo $row['pais'];
           echo "<br>";
           echo $row['estado'];
           echo "<br>";
           echo $row['cidade'];
           echo "<br>";
           echo $row['bairro'];
           echo "<br>";
           echo $row['rua'];
           echo "<br>";
           echo $row['numero'];
           echo "<br>";
           echo $row['complemento'];
           echo "<br>";
           echo $row['cep'];
           echo "<br>";
           echo $row['certificado'];
           echo "<br>";
           echo $row['carga_horaria'];
           echo "<br>";
           echo $row['imagem'];

           echo "<br><br><br><br>";

        
    
?>

<img src="<?php echo $row['imagem']?>" alt="">
<br>

    
    <?php
        }
    } else {
        echo "deu bom nao ein";
    }
    ?>

<?php include_once('../inserts/footer.php');?>