<?php

class Upload extends CI_Model{

    public function photo($requete){

    
        /* caractéristique des photos acceptées*/
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 100;
        $config['file_name'] = $requete->pro_id; 
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('fichier');
         /**
          * récupération de l'extension du fichier upload en passant 
          * par pathinfo.
          */
        // $ext = pathinfo($_FILES['fichier']['name']);
        // $id = $requete->pro_id;
        
        // $data = array(
        //     'pro_photo' => $ext['extension']
        // );

    }

    public function photo_update($requete){

    
        /* caractéristique des photos acceptées*/
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 100;
        $config['file_name'] = $requete['pro_id']; 
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('fichier');
         /**
          * récupération de l'extension du fichier upload en passant 
          * par pathinfo.
          */
        // $ext = pathinfo($_FILES['fichier']['name']);
        // $id = $requete->pro_id;
        
        // $data = array(
        //     'pro_photo' => $ext['extension']
        // );

    }
}