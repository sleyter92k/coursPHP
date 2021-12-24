<?php
require_once '../inc/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoursPHP - 2 Boucles</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<header class="container-fluid">
    <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - 02 Boucles</h1>
            <p class="lead">Les boucles permettent de répéter des opérations élémentaire sans avoir à réécrire le même code</p>

    
        </div>
    </header>

    <div class="row">
        <div class="col-md-6">
            <h2>While ...</h2>
            <?php
            echo "<hr>";
            $num =1;
            while($num<=40){
                echo $num."<br>";
            $num = $num+5;
}
            ?>
        </div>

        <div class="col-md-6">
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>