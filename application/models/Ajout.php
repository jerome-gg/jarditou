<?php

Class Ajout extends CI_Model{

    public function show_cat(){
        /**
         * Requête affichant les catégorie
         */
        $categorie = $this->db->query('SELECT * FROM `categories` WHERE cat_parent is not null')->result();
        return $categorie;
    }
    

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