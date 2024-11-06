CREATE DATABASE cinema;
USE cinema;

/* ajoute des table */


CREATE TABLE Acteur(
   id_acteur INT NOT NULL PRIMARY KEY ,
   nom VARCHAR(255) NOT NULL,
   prenom VARCHAR(255) NOT NULL,
   role VARCHAR(50) NOT NULL,
   
);

CREATE TABLE realisateur(
   id INT PRIMARY KEY,
   nom VARCHAR(255) NOT NULL,
   prenom VARCHAR(255) NOT NULL,
   
);

CREATE TABLE film(
   id_film INT NOT NULL PRIMARY KEY,
   titre VARCHAR(255) NOT NULL,
   duree TIME NOT NULL,
   annee_sortie DATE,
   id_realisateur INT NOT NULL,
   
   FOREIGN KEY(id_realisateur) REFERENCES realisateur(id)
);

CREATE TABLE utilisateur(
   id_user INT PRIMARY KEY,
   nom VARCHAR(255) NOT NULL,
   prenom VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL UNIQUE,
   mdp VARCHAR(255) NOT NULL,
   role_liste_film_prefere VARCHAR(255),

);

CREATE TABLE participe(
   id_film INT,
   id_acteur INT,
   PRIMARY KEY(id_film, id_acteur),
   FOREIGN KEY(id_film) REFERENCES film(id_film),
   FOREIGN KEY(id_acteur) REFERENCES Acteur(id_acteur)
);

CREATE TABLE regarde(
   id_film INT,
   id_user INT,
   PRIMARY KEY(id_film, id_user),
   FOREIGN KEY(id_film) REFERENCES film(id_film),
   FOREIGN KEY(id_user) REFERENCES utilisateur(id_user)
);
