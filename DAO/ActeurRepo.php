<?php
include_once("./connexions.php");
include_once("./DO/Acteur.php");
class ActeurRepo {

    private $id_acteur;
    private $nom;
    private $prenom;
    private $role;
    private $ddn;

    //getter and setter 

    public function getIdActeur(){
        return $this->id_acteur;

    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getRole(){
        return $this->role;
    }
    public function getDdn(){
        return $this->ddn;
    }
    public function setIdActeur($id_acteur){
        $this->id_acteur = $id_acteur;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setRole($role){
        $this->role = $role;
    }
    public function setDdn($ddn){
        $this->ddn = $ddn;
    }
    
}