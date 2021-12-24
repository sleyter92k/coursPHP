<?php
require_once '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoursPHP - Exo 2 array</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid">
    <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Chapitre 04 - Tableaux</h1>
            <p class="lead"><i class="bi bi-caret-right-fill">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indince numérique (le premier ayant par défaut la valeur 0 et non 1).D'où l'expression de "tableau indicé".Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indince numérique (le premier ayant par défaut la valeur 0 et non 1).D'où l'expression de "tableau indicé".</i></p>
    
        </div>
    </header>
    <!-- fin container header -->

    <div class="container bg-white">
<section class="row">

<div class="col-md-6">
<h2 class="text-decoration-underline text-danger">1- Les tableaux</h2>
<p>Un tableau appelé "array" en anglais est une variable améliorée dans laquelle on stocke une multitude de valeurs.Ces valeurs peuvent être de n'importe quel type.Elles  possèdent un indice dont la numérotation commence à 0.</p>
<p>Méthode 1 pour déclarer un tableau : <code>$tableau1 = array('Gabin', 'Arletty', 'Fernandel', 'Dalio', 'Pauline Carton' ) ;</code></p>
<p>Méthode 2: <code>$tableau2 = ['Algérie', 'France', 'Espagne', 'Italie' ];</code></p>
<h3>Exemples//</h3>

<?php 
$tab[0] = 2021 ;
$tab[1] = 3.14 ;
$tab[2] = "PHP 7" ;
$tab[35] = $tab[2].  " et MySQL " ;
$tab[36] =  "et là j'ajoute coucou!";

// jevar_dump($tab);

echo " <p>Nombre d'éléments dans le tableau : " .count($tab)."</p>"; // on compte le nombre de valeurs dans le tableau 
echo "<p>Le langage préféré de l'open source est le <code> $tab[2]</code></p>";
echo "<p>Utiliser <code>$tab[35] !!!!!</code></p>";
?>
</div>
<!-- fin col -->

<div class="col-md-6">
<h2 class="text-decoration-underline text-danger">2-Les tableaux associatifs</h2>
<?php 
//tableau associatif
//$couleurs = array
//dans un tableau associatif nous pouvons choisir le nom des indices
$couleurs = array(
    'b' => 'bleu',
    'bl' => 'blanc',
    'r' =>'rouge',
);

debug($couleurs);

// echo "<p>La première couleur du tableau associatif est  le $couleurs[b]</p>";// si l'echo est entre guillemets doubles il n'est pas utile de noter l'indice associatif (ici b) entre simple quote >>> Indispensable avec des requêtes  SQL

// echo count($couleurs);
// echo sizeof($couleurs);

echo "<p>Le nombre de valeurs est de : avec count ()" .count($couleurs)."</p>";
echo "<p>Le nombre de valeurs est de : avec sizeof ()" .sizeof($couleurs)."</p>";

?>
<div class="col-md-6">
    <h3>Exemples//</h3>
    <?php 
    echo "<p>Le drapeau français est :$couleurs[b],$couleurs[bl],$couleurs[r]. </p>";
    ?>
</div>

</div>
<!-- fin col -->
<div class="col-md-12">
<h2 class="text-decoration-underline text-danger">3 - Parcourir un tableau associatif avec <code>foreach</code></h2>
<p>Quand il y a 2 variables après "as" celle de gauche parcourt les indices et celle de droite parcourt les valeurs  <br> 
          <code>
            echo "&lt;ol>";<br>
            foreach ( $couleurs as $indice => $teinte ) {<br>
              echo "&lt;li>Indice : $indice correspond à $teinte &lt;/li>";<br>
            }<br>
            echo "&lt;/ol>";<br>
        </code></p>

<?php 
echo "<ol>";
foreach ($couleurs as $indice =>$teintes) {
  echo "<li>Indice : $indice correspond à  $teintes</li>";
}
echo "</ol>";
echo "<hr>";

$contacts = array(
    'prenom' => 'Fatima',
    'nom' => 'CHINE',
    'email' =>'chinefatimabeya@gmail.com',
    'telephone' =>'06.26.89.53.87',
  );

  foreach ($contacts as $indice => $infos) {
    // echo "<p>$indice : $infos </p>";
    if($indice == 'nom') { 
      echo "<h3>$infos</h3>"; 
    }else {
      echo "<p> $infos </p>";
    };
  
  }
  
?>
</div>
<!-- fin col -->
</section>
<!-- fin row -->
<section class="row">
<div class="col-md-6">
<h2 class="text-decoration-underline text-danger">4-Tableaux multidimensionnels</h2>
<?php 
;
?>


</div>
<!-- fin col -->
<div class="col-md-6">
<h2 class="text-decoration-underline text-danger">Titredeniveau2</h2>
</div>
</section>

    </div>
    <!-- fin div container -->

    <!-- on appel la date de footer  -->
    <?php require '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>