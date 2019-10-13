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
            console.log(retorno);
            console.log("aqui");
        }
    });
});

$("input[type=file]").on("change", function(){
    var files = !!this.files ? this.files : [];
    if (!files.length || !window.FileReader) return;

    if (/^image/.test( files[0].type)){
        var reader = new FileReader();
        reader.readAsDataURL(files[0]);

        reader.onload = function(){
            $("#imagem").attr('src', this.result);
        }
    }
});