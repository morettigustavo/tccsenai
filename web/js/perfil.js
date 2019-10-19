let primeiro = $('#primeiro_nome');
let segundo = $('#segundo_nome');
let email = $('#email');
let portifolio = $('#portifolio');

$(function user() {
    let tipo = {
        tipo : "list"
    };

    jQuery.ajax({
        url: "php/usuarios.php",
        type: "POST",
        data: tipo,
        success: function (retorno) {
            console.log(retorno);
            let user = JSON.parse(retorno);

            primeiro.val(user.primeiro_nome);
            segundo.val(user.segundo_nome);
            email.val(user.email);
            portifolio.val(user.portifolio);
        }
    });
});

let btnAtualizar = document.querySelector('#btnEnviar');

btnAtualizar.addEventListener("click", function (event) {
    event.preventDefault();

    if(primeiro.val() == ""){
        primeiro.focus();
    }else if(segundo.val() == ""){
        segundo.focus();
    }else if(email.val() == ""){
        email.focus();
    }else{
        let usuario = {
            primeiro_nome : primeiro.val(),
            segundo_nome : segundo.val(),
            email : email.val(),
            portifolio : portifolio.val(),
            tipo : "atualizar"
        };

        jQuery.ajax({
            type: "POST",
            url: "php/usuarios.php",
            data: usuario,
            success: function (retorno) {
                location.reload();
            }
        });
    }
});

$("#img_perfil").hover(function(){
    $("#camera_perfil").css("display", "block") ;
}, function(){
    $("#camera_perfil").css("display", "none") ;
});

$("#img_perfil").click(function(){
    alert("oi")
});
