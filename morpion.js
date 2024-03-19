// document.addEventListener("DOMContentLoaded", (event) => {
// });

var tour_de_jouer = true;

function div_click(event) {
    var element = event.target
    // console.log(element.innerText);
    // console.log(tour_de_jouer);

    element.classList.add("desactiver")

    if (tour_de_jouer) {
        set_x(element)
    } else {
        set_o(element)
    }

    check_win(element);

    tour_de_jouer = !tour_de_jouer;
}

function set_x(element) {
    element.innerText = "X";
    element.classList.add("x");
    element.classList.remove("o");
}

function set_o(element) {
    element.innerText = "O";
    element.classList.add("o");
    element.classList.remove("x");
}


function check_win(element) {

    var gagnant = tour_de_jouer ? "X" : "O"

    for (var i = 0, len = element.classList.length; i < len; i++) {
            // console.log(element.classList[i]);
            var class_name
            var gagner = true

        if (/row|diago|colonne/.test(element.classList[i])) {
            console.log(element.classList[i]);
            // class_name = element.classList[i]
            var case_similaire = document.getElementsByClassName(element.classList[i]);

            [].forEach.call(case_similaire, function (element) {
                if (element.innerText !== gagnant || element.innerText == "") {
                    gagner = false
                }
            })
            if (gagner) {
                [].forEach.call(case_similaire, function (element) {
                    element.classList.add("gagner")
                    bloquer();
                })
            }
        }
    }
}

function reset() {
    var all_case = document.getElementsByClassName("case");
    // console.log(all_case);
    [].forEach.call(all_case, function (element) {
        // console.log(element);
        element.innerText = "";
        element.classList.remove("gagner")
        element.classList.remove("desactiver")
    });

    tour_de_jouer = true;
}

function bloquer() {
    var all_case = document.getElementsByClassName("case");
    [].forEach.call(all_case, function (element) {
        element.classList.add("desactiver")
    });
}