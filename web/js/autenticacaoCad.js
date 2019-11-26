let formCad = document.querySelector("#formCad");

let primeiro_nome = $("#primeiro_nome");
let segundo_nome = $("#segundo_nome");

let email = $("#email");
let password = $("#password");
let password_again = $("#password_again");

formCad.addEventListener("submit", function (event) {
    event.preventDefault();
    let ver = true;
    entradas.forEach(element => {
        if(element.val() == ""){
            element.focus();
            element.addClass("is-invalid");
            ver = false;
        }
    });
    if(ver){
        let usuario = {
            primeiro_nome: primeiro_nome.val(),
            segundo_nome: segundo_nome.val(),
            email: email.val(),
        password: password.val(),
        password_again: password_again.val()
    };
    
    jQuery.ajax({
        type: "POST",
        url: "php/cadastrar.php",
        data: usuario,
        success: function (retorno) {
            if(retorno){
                window.location.href = "login.html";
                // location.reload();
            }else{
                console.log("Usuario não cadastrado");
            }
        }
    });
}
});

$(function(){
    primeiro_nome.keyup(function(){
        verificar(primeiro_nome);
    });

    segundo_nome.keyup(function(){
        verificar(segundo_nome);
    });

    email.keyup(function(){
        if(email.val().indexOf('@') != -1 && email.val().substring(email.val().indexOf('@')).indexOf('.') != -1){
            email.addClass("is-valid");
            email.removeClass("is-invalid");
        }else{
            email.addClass("is-invalid");
            email.removeClass("is-valid");
        }
    });

    password.keyup(function(){
        verificar(password);
        if(password_again.val() != ""){
            verificarSenhas();
        }
    });

    password_again.keyup(function(){
        verificarSenhas();
    });

    function verificarSenhas(){
        if(password.val() != password_again.val()){
            password_again.addClass("is-invalid");
            password_again.removeClass("is-valid");
        }else{
            password_again.removeClass("is-invalid");
            password_again.addClass("is-valid");
        }
    }

    function verificar(element){
        if(element.val() != ""){
            element.removeClass("is-invalid");
            element.addClass("is-valid");
        }else{
            element.removeClass("is-valid");
            element.addClass("is-invalid");
        }
    }
});

