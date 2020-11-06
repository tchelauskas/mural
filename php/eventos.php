<?php require_once('../conexoes/conexao.php');?>
<?php include_once('../inserts/head.php');?>

</head>
<body>

<?php include_once('../inserts/menu.php');?>
<div class="container-fluid">
<div class="row mt-1" style=" background-color: #5044567e;">


<?php 
    $sql_select = "SELECT * FROM curso";

    $resposta = mysqli_query($conexao,$sql_select);

    if($resposta){

        while($row = mysqli_fetch_assoc($resposta)){
    
?>
            
            <div class=" col-3 mt-4 text-center">
                <p style="color:#504456" class="font-weight-bold"><?php echo $row['presencial'];?></p>
                <a href="./event.php?evento=<?php echo $row['id_curso'];?>"><img src="<?php echo $row['imagem'];?>" alt="imagem" width="230px" height="170px"></a>
                <p class="font-weight-bold mt-2" ><?php echo $row['nome'];?></p>
            </div>
           

  
    <?php
        
        }
        
        ?>
        </div>





        <?php
    } else {
        echo "Erro ao carregar os eventos tente novamente!
        <br>
        <button><a href='./index.php'>Voltar</a></button>";
    }
    ?>



    
</div>
   <!-- Inicio do Footer -->
   <footer class="page-footer mt-1 font-small text-white-50 bg-dark" style="position:relative;">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color: #504456">PostEduc © 2020 - Todos os direitos reservados</div>
        <!-- Copyright -->
    </footer>
    <!-- Fim do Footer -->

</body>
</html>
