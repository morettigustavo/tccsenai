let formPost = document.querySelector('#formPostar');

let map = document.querySelector("#map");
let area = document.querySelector("#areaConhecimento");
let materia = document.querySelector("#materia");
let tags = document.querySelector("#tags");

formPost.addEventListener("submit", function (event) {
    event.preventDefault();
    // console.log(map.files[0].size);
    // console.log(area.value);
    // console.log(materia.value);
    // console.log(tags.value);

    let postagem = {
        area: area.value,
        materia: materia.value,
        tags: tags.value
    };

    jQuery.ajax({
         type: "POST",
         url: "php/publicar.php",
         data: postagem,
         success: function (retorno) {
            console.log(retorno);
        }
    });
});

// function go() {
//     window.location.href = "index.html";
// }