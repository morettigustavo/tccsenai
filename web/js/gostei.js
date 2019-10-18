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