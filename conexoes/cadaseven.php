<?php
    
    require_once("../conexoes/conexao.php");

    

    if(
    //presencial    
    isset($_POST['criador']) && isset($_POST['data_postagem']) && isset($_POST['hora_postagem']) && isset($_POST['modalidade']) && isset($_POST['nomeCurso']) && isset($_POST['tipo']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['orga']) && isset($_POST['cep']) && isset($_POST['pais']) && isset($_POST['estado'])&& isset($_POST['cidade']) && isset($_POST['bairro']) && isset($_POST['rua']) && isset($_POST['num']) && isset($_POST['comple']) && isset($_POST['descricao'])&& isset($_POST['carga_horaria']) && isset($_POST['certificado']) 
    
    or 
    //online
    isset($_POST['criador']) && isset($_POST['data_postagem']) && isset($_POST['hora_postagem']) && isset($_POST['modalidade']) && isset($_POST['nomeCurso']) && isset($_POST['tipo']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['orga']) && isset($_POST['lin']) && isset($_POST['descricao'])&& isset($_POST['carga_horaria']) && isset($_POST['certificado'])

    or
    //semipresencial
    isset($_POST['criador']) && isset($_POST['data_postagem']) && isset($_POST['hora_postagem']) && isset($_POST['modalidade']) && isset($_POST['nomeCurso']) && isset($_POST['tipo']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['orga']) && isset($_POST['lin']) && isset($_POST['cep']) && isset($_POST['pais']) && isset($_POST['estado'])&& isset($_POST['cidade']) && isset($_POST['bairro']) && isset($_POST['rua']) && isset($_POST['num']) && isset($_POST['comple']) && isset($_POST['descricao'])&& isset($_POST['carga_horaria']) && isset($_POST['certificado'])
    )
    {
        $nome_imagem = $_FILES['imagem']['name'];
        $temp_file = $_FILES['imagem']['tmp_name'];
        $destino = "../img/$nome_imagem";
        move_uploaded_file($temp_file,$destino);

        $criador       = $_POST['criador'];
        $data_postagem = $_POST['data_postagem'];
        $hora_postagem = $_POST['hora_postagem'];
        $presencial    = $_POST['modalidade'];
        $nome_curso    = $_POST['nomeCurso'];
        $tipo          = $_POST['tipo'];
        $data_curso    = $_POST['data'];
        $hora_curso    = $_POST['hora'];
        $organizadores = $_POST['orga']; 
        $link          = $_POST['lin'];
        $cep           = $_POST['cep'];
        $pais          = $_POST['pais'];
        $estado        = $_POST['estado']; 
        $cidade        = $_POST['cidade'];
        $bairro        = $_POST['bairro'];
        $rua           = $_POST['rua'];
        $numero        = $_POST['num'];
        $complemento   = $_POST['comple'];
        $descricao     = $_POST['descricao'];

        $cargahoraria  = $_POST['carga_horaria'];
        $certificado   = $_POST['certificado'];
        

        
    
        $sqlInsert = "INSERT INTO curso(presencial,nome,tipo,data_postagem,hora_postagem,data_curso,hora_curso,criador,organizadores,descricao,link,pais,estado,cidade,bairro,rua,numero,complemento,cep,certificado,carga_horaria,imagem) VALUES ('$presencial','$nome_curso','$tipo','$data_postagem','$hora_postagem','$data_curso','$hora_curso','$criador','$organizadores','$descricao','$link','$pais','$estado','$cidade','$bairro','$rua','$numero','$complemento','$cep','$certificado','$cargahoraria','../img/$nome_imagem'); ";

        $res = mysqli_query($conexao,$sqlInsert);

        if($res){
            echo "Dados inseridos com sucesso!";
            header('refresh: 2 ; ../php/eventos.php');
        } else {
            echo "Erro no envio de dados";
        }

    } else {
        echo "Formulario incompleto<br>
        <button><a href='../php/cadastroevento.php'>Voltar</a></button>";
    }

mysqli_close($conexao)
?>