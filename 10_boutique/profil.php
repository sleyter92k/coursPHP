<?php

require_once 'inc/init.inc.php';
// debug($_SESSION);
if(estAdmin()) {
    echo '<p>Vous êtes administrateur</p>';
    echo '<a class="btn btn-primary" href="admin/accueil.php">Espace admin</a>'; 
    echo '<a class="btn btn-primary" href="accueil.php">Aller a la boutique</a>';
} else {
    echo '<p>Vous êtes connecté rendez-vous à la Boutique</p>';
    echo '<a class="btn btn-success" href="accueil.php">Retour à la boutique</a>';
}
if (estconnecte()){
    
}

if (!estConnecte()) {
    header('location:connexion.php');
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Profil</title>
</head>
<body>
    <header class="container bg-primary text-white">
    <h1>Profil</h1>
    <p>Bonjour <?php echo $_SESSION['membre']['prenom']; ?></p>
    </header>


    <?php
    if(estAdmin()) {
        echo '<p>Vous êtes administrateur</p>';
    } else {
        echo '<p>Vous êtes connecté, rendez-vous à la boutique</p>';
        echo '<a class="btn btn-info" href=" '.RACINE_SITE.' accueil.php">Retour à la boutique</a>';
    }
    if (estConnecte()) {

        // echo 'coucou';
        echo '<a class="btn btn-secondary" href="' .RACINE_SITE. 'connexion.php?action=deconnexion">Se Déconnecter</a>';

    }
    ?>

<form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container-fluid">
<div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">
    <?php   echo $contenu;  ?>
    <h3>Mise à jour de vos informations</h3>
    <form action="" method="POST" class="row g-3">

    <div class="mb-3">
        
                <label for="civilite" class="form-label">Civilité </label><br>
                <input type="radio" name="civilite" value="m" id="civilite"> Mr 

                <input type="radio" name="civilite" value="f" id="civilite"> Mme
            </div>
 <div class="col-md-6">

  <label for="prenom" class="form-label">Prénom</label>

  <input type="text"  name="prenom" class="form-control" placeholder="Prénom" aria-label="prenom" >
  </div>

  <div class="col-md-6">
  <label for="nom" class="form-label">Nom</label>
  <input type="text" name="nom" class="form-control" placeholder="Nom" aria-label="Nom" >
  </div>

  <div class="col-12">
  <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="nom@email.com" >

  </div>

  <div class="col-12">
  <label for="pseudo" class="form-label">Votre pseudo</label>
    <input type="pseudo" name="pseudo" class="form-control" id="pseudo" placeholder="choisissez un pseudo" maxlength="10" size="13" >

  </div>

  <div class="col-12">
  <label for="mdp" class="form-label">Votre mot de passe</label>
    <input type="mdp" name="mdp" class="form-control" id="mdp"  >

  </div>

  <div class="col-12">
  <label for="adresse" class="form-label">Votre Adresse</label>
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
  <button type="submit" class="btn btn-secondary">Modifier vos informations</button>

  </div>

</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> 