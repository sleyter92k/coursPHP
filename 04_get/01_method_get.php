<?php
require_once '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cours PHP - 01 GET</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="container-fluid text-center">
        <h1 class="display-4">CoursPHP - GET</h1>
        <p class="lead">$_GET[] représente les données qui transitent par l'url</p>
    </header>

    <div class="container bg-white p-2">
        <section class="row">
            <div class="col-md-4">
                <h2>La méthode GET</h2>
                <ul>
                    <li>$_GET[] est une superglobale, et un tableau (array) comme toutes les superglobales.</li>
                    <li>Superglobales signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions</li>
                    <li>Les informations transitent selon une syntaxe précise dans l'url ex : <code class="bg-primary text-white">mapage.php?indice1=valeur1&indiceN</code></li>
                    <li>Quand on receptionne les données $_GET se remplit selon la syntaxe suivante
                    <code><br>
                        $_GET[] = array(<br>
                            'indice1' => 'valeur1',<br>
                            'indiceN' => 'valeurN'<br> 
                        );<br>
                    </code>
                    </li>
                </ul>
            </div>
            <!-- fin col -->
            <div class="col-md-6">
                <h2>Exemples :</h2>
                <p><a href="02_method_get.php?article=jean&couleur=bleu&prix=50">Un Jean Bleu</a></p>
                <p><a href="02_method_get.php?article=string&couleur=violet&prix=30">Un String Violet</a></p>
                <p><a href="02_method_get.php?article=veste&couleur=noir&prix=70">Une Veste Noir</a></p>
            </div>
            <!-- fin col -->
        </section>

        <section class="row">
            <form action="" method="POST">
                <div class="mb-3">
                    <div class="col">
                    <input type="text" name="nom" class="form-control" placeholder="nom de famille" aria-label="prenom" required>
                    </div>
                    <div class="col">
                    <input type="text" name="prenom" class="form-control" placeholder="prenom" aria-label="prenom">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col">
                        <textarea name="message" id="message" class="form-control" rows="3" required>Votre Message</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyez</button>
                </div>
            </form>
        </section>

        <?php 
        if (!empty($_POST)) {// si $_POST n'est pas vide 

            debug($_POST);

            echo "<section class=\"row bg-warning\"><div class=\"col-md-12\"><h2>Données issues du formulaire</h2>";
            echo "<p>Prenom :" .$_POST['prenom']. " Nom : " .$_POST['nom']. "</p>";
            echo "<p>Message :" .$_POST['message']. "</p>";                
            echo "</div></section>";
        }
        // debug($_POST);
        // echo $_POST['nom'];
      ?>


    </div>
    <?php require_once '../inc/footer.inc.php'; ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>