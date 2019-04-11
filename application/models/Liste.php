<?php


class Liste extends CI_Model {

    public function get_data(){

        /**
         * Connection à la base faite directement dans le fichier 
         * autoload.php
         * */ 
      

        // Stockage du resultat de la requête sous forme de tableau dont chaque élément est un objet PHP
        $requete = $this->db->query('SELECT * FROM produits')->result();
        return $requete;
        
    }

}
