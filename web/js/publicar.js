let formPost = document.querySelector('#formPostar');

let map = document.querySelector("#map");
let titulo = document.querySelector("#titulo");
let area = document.querySelector("#areaConhecimento");
let materia = document.querySelector("#materia");
let tags = document.querySelector("#tags");

formPost.addEventListener("submit", function (event) {
    event.preventDefault();
    
    let formData = new FormData(formPost);
    
    jQuery.ajax({
        url: "php/publicar.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (retorno) {
            console.log(retorno)
        //    $(location).attr('href', 'index.php');
        }
    });
});

$("input[type=file]").on("change", function () {
    var files = !!this.files ? this.files : [];
    if (!files.length || !window.FileReader) return;
    if (this.files[0].size > 2097152) {
        alert("Esta imagem é muito pesada, escolha outra, igual a sua mãe");
        this.value = "";
    } else if (/^image/.test(files[0].type)) {
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);
        
        reader.onload = function () {
            $("#imagem").attr('src', this.result);
        }
    }
});

$('#areaConhecimento').on("change", function () {
    if($('#areaConhecimento').val() != 0){
        data_fc = {
            id_area: $('#areaConhecimento').val(),
            acao: "materias"
        };
    }else{
        data_fc = {
            acao: "materias"
        };
    }
    
    materias();
});

let data_fc = {
    acao: "materias"
};;

$(materias());

function materias() {
    let availableMaterias = [];
    
    jQuery.ajax({
        url: "php/materias.php",
        type: "POST",
        data: data_fc,
        
        success: function (retorno) {
            let objMateria = JSON.parse(retorno);
            
            $.each(objMateria, function (i, item) {
                // console.log(item.nome_materia);
                availableMaterias[i] = item.nome_materia;
            });
        }
    });

    $("#materia").autocomplete({
        source: availableMaterias
    });
};