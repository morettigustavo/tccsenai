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
          let retornoString = jQuery.parseJSON(retorno);
          let nome = document.querySelector("#nome");
          nome.innerHTML = retornoString.nome;
          console.log(retorno);
  
          retornoString.forEach(msg => {
            nome.innerHTML = msg.nome;
          });
        }
      }
    });
  });