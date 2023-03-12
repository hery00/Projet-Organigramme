<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body class="main">
<form action="<?php echo base_url('Form/Fiche_poste');?>" method="POST")
    <div class="container">
        <div class="titre">
            <h1> Veuillez remplir le formulaire ci-dessous</h1>
        </div>
        <div class="intitule">Intitulé de poste : <input type="text"> </div>
        <div class="poste">Poste occupé par : <input type="text"> </div>
        <div class="sup">Supérieur hiérarchique : <input type="text"> </div>
        <div class="fonction">Fonction : <input type="text"> </div>
        <div class="intitule">Exigences requises :
            <p>Niveau requis <input type="text"></p>
            <p>Formations et qualifications nécessaires   <input type="text"></p>
            <p>Compétences nécessaires (techniques, managériales, relationnelles) <input type="text"></p>
        </div>
        <div class="moyen">Moyen(humains,matériels,financiers) : <input type="text"> </div>
        <button class="btn">Confirmer</button>
    </div>
</body>
</html>