<?php

class Supprime extends CI_Model{

    public function delete($id){
        /**
         * Connection à la base faite directement dans le fichier 
         * autoload.php
         * */ 
            $requete = $this->db->query('DELETE FROM produit WHERE pro_id = ?');
    }


}