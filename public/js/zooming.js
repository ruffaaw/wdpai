function zoomIn(event) {
    var img = event.target;
    img.style.transform = "scale(1.15)";
}

function zoomOut(event) {
    var img = event.target;
    img.style.transform = "scale(1)";
}

var images = document.querySelectorAll("img");
for (var i = 0; i < images.length; i++) {
    images[i].addEventListener("mouseout", zoomOut);
}function zoomIn(event) {
    var img = event.target;
    img.style.transform = "scale(1.15)";
}

function zoomOut(event) {
    var img = event.target;
    img.style.transform = "scale(1)";
}

var images = document.querySelectorAll("img");
for (var i = 0; i < images.length; i++) {
    images[i].addEventListener("mouseout", zoomOut);
}