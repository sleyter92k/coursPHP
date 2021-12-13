<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cours PHP - Introduction</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="container-fluid text-center">
        <h1 class="display-4">CoursPHP - Introduction</h1>
        <p class="lead">PHP : Php Hypertext Preprocessor</p>
    </header>

    <div class="container bg-white p-2">
        <section class="row">
            <div class="col-md-4">
                <h4>1/ Réaliser des sites dynamique</h4>
                <p>Pour réaliser un site dynamique nous allons aborder les points suivants : </p>
                <ul>
                    <li>La syntaxe et les caractéristiques du language PHP (v7)</li>
                    <li>Les notions essentielles du language SQL permettant la gestion d'une BDD et la réalisation ddes requêtes de base</li>
                    <li>... et les moyens d'y accéder à l'aide de fonctions spécialisées de PHP (ou d'objet)</li>
                        <!-- Mon premier passage en PHP -->
                    <li>    
                    <?php echo "Mon premier texte fais en PHP"; ?>
                    </li>
                </ul>
            </div>
            <!-- fin col -->
            <div class="col-md-4">
                <h4>2/ PHP c'est quoi ?</h4>
                <p>PHP permet de faire des pages intéractive ; une page interactive permet à un visiteur de saisir des données personnelles qui sont ensuite transmises, ou elles peuvent rester stockées dans une BDD pour être diffusées vers d'autres utilisateurs. Un utilisateur peut par exemple s'enregistrer et retrouver une page adaptée à ses besoins lors d'une visite ultérieur. Il peut aussi envoyer des e-maiks et des fichiers sans avoir à passer par son logiciel de messagerie. en associant toutes ces caractéristiques il est possible de créer aussi des sites de diffusion et de collecte d'informations que des sites e-commerce, de recontre ou des blogs.</p>
            </div>
            <!-- fin col -->
            <div class="col-md-4">
                <h4>3/ Rappel sur la BDD</h4>
                <p>Pour contenir la masse d'informations collectées, PHP s'appuie généralement sur une BDD, le plus souvent MySQL mais aussi SQLite, et sur des serveurs Apache. PHP, MySQL et Apache forment le trio ultradominant sur les serveurs internet. Quand ce trio est associé à un serveur Linux on parle de LAMP. PHP est utilisé par les 3/4 des sites de la planète</p>
                <p>Pour utiliser PHP ssur un PC on utilisera XAMPP mais aussi Laragon, sur Mac on privilégiera MAMP</p>
            </div>
            <!-- fin col -->
        </section>
            <!-- fin row -->

        <section class="row">    

            <div class="col-md-4">
                <h4>4/ PHP Info</h4>
                <p>Avec le code suivant écrit dans un fichier nommé 02_infos.php placé sur le serveur d'évaluation on obtient toutes les infos sur le php exécuté dans ce serveur.</p>
                <code class="alert alert-success">&lt;?php phpinfo();?</code>
                <a href="02_infos.php" class="btn btn-primary btn-sm mb-2">PHP infos</a>
            </div>
            <!-- fin col -->

            <div class="col-md-4">
                <p> la fonction date () avec ses arguments qui nous donne la date et l'heure du serveur</p>
                <?php //echo date('d/m/y - H:m:s'); ?>
                <?php echo "<h3> Date du jour : ". date('d/m/Y') ."</h5>";
                      echo "<p>Bienvenue sur le cours PHP</p>";  
                ?>

            </div>
            <!-- fin col -->

            <div class="col-md-4">
                <h4>6/ Le cycle de vie d'une page PHP</h4>
                <ol>
                    <li>Envoie d'une requête HTTP (Hyper Text transfer Protocol) par le navigateur client vers le serveur du type
                        http://www.monsite.fr/info.php</li>
                    <li>Interprétation par le serveur du code PHP contenu dans la page appelée</li>
                    <li>Envoi par le serveur d'un fichier dont le contenu est purement HTML</li>

                    <p><a href="../00_pages/01_ma_page_php.php">Ici un lien vers une autre page PHP</a></p>
                </ol>
            </div>
            <!-- fin col -->

        </section>
        <!-- fin row -->

        <section class="row m-2 p-2">
      <div class="col-md-12">
        <h3>Inclure des fichiers externe en PHP</h3>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Fonction</th>
              <th>Description</th>
         
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><code>include("mon_fichier.php")</code></td>
              <td>Lors de son interprétation par le serveur, cette ligne est remplacée par tout le contenu du fichier précise en paramètre , il faut fournir le nom et l'adresse complète ; en cas d'erreur, par ex. si le précisé en paramètre, il faut fournir le nom et l'adresse complète ; en cas d'erreur, par ex. si le fichier n'est pas trouvé, include() ne génère qu'une alrte (un warning) et le script continue </td>
            </tr>
            <tr>
              <td><code>require("mon_fichier.php")</code></td>
              <td>Require() a desormais un comportement identique à include(), à la différence près qu'en cas d'erreur, require() provoque une erreur "fatale" (fatal error) et met fin au script </td>
            </tr>
            <tr>
              <td><code>include_once("mon_fichier.php") <br> require_once("mon_fichier.php")</code></td>
              <td>Ces fonctions ne sont pas exécutées une fois dans le code qui précède.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
        </section>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>