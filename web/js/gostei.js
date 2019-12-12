jQuery("i.curtida").click(function(){
    let id = $(this).attr('id');

    let id_obj = id.substr(2);
    let tipo_obj = id.substr(0,1);

    let liked = this.className.indexOf('liked') != -1;

    $("#l_"+id_obj).removeClass("liked");
    $("#d_"+id_obj).removeClass("liked");

    if(liked){
        $(this).removeClass("liked");
    }else{
        $(this).addClass("liked");
    }   

    let tipo = 0;

    if(tipo_obj == "d"){
        tipo = -1;
    }else{
        tipo = 1;
    }
    
    let data = {
        id_publicacao: id_obj,
        tipo : tipo
    }

    jQuery.ajax({
        url: "php/curtidas.php",
        type: "POST",
        data: data,
        success: function (retorno) {
            let retornoObj = JSON.parse(retorno);

            $("#lt_"+id_obj).text(retornoObj.pos);
            $("#ld_"+id_obj).text(retornoObj.neg);
        }
    });
});

$('.formComent').submit(function(event){
    event.preventDefault();
    let id_postagem = $(this).find('[class="comment"]').attr('id').substr(3);
    let comentario = $(this).find('[class="comment"]').val();

    let data = {
        acao: 'enviar',
        id_postagem: id_postagem,
        comentario: comentario
    };

    jQuery.ajax({
        url: "php/comentarios.php",
        type: "GET",
        data: data,
        success: function (retorno) {
            location.reload();
        }
    });
});

$('.btnDenunciar').click(function(){
    let id_postagem = $(this).attr('id').substr(3);

    let data = {
        id_postagem: id_postagem
    }
    jQuery.ajax({
        url: "php/denunciar.php",
        type: "GET",
        data: data,
        success: function (retorno) {
            location.reload();
        }
    });
});

$('.btnApagar').click(function(){
    let id_postagem = $(this).attr('id').substr(3);

    let data = {
        id_postagem: id_postagem
    }
    jQuery.ajax({
        url: "php/apagarPostagem.php",
        type: "POST",
        data: data,
        success: function (retorno) {
            location.reload();
        }
    });
});