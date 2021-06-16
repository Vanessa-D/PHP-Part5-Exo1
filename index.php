<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 1</title>
</head>
<body>
    <p>
        Créer un lien avec les paramètres "nom", "prénom" et "âge" dirigeant vers la page courante, puis vers une autre page.</br>
        Si l'âge est supérieur à 18 et inférieur à 130, afficher ces paramètres.</br>
        L'âge ne peut être qu'un entier :
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <!-- Lien auquel on donne des paramètres dans la barre du navigateur -->
        <a href="index.php?nom=Gatto&amp;prenom=Evie">Lien Nom/Prénom dirigeant vers la page courante</a>
        
        <?php
            /* Variable GET --> variable Superglobale */
            echo $_GET['prenom']. ' ' .$_GET['nom'];
        ?>

    </div>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <a href="user.php?nom=Gatto&amp;prenom=Evie&amp;age=10">Lien Nom/Prénom/Age dirigeant vers une autre page avec une condition d'affichage</a>
    </div>
</body>
</html>