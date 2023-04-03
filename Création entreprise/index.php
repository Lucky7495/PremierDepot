<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>TheTechHub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include "header.php" ?>
<img class="magasin" src="Images/Page%20Accueil/magasin.jpeg" alt="">
 <p class="bienvenue">Bienvenue à TheTechHub !</p>
<p class="presentation">Ici nous vous proposons des ordinateurs de bureau, des ordinateurs portables ainsi que tous les périphériques nécessaires au bon fonctionnement de votre ordinateur.
    <br> Nous pouvons également  vous conseillez si vous avez besoin d'aide ou encore vous aider si vous avez un quelconque problème !</ordinateur></p>
<h3>Nos meilleures ventes :</h3>
<?php include "meilleuresventes.php" ;
 include "categories.php" ;
 include "footer.php" ?>
</body>
</html>
