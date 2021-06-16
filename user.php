<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>User page</title>
</head>
<body>
    <div class="text-center mt-5">
        <button type="button" class="btn btn-info"><a href="index.php" style="color : white;">Back to index</a></button>
    </div>
    <div class="text-center">
        <?php
            /* On convertit la variable 'age' en type entier (int) --> transtypage 
               pour s'assurer d'avoir un nombre entier */
            $_GET['age'] = (int) $_GET['age'];
            // Condition : SI la valeur du paramètre est > 18 ET < 130
            if($_GET['age'] > 18 && $_GET['age'] < 130){
                // ... on affiche les noms des paramètres récupérés avec $_GET
                echo $_GET['prenom']. ' ' .$_GET['nom']. ' ' .$_GET['age'];
            }else{
                // SINON message d'erreur
                echo 'Le nombre ne respecte pas la condition';
            }
        ?>
    </div>
</body>
</html>