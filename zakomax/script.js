function sortir_tirroir(){
    var tirroir = document.getElementById("tirroir");
    var cont2 = document.getElementById("cont2");
    var cont = document.getElementById("cont");
    tirroir.classList.add("sorti");
    cont.classList.add("sorti");
    cont2.classList.add("sorti");

}

function ranger_tirroir(){
    var tirroir = document.getElementById("tirroir");
    var cont2 = document.getElementById("cont2");
    var cont = document.getElementById("cont");
    cont.classList.remove("sorti");
    cont2.classList.remove("sorti");
    tirroir.classList.remove("sorti");
}

// function box_agrandit() {
//     var box = document.getElementById("box");
//     box.classList.add("box_grande")
// }

// function box_retreci() {
//     var box = document.getElementById("box");
//     box.classList.remove("box_grande")
// }
function box_agrandit() {
    var navbox = document.getElementById("navbox");
    navbox.classList.add("navbox_grande")
}

function box_retreci() {
    var navbox = document.getElementById("navbox");
    navbox.classList.remove("navbox_grande")
}

function go_to_contact() {
    var cont = document.getElementById("cont");
    var cont2 = document.getElementById("cont2");
    cont.classList.add("switch");
    cont2.classList.add("switch");
}

function go_to_accueil() {
    var cont = document.getElementById("cont");
    var cont2 = document.getElementById("cont2");
    cont.classList.remove("switch");
    cont2.classList.remove("switch");
}