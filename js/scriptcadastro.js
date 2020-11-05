

// aqui fazemos a coleta de todos os campos para selecionar quem vai aparecer
let nomeCurso         = window.document.getElementById("nomeCurso");
let tipo              = window.document.getElementById("tipo");
let data              = window.document.getElementById("data");
let hora              = window.document.getElementById("hora");
let orga              = window.document.getElementById("orga");
let lin               = window.document.getElementById("lin");
let cep               = window.document.getElementById("cep");
let pais              = window.document.getElementById("pais");
let estado            = window.document.getElementById("estado");
let cidade            = window.document.getElementById("cidade");
let bairro            = window.document.getElementById("bairro");
let rua               = window.document.getElementById("rua");
let num               = window.document.getElementById("num");
let comple            = window.document.getElementById("comple");
let descricao         = window.document.getElementById("descricao");
let cargahoraria      = window.document.getElementById("carga_horaria");
let sim               = window.document.getElementById("sim");
let nao               = window.document.getElementById("nao");
let span1             = window.document.getElementById("span1");
let span2             = window.document.getElementById("span2");
let botao             = window.document.getElementById("botao");
let imagem            = window.document.getElementById("imagem");
let nomeCursolabel    = window.document.getElementById("nomeCursolabel");
let tipolabel         = window.document.getElementById("tipolabel");
let datalabel         = window.document.getElementById("datalabel");
let horalabel         = window.document.getElementById("horalabel");
let orgalabel         = window.document.getElementById("orgalabel");
let linlabel          = window.document.getElementById("linlabel");
let ceplabel          = window.document.getElementById("ceplabel");
let paislabel         = window.document.getElementById("paislabel");
let estadolabel       = window.document.getElementById("estadolabel");
let cidadelabel       = window.document.getElementById("cidadelabel");
let bairrolabel       = window.document.getElementById("bairrolabel");
let rualabel          = window.document.getElementById("rualabel");
let numlabel          = window.document.getElementById("numlabel");
let complelabel       = window.document.getElementById("complelabel");
let descricaolabel    = window.document.getElementById("descricaolabel");
let certificadolabel  = window.document.getElementById("certificadolabel"); 
let cargahorarialabel = window.document.getElementById("carga_horarialabel");
let imagemlabel       = window.document.getElementById("imagemlabel");

//aqui colocamos todas as variaveis em um array para poder varrer elas nas funçoes

let variaveis = [nomeCurso,tipo,data,hora,orga,lin,cep,pais,estado,cidade,
    bairro,rua,num,comple,descricao,botao,sim,nao,span1,span2,cargahoraria,
    imagem,nomeCursolabel,tipolabel,datalabel,horalabel,orgalabel,linlabel,
    ceplabel,paislabel,estadolabel,cidadelabel,bairrolabel,rualabel,numlabel,
    complelabel,descricaolabel,cargahorarialabel,certificadolabel,imagemlabel];




function pre(){
    // nessa funçao só mostramos os campos necessarios para aulas PRESENCIAIS
    
    for(let i = 0 ; i < variaveis.length ; i++){
        if(variaveis[i] == lin || variaveis[i] == linlabel){
            variaveis[i].style = "display:none";
        } else {
            variaveis[i].style = "display:block";
        }
    }
}



function on(){
    // nessa funçao só mostramos os campos necessarios para aulas ONLINE

    for(let i = 0 ; i < variaveis.length ; i++){
        if(variaveis[i] == cep || variaveis[i] == ceplabel || variaveis[i] == pais || variaveis[i] == paislabel || variaveis[i] == estado || variaveis[i] == estadolabel || variaveis[i] == cidade || variaveis[i] == cidadelabel || variaveis[i] == bairro || variaveis[i] == bairrolabel || variaveis[i] == rua || variaveis[i] == rualabel || variaveis[i] == num || variaveis[i] == numlabel || variaveis[i] == comple || variaveis[i] == complelabel ){
            variaveis[i].style = "display:none";
        } else {
            variaveis[i].style = "display:block";
        }
    }
}



function semi(){
    // nessa funçao só mostramos os campos necessarios para aulas SEMIPRESENCIAL
  
    for(let i = 0 ; i < variaveis.length ; i++){
        variaveis[i].style = "display:block"
    }
}
 
