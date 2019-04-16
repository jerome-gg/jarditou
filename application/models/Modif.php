<?php

class Modif extends CI_Model{

    public function upload_ext($id, $data){

        $this->db->where('pro_id',$id);
        $this->db->update('produits',$data);
        
    }

    public function update_pro($data){

        /* $data = array(
            'pro_id'=> $data['pro_id'],
            'pro_cat_id'=> $data['pro_cat_id'],
            'pro_ref'=> $data['pro_ref'],
            'pro_libelle'=> $data['pro_libelle'],
            'pro_description'=> $data['pro_description'],
            'pro_prix'=> $data['pro_prix'],
            'pro_stock'=> $data['pro_stock'],
            'pro_couleur'=> $data['pro_couleur'],
            'pro_d_modif'=> date('Y-m-d'),
            'pro_bloque'=> $data['pro_id']
        ); */
var_dump($data);
        $this->db->where('pro_id', $data['pro_id']);
        $succes = $this->db->update('produits', $data);
        
        if($succes){
            return true;
        }else{
            return false;
        }
    }

}
