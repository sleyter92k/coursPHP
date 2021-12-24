<?php
require_once "../inc/functions.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Cours PHP - Chapitre 4 - 02 $_GET</title>
    <!-- =================================== -->
    <!-- MA FAVICON  -->
    <!-- =================================== -->


    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-32x32.png">
    <link rel="manifest" href="../img/site.webmanifest">
    <link rel="mask-icon" href="../img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid p-4 alert alert-danger">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Chapitre 4 - 02 $_GET</h1>
            <p class="lead">SOUS TITRE</p>
    
        </div>
    </header>
    <!-- fin container header -->

    <div class="container bg-white">
<section class="row">

<div class="col-md-6">
<h2 class="text-decoration-underline text-danger">1-</h2>
<?php 
          // debug($_GET); // à enlever en production
          // if isset : est-il établi que nous avons toutes les informations dans $_GET ? 
          if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { // si oui si c'est vrai 
            echo "<h2>Votre produit : " .$_GET['article']. "</h2>";
            echo "<div class=\"border border-primary w-50 p-4\">";
            echo "<p>Produit : " .$_GET['article']. " *** Couleur : " .$_GET['couleur']. "</p>";// on affiche les valeurs
            echo "<p class=\"bg-success\">Prix : " .$_GET['prix']. " € </p>";
            echo "</div>";
          } else {
            echo "<h2>Fiche produit</h2>";
            echo "<p class=\"alert alert-danger w-50\">Ce produit n'existe pas < a href=\"01_methode_get.php\">Veuillez retourner sur la page des produits</a></p>";// sinon on affiche un message "ce produit n'existe pas"
          }
          ?>

</div>
<!-- fin col -->
<div class="col-md-6">
<h2 class="text-decoration-underline text-danger">Titre de niveau 2</h2>
</div>
<!-- fin col -->
<div class="col-md-12">
<h3>Exemples</h3>
</div>
<!-- fin col -->
</section>
<!-- fin row -->
    </div>
    <!-- fin div container -->

    <!-- on appel la date de footer  -->
    <?php require '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>