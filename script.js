document.addEventListener("DOMContentLoaded", (event) => {
    var tirroir = document.getElementById("tirroir");
    var cont = document.getElementById("cont");
    var cont2 = document.getElementById("cont2");
    var cont3 = document.getElementById("cont3");
    var navbox = document.getElementById("navbox");

    cont.classList.add("accueil");
    cont2.classList.add("accueil");
    cont3.classList.add("accueil");
});

function sortir_tirroir(){
    tirroir.classList.add("sorti");
    cont.classList.add("sorti");
    cont2.classList.add("sorti");
    cont3.classList.add("sorti");
}

function ranger_tirroir(){
    cont.classList.remove("sorti");
    cont2.classList.remove("sorti");
    cont3.classList.remove("sorti");
    tirroir.classList.remove("sorti");
}

function box_agrandit() {
    navbox.classList.add("navbox_grande")
}

function box_retreci() {
    navbox.classList.remove("navbox_grande")
}

function go_to_contact() {
    if (cont.classList.contains("about")) {
        go_to_accueil();
        setTimeout(() => {
            cont.classList.add("contact");
            cont2.classList.add("contact");
            cont3.classList.add("contact");
            cont.classList.remove("about");
            cont2.classList.remove("about");
            cont3.classList.remove("about");
            cont.classList.remove("accueil");
            cont2.classList.remove("accueil");
            cont3.classList.remove("accueil");
        }, 300);
    }
    else {
        cont.classList.add("contact");
        cont2.classList.add("contact");
        cont3.classList.add("contact");
        cont.classList.remove("about");
        cont2.classList.remove("about");
        cont3.classList.remove("about");
        cont.classList.remove("accueil");
        cont2.classList.remove("accueil");
        cont3.classList.remove("accueil");
    }
}

function go_to_accueil() {
    cont.classList.remove("contact");
    cont2.classList.remove("contact");
    cont3.classList.remove("contact");
    cont.classList.remove("about");
    cont2.classList.remove("about");
    cont3.classList.remove("about");
    cont.classList.add("accueil");
    cont2.classList.add("accueil");
    cont3.classList.add("accueil");
}

function go_to_about() {
    if (cont.classList.contains("contact")) {
        go_to_accueil();
        setTimeout(() => {
            cont.classList.add("about");
            cont2.classList.add("about");
            cont3.classList.add("about");
            cont.classList.remove("contact");
            cont2.classList.remove("contact");
            cont3.classList.remove("contact");
            cont.classList.remove("accueil");
            cont2.classList.remove("accueil");
            cont3.classList.remove("accueil");
        }, 300);
    }
    else {
        cont.classList.add("about");
        cont2.classList.add("about");
        cont3.classList.add("about");
        cont.classList.remove("contact");
        cont2.classList.remove("contact");
        cont3.classList.remove("contact");
        cont.classList.remove("accueil");
        cont2.classList.remove("accueil");
        cont3.classList.remove("accueil");
    }

}