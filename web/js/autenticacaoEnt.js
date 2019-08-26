let formEnt = document.querySelector("#formEnt");

let email = document.querySelector("#email");
let password = document.querySelector("#password");
let customCheck = document.querySelector("#customCheck");

formEnt.addEventListener("submit", function(event){
    event.preventDefault();

    if(email.value == ""){
        email.focus();
    }else if(password.value == ""){
        password.focus();
    }else{
        let usuario = {
            email: email.value,
            password: password.value,
            rememberMe: true
        };
    
        jQuery.ajax({
            type: "POST",
            url: "php/login.php",
            data: usuario,
            success: function (retorno) {
                console.log(retorno)
            }
        });
    }
});