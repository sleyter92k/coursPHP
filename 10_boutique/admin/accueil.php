<?php

// require connextion session
require_once '../inc/init.inc.php';
// debug($_SESSION);
// debug(estConnecte());
// debug(estAdmin());

if (!estAdmin()) {
    header('location:../connexion.php');
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    
</body>
</html>