let primeiro = $('#primeiro_nome');
let segundo = $('#segundo_nome');
let email = $('#email');
let portifolio = $('#portifolio');
let img_perfil = $('#img_perfil');
let seguindo = $('#seguindo');
let seguidores = $('#seguidores');
let user;

let query = location.search.slice(1);
let partes = query.split('&');
let get = {};

partes.forEach(function (parte) {
    let chaveValor = parte.split('=');
    let chave = chaveValor[0];
    let valor = chaveValor[1];
    get[chave] = valor;
});

$(function () {
    let data = {
        tipo: "list",
        id_estudante: get.id_estudante
    };

    jQuery.ajax({
        url: "php/usuarios.php",
        type: "POST",
        data: data,
        success: function (retorno) {
            console.log(retorno)
            user = JSON.parse(retorno);

            primeiro.val(user.primeiro_nome);
            segundo.val(user.segundo_nome);
            email.val(user.email);
            portifolio.val(user.portifolio);
            seguindo.text(user.qnt_seguindo + " seguindo");
            seguidores.text(user.qnt_seguidores + " seguidores");

            if (user.imagem_usuario != null) {
                img_perfil.css("background-image", "url(php/usuarios/" + user.id_estudante + "/" + user.imagem_usuario + ".png)");
            }
            if (user.id_user_logado == get.id_estudante) {
                $("#btnSeguir").text("Você mesmo");
                $("#btnSeguir").addClass("btn-dark disable");
                $("#btnSeguir").prop("disabled", true);
            } else {
                if (user.seguindo == 1) {
                    $("#btnSeguir").text("Seguindo");
                    $("#btnSeguir").addClass("btn-secondary");
                } else {
                    $("#btnSeguir").text("Seguir");
                    $("#btnSeguir").addClass("btn-danger");
                }
            }
        }
    });
});

$('#btnSeguir').click(function (event) {
    event.preventDefault();
    let data = {
        tipo: "seguir",
        id_estudante_seguido: user.id_estudante
    };
    jQuery.ajax({
        url: "php/seguidores.php",
        type: "POST",
        data: data,
        success: function (retorno) {
            location.reload();
        }
    });
});

$('#btnPubli').click(function (event) {
    event.preventDefault();
    $(location).attr('href','fotos.php?id_estudante='+get.id_estudante);
});