<?php
    echo " <h1> Page avec des constantes </h1> ";
// verifier cela sur la casse TRUE et FALSE php 8 ?
    define("PI",3.1415926535);

    echo " le nombre PI vaut " . PI . " <br> ";

    if (defined("PI")) echo "la constante PI est bien définie";

    echo " <hr> ";

    define("validator", "https://validator.w3.org/");

    echo "l'url du validator w3c est : " . validator . " <br> ";

//     echo "Validez votre HTML CSS sur le site du <a href=\"" .validator. 
// ?>