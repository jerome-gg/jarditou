<?php

class Produits_model extends CI_Model
{

/**
* Requête affichant les catégorie
*/
    public function show_cat(){
        $categorie = $this->db->query('SELECT * FROM `categories` WHERE cat_parent is not null')->result();
        return $categorie;
    }

/**
 * methode pour ajouter des produits dans la base
 */
    public function push_data($data){
        // execute une requete insert, $data contient les infos sous forme de tableau. 
        if ($this->db->insert('produits', $data)){
            return true;
        }else{
            return false;
        }
    }

/**
 * Methode pour affichage du détail produit
 *  sur le formulaire détail
 */
    public function get_detail($id){
        /**
         * Stockage du resultat de la requête sous forme de tableau dont
         *  chaque élément est un objet PHP
         */
        $requete ['detail'] = $this->db->query('SELECT * FROM produits WHERE pro_id=?', $id)->row();
       
        return $requete;
    }

    /**
 * Methode pour affichage du détail produit 
 * sur le formulaire de modification
 */

    public function get_detail2($id){
        /* get detail2 sert pour les détails de la vue modif.php*/ 
    
        /**
         * Stockage du resultat de la requête sous forme de tableau dont
         *  chaque élément est un objet PHP
         */
        $requete = $this->db->query('SELECT * FROM produits WHERE pro_id=?', $id)->row();
       
        return $requete; 
    }
/**
 * methode pour afficher la table produits
 */
    public function get_data(){
        // Stockage du resultat de la requête sous forme de tableau dont chaque élément est un objet PHP
        $requete = $this->db->query('SELECT * FROM produits ORDER BY pro_id desc')->result();
        return $requete;  
    }

/**
 * methode pour modifier un produit
 */
    public function update_pro($data){

        $this->db->where('pro_id', $data['pro_id']);
        $succes = $this->db->update('produits', $data);
        
        if($succes){
            return true;
        }else{
            return false;
        }
    }


/**
 * methode pour supprimer un produit
 */
    public function delete($id){ 

        $this->db->where('pro_id', $id);
        $this->db->delete('produits');
        // Produces:
        // DELETE FROM produits
        // WHERE pro_id = $id
    }

/**
 * methode pour ajouter une photo 
 */
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
/**
 * methode qui récupère de dernier pro_id 
 * de la base pour nommer la photo du produit
 */
    public function last_id(){
        
        $requete = $this->db->query('SELECT MAX(pro_id) as pro_id  FROM produits')->row();
        return $requete;
    }

/**
 * methode qui modifie l'extention de la photo définie par défaut
 */
    public function upload_ext($id, $data){

        $this->db->where('pro_id',$id);
        $this->db->update('produits',$data);

    }

    public function categorie($id){
        /**
         * methode pour aller chercher les catégories de produits
         */
        $requete = $this->db->query('SELECT cat_nom FROM categories WHERE cat_parent=?',$id)->result();
        $this->output->set_content_type('application.json');
        $this->output->set_header('Access-Control-Allow-Origin:*');
        $this->output->set_output(json_encode($requete));
        return $requete;
    }
}