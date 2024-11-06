<?php 

class Connexion{

    private $db;

    public function getConnexion(){
        if($this->db == null){
            try{
                $this->db = new PDO("mysql:host=localhost;dbname=cinema",   "root","050299yb");
            }catch(Exception $e){
                die("Erreur : " . $e->getMessage());
            }

            return $this->db;
        }
    }
}