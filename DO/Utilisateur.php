<?php 

class Utilisateur {
    private $id_user;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $role_liste_film_prefere;

    public function getIdUser() {
        return $this->id_user;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    public function getRoleListeFilmPrefere() {
        return $this->role_liste_film_prefere;
    }

    public function setRoleListeFilmPrefere($role_liste_film_prefere) {
        $this->role_liste_film_prefere = $role_liste_film_prefere;
    }
}
