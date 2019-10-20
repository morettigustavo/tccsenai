function sair() {
  jQuery.ajax({
    url: "php/sair.php",
    success: function (retorno) {
      window.location.href = "login.html";
    }
  });
};

$(function () {
  jQuery.ajax({
    url: "php/verificar_login.php",
    success: function (retorno) {
      if (retorno == "false") {
        window.location.href = 'login.html';
      } else if (retorno == "true") {
        jQuery.ajax({
          url: "php/usuarios.php",
          success: function (retorno) {
            let user = JSON.parse(retorno);
            $('#nome').text(user.primeiro_nome+" "+user.segundo_nome);
            if(user.imagem_usuario != null){
              $('#img_profile').attr('src', "php/usuarios/" + user.id_estudante + "/" + user.imagem_usuario + ".png");
            }
          }
        });
      }
    }
  });
});