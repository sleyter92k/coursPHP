<?php 
// connexion au fichier init 
require_once 'inc/init.inc.php';

// debug($_SESSION);
// debug(strlen(' ma grand mère fait du vélo plus vite que moi '));

if ( !empty($_POST) ) {


  if ( !isset($_POST['civilite']) || $_POST['civilite'] != 'm' && $_POST['civilite'] != 'f' ) { // && ET
      $contenu .='<div class="alert alert-danger">La civilité n\'est pas valable !</div>';
  }
  if ( !isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 20) {
      // !isset n'est pas isset, .= concaténation puis affectation, || ou, strlen string length longueur chainbe de caractère
      $contenu .='<div class="alert alert-danger">Votre prénom doit faire entre 2 et 20 caractères</div>';
  }
  if ( !isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20) {
      $contenu .='<div class="alert alert-danger">Votre nom de famille doit faire entre 2 et 20 caractères</div>';
  }

  if ( !isset($_POST['email']) || strlen($_POST['email']) > 50 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      // filter_var filtre une variable, et dans ce filtre on passe la constante prédéfinie (EN MAJUSCULE) qui vérifie que c'est bien au format email
      $contenu .='<div class="alert alert-danger">Votre email n\'est pas conforme !</div>';
  }

  if ( !isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 4 || strlen($_POST['pseudo']) > 20) {
      $contenu .='<div class="alert alert-danger">Votre pseudo doit faire entre 4 et 20 caractères</div>';
  }

  if ( !isset($_POST['mdp']) || strlen($_POST['mdp']) < 4 || strlen($_POST['mdp']) > 20) {
      $contenu .='<div class="alert alert-danger">Votre mot de passe doit faire entre 4 et 20 caractères</div>';
  }
  if ( !isset($_POST['adresse']) || strlen($_POST['adresse']) < 4 || strlen($_POST['adresse']) > 50) {
      $contenu .='<div class="alert alert-danger">Votre adresse doit faire entre 4 et 50 caractères</div>';
  }
  if ( !isset($_POST['code_postal']) || !preg_match('#^[0-9]{5}$#', $_POST['code_postal']) ) {
      // preg_match vérifie si la chaîne de caractère a le format autorisé
      $contenu .='<div class="alert alert-danger">Le code postal n\'est pas valable !</div>';
  }
  if ( !isset($_POST['ville']) || strlen($_POST['ville']) < 1 || strlen($_POST['ville']) > 50) {
      $contenu .='<div class="alert alert-danger">Votre ville doit faire entre 1 et 50 caractères</div>';
  }

  if (empty($contenu)) {// si la variable est vide c'est qu'il n'y a aucune erreur dans $_POST
      $membre = executeRequete( " SELECT * FROM membres WHERE pseudo = :pseudo ", 
                                      array(':pseudo' => $_POST['pseudo']));

      if ($membre->rowCount() > 0) {
          $contenu .='<div class="alert alert-danger">Le pseudo est indisponible veuillez en choisir un autre !</div>';
      } else {
          $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);//bcrypt
          debug($mdp);
          $succes = executeRequete( " INSERT INTO membres (civilite, prenom, nom, email, pseudo, mdp, adresse, code_postal, ville, statut) VALUES (:civilite, :prenom, :nom, :email, :pseudo, :mdp, :adresse, :code_postal, :ville, 0) ",
          array(
              ':civilite' => $_POST['civilite'],
              ':prenom' => $_POST['prenom'],
              ':nom' => $_POST['nom'],
              ':email' => $_POST['email'],
              ':pseudo' => $_POST['pseudo'],
              ':mdp' => $mdp,
              ':adresse' => $_POST['adresse'],
              ':code_postal' => $_POST['code_postal'],
              ':ville' => $_POST['ville'],
          ));
    

          if ($succes) {
              $contenu .='<div class="alert alert-success">Vous êtes bien inscrit à La Boutique ! <br>   <a href="connexion.php">Cliquez ici pour vous connecter</a></div>  ';
          } else {
              $contenu .='<div class="alert alert-danger">Erreur lors de l\'inscription !</div>';
          }
      }
  }
}

?> 
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

<!-- =================================== -->
<!-- navbar -->
<!-- =================================== -->
<nav class="navbar sticky-top navbar-light bg-light">
<div class="container-fluid">

    <ul class="nav justify-content-center">

  <li class="nav-item">
    <a class="nav-link active" href="inscription.php" >Inscris-toi  !</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="panier.php">Mon panier</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="connexion.php">Me connecter</a>
  </li>

</ul>
  </div>
  
</nav>


    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid p-4 alert alert-primary">
        <div class="col-12 text-center">
            <h1 class="display-4">Ma boutique / Inscription </h1>
         
        </div>

    </header>

    <!-- fin container header -->
    <div class="container mb-4 bg-white">

<section class="row">

</div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">
    <?php   echo $contenu;  ?>
    <form action="" method="POST" class="row g-3">

    <div class="mb-3">
        
                <label for="civilite" class="form-label">Civilité </label><br>
                <input type="radio" name="civilite" value="m" id="civilite"> Mr 

                <input type="radio" name="civilite" value="f" id="civilite"> Mme
            </div>
 <div class="col-md-6">

  <label for="prenom" class="form-label">Prénom*</label>

  <input type="text"  name="prenom" class="form-control" placeholder="Prénom" aria-label="prenom" >
  </div>

  <div class="col-md-6">
  <label for="nom" class="form-label">Nom*</label>
  <input type="text" name="nom" class="form-control" placeholder="Nom" aria-label="Nom" >
  </div>

  <div class="col-12">
  <label for="email" class="form-label">Email*</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="nom@email.com" >

  </div>

  <div class="col-12">
  <label for="pseudo" class="form-label">Choisissez un pseudo*</label>
    <input type="pseudo" name="pseudo" class="form-control" id="pseudo" placeholder="choisissez un pseudo" maxlength="10" size="13" >

  </div>

  <div class="col-12">
  <label for="mdp" class="form-label">Mot de passe *</label>
    <input type="mdp" name="mdp" class="form-control" id="mdp"  >

  </div>

  <div class="col-12">
  <label for="adresse" class="form-label">Adresse</label>
    <input type="text" name="adresse" class="form-control" id="adresse" placeholder="votre adresse" >

  </div>
 

  <div class="col-md-6">
  <label for="code_postal" class="form-label">Code postal</label>
    <input type="text" name="code_postal" class="form-control" id="code_postal" placeholder="code postal"
      maxlength="5" size="10">
  </div>



  <div class="col-md-6">
  <label for="ville" class="form-label">Ville</label>
    <input type="text" name="ville" class="form-control" id="ville" placeholder="Ville" >
  </div>




  <div class="col-12">
  <button type="submit" class="btn btn-success">S'inscrire</button>

  </div>

</form>
    </div>

</section>
      
    </div>
    <!-- fin div container -->

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>