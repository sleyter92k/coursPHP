<?php 

// ma 1ère fonction en PHP

function mP() {
    echo "<p>Minute ! Papillon !</p>";
}

function whatDay() {
    echo "<p>We are " . date('l, z') . " My friend !</p> ";
}

function FR() {
    echo " <p>la devise de la République française est liberté, égalite, fraternité</p> ";
}

function dateFR() {
    setlocale(LC_TIME, 'fra_fra');
    echo "Nous sommes le ";
    echo utf8_encode( strftime('%A, %d, %B, %Y'));
}

// déclaration d'une constante qui contient une url ATTENTION on le déplacera plus tard VOIR


?>