CREATE DATABASE cinema;
USE cinema;

/* ajoute des table */


CREATE TABLE Acteur(
   id_acteur INT NOT NULL PRIMARY KEY ,
   nom VARCHAR(255) NOT NULL,
   prenom VARCHAR(255) NOT NULL,
   role VARCHAR(50) NOT NULL
   
)ENGINE=INNODB;

CREATE TABLE realisateur(
   id INT PRIMARY KEY,
   nom VARCHAR(255) NOT NULL,
   prenom VARCHAR(255) NOT NULL
   
)ENGINE=INNODB;

CREATE TABLE film(
   id_film INT NOT NULL PRIMARY KEY,
   titre VARCHAR(255) NOT NULL,
   duree TIME NOT NULL,
   annee_sortie DATE,
   id_realisateur INT NOT NULL,
   
   FOREIGN KEY(id_realisateur) REFERENCES realisateur(id)
)ENGINE=INNODB;

CREATE TABLE utilisateur(
   id_user INT PRIMARY KEY,
   nom VARCHAR(255) NOT NULL,
   prenom VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL UNIQUE,
   mdp VARCHAR(255) NOT NULL,
   role_liste_film_prefere VARCHAR(255)

)ENGINE=INNODB;

CREATE TABLE participe(
   id_film INT,
   id_acteur INT,
   PRIMARY KEY(id_film, id_acteur),
   FOREIGN KEY(id_film) REFERENCES film(id_film),
   FOREIGN KEY(id_acteur) REFERENCES Acteur(id_acteur)
)ENGINE=INNODB;

CREATE TABLE regarde(
   id_film INT,
   id_user INT,
   PRIMARY KEY(id_film, id_user),
   FOREIGN KEY(id_film) REFERENCES film(id_film),
   FOREIGN KEY(id_user) REFERENCES utilisateur(id_user)
)ENGINE=INNODB;

ALTER TABLE acteur
MODIFY role ENUM('Principal','Secondaire') NOT NULL;

ALTER TABLE acteur ADD ddn DATE NOT NULL;



/* Requette */

/*1) Les titres et années de sortie des films du plus récent au plus ancien*/
SELECT * FROM film ORDER BY annee_sortie DESC;

/*2) La liste des acteurs/actrices principaux pour un film donné*/
SELECT acteur.nom,acteur.prenom,film.titre FROM participe, film,acteur WHERE participe.id_film = film.id_film and participe.id_acteur = acteur.id_acteur and film.titre="titanic" and acteur.role="principale"; 

/*3) La liste des films pour un acteur/actrice donné*/
SELECT acteur.nom,acteur.prenom,

/*4) Ajouter un film*/
INSERT INTO film (id_film,titre,duree,annee_sortie,id_realisateur) VALUES (1,"hello world","1:30","2024-10-24",1);


/*5) Ajouter un acteur/actrice*/
INSERT INTO acteur (id_acteur,nom,prenom,role,ddn) VALUES (1,"nom_acteur","prenom_acteur","Principal","1988-10-10");

/*6) Modifier un film*/
UPDATE film set titre="autre_titre", duree="2:30", annee_sortie="2024-11-13", id_realisateur=1 WHERE id_film=1;

/*7) Supprimer un acteur/actrice*/
DELETE FROM acteur WHERE id=1;

/*8) Afficher les 3 derniers acteurs/actrices ajouté(e)s*/
SELECT * FROM acteur LIMIT 3;

/*9) Afficher le film le plus ancien*/
SELECT * FROM film ORDER BY annee_sortie ASC LIMIT 1;

/*10) Afficher l’acteur le plus jeune*/
SELECT * FROM acteur ORDER BY ddn DESC LIMIT 1;

/*11) Compter le nombre de films réalisés en 1990*/
SELECT COUNT(id_film) FROM film WHERE annee_sortie>="1990-01-01" AND annee_sortie<="1990-12-31";

/*12) Faire la somme de tous les acteurs ayant joué dans un film*/
SELECT COUNT(id_acteur) 
FROM  participe, film,acteur 
WHERE participe.id_film = film.film_id AND participe.id_acteur = acteur.id_acteur and film.titre="Hello world";