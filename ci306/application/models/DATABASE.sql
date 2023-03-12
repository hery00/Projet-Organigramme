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

insert into personnel values(default,'Rakotoson','Dera','President Directeur General',null);

insert into personnel values(default,'Rajaomarie','Jeanne','membre du CA',1);
insert into personnel values(default,'Randriamaro','Daniel','membre du CA',1);
insert into personnel values(default,'Rakotoson','Dera','membre du CA',null);
insert into personnel values(default,'Razakandraina','Jeannot','membre du CA',1);

insert into personnel values(default,'Andrianimanana','Heriniaina','Directeur General',1);

insert into personnel values(default,'Razakaboana','Tahiana','Chef Departement informatiques',6);
insert into personnel values(default,'Randriamasy','Augustin','Chef Departement Marketing',6);
insert into personnel values(default,'Rabibisoa','Jazz','Chef Departement Communication',6);
insert into personnel values(default,'Randrianaivo','Olivier','Chef Departement Administration',6);


insert into personnel values(default,'Andrianjanaka','Njara Fenohasina','Responsable des maintenances et systemes',7);
insert into personnel values(default,'Rakoarivony','Fenitra','Developpeur',7);
insert into personnel values(default,'Razafidrakoto','Zo','Developpeur',7);

insert into personnel values(default,'Razafimahazo','Roberto','Responsable de la Commercial et marketing',8);
insert into personnel values(default,'Razafindralambo','Jenny','Agent Marketing',8);
insert into personnel values(default,'Randriambola','Ravaka','Graphic designer',9);
insert into personnel values(default,'Rakotoson','Mbola','Illustratice',9);
insert into personnel values(default,'Randriamasy','Noely','Responsable de la relation public',10);

CREATE VIEW perso_hierarchie AS
WITH RECURSIVE hierarchie(id_personnel, Nom,Prenom,Poste,Manager, niveau, chemin) AS (
  SELECT id_personnel, Nom,Prenom,Poste, Manager, 0 as niveau, ARRAY[id_personnel]
  FROM personnel
  WHERE Manager IS NULL
  UNION ALL
  SELECT o.id_personnel, o.Nom,o.Prenom,o.Poste, o.Manager, oa.niveau + 1 as niveau, oa.chemin || o.id_personnel
  FROM personnel o
  JOIN hierarchie oa ON o.Manager= oa.id_personnel
)
SELECT id_personnel, Nom,Prenom,Poste, Manager, niveau,chemin
FROM hierarchie;

create table utilisateur
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