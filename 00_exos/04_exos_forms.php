<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exos 04 Forms</title>
</head>
<body>
    <header class="container-fluid">
        <h1 class="display-4 text-center">Exos Forms</h1>
        <p class="lead">Exercice, Traitement d'un formulaire.</p>
    </header>

    <div class="container bg-white">
        <h2>Formulaire</h2>
        <ul>
            <li>Exo : faire un formulaire avec les champs prénoms, nom, email, adresse, code postal ville et téléphone<br> le champ prenom n'est pas obligatoire</li>
            <li>le traitement du formulaire se fait dans un second fichier nommé 04_traitement_form.php</li>
            <li>l'attribut action de la balise form contient don le nom de ce fichier placé dans le même dossier que notre page avec le form</li>
        </ul>
        <hr>
        <form action="04_traitement_forms.php" method="POST">

            <div class="col-md-6">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" name="prenom" class="form-control" id="prenom">
            </div>

            <div class="col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" required>
            </div>
       
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
        
            <div class="col-6">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" id="adresse" required>
            </div>
            
            <div class="col-md-2">
                <label for="code_postal" class="form-label">Code Postal</label>
                <input type="text" name="code_postal" class="form-control" id="code_postal" required>
            </div>

            <div class="col-md-6">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control" id="ville" required>
            </div>

            <div class="col-md-2">
                <label for="portable" class="form-label">Portable</label>
                <input type="text" name="portable" class="form-control" id="portable" required>
            </div>

            <div class="col-md-2">
                <label for="telephone_fixe" class="form-label">Téléphone Fixe</label>
                <input type="text" name="telephone_fixe" class="form-control" id="telephone_fixe" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Envoyez</button>
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>