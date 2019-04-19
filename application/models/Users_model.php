<?php

class Users_model extends CI_Model
{

    public function add($data)
    {   
        
        if(isset($data)){
            array_pop($data); // detruit la dernière ligne du tableau (user_pass2) venant du formulaire pour que la requete insert passe
            $data['user_role']='visiteur';
            if ($this->db->insert('users', $data)){
                return true;
            }else{
                return false;
            }
        }
    }
}