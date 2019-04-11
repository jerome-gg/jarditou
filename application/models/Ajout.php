<?php

Class Ajout extends CI_Model{

    public function push_data($data){

        /**
         * Connection à la base faite directement dans le fichier 
         * autoload.php
         * */ 
        
        // génère et execute une requete insert, $data contient les infos sous forme de tableau. 
        if ($this->db->insert('produits', $data)){
            return true;
        }else{
            return false;
        }
    }
}