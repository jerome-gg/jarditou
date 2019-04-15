<?php

class Supprime extends CI_Model{

    public function delete($id){
        /**
         * Connection à la base faite directement dans le fichier 
         * autoload.php
         * */ 

        $this->db->where('pro_id', $id);
        $this->db->delete('produits');
        // Produces:
        // DELETE FROM produits
        // WHERE pro_id = $id

    }


}