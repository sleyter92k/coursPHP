<?php

require_once 'inc/init.inc.php';
debug($_SESSION);
debug(estConnecte());
debug(estAdmin());

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>
    <p>Bonjour <?php echo $_SESSION['membre']['prenom']; ?></p>

    <?php
    if(estAdmin()) {
        echo '<p>Vous êtes administrateur</p>';
    } else {
        echo '<p>Vous êtes connecté, rendez-vous à la boutique</p>';
    }
    ?>
</body>
</html> 