<!DOCTYPE html>
<?php
    //déclaration d'une variable en PHP
    $variable1 = "cours PHP 7";
?>    
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php echo "<title>Document</title>"; ?>
</head>
<body>
    <?php
        // affichage du contenu de la variable1
        echo "<h1> Suresnes 2021 - $variable1 </h1>";
    ?>
    <hr>
    <p>Utilisation de variables en PHP de passages PHP dans mon fichier HTML ; on travaille aussi avec : <br>
        <?php
        $variable2 = "MySQL";
        echo $variable2;
        echo "</p><hr>";
        echo "<p>La variable2 est de type : ". gettype($variable2) .".</p>";

        $variable2 = "Minute papillon !";
        echo "<p> $variable2 </p>";
        $variable2 = "coucou !";
        ?>
        <hr>
        <?= //passage PHP plus court
            "<blockquote> $variable2, $variable2 on entends le $variable2</blockquote>";// qui dispense d'écrire "écho"
        ?>
        <hr>
        <h2>print_r()</h2>
        <h3>La liste des variables "globales"</h3>

        <p>print_r() affiche toutes les variables à notre disposition sous forme d'un tableau, un "array"</p>
        <p>Le contenu de la variable $_COOKIE</p>  
        <?php print_r($_COOKIE); ?>
        
        <hr>
        <p>Le contenu de la variable $_ENV</p>
        <?php print_r($_ENV); ?>

        <hr>
        <p>Le contenu de la variable $_SERVER</p>
        <?php print_r($_SERVER); ?>

        <hr>
        <p>Le contenu de la variable $_SERVER</p>
        <?php print_r($_SERVER['SERVER_SOFTWARE']); ?>
</body>
</html>