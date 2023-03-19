<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body class="main">
<form action="<?php echo base_url('poste/load_grille');?>" method="POST")
    <div class="container">
        <div class="titre">
            <h1> Veuillez remplir la grille ci-dessous</h1>
        </div>
        <div class="intitule">Intitulé du poste : <input type="text"> </div>
        <div class="daty">Date :  <input type="date"></div>

        <h2>ACTIVITES ET TACHES DU POSTE</h2>
            <div class="1">1. Quelles sont les activités effectuées par votre agent quotidiennement ?
            (avec estimation de leur durée)</div>
            <textarea name="message" rows="10" cols="90"></textarea> 
            <div class="2">2. Quelles sont les activités effectuées par votre agent une ou plusieurs fois par semaine ?
            (avec estimation de leur durée)</div>
            <textarea name="message" rows="10" cols="90"></textarea>
            <div class="3">3. Quelles sont les activités effectuées par votre agent une ou plusieurs fois par mois ?
            (avec estimation de leur durée)</div>
            <textarea name="message" rows="10" cols="90"></textarea>
            <div class="4">4. Quelles sont les activités effectuées par votre agent une ou plusieurs fois par an ?
            (avec estimation de leur durée)</div>
            <textarea name="message" rows="10" cols="90"></textarea>
            <div class="5">5. Votre agent a-t’il d’autres missions au sein de la collectivité (ACMO...) ?
            (combien de temps consacre t-il?)</div>
            <textarea name="message" rows="10" cols="90"></textarea>
        
        <h2>POSITIONNEMENT HIERARCHIQUE</h2>
            <div class="p1">1. Qui est le supérieur hiérarchique direct de l’agent ? <textarea name="message" rows="1" cols="20"></textarea></div>
            <div class="p2">2. Encadre-t-il- des agents au cours de vos activités ? Oui<input type="checkbox"> Non<input type="checkbox"></div>
            <div class="p3">3. Si oui, indiquez le nombre d’agents encadrés : <textarea name="message" rows="1" cols="20"></textarea></div>
            <div class="p1">4. A quelle catégorie hiérarchique appartiennent-ils ? A<input type="checkbox"> B<input type="checkbox"> C<input type="checkbox"></div>

        <h2>RELATIONS FONCTIONNELLES</h2>
            <div class="r1">1. Au cours des activités, avec qui l’agent est en contact au sein de l’établissement ?
            Personne et fonction </div>
            <textarea name="message" rows="10" cols="90"></textarea> 
            <div class="r2">2. Au cours de ses activités, quelles sont les personnes extérieures à l’établissement avec qui l’agent est en contact ?
            Personne et fonction </div>
            <textarea name="message" rows="10" cols="90"></textarea> 

        <h2>EXIGENCES DU POSTE</h2> 
            <div class="e1">1. Quelles formations et qualifications professionnelles vous semblent requises pour occuper ce
            poste ?</div>
            <textarea name="message" rows="10" cols="90"></textarea> 
            <div class="e2">2. Selon vous, quelles sont les qualités personnelles nécessaires pour occuper ce poste  ?
            </div>
            <textarea name="message" rows="10" cols="90"></textarea> 
            <div class="e3">3. A votre avis, quelle est la durée moyenne pour maîtriser ce poste ? </div>
            <textarea name="message" rows="10" cols="90"></textarea> 

        <h2>MOYENS DU POSTE</h2> 
            <div class="m">Quels sont les moyens matériels dont dispose l’agent pour remplir ses fonctions (outils, logiciels,
            fournitures...) ?</div>
            <textarea name="message" rows="10" cols="90"></textarea> 
        
        <h2>CONDITIONS PARTICULIERES ET CONTRAINTES D’EXERCICE DU POSTE</h2>
            <div class="c">Quelles sont les contraintes (physiques, de temps, d’espace, port EPI etc.) que l’agent rencontre dans
            l’exercice de ses fonctions ?
            </div>
            <textarea name="message" rows="10" cols="90"></textarea> 

        <h2>POUVEZ-VOUS DECRIRE UNE JOURNEE TYPE DE VOTRE AGENT?</h2>
            <div class="txt"><textarea name="message" rows="40" cols="100"></textarea> </div>  
        
        <div><button type="submit">Confirmer</button></div> 
        
    </div>
</body>
</html>