<?php

require_once '../inc/functions.php';

// 6 variables pour tester plus bas dans la page

$chaine = "Longtemps je me suis couché ... dans le temps.";
$decimal = 18.74;
$entier = 1515;


?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Exo 01 Variables</title>
    <!-- mes styles -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->

  </head>
  <body>
  <header class="container-fluid bg-light">
        <h1>CoursPHP - Exo 01 Variables</h1>
    </header> 
    <!-- fin container-fluid  -->

    <div class="container">
        <section class="row">
            <div class="col-sm-12">
            <?php 
            echo $entier;
            // echo gettype() nous donne le type de données contenues dans une variable
            echo gettype($decimal);
            echo "<hr>";


            print_r("<p>Afficher du contenu avec la fonction <code>print_r()</code></p>");

            mP();

            whatDay();

            FR();

            dateFR();

            ?>  
            </div>
        </section>
    </div>
    

    <!-- fin container  -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>