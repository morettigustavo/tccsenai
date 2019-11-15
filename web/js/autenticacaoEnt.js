let formEnt = document.querySelector("#formEnt");

let email = $("#email");
let password = $("#password");
let customCheck = $("#customCheck");

let entradas = [email,password];

formEnt.addEventListener("submit", function(event){
    event.preventDefault();

    if(email.val() == ""){
        email.focus();
        email.addClass("is-invalid");
        $("#ivEmail").text("Email Vazio");
    }else if(password.val() == ""){
        password.focus();
        password.addClass("is-invalid");
        $("#ivSenha").text("Senha Vazia");
    }else{
        let usuario = {
            email: email.val(),
            password: password.val(),
            rememberMe: customCheck.prop( "checked" )
        };
    
        jQuery.ajax({
            type: "POST",
            url: "php/login.php",
            data: usuario,
            success: function (retorno) {
                if(retorno == "true"){
                    window.location.href = "index.php";
                }else{
                    console.log(retorno);
                    email.focus();
                    email.addClass("is-invalid");
                    $("#ivEmail").text("Email ou Senha inválidos");
                }
            }
        });
    }
});

$(function(){
    entradas.forEach(element => {
        element.change(function(){
            if(element.val() != ""){
                $("#ivEmail").text("");
                element.addClass("is-valid");
                element.removeClass("is-invalid");
            }else{
                element.removeClass("is-valid");
            }

            if(element.attr('id') == 'email'){
                if(element.val().indexOf('@') != -1 && element.val().substring(element.val().indexOf('@')).indexOf('.') != -1){
                    email.addClass("is-valid");
                    email.removeClass("is-invalid");
                    $("#ivEmail").text("");
                }else{
                    email.focus();
                    email.addClass("is-invalid");
                    email.removeClass("is-valid");
                    $("#ivEmail").text("Email Inválido");
                }
            }
        });
    });
});