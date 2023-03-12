<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body class="main">
<form action="<?php echo base_url('Form/get_form');?>" method="POST")
    <div class="container">
        <div class="titre">
            <h1> Veuillez remplir le formulaire ci-dessous</h1>
        </div>
        <div class="intitule">Intitulé de poste : <input type="text" name="intitule_poste"> </div>
        <div class="poste">Poste occupé par : <input type="text" name="poste_occup"> </div>
        <div class="sup"> Nom du Supérieur hiérarchique : <input type="text" name="sup_h_nom"> </div>
        <div class="sup">Prenom du Supérieur hiérarchique : <input type="text" name="sup_h_prenom"> </div>
        <div class="fonction">Fonction : <input type="text" name="fonction"> </div>
        <div class="intitule">Exigences requises :
            <p>Niveau requis <input type="text" name="niveau"></p>
            <p>Formations et qualifications nécessaires<input type="text" name="formations"></p>
            <p>Compétences nécessaires (techniques, managériales, relationnelles)<input type="text" name="competences"></p>
        </div>
        <div class="moyen">Moyen(humains,matériels,financiers):<input type="text" name="moyen"> </div>
        <button class="btn">Confirmer</button>
    </div>
</body>
</html>