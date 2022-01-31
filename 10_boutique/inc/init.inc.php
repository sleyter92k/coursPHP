<?php

require_once 'functions.inc.php';

// connexion la session start une constante
// une variable pour les messages du site l'appel des fonctions

// 1- CONNEXION À LA BDD
// VARIABLES POUR LA CONNEXION
$host = 'localhost';// le chemin vers le serveur de données
$database = 'maboutique';// le nom de la BDD
$user = 'root';// le nom d'utilisateur pour se connecter
// $psw = '';// mdp PC XAMPP
$psw = '';// mdp MAC MAMP

$pdoMAB = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw,
array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les warnings SQL dans le navigateur
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
));



//2- OUVERTURE DE SESSION
session_start();
//3- CHEMIN DU SITE DANS UNE CONSTANTE
//ici on définit le chemin absolu dans une constante, on ecrira tous les chemins src et href avec cette constante
// chez l'hébergeur on écrira ce qui suis 
define('RACINE_SITE', '/CoursPHP/10_boutique/');

//4- UNE VARIABLE POUR LES MESSAGES
$contenu = '';

//5- INCLUSION DES FONCTIONS

// debug($pdoMAB);
// debug(get_class_methods($pdoMAB));

// on peut fermer le passage php ou non
?>