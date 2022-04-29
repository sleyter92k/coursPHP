<?php

function debug($mavar) {// la fonction avec son paramètre, une variable
  
    var_dump($mavar);// à cette variable on applique le fonction var_dump()

}


//2- FONCTION POUR EXÉCUTER LES REQUETES PRÉPARÉES
function executeRequete($requete, $parametres = array()) {  // utilse pour toutes les requêtes 1 la requête 2 
    foreach ($parametres as $indice => $valeur) { // boucle foreach
        $parametres[$indice] = htmlspecialchars($valeur); // pour éviter les injections SQL
        global $pdoMAB; // * global  "nous permet d'acceder à la variable $pdoMAB dans l'espace global du fichier init.inc.php"

        $resultat = $pdoMAB->prepare($requete); //prepare la requete
        $succes = $resultat->execute($parametres); //et execute

        if ($succes === false ) { 
            return false; // si la requête n'a pas marché je renvoie "false"
        } else {
            return $resultat; // sinon je renvoie les resultats de la requête
        }// fin if else
    }// fin foreach
}// fin fonction

// FONCTION POUR VÉRIFIER QUE LE MEMBRE EST CONNECTÉ
function estConnecte() {
    if (isset($_SESSION['membre'])) {
        return true;
    } else {
        return false;
    }
}
// FONCTION POUR VÉRIFIER QUE LE MEMBRE EST ADMIN
function estAdmin() {
    if (estConnecte() && $_SESSION['membre']['statut']== 1 ) {
        return true;
    } else {
        return false;
    }
}
?>