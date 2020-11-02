<?php
    //lucas
    require_once("../conexoes/conexao.php");

    $_POST['imagem'];

    if(
    //presencial    
    isset($_POST['criador']) && isset($_POST['data_postagem']) && isset($_POST['hora_postagem']) && isset($_POST['modalidade']) && isset($_POST['nomeCurso']) && isset($_POST['tipo']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['orga']) && isset($_POST['cep']) && isset($_POST['pais']) && isset($_POST['estado'])&& isset($_POST['cidade']) && isset($_POST['bairro']) && isset($_POST['rua']) && isset($_POST['num']) && isset($_POST['comple']) && isset($_POST['descricao'])&& isset($_POST['carga_horaria']) && isset($_POST['certificado']) && isset($_POST['imagem']) 
    
    or 
    //online
    isset($_POST['criador']) && isset($_POST['data_postagem']) && isset($_POST['hora_postagem']) && isset($_POST['modalidade']) && isset($_POST['nomeCurso']) && isset($_POST['tipo']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['orga']) && isset($_POST['lin']) && isset($_POST['descricao'])&& isset($_POST['carga_horaria']) && isset($_POST['certificado']) && isset($_POST['imagem']) 

    or
    //semipresencial
    isset($_POST['criador']) && isset($_POST['data_postagem']) && isset($_POST['hora_postagem']) && isset($_POST['modalidade']) && isset($_POST['nomeCurso']) && isset($_POST['tipo']) && isset($_POST['data']) && isset($_POST['hora']) && isset($_POST['orga']) && isset($_POST['lin']) && isset($_POST['cep']) && isset($_POST['pais']) && isset($_POST['estado'])&& isset($_POST['cidade']) && isset($_POST['bairro']) && isset($_POST['rua']) && isset($_POST['num']) && isset($_POST['comple']) && isset($_POST['descricao'])&& isset($_POST['carga_horaria']) && isset($_POST['certificado']) && isset($_POST['imagem'])
    )
    {

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
        $imagem        = $_POST['imagem'];

        
    
        $sqlInsert = "INSERT INTO curso(presencial,nome,tipo,data_postagem,hora_postagem,data_curso,hora_curso,criador,organizadores,descricao,link,pais,estado,cidade,bairro,rua,numero,complemento,cep,certificado,carga_horaria,imagem) VALUES ('$presencial','$nome_curso','$tipo','$data_postagem','$hora_postagem','$data_curso','$hora_curso','$criador','$organizadores','$descricao','$link','$pais','$estado','$cidade','$bairro','$rua','$numero','$complemento','$cep','$certificado','$cargahoraria','$imagem'); ";

        $res = mysqli_query($conexao,$sqlInsert);

        if($res){
            echo "dados inseridos com sucesso!";
        } else {
            echo "erro no envio de dados";
        }

    } else {
        echo "Não foi enviado nenhum dado";
    }

mysqli_close()
?>