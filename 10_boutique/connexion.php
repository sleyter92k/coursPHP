<?php 
require_once 'inc/init.inc.php';

//2 deconnexion

require_once 'inc/init.inc.php';
// debug($_GET);

$message = '';
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') { // si il existe action qui contient 'deconnexion' dans l'url
    unset($_SESSION['membre']); // on supprime le membre de la session (le contenu du tableau indice membre)
    $message = '<div class="alert alert-success">Vous êtes Déconnecté</div>';// message de déconnexion cf echo plus bas
    debug($_SESSION);
}

//3 redirection vers la page profil

if (estConnecte()) {
  header('location:profil.php');
  exit();
}

//1 traitement du formulaire de connexion


// debug($_POST);

if(!empty($_POST)) {
    if (empty($_POST['pseudo'])) { //si c'est vide - 0 ou null c'est FALSE
        $contenu .='<div class="alert alert-danger">Le pseudo est requis !</div>';
    }
    if (empty($_POST['mdp'])) {
        $contenu .='<div class="alert alert-danger">Le mot de passe est manquant !</div>';
    }
    if (empty($contenu)) {
        $resultat = executeRequete("SELECT * FROM membres WHERE pseudo =:pseudo ",
        array (
            ':pseudo' => $_POST['pseudo'],
            // ':mdp' => $_POST['mdp'],
        ));
    
        if ($resultat->rowCount() == 1) {
            $membre = $resultat->fetch(PDO ::FETCH_ASSOC);
            // debug($membre);


            if (password_verify($_POST['mdp'], $membre['mdp'])) {
                // echo 'coucou';
                $_SESSION['membre'] = $membre;

                // debug($_SESSION);
                header('location:profil.php');//VOIR
                exit();
            }else {
              $contenu .='<div class="alert alert-danger">Erreur sur les identifiants !</div>';
            }
          

        }else {
          $contenu .='<div class="alert alert-danger">Erreur sur les identifiants !</div>';
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
    <title>Ma boutique - Se connecter</title>

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
    <a class="nav-link" href="connexion.php">Me connecter</a>
  </li> 
 
  <li class="nav-item">
    <a class="nav-link" href="panier.php">Mon panier</a>
  </li>


</ul>
  </div>
  
</nav>


    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid p-4 alert alert-primary">
        <div class="col-12 text-center">
            <h1 class="display-4">Connecte-toi à ton profil </h1>
         
        </div>

    </header>

    <!-- fin container header -->
    <div class="container mb-4 bg-white">

<section class="row">


    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">
     
    <?php echo $contenu; ?>



    <form action="" method="POST"> 
    <?php
    echo $contenu;
    echo $message;

    ?>
  <div class="mb-3">
    <label for="pseudo"  class="form-label" >Pseudo</label>
    <input type="text" class="form-control" name="pseudo" id="pseudo">
  </div>
  <div class="mb-3">
    <label for="mdp" class="form-label">Mot de passe</label>
    <input type="password" name="mdp" class="form-control" id="mdp">
  </div>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   Rester connecté </label>
</div>

  <button type="submit" class="btn btn-secondary">Se connecter</button>



</form>
<div class="alert alert-success">Pas encore membre ? 
   <br>   <a href="inscription.php">Cliquez ici pour vous inscrire!</a></div> 
    </div>

</section>
      
    </div>
    <!-- fin div container -->

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>