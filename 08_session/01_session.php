<?php
require_once '../inc/functions.php';


// La variable $GLOBALS récupère toutes les informations de toutes les superglobales
// debug($GLOBALS);

echo '<h1>Cours PHP - $_SESSION';
echo '<p>Les données du fichier de session sont accessibles et manipulables à partir de la superglobale $_SESSION.</p>';
// Principe des sessions : ; un fichier temporaire appelé "session" est créé sur le serveur, avec un identifiant unique. Cette est liée à un internaute car dans le même temps, un cookie est déposée sur le poste de l'internaute avec l'identifiant (au nom de PHPSESSID). Ce cookie se détruit lorsque on quitte le navigateur

// Le fichier de session peut contenir des informations sensibles, il n'est pas accessible  par l'internaute
session_start();


// utilisation de $_SESSION
$_SESSION['pseudo'] = 'Tintin';
$_SESSION['mdp'] = 'Milou2022';
$_SESSION['email'] = 'tintin@moulinsart.be';

echo '<p>1- La session est remplie</p>';
// Les sessions se trouvent dans le dossier /tmp/ du serveur cad dans le dossier tmp de Xampp

debug($_SESSION);

// vider une partie de la session
unset($_SESSION['mdp']);

debug($_SESSION);

echo '<hr>';

// session_destroy();
// session_destroy() n'est éxécuté qu'à la fin script. Nous voyons encore ici le contenu de la session, mais le fichier temporaire dans le dossier tmp supprimé
debug($_SESSION);

?>