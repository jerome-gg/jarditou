<?php


class Detail extends CI_Model {

    public function get_detail($id){

        /**
         * Connection à la base faite directement dans le fichier 
         * autoload.php
         * */ 

        /**
         * Stockage du resultat de la requête sous forme de tableau dont
         *  chaque élément est un objet PHP
         */
        $requete ['detail'] = $this->db->query('SELECT * FROM produits WHERE pro_id=?', $id)->row();
       
        return $requete;
        
        
    }
    public function get_detail2($id){

        /**
         * Connection à la base faite directement dans le fichier 
         * autoload.php
         * */ 

        /**
         * Stockage du resultat de la requête sous forme de tableau dont
         *  chaque élément est un objet PHP
         */
        $requete = $this->db->query('SELECT * FROM produits WHERE pro_id=?', $id)->row();
       
        return $requete;
        
        
    }

}
