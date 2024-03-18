// document.addEventListener("DOMContentLoaded", (event) => {
// });

var tour_de_jouer = true;

function div_click(event) {
    var element = event.target
    // console.log(element.innerText);
    // console.log(tour_de_jouer);

    if (tour_de_jouer) {
        set_x(element)
    } else {
        set_o(element)
    }

    tour_de_jouer = !tour_de_jouer ;
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
    
}

function reset() {
    var all_case = document.getElementsByClassName("case");
    // console.log(all_case);
    [].forEach.call(all_case, function(element) {
        // console.log(element);
        element.innerText = "";
    });

    tour_de_jouer = true;
}