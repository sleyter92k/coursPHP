<?php
require_once '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoursPHP - Exo Boucles</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="container-fluid text-center">
        <h1>CoursPHP - Exo 2 Boucles</h1>
    </header>

    <div class="container bg-light">
        <section class="row border border-success">
            <div class="col-sm-12">
                <?php
                    // Déclaration d'un tableau, d'un array Méthode 1 
                    $tableau1 = array( 'Gabin', 'Arletty', 'Fernande1', 'Dalio', 'Pauline Carton' );

                    echo $tableau1;

                    print_r( $tableau1 );

                    echo "<pre>";
                    print_r( $tableau1 );
                    echo"</pre>";

                    echo "<pre>";
                    var_dump( $tableau1 );
                    echo"</pre>";

                    // Méthode 2 

                    $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];


                    echo"</pre>";
                echo "<hr>";
                jeprint_r($tableau2);
                echo "<hr>";
                echo "<br>";
                debug($tableau1);

                echo $tableau2[0]. "<br>";

                debug($tableau[2]);

                // $tableau2[] = "Suisse";

                $contacts = array(
                    "prenom" => "Sleyter",
                    "nom" => "Monteiro",
                    "email" => "sleyter.monteiro@colombbus.org",
                    "tel" => "0699746092"
                  );
                  debug($contacts);
                  echo "<ul>";
                  foreach ($contacts as $infos) {
                    echo "<li>" . $infos . "</li>";
                  }
                  echo "</ul>";

                  foreach ($contact as $indice => $infos) {
                      echo "<p>$indice : $infos </p>";
                  }

                foreach($contacts  as $indice => $personne) {
                  if ($indice == 'nom') {
                      echo " <h3>$personne</h3> ";
                  } else {
                      echo " <p>$personne</p> ";
                  }

                }

                // Tableaux multidimensionnels un tableau avec des "sous-tableaux"

                $tableau_multi = array (
                    0 => array (
                        "prenom" => "jean",
                        "nom" => "Dujardin",
                        "email" => "sleyter.monteiro@colombbus.org",
                        "tel" => "0707070707",
                        ),

                    1 => array (
                        "prenom" => "Alexandra",
                        "nom" => "Lami",
                        "email" => "sleyter.monteiro@colombbus.org",
                        "tel" => "0606060606",
                        ),

                    2 => array (
                        "prenom" => "Elon",
                        "nom" => "Musk",
                        ),
                );

                debug($tableau_multi);
                debug($tableau_multi[2]);

                debug($tableau_multi[1]['nom']);

                echo "<hr>";

                for ($i = 0; $i < count($tableau_multi); $i++) {
                    echo '<p>' .$tableau_multi[$i]['prenom']. '</p>';
                }


                echo "<p>";
                    foreach ($tableau_multi as $indice => $nom) {
                        //debug prenom;
                        echo '<strong>' .$tableau_multi[$indice]['nom']. '</strong> - ';
                    }
                    echo "</p>";

                    echo "<hr><pre class=\"bg-warning\">2/ BOUCLE FOREACH</pre>";

                    echo "<p>";
                    foreach ($tableau_multi as $indice => $acteurs) {
                        echo '<strong>' .$acteurs['prenom']. ' ' .$acteurs['nom']. ' </strong> <br> ';
                    }
                    echo "</p>";

                    // EXO
                    // 1- faire un tab tableau $tailles avec des tailles de vêtements de l'extra small, small, medium, large et extra large et les afficher dans une boucle

                    $tailles = ['small', 'medium', 'large', 'extra-large'];
                    debug($tailles);

                    echo "<ul>";
                    foreach( $tailles as $indice => $size ) {
                        echo "<li>" .$indice. " pour " .$size. "</li>";
                    }
                    echo "</ul>";

                    //2 le même dans un tableau associatif nom du tableau $tableau2

                    $tailles2 = [
                        "s" => "S-small",
                        "m" => "M-medium",
                        "l" => "L-large",
                        "xl" => "XL-extra-large",
                    ];

                    echo "<hr><pre class=\"bg-warning\">1/ BOUCLE FOREACH LES TAILLES TABLEAU 2</pre>";
                    echo "<ul>";
                    foreach( $tailles2 as $indice2 => $size2 ) {
                      echo "<li> $indice2 pour $size2 </li>"; 
                    }
                      echo "</ul>";  

                    // EXO 2

                    echo "<hr><pre class=\"bg-warning\">1/ BOUCLE FOREACH : Select </pre>";
                    echo "<select>";
                    foreach( $tailles2 as $indice2 => $size2 ) {
                      echo "<option> $indice2 pour $size2 </option>"; 
                    }
                      echo "</select>";  

                ?>
            </div>
        </section>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>