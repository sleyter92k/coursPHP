<?php 
// APPEL DES FONCTIONS
require_once '../inc/functions.php';

?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 06 - 01 PDO</title>
</head>
<body>
    <main>
        <header class="containeur-fluid f-header p-2">
            <h1 class="display-4 text-center">CoursPHP - Chapitre 06 - 01 PDO</h1>
            <p class="lead">Connexion à notre BDD avec PDO</p>
        </header>
        <!-- fin containeur-fluid header -->

        <div class="containeur bg-white mt-2 mb-2 m-auto p-2">
            <section class="row p-2">
                <div class="col-md-5 bg-teal">
                    <h2>1- Se connecter à la BDD</h2>
                    <p><abbr title="PHP Data Object">PDO</abbr> est l'acronyme de PHP Data Object</p>
                    <p>Pour se connecter à la BDD en PDO on définit une variable de connexion<br>
                    <code>
                        $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise',<br>
                        'root',<br>
                        '',<br>
                        // 'root',// mdp pour MAC<br>
                        array(<br>
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,<br>

                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',<br>
                        ));<br>
                        
                        
                    </code></p>

            <?php 
            // connexion à la BDD
              $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise',// hôte et nom de la BDD
              'root',// le pseudo 
              // '',// le mot de passe
              '',// le mdp pour MAC avec MAMP
              array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
              ));
              // debug($pdoENT);
              // debug(get_class_methods($pdoENT));// ici nous aurons la liste des méthodes présentes dans l'objet $pdoENT
            ?> 
                    
                </div>
            </section>
        </div>
    </main>  
</body>
</html>