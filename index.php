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
    <title>Accordion</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <div class="page__wrapper">
                        <h1 class="heading">Power of HTML</h1>
                        <div class="accordion">
                            <details>
                                <summary>What are some random questions to ask?</summary>
                                <p>That's exactly the reason we created this random question generator. There are hundreds of random questions to choose from so you're able to find the perfect random question to ask friends, family and people you want to get to know better.</p>
                            </details>
                            <details>
                                <summary>Do you include common questions?</summary>
                                <p>This generator doesn't include most common questions. The thought is that you can come up with common questions on your own so most of the questions in this generator are questions that elicit a bit more information that a typical common question.</p>
                            </details>
                            <details>
                                <summary>Can I use this for 21 questions?</summary>
                                <p>Yes! there are two ways that you can use this question generator depending on what you're after. You can indicate that you want 21 questions generated and you'll instantly have a random list of 21 questions to use. If you want to curate the 21 questions to use, you can spend some time on the generator until you find 21 questions you like, then use those the next time you play the 21 questions game.</p>
                            </details>
                            <details>
                                <summary>Are these questions for girls or for boys?</summary>
                                <p>The questions in this generator are gender neutral and can be used to ask either male of females (or any other gender the person identifies with). These questions were created to elicit interesting and thoughtful answers and aren't specific to a specific type of person.</p>
                            </details>
                        </div>
                    </div>
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