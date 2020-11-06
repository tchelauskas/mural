<?php 
include_once('../inserts/head.php'); 
?>



<script async src="../js/scriptcadastro.js"></script>
<link rel="stylesheet" type="text/css" href="../css/estilocadastro.css">
<title>PostEduc | Seu divulgador de eventos educacionais </title>

</head>
<body>



<?php
	 
	include_once('../inserts/menu.php'); 
	
	$data = new DateTime();
?>

<div class="conteiner font-weight-bold">
	
	<form action="../conexoes/cadaseven.php" enctype="multipart/form-data" method="post" class="cdevento">
	<h3 class="mb-5">Você deve preencher todos os campos a seguir:</h3>
		<input type="hidden" name="criador" value="<?php  echo "";?>">
		<input type="hidden" name="data_postagem" value="<?php echo $data -> format('Y-m-d'); ?>">
		<input type="hidden" name="hora_postagem" value="<?php echo $data -> format('H:i:s') ;?>">


		<div class="form-row mb-4">
			<label class="mr-3 "for="modalidade" >Esse curso será ministrado de qual forma: </label>

			<label class="form-check-label mr-3 " for="modalidade"><input type="radio" class="mr-2 " name="modalidade" id="presencial" value="presencial" onclick="pre()">Presencial</label>

			<label class="form-check-label mr-3 " for="modalidade"><input type="radio" class="mr-2 " name="modalidade" id="online" value="online" onclick="on()">Online</label>
				
			<label class="form-check-label mr-3 " for="modalidade"><input type="radio" class="mr-2" name="modalidade" id="semipresencial" value="semipresencial" onclick="semi()"> Semipresencial</label>
		</div>

		<div class="form-row">
			<div class="form-group col-sm">
				<label id="nomeCursolabel" class="escondido" for="nomeCurso" > Digite o Nome do curso: </label>
					<input class="escondido form-control" type="text" name="nomeCurso" id="nomeCurso">
			</div>	
		</div>	

		<div class="form-row">	
			<div class="form-group col-sm-7">
				<label id="tipolabel" class="escondido" for="tipo">Qual categoria seu curso mais se enquadra: </label>
					<select class="escondido form-control" name="tipo" id="tipo">
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
			</div>
			<div class="form-group col-sm-3 ml-5">	
			
				<label id="imagemlabel" class="escondido " for="imagem">Coloque uma imagem para o curso:</label>
			
					<input class="escondido" type="file" id="imagem" name="imagem">
			</div>
		</div>	
			

		<div class="form-row ">	
		
			<div class="form-group col-sm-4">
				<label id="orgalabel" class="escondido" for="orga">Quem são os organizadores: </label>
					<input class="escondido col-8" type="text" name="orga" id="orga">
			</div>

			<div class="form-group col-sm-4">
			<label class="escondido" id="carga_horarialabel" for="carga_horaria" >Qual a carga horaria do curso: </label>
				<div class="cert" >
						<input class="escondido col-8" type="number" name="carga_horaria" id="carga_horaria">
				</div>
			</div>
			
			<div class="form-group col-sm-4" >
				
					<label id="certificadolabel" class="escondido " for="certificado">O curso possui certificado: </label>
				<div class="form-row col-8 mr-5">
					<label class="escondido mr-5" for="certificado" id="span1"><input class="escondido " type="radio" name="certificado" id="sim" value="sim">Sim</label>

					<label class="escondido" for="certificado" id="span2"><input class="escondido " type="radio" name="certificado" id="nao" value="não">Não</label>
				</div>
			</div>
		</div>	

		<div class="form-row">
			<div class="form-group col">
				<label id="linlabel" class="escondido" for="lin">Compartilhe o link de onde acontecerá seu evento online: </label>
					<input class="escondido form-control" type="url" name="lin" id="lin" placeholder="https://">
			</div>
		</div>


		<div class="form-row d-flex justify-content-center"> 
		
			<div class="form-group col-sm-4  ">
				<label id="datalabel" class="escondido " for="data">Data: </label>
					<input class="escondido " type="date" name="data" id="data">
			</div>
			<div class="form-group  col-sm-2 ">
				<label id="horalabel" class="escondido " for="hora">Horario: </label>
					<input class="escondido  " type="time" name="hora" id="hora">
			</div>
			
		</div>


		<label id="linlabel" class="escondido" for="lin">Compartilhe o link de onde acontecerá seu evento online: </label>
			<input class="escondido" type="url" name="lin" id="lin">


			
			<div class="form-row ">
		
		<div class="form-group col-sm-3">
			<label id="ceplabel" class="escondido" for="cep">CEP: </label>
				<input class="escondido" type="text" name="cep" id="cep">
		</div>
		
		<div class="form-group col-sm-3">
			<label id="paislabel" class="escondido" for="pais">País: </label>
				<input class="escondido" type="text" name="pais" id="pais">
		</div>

		<div class="form-group col-sm-3">
			<label id="estadolabel" class="escondido" for="estado">Estado: </label>
				<input class="escondido" type="text" name="estado" id="estado">
		</div>

		<div class="form-group col-sm-3">
			<label id="cidadelabel" class="escondido" for="cidade">Cidade: </label>
				<input class="escondido" type="text" name="cidade" id="cidade">
		</div>
	</div>

	<div class="form-row ">
		
		<div class="form-group col-sm-3">
			<label id="bairrolabel" class="escondido" for="bairro">Bairro: </label>
				<input class="escondido" type="text" name="bairro" id="bairro">
		</div>
		
		<div class="form-group col-sm-3">
			<label id="rualabel" class="escondido" for="rua">Rua: </label>
				<input class="escondido" type="text" name="rua" id="rua">
		</div>

		<div class="form-group col-sm-3">
			<label id="numlabel" class="escondido" for="num">Numero: </label>
				<input class="escondido" type="text" name="num" id="num">
		</div>	

		<div class="form-group col-sm-3">
			<label id="complelabel" class="escondido" for="comple">Complemento: </label>
				<input class="escondido" type="text" name="comple" id="comple">
		</div>

	</div>

	<div class="form-row ">
		<label id="descricaolabel" class="escondido" for="descricao"> Descreva sua atividade: </label>
			<textarea class="escondido form-control" name="descricao" id="descricao" cols="5" rows="10"></textarea>
	</div>


	<div class="form-row col-6 mx-auto mt-5 mb-5 ">
		<button class="escondido btn btn-primary btn-block btn-lg" type="submit" id="botao"> Enviar </button>
	</div>
	</form>
</div>


<?php include_once('../inserts/footer.php');?>