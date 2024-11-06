<?php

include_once("./connexions.php");
include_once("./DO/Realisateur.php");
class RealisateurRepo {

    public function ajoutRealisateur(Realisateur $realisateur){
        $conn = new Connexion();
        $stmt= $conn->getConnexion()->prepare("INSERT INTO realisateur (id,nom,prenom) VALUES (:id,:nom,:prenom)");
        $stmt->execute(array(
            ":id"=> $realisateur->getId(),
            ":nom"=> $realisateur->getNom(),
            ":prenom"=>$realisateur->getPrenom()
        
        ));

    }
    public function listRealisateur(){
        $conn = new Connexion();
        $sth = $conn->getConnexion()->query("SELECT * FROM realisateur");
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);

        $tab = array();
        foreach($rows as $row){
            $real = new Realisateur();
            $real->setId($row['id']);
            $real->setNom($row['nom']);
            $real->setPrenom($row['prenom']);
            array_push($tab,$real);
        }
        return $tab;

        
    }

}