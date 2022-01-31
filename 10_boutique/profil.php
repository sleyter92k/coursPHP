<?php

require_once 'inc/init.inc.php';
debug($_SESSION);
if(estAdmin()) {
    echo '<p>Vous êtes administrateur</p>';
    echo '<a class="btn btn-primary" href="admin/accueil.php">Espace admin</a>'; 
    echo '<a class="btn btn-primary" href="accueil.php">Aller a la boutique</a>';
} else {
    echo '<p>Vous êtes connecté rendez-vous à la Boutique</p>';
    echo '<a class="btn btn-success" href="accueil.php">Retour à la boutique</a>';
}
if (estconnecte()){
    
}

if (!estConnecte()) {
    header('location:connexion.php');
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Profil</title>
</head>
<body>
    <header class="container bg-primary text-white">
    <h1>Profil</h1>
    <p>Bonjour <?php echo $_SESSION['membre']['prenom']; ?></p>
    </header>


    <?php
    if(estAdmin()) {
        echo '<p>Vous êtes administrateur</p>';
    } else {
        echo '<p>Vous êtes connecté, rendez-vous à la boutique</p>';
        echo '<a class="btn btn-info" href=" '.RACINE_SITE.' accueil.php">Retour à la boutique</a>';
    }
    if (estConnecte()) {

        // echo 'coucou';
        echo '<a class="btn btn-secondary" href="' .RACINE_SITE. 'connexion.php?action=deconnexion">Se Déconnecter</a>';

    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 