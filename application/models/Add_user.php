<?php

class Add_user extends CI_Model{

    public function add($data)
    {   
        if(isset($data)){

            if ($this->db->insert('user', $data)){
                return true;
            }else{
                return false;
            }
        }
        
    }
}