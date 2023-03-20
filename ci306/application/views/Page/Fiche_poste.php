<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>Assets/CSS/stylefdposte.css">
    <title>Fiche</title>
</head>
<body class="main">
    <div class="container">
<form action="<?php echo base_url('poste/load_fiche');?>" method="POST" >
<h1>Fiche de poste</h1>
        <table id="tableau">
            <tr class="" >
                <td id="logo" rowspan="2">
                    <h2>Logo</h2>
                </td>
                <td>
                <strong><center>Poste occupé par</center></strong>
                <p>XXXXXX (nom et prénom)</p>
                </td>
            </tr>
            <tr class="">
                <td>
                <strong><center>Intitulé de poste</center></strong>
                <!-- <p>.?php echo $intitule?></p> -->
                </td>
            </tr>
            
            <tr class="">
                <td colspan="2">
                activite quotidienne
                </td>
                 
            </tr>
            <tr class="">
                <td colspan="2">
                <!-- <?php echo $activite_quotidienne?> -->
                </td>
                 
            </tr>
            <tr class="">
                <td colspan="2">
                Activités hebdomadaire
                </td>
                 
            </tr>
            <tr class="">
                <td colspan="2">
                <!-- <?php echo $activite_hebdomadaire?> -->

                </td>
                 
            </tr>
            <tr class="">
                <td colspan="2">
                A compléter
                </td>
            </tr>
            <tr class="">
                <td colspan="2">
                RELATIONS FONCTIONNELLES
                </td>
            </tr>
            <tr class="">
                <td colspan="2">
                A compléter
                </td>
            </tr>
            <tr class="">
                <td colspan="2">
                MOYENS TECHNIQUES MIS A DISPOSITION
                </td>
            </tr>
            <tr class="">
                <td colspan="2">
                A compléter
                </td>
            </tr>
            <tr class="">
                <td colspan="2">
                MISSIONS ET ACTIVITÉS DU POSTE
                </td>
               
            </tr>
            <tr class="">
                <td>
                Missions
principales
                </td>
                <td>
                A compléter
                </td>
            </tr>
            <tr class="">
                <td>
                Missions
spécifiques
                </td>
                <td>
                A compléter
                </td>
            </tr>
            <tr class="">
                <td>
                Intérêts,
contraintes,
difficultés du
poste
                </td>
                <td>
                A compléter
                </td>
            </tr>
            <tr class="">
                <td colspan="2">
                COMPÉTENCES REQUISES
                </td>
               
            </tr>
          
            <tr class="">
                <td>
                Savoirs 
                </td>
                <td>
                A compléter
                </td>
            </tr>
            <tr class="">
                <td>
                Savoirs 
                </td>
                <td>
                A compléter
                </td>
            </tr>
            <tr class="">
                <td>
                Savoirs faire
                </td>
                <td>
                A compléter
                </td>
            </tr>
            <tr class="">
                <td>
                Savoirs être
                </td>
                <td>
                A compléter
                </td>
            </tr>
        </table>
       
</body>
</html>