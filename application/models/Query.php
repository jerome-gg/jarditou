<?php

class Query extends CI_Model{

    public function last_id(){

        $requete = $this->db->query('SELECT MAX(pro_id) as pro_id  FROM produits')->row();
        return $requete;
    }

   

}