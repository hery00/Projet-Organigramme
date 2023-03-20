create database Organigramme;

create table personnel
(
    id_personnel serial not null,
    Nom varchar(200),
    Prenom varchar(100),
    Poste varchar(100),
    Manager INTEGER REFERENCES personnel(id_personnel) ON DELETE CASCADE,
    primary key(id_personnel)
);

insert into personnel values(default,'Rakotoson','Dera','President Directeur General et membre du CA',null);
-- insert into personnel values(default,'Rajaomarie','Jeanne','membre du CA',1);
-- insert into personnel values(default,'Randriamaro','Daniel','membre du CA',1);
-- insert into personnel values(default,'Razakandraina','Jeannot','membre du CA',1);
insert into personnel values(default,'Andrianimanana','Heriniaina','Directeur General',1);

insert into personnel values(default,'Razakaboana','Tahiana','Chef Departement informatiques',2);
insert into personnel values(default,'Randriamasy','Augustin','Chef Departement Marketing',2);
insert into personnel values(default,'Rabibisoa','Jazz','Chef Departement Communication',2);
insert into personnel values(default,'Randrianaivo','Olivier','Chef Departement Administration',2);


insert into personnel values(default,'Andrianjanaka','Njara Fenohasina','Responsable des maintenances et systemes',2);
insert into personnel values(default,'Rakoarivony','Fenitra','Developpeur',3);
insert into personnel values(default,'Razafidrakoto','Zo','Developpeur',3);

insert into personnel values(default,'Razafimahazo','Roberto','Responsable de la Commercial et marketing',4);
insert into personnel values(default,'Razafindralambo','Jenny','Agent Marketing',4);
insert into personnel values(default,'Randriambola','Ravaka','Graphic designer',5);
insert into personnel values(default,'Rakotoson','Mbola','Illustratice',5);
insert into personnel values(default,'Randriamasy','Noely','Responsable de la relation public',6);

<<<<<<< Updated upstream
CREATE VIEW perso_hierarchie AS
WITH RECURSIVE hierarchie(id_personnel, Nom,Prenom,Poste,Manager, niveau, chemin) AS (
  SELECT id_personnel, Nom,Prenom,Poste, Manager, 0 as niveau, ARRAY[id_personnel]
  FROM personnel
  WHERE Manager =2
  UNION ALL
  SELECT o.id_personnel, o.Nom,o.Prenom,o.Poste, o.Manager, oa.niveau + 1 as niveau, oa.chemin || o.id_personnel
  FROM personnel o
  JOIN hierarchie oa ON o.Manager= oa.id_personnel
)
SELECT id_personnel, Nom,Prenom,Poste, Manager, niveau,chemin
FROM hierarchie;

create table users
(
    id_user serial not null,
    Nom varchar(200),
    Prenom varchar(50),
    Email varchar(50),
    Pwd varchar(20),
    primary key(id_user)
);
-- raha iselect anle hierarchie de  " select * from perso_hierarchie";
-- raha iselect hierarchie par chef de select * from perso_hierarchie
-- raha amafa hierarchie na branche de tonga de " delete from personnel where id_personnel = le personnel lohanle branche" de vita

select * from perso_hierarchie;
select * from perso_hierarchie;

create table fichedeposte
(
    id_personnel int,
    intitule_poste varchar(250),
    poste_occup varchar(250),
    sup_h_nom varchar(250),
    sup_h_prenom varchar(250),
    fonction varchar(250),
    Niveau varchar(200),
    Formationse_et_qualifications varchar(200),
    Compétences varchar(200),
    Moyen varchar(200),
    foreign key (id_personnel) references personnel(id_personnel)
);

create table grille
(   
    id_grille serial not null,
    intitule_poste varchar(250),
    daty date,
    activites_quotidiens text,
    activites_semaines text,
    activites_mois text,
    activites_an text,
    activites_missions text,
    position_sup_hierarchique text,
    position_encadrement varchar(3),
    position_nb_encadres int,
    position_categories_hierarchique char,
    relation_agent text,
    relation_exterieur text,
    exigence_professionnelles text,
    exigence_perso text,
    exigence_maitrise text,
    moyen text,
    condition text,
    descri text,
    primary key(id_grille)
);

insert into grille values(default,'gestionnaire de paie','2023-02-02',
'activites_quotidiens','activites_semaines','activites_mois','activites_an',
'activites_missions','position_sup_hierarchique','oui',7,'A',
'relation_agent','relation_exterieur','exigence_professionnelles','exigence_perso',
'exigence_maitrise','moyen','condition','descri');
=======
create table user
(
    id_user serial no null,
    Nom varchar(200),
    Prenom varchar(50),
    Email varchar(50),
    Pwd varchar(20)
);

insert into user values(default,'Andria','Mbola','Andriambola@gmail.com','andria123');
>>>>>>> Stashed changes
