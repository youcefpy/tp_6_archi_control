<?php


include_once("./connexions.php");
include_once("../DO/Film.php");

class FilmRepo {

    public function ajoutFilm(Film $film) {
        $conn = new Connexion();
        $stmt = $conn->getConnexion()->prepare("INSERT INTO film (id_film, titre, duree, annee_sortie, id_realisateur) VALUES (:id_film, :titre, :duree, :annee_sortie, :id_realisateur)");
        $stmt->execute(array(
            ":id_film" => $film->getIdFilm(),
            ":titre" => $film->getTitre(),
            ":duree" => $film->getDuree(),
            ":annee_sortie" => $film->getAnneeSortie(),
            ":id_realisateur" => $film->getIdRealisateur()
        ));
    }

    public function listFilm() {
        $conn = new Connexion();
        $sth = $conn->getConnexion()->query("SELECT * FROM film");
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);

        $tab = array();
        foreach ($rows as $row) {
            $film = new Film();
            $film->setIdFilm($row['id_film']);
            $film->setTitre($row['titre']);
            $film->setDuree($row['duree']);
            $film->setAnneeSortie($row['annee_sortie']);
            $film->setIdRealisateur($row['id_realisateur']);
            array_push($tab, $film);
        }
        return $tab;    
    }

    public function getFilmById($id_film) {
        $conn = new Connexion();
        $sth = $conn->getConnexion()->prepare('SELECT * FROM film WHERE id_film = ?');
        $sth->execute([$id_film]);

        $row = $sth->fetch(PDO::FETCH_ASSOC);

        $film = new Film();
        $film->setIdFilm($row['id_film']);
        $film->setTitre($row['titre']);
        $film->setDuree($row['duree']);
        $film->setAnneeSortie($row['annee_sortie']);
        $film->setIdRealisateur($row['id_realisateur']);

        return $film;
    }

    public function modifierFilm(Film $film) {
        $conn = new Connexion();
        $stmt = $conn->getConnexion()->prepare("UPDATE film SET titre = :titre, duree = :duree, annee_sortie = :annee_sortie, id_realisateur = :id_realisateur WHERE id_film = :id_film");
        $stmt->execute(array(
            ":id_film" => $film->getIdFilm(),
            ":titre" => $film->getTitre(),
            ":duree" => $film->getDuree(),
            ":annee_sortie" => $film->getAnneeSortie(),
            ":id_realisateur" => $film->getIdRealisateur()
        ));
    }

    public function supprimerFilm($id_film) {
        $conn = new Connexion();
        $stm = $conn->getConnexion()->prepare('DELETE FROM film WHERE id_film = ?');
        $stm->execute([$id_film]);
    }
}
