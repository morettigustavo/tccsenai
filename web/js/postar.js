let formPost = document.querySelector('#formPostar');

let map = document.querySelector("#map");
let password = document.querySelector("#area");
let customCheck = document.querySelector("#materia");

formEnt.addEventListener("submit", function(event){
    event.preventDefault();

    if(password.value == ""){
        password.focus();
    }else{
        jQuery.ajax({
            type: "POST",
            url: "php/login.php",
            data: usuario,
            success: function (retorno) {
                console.log(retorno);
                if(retorno == "true"){
                    window.location.href = "index.html";
                }else{
                    console.log("Email ou senha errados");
                }
            }
        });
    }
});

function go(){
    window.location.href = "index.html";
}