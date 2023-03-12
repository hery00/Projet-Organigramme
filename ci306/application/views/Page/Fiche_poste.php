<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche</title>
</head>
<body class="main">
    <div class="container">
<form action="<?php echo base_url('form/form_fiche');?>" method="POST" >
        <div class="titre">
            <h1>Votre fiche_poste</h1>
        </div>
        <div class="intitule">Intitulé de poste :</div>
        <div class="poste">Poste occupé par : </div>
        <div class="sup">Supérieur hiérarchique :  </div>
        <div class="fonction">Fonction :  </div>
        <div class="intitule">Exigences requises :
            <p>Niveau requis: </p>
            <p>Formations et qualifications nécessaires: </p>
            <p>Compétences nécessaires (techniques, managériales, relationnelles):</p>
        </div>
        <div class="moyen">Moyen(humains,matériels,financiers) :
    </div>
</body>
</html>