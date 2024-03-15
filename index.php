<?php
// phpinfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zakomax</title>
    <link href="index.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div class="background"></div>
    <div class="box" id="box"></div>
    <div class="navbox" id="navbox" onmouseover="" onmouseleave="ranger_tirroir();box_retreci()">
        <nav class="menu">
            <div class="logo">
                <img src="oppo.jpg" width=100 height="50">
                <h2>Awesomepossum</h2>
            </div>
            <ul>
                <li onmouseover="ranger_tirroir();box_retreci()"><a href="#" onclick="go_to_accueil();">Accueil</a></li>
                <li onmouseover="ranger_tirroir();box_retreci()"><a href="#" onclick="go_to_about();">A propos</a></li>
                <li onmouseover="ranger_tirroir();box_retreci()"><a href="#" onclick="go_to_contact();">Contact</a></li>
                <li onmouseover="sortir_tirroir();box_agrandit()">
                    <a id="projet" href="#">projet</a>

                </li>
            </ul>
        </nav>
        <svg class="arrow" id="ar" fill="#555555" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330 330" xml:space="preserve">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001 c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213 C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606 C255,161.018,253.42,157.202,250.606,154.389z"></path>
            </g>
        </svg>
        <div class="petitbox" id="tirroir">
            <ul>
                <li><a href="#">jeu1</a></li>
                <li><a href="#">jeu2</a></li>
            </ul>
        </div>
    </div>
    </div>

    <div class="conteneur" id="cont">
        <div class="conteneur2">
            <div class="paragraphe1">
                <div class="titre">Portfolio</div>
                <div class="soustitre">
                    <div class="p1">coconut</div>
                </div>
            </div>
            <div class="conteneur3">    
                <div class="paragraphe3">
                </div>
                <div class="paragraphe4">
                </div>
            </div>
        </div>
        <div class="paragraphe2">
        </div>
    </div>
    <div class="conteneur" style="top: 100vh;" id="cont2">
        <div class="conteneur2">
            <div class="paragraphe1">
            </div>
            <div class="conteneur3">
                <div class="paragraphe3">
                </div>
                <div class="paragraphe4">
                </div>
            </div>
        </div>
        <div class="paragraphe2">
        </div>
    </div>
    <div class="conteneur" style="right: -100vw;" id="cont3">
        <div class="conteneurhaut">
            <div class='paragraphe_about_1'></div>
            <div class="paragraphe_about_2"></div>
        </div>
        <div class="paragraphe_about_3"></div>
    
    </div>

</body>

</html>