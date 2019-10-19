
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementsByClassName("img");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
// img.onclick;

function img(src) {
    var img = document.getElementById("img" + src);
    modal.style.display = "block";
    modalImg.src = img.src;
}

// Get the <span> element that closes the modal
var span = document.getElementById("close");

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}