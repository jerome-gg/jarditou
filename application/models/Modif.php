<?php

class Modif extends CI_Model{

    public function upload_ext($id, $data){

        $this->db->where('pro_id',$id);
        $this->db->update('produits',$data);
        
    }

    

}
