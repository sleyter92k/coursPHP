<?php

// require connextion session
require_once '../inc/init.inc.php';
// debug($_SESSION);
// debug(estConnecte());
// debug(estAdmin());

if (!estAdmin()) {
    header('location:../connexion.php');
}

if (!empty($_POST)) {

    //ici il faudrait faire 9 conditions pour verifier que les champs du form sont bien remplis

    $_POST['reference'] = htmlspecialchars($_POST['reference']);
    $_POST['categorie'] = htmlspecialchars($_POST['categorie']);
    $_POST['titre'] = htmlspecialchars($_POST['titre']);
    $_POST['description'] = htmlspecialchars($_POST['description']);
    $_POST['couleur'] = htmlspecialchars($_POST['couleur']);
    $_POST['taille'] = htmlspecialchars($_POST['taille']);
    $_POST['public'] = htmlspecialchars($_POST['public']);
    $_POST['prix'] = htmlspecialchars($_POST['prix']);
    $_POST['stock'] = htmlspecialchars($_POST['stock']);


debug($_POST);

debug($_FILES);
// traitement du fichier image, de la photo

$photo_bdd = '';

if(!empty($_FILES['photo']['name'])) {
$photo_bdd = 'photos/' .$_FILES['photo']['name'];
copy($_FILES['photo']['tmp_name'], '../' .$photo_bdd);
} // fin du traitement photo

$requete = executeRequete("INSERT INTO produits (reference, categorie, titre, description, couleur, taille, public, photo, prix, stock) VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :public, :photo, :prix, :stock)",
array(
':reference' => $_POST ['reference'],
':categorie' => $_POST ['categorie'],
':titre' => $_POST ['titre'],
':description' => $_POST ['description'],
':couleur' => $_POST ['couleur'],
':taille' => $_POST ['taille'],
':public' => $_POST ['public'],
':photo' => $photo_bdd,
':prix' => $_POST ['prix'],
':stock' => $_POST ['stock'],
));

if ($requete) {
    $contenu .= '<div class="alert alert-primary">Le produit a été enregistré.</div>';
} else {
    $contenu .= '<div class="alert alert-primary">Erreur lors de l\'enregistrement</div>';
}


}//fin insertion nouveau produit
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
   <!-- =================================== -->
  <!-- en-tête -->
  <!-- =================================== -->

  <header class="container-fluid p-4 alert alert-primary">
    <div class="col-12 text-center">
      <h1 class="display-4">Ma boutique - Administration </h1>
      <!-- <img src="../photos/logo.jpg" alt="logo"> -->
    </div>

  </header>
  <div class="container mb-4 bg-light">
  <section class="row">
      <!-- col -->
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card1" style="width: 18rem;">
          <img src="../photos/pull1.jpg" class="card-img-top" alt="pull1">
          <div class="card-body text-center">
            <h5 class="card-title">Pull gris</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">50 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
         Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->

      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card2" style="width: 18rem;">
          <img src="../photos/pull2.jpg" class="card-img-top" alt="pull2">
          <div class="card-body text-center">
            <h5 class="card-title">Pull white</h5>


          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">39 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
           Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample2">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->

    </section>
    <section class="row">
      <!-- col -->
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card3" style="width: 18rem;">
          <img src="../photos/pantalon1.jpg" class="card-img-top" alt="pantalon1">
          <div class="card-body text-center">
            <h5 class="card-title">Pantalon blanc</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">50 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
      Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample3">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->


      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <!-- card 2 -->
        <div class="card4" style="width: 18rem;">
          <img src="../photos/pantalon2.jpg" class="card-img-top" alt="pantalon2">
          <div class="card-body text-center">
            <h5 class="card-title">Pantalon</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix :</li>
          <li class="list-group-item">39 €</li>
        </ul>
        <p>
          <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
            Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample4">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->
      <!-- navigation produits -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
      <!-- fin navigation page produits -->
    </section>

    <?php
    $requete = $pdoMAB->query(" SELECT * FROM produits ORDER BY id_produit");
    // debug($resultat);
    $pdt = $requete->rowCount();
    // debug($nbr_commentaires);
    ?>
    <h5>Il y a <?php echo $pdt; ?> produits en ligne </h5>

    <table class="table table-striped">
      <thead>
        <tr>
        <th class="text text-danger">Photo</th>
          <th class="text text-danger">Titre</th>
          <th class="text text-danger">Categorie</th>
          <th class="text text-danger">Taille</th>
          <th class="text text-danger">Description</th>
          <th class="text text-danger">Couleurs</th>


        </tr>
      </thead>
      <tbody>
        <!-- ouverture de la boucle while -->
        <?php while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td><img src="../<?php echo $ligne['photo']; ?>" alt=""></td>
            <td><?php echo $ligne['titre']; ?></td>
            <td><?php echo $ligne['categorie'] . ' ' . $ligne['stock']; ?></td>
            <td><?php echo $ligne['taille']; ?></td>
            <td><?php echo $ligne['description']; ?></td>
            <td><?php echo $ligne['couleur']; ?></td>
            <td><?php echo $ligne['stock']; ?></td>
            

          </tr>
          <!-- fermeture de la boucle -->
        <?php } ?>
      </tbody>
    </table>
 
  <!-- fin col -->
  </section> 
  <!-- fin row -->
<section class="row">
  <h2>Insertion d'un nouveau produit</h2>
  <div class="col-md-8 p-2 bg-light border boder-danger">
    <form action="" method="POST" enctype="multipart/form-data">
      <!-- l'attribut enctype spécifie que le formulaire envoie des fichiers en plus de données texte; il va nous permettre de télécharger un fichier ici une photo -->
  <label for="reference" class="form-label">Ref produit</label>
  <input type="text" name="reference" id="reference" class="form-control">

  <label for="categorie" class="form-label">Catégorie</label>
  <input type="text" name="categorie" id="categorie" class="form-control">

  <label for="titre" class="form-label">Titre *</label>
  <input type="text" name="titre" id="titre" class="form-control">

  <label for="description" class="form-label">Description</label>
  <textarea type="text" name="description" id="description" class="form-control"></textarea>

  <label for="couleur" class="form-label">Couleur</label>
  <input type="text" name="couleur" id="couleur" class="form-control">

  <label for="taille" class="form-label">Taille</label>
  <select name="taille" id="taille" class="form-select">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>

            <input type="radio" name="public" value="f"checked>
            <label for="public" class="form-check-label">Femme</label>

            <input type="radio" name="public" value="m"checked>
            <label for="public" class="form-check-label">Homme</label>

            <input type="radio" name="public" value="mixte"checked>
            <label for="public" class="form-check-label">Mixte</label>

            <label for="photo" class="form-label">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">

            <label for="prix" class="form-label">Prix</label>
            <input type="text" name="prix" id="prix" class="form-control">

            <label for="stock" class="form-label">Stock</label>
            <input type="text" name="stock" id="stock" class="form-control">

            <button class="btn btn-outline-info" type="submit">Ajouter un produit</button>
    </form>
  </div>
</section>
      
</div>

  <?php 
// require_once '../inc/footer.inc.php';
  ?>
  <!-- Footer -->
  <!-- Optional JavaScript -->
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>