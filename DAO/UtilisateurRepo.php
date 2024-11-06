<?php

include_once("./connexions.php");
include_once("../DO/Utilisateur.php");

class UtilisateurRepo {

    public function ajoutUtilisateur(Utilisateur $utilisateur) {
        $conn = new Connexion();
        $stmt = $conn->getConnexion()->prepare("INSERT INTO utilisateur (id_user, nom, prenom, email, mdp, role_liste_film_prefere) VALUES (:id_user, :nom, :prenom, :email, :mdp, :role_liste_film_prefere)");
        $stmt->execute(array(
            ":id_user" => $utilisateur->getIdUser(),
            ":nom" => $utilisateur->getNom(),
            ":prenom" => $utilisateur->getPrenom(),
            ":email" => $utilisateur->getEmail(),
            ":mdp" => $utilisateur->getMdp(),
            ":role_liste_film_prefere" => $utilisateur->getRoleListeFilmPrefere()
        ));
    }

    public function listUtilisateur() {
        $conn = new Connexion();
        $sth = $conn->getConnexion()->query("SELECT * FROM utilisateur");
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);

        $tab = array();
        foreach ($rows as $row) {
            $utilisateur = new Utilisateur();
            $utilisateur->setIdUser($row['id_user']);
            $utilisateur->setNom($row['nom']);
            $utilisateur->setPrenom($row['prenom']);
            $utilisateur->setEmail($row['email']);
            $utilisateur->setMdp($row['mdp']);
            $utilisateur->setRoleListeFilmPrefere($row['role_liste_film_prefere']);
            array_push($tab, $utilisateur);
        }
        return $tab;
    }

    public function getUtilisateurById($id_user) {
        $conn = new Connexion();
        $sth = $conn->getConnexion()->prepare('SELECT * FROM utilisateur WHERE id_user = ?');
        $sth->execute([$id_user]);

        $row = $sth->fetch(PDO::FETCH_ASSOC);

        $utilisateur = new Utilisateur();
        $utilisateur->setIdUser($row['id_user']);
        $utilisateur->setNom($row['nom']);
        $utilisateur->setPrenom($row['prenom']);
        $utilisateur->setEmail($row['email']);
        $utilisateur->setMdp($row['mdp']);
        $utilisateur->setRoleListeFilmPrefere($row['role_liste_film_prefere']);

        return $utilisateur;
    }

    public function modifierUtilisateur(Utilisateur $utilisateur) {
        $conn = new Connexion();
        $stmt = $conn->getConnexion()->prepare("UPDATE utilisateur SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp, role_liste_film_prefere = :role_liste_film_prefere WHERE id_user = :id_user");
        $stmt->execute(array(
            ":id_user" => $utilisateur->getIdUser(),
            ":nom" => $utilisateur->getNom(),
            ":prenom" => $utilisateur->getPrenom(),
            ":email" => $utilisateur->getEmail(),
            ":mdp" => $utilisateur->getMdp(),
            ":role_liste_film_prefere" => $utilisateur->getRoleListeFilmPrefere()
        ));
    }

    public function supprimerUtilisateur($id_user) {
        $conn = new Connexion();
        $stm = $conn->getConnexion()->prepare('DELETE FROM utilisateur WHERE id_user = ?');
        $stm->execute([$id_user]);
    }
}
