let formCad = document.querySelector("#formCad");

let primeiro_nome = $("#primeiro_nome");
let segundo_nome = $("#segundo_nome");

let email = $("#email");
let password = $("#password");
let password_again = $("#password_again");

let entradas = [primeiro_nome,segundo_nome,email,password,password_again];

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
                // window.location.href = "login.html";
                location.reload();
            }else{
                console.log("Usuario não cadastrado");
            }
        }
    });
}
});

$(function(){
    entradas.forEach(element => {
        element.change(function(){
            element.removeClass("is-invalid");
            element.addClass("is-valid");

            if(element.attr('id') == 'email'){
                if(element.val().indexOf('@') != -1 && element.val().substring(element.val().indexOf('@')).indexOf('.') != -1){
                    element.addClass("is-valid");
                }else{
                    element.addClass("is-invalid");
                }
            }
            if(element.attr('id') == 'password' || element.attr('id') == 'password_again'){
                if(password.val() != password_again.val()){
                    password_again.addClass("is-invalid");
                    password_again.removeClass("is-valid");
                }else{
                    password_again.addClass("is-valid");
                    password_again.removeClass("is-invalid");
                }
            }
        });
    });
});

