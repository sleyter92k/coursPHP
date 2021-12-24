<?php
require_once '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données forms</title>
</head>
<body>
<?php 
        if (!empty($_POST)) {// si $_POST n'est pas vide = différent de empty
            debug($_POST);

              
            echo "<section>";
            echo "<p>Prenom : " .$_POST['prenom']. "</p>";
            echo "<p>Nom : " .$_POST['nom']. "</p>";
            echo "<p>Email :" .$_POST['email']. " portable : " .$_POST['portable']. "</p>";
            echo "<p>Adresse :" .$_POST['adresse']. " Code postal : " .$_POST['code_postal']. "</p>";
            echo "<p>Ville :" .$_POST['ville']. "</p>";
            echo "<p>Telephone Fixe :" .$_POST['telephone_fixe']. "</p>";
            echo "</div></section>";
        
        // debug($_POST);
        // echo $_POST['nom'];

        // Fabrication d'un fichier texte en l'absence de BDD
        $file = fopen('traitement.txt', 'a');// fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon de l'ouvrir
        $informations = $_POST['prenom']. ' ' .$_POST['nom']. ' ' .$_POST['email']. ' ' .$_POST['adresse']. "\n";
        // "\n" permet de mettre un saut de ligne
        fwrite($file, $informations);// la variable $information contient à chaque envoi les données du formulaire au fichier représenté par $file
        //fwrite() écrit les informations dans le fichier
        }
      ?>
    
</body>
</html>