function valida_campos() {
    let nome = document.getElementById('nome').value;
    let nome_usuario = document.getElementById('nome_usuario').value;
    let nascimento = document.getElementById('nascimento').value;
    let genero = document.getElementById('genero').value;
    let telefone = document.getElementById('telefone').value;
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;

    console.log(nome);

    if(nome.length > 0 && email.length > 0 && senha.length > 0){
        document.getElementById("cadastrar-usuarios").style.visibility = "initial";

    }else{
        document.getElementById("cadastrar-usuarios").style.visibility = "hidden";
    }
}




