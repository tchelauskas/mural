
<?php include_once('../inserts/head.php'); ?>

<script async src="../js/scriptcadastro.js"></script>
<link rel="stylesheet" type="text/css" href="../css/estilocadastro.css">
<title>cadastro-evento</title>
</head>
<body>
<?php 
	$data = new DateTime();
?>



<form action="../conexoes/cadaseven.php" method="post">
	<input type="hidden" name="criador" value="<?php  echo "Lucas";?>">
	<input type="hidden" name="data_postagem" value="<?php echo $data -> format('Y-m-d'); ?>">
	<input type="hidden" name="hora_postagem" value="<?php echo $data -> format('H:i:s') ;?>">


	<label for="modalidade" >Esse curso será ministrado de qual forma: </label>

		<input type="radio" name="modalidade" id="presencial" value="presencial" onclick="pre()">Presencial

		<input type="radio" name="modalidade" id="online" value="online" onclick="on()">Online
		
		<input type="radio" name="modalidade" id="semipresencial" value="semipresencial" onclick="semi()">Semipresencial




	<label id="nomeCursolabel" class="escondido" for="nomeCurso" > Digite o Nome do curso: </label>
		<input class="escondido" type="text" name="nomeCurso" id="nomeCurso">
		


	
	<label id="tipolabel" class="escondido" for="tipo">Qual categoria seu curso mais se enquadra: </label>
		<select class="escondido" name="tipo" id="tipo">
			<option value="vazio"> </option>
			<option value="exatas">Exatas</option>
			<option value="musica">Musica</option>
			<option value="idiomas">Idiomas</option>
			<option value="jogos">Jogos</option>
			<option value="desenho">Desenho</option>
			<option value="palestra">Palestra</option>
			<option value="esporte">Esporte</option>
			<option value="outros">Outros</option>
		</select>
		



	<label id="datalabel" class="escondido" for="data">Data: </label>
		<input class="escondido" type="date" name="data" id="data">


	<label id="horalabel" class="escondido" for="hora">Horario: </label>
		<input class="escondido" type="time" name="hora" id="hora">



	<label id="orgalabel" class="escondido" for="orga">Quem são os organizadores: </label>
		<input class="escondido" type="text" name="orga" id="orga">


	<label id="linlabel" class="escondido" for="lin">Compartilhe o link de onde acontecerá seu evento online: </label>
		<input class="escondido" type="url" name="lin" id="lin">


		
	<label id="ceplabel" class="escondido" for="cep">CEP: </label>
		<input class="escondido" type="text" name="cep" id="cep">


	<label id="paislabel" class="escondido" for="pais">País: </label>
		<input class="escondido" type="text" name="pais" id="pais">


	<label id="estadolabel" class="escondido" for="estado">Estado: </label>
		<input class="escondido" type="text" name="estado" id="estado">


	<label id="cidadelabel" class="escondido" for="cidade">Cidade: </label>
		<input class="escondido" type="text" name="cidade" id="cidade">


	<label id="bairrolabel" class="escondido" for="bairro">Bairro: </label>
		<input class="escondido" type="text" name="bairro" id="bairro">


	<label id="rualabel" class="escondido" for="rua">Rua: </label>
		<input class="escondido" type="text" name="rua" id="rua">


	<label id="numlabel" class="escondido" for="num">Numero: </label>
		<input class="escondido" type="text" name="num" id="num">

		
	<label id="complelabel" class="escondido" for="comple">Complemento: </label>
		<input class="escondido" type="text" name="comple" id="comple">



	<label id="descricaolabel" class="escondido" for="descricao"> Descreva sua atividade: </label>
		<textarea class="escondido" name="descricao" id="descricao" cols="30" rows="10"></textarea>




<button class="escondido" type="submit" id="botao"> Enviar </button>

</form>



<?php include_once('../inserts/footer.php');?>