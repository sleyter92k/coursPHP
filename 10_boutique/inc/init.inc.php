<?php 


// connexion la session start une constante
// une variable pour les messages du site l'appel des fonctions

// 1- CONNEXION À LA BDD
// VARIABLES POUR LA CONNEXION
$host = 'localhost';// le chemin vers le serveur de données
$database = 'maboutique';// le nom de la BDD
$user = 'root';// le nom d'utilisateur pour se connecter
$psw = '';// mdp PC XAMPP
// $psw = 'root';// mdp MAC MAMP

$pdoMAB = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw,
array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
));

// var_dump(get_class_methods($pdoMAB));

//2- Ouverture de session
session_start();
//3- Chemin du site dans une constante


//4- Une variable pour les messages


$contenu = '';
//5- Inclusion des fonctions
require_once 'functions.inc.php';
// debug($pdoMAB);
//on peut fermer le passage PHP ou non 

?>