let primeiro = $('#primeiro_nome');
let segundo = $('#segundo_nome');
let email = $('#email');
let portifolio = $('#portifolio');

$(function user() {
    let tipo = {
        tipo: "list"
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

let btnAtualizar = document.querySelector('#btnAtualizar');

btnAtualizar.addEventListener("click", function (event) {
    event.preventDefault();

    if (primeiro.val() == "") {
        primeiro.focus();
    } else if (segundo.val() == "") {
        segundo.focus();
    } else if (email.val() == "") {
        email.focus();
    } else {
        let usuario = {
            primeiro_nome: primeiro.val(),
            segundo_nome: segundo.val(),
            email: email.val(),
            portifolio: portifolio.val(),
            tipo: "atualizar"
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

$("#img_perfil").hover(function () {
    $("#camera_perfil").css("display", "block");
}, function () {
    $("#camera_perfil").css("display", "none");
});

$("#img_perfil").click(function () {
    $('#insertimageModal').modal('show');
});

$(document).ready(function () {
    $('#insert_image').on('change', function () {
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 192,
                height: 192,
                type: 'circle' //circle
            },
            boundary: {
                width: 200,
                height: 200
            }
        });
        var reader = new FileReader();
        reader.onload = function (event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#insert_image').css("display", "none");
        $('#btnEnviar').css("display", "block");
    });
    
    $('#btnEnviar').click(function (event) {
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (response) {
            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: {
                    "image": response
                },
                success: function (data) {
                    $('#insertimageModal').modal('hide');
                    alert(data);
                }
            })
        });
    });
});