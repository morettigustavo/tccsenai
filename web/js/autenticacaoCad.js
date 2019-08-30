let formCad = document.querySelector("#formCad");

let primeiro_nome = document.querySelector("#primeiro_nome");
let segundo_nome = document.querySelector("#segundo_nome");

let email = document.querySelector("#email");
let password = document.querySelector("#password");
let password_again = document.querySelector("#password_again");

formCad.addEventListener("submit", function (event) {
    event.preventDefault();

    if (primeiro_nome.value == ""){
        primeiro_nome.focus();
    }else if (segundo_nome.value == ""){
        segundo_nome.focus();
    }else if (email.value == ""){
        email.focus();
    }else if(password.value == ""){
        password.focus();
    }else if(password_again.value == ""){
        password_again.focus();
    }else if(password.value != password_again.value){
        alert("As senha não são iguais");
        password_again.focus();
    }else{
        let usuario = {
            primeiro_nome: primeiro_nome.value,
            segundo_nome: segundo_nome.value,
            email: email.value,
            password: password.value,
            password_again: password_again.value
        };
    
        jQuery.ajax({
            type: "POST",
            url: "php/cadastrar.php",
            data: usuario,
            success: function (retorno) {
                if(retorno){
                    window.location.href = "login.html";
                }else{
                    console.log("Usuario não cadastrado");
                }
            }
        });
    }
});


