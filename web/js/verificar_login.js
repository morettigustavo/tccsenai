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
        } else {
          let user = JSON.parse(retorno);

          $('#nome').text(user.nome);
          $('#img_profile').attr('src', "php/usuarios/" + user.id+"/"+user.imagem +".png");
  
        }
      }
    });
  });