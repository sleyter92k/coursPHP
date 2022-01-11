<?php require_once '../inc/functions.php'; // Appel des fonctions ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 05 - 01 POST</title>
</head>
<body>
    <header class="containeur-fluid f-header p-2">
        <h1 class="display-4 text-center">CoursPHP - Chapitre 05 - 01 POST</h1>
        <p class="lead">$_POST[] permet de récupérer les données saisies dans un formulaire</p>
    </header>

    <div class="container bg-white mt-2 mb-2 m-auto p-2">
        <section class="row">
            <div class="col-md-6">
            <h2>La méthode POST</h2>
            <ul>
                <li>$_POST[] est une superglobale qui récupère les données saisies dans un formulaire</li>
                <li>Superglobale signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions</li>
                <li>Les informations sont récupérées dans un tableau (array) selon la syntaxe suivante :
                    <code><br>
                        $_POST = array(<br>
                        'name1' => 'valeur1',<br>
                        'name2' => 'valeur2',<br>
                        );<br>
                    </code>
                </li>
                <li>'name1' et 'name2' correspondent aux attributs 'name' du formulaire 'name' du formulaire et 'valeur1' et 'valeur2' aux valeurs saisies par l'internaute</li>
            </ul>
            </div>

            <div class="col-md-6">
                <h2>Exemple</h2>
                <!-- Formulaire avec prenom, nom de famille, commentaire et un bouton d'envoi -->
                <form action="" method="POST">
                <div class="row g-3 mb-2">
                <div class="col">
                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" aria-label="Prénom">
                </div>
                <div class="col">
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de famille" aria-label="Nom de famille" required>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <textarea name="message" id="message" class="form-control" rows="3" required>Votre message</textarea>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
                </div>
            </div> 
                </form>
            </div>
        </section>

        <?php // fabrication d'une row avec sa col en php
            if (!empty($_POST)) {// si $_POST n'est pas vide = différent de empty (!empty) c'est qu'il est remplit et donc que le formulaire a été envoyé, on peut envoyer un formulaire avec des champs vide. Tout n'est pas obligatoire dans un formulaire, les valeurs de $_POST sont alors des strings vides.
                
                debug($_POST);

                echo "<section class=\"row bg-warning p-4 text-white\"><div class=\"col-md-12\"><h2>Données issues du formulaire</h2>";
                echo "<p>Prenom :" .$_POST['prenom']. " Nom : " .$_POST['nom']. "</p>";
                echo "<p>Message :" .$_POST['message']. "</p>";                
                echo "</div></section>";

            }
        ?>
    </div>
    <?php require_once '../inc/footer.inc.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>