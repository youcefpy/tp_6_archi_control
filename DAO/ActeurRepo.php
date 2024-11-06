<?php
include_once("./connexions.php");
include_once("../DO/Acteur.php");
class ActeurRepo {
    public function ajoutActeur(Acteur $acteur) {
        $conn = new Connexion();
        $stmt = $conn->getConnexion()->prepare("INSERT INTO acteur (id_acteur, nom, prenom,role,ddn) VALUES (:id_acteur, :nom, :prenom,:role,:ddn)");
        $stmt->execute(array(
            ":id_acteur" => $acteur->getIdActeur(),
            ":nom" => $acteur->getNom(),
            ":prenom" => $acteur->getPrenom(),
            ":role"=>$acteur->getRole(),
            ":ddn"=> $acteur->getDdn(),
        ));
    }

    public function listActeur() {
        $conn = new Connexion();
        $sth = $conn->getConnexion()->query("SELECT * FROM acteur");
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);

        $tab = array();
        foreach ($rows as $row) {
            $acteur = new Acteur();
            $acteur->setIdActeur($row['id_acteur']);
            $acteur->setNom($row['nom']);
            $acteur->setPrenom($row['prenom']);
            $acteur->setRole($row['role']);
            $acteur->setDdn($row['ddn']);
            array_push($tab, $acteur);
        }
        return $tab;    
    }

    public function getActeurById($id_acteur) {
        $conn = new Connexion();
        $sth = $conn->getConnexion()->prepare('SELECT * FROM acteur WHERE id_acteur = ?');
        $sth->execute([$id_acteur]);

        $row = $sth->fetch(PDO::FETCH_ASSOC);

        $acteur = new Acteur();
        $acteur->setIdActeur($row['id_acteur']);
        $acteur->setNom($row['nom']);
        $acteur->setPrenom($row['prenom']);
        $acteur->setRole($row['role']);
        $acteur->setDdn($row['ddn']);

        return $acteur;
    }

    public function modifierActeur(Acteur $acteur) {
        $conn = new Connexion();
        $stmt = $conn->getConnexion()->prepare("UPDATE acteur SET nom = :nom, prenom = :prenom,role = :role, ddn=:ddn WHERE id_acteur = :id_acteur");
        $stmt->execute(array(
            ":id_acteur" => $acteur->getIdActeur(),
            ":nom" => $acteur->getNom(),
            ":prenom" => $acteur->getPrenom(),
            ":role"=>$acteur->getRole(),
            ":ddn"=> $acteur->getDdn()
        ));
    }

    public function supprimerActeur($id_acteur) {
        $conn = new Connexion();
        $stm = $conn->getConnexion()->prepare('DELETE FROM acteur WHERE id_acteur = ?');
        $stm->execute([$id_acteur]);
    }

}