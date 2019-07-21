<?php

class Produits_model extends CI_Model
{


    private $tabReturn = array();
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
 * sur le formulaire détail
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
 * methode pour afficher la table produits pour la boutique
 */
    public function get_data_boutique($id = null){
        $requete = $this->db->query('SELECT * 
                                FROM produits 
                                JOIN categories ON produits.cat_id = categories.cat_id
                                WHERE pro_bloque = 0
                                ORDER BY cat_parent ASC')->result();
        return $requete;
    }


 /**
  * methode pour afficher les produits selon leurs catégorie
  */
    public function get_data_boutique_categorie($id){
        // Stockage du resultat de la requête sous forme de tableau dont chaque élément est un objet PHP
        
        $requete = $this->db->query('   SELECT * 
                                        FROM produits 
                                        JOIN categories ON produits.cat_id = categories.cat_id
                                        WHERE pro_bloque = 0 and cat_parent = ?
                                        ORDER BY cat_parent ASC',$id)->result();
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

/**
 * methode pour aller chercher les catégories de produits
 */
    public function getTree($id) {
        
        
        if ($id){
            $requete = $this->db->query('SELECT * FROM `categories` WHERE `cat_parent` = ?',$id)->result();
        }else{
            $requete = $this->db->query('SELECT * FROM `categories` WHERE `cat_parent` =? ', $id)->result();
        }
        return $requete;
        
      }
/**
 * methode qui retourne le panier pour la vue 
 */   

    public function fetch_produit($id){

        $this->db->select('*');
        $this->db->from('produits');
        $this->db->where_in('pro_id',$id); 
        $requete = $this->db->get()->result();
        return $requete;
    }
/**
 * methode qui retourne toutes les catégories enfants d'une catégories
 * pour aficher les objets correspondant dans la boutiquela boutique
 */
    public function boutique_fetch($id){
        // enregistre l'id dans l'array si il n'existe pas
        if(!in_array($id,$this->tabReturn)){
            array_push($this->tabReturn, $id);
        }
        // requete pour trouver les enfants d'une catégorie
        $this->db->select('cat_id');
        $this->db->from('categories');
        $this->db->where_in('cat_parent',$id); 
        $requete = $this->db->get()->result();
        // boucle sur l'array 
        foreach($requete as $row){
            // enregistre les id dans l'array 
            array_push($this->tabReturn,$row->cat_id);
            // si la requete retourne une ou pluseurs valeur 
            if(!empty($row)){
                // on rappel la methode avec en param le nouvelle id
                $this->boutique_fetch($row->cat_id); 
            }
            
        }

        return $this->tabReturn;
        
    }
/**
 * methode d'ajout de la commande et des lignes de commandes
 */
    public function ajout_commande(){
        // cherche l'id du user avec son mail
        $this->db->select('user_id');
        $this->db->from('users');
        $this->db->where_in('user_mail',$_SESSION['email']);
        $id = $this->db->get()->result();
        
        // creation d'un tab  
        $tab = array(
            'com_date'=> date('Y-m-d H:m:s'),
            'com_status'=>'En cours de validation',
            'user_id'=> (int)$id[0]->user_id
        );
        $this->db->insert('commande',$tab);
        $lastId = $this->db->insert_id();

        // création d'un array avec chaque ligne de commande
        foreach ($_SESSION['user_panier'] as $key => $value) {
            $tab2 = array(
                'lig_quantite'=>(int)$value['nombre'] ,
                'com_id'=>$lastId,
                'pro_id'=> (int)$value['pro_id']
            );
            
            $this->db->insert('ligne_de_commande',$tab2);
        }

        $this->db->query("CALL maj_prix ($lastId)");
            $_SESSION['user_panier'] = array();    
        
    }

/**
 *  Methodes pour récupérer toutes les commandes d'un utilisateur
 */
    public function fetch_all_cmd(){
        
        $this->db->select('*');
        $this->db->from('commande');
        $requete = $this->db->get()->result();
        return $requete;
    }
/**
 *  Methodes pour récupérer toutes les 20 dernieres commandes 
 */
    public function fetch_all_cmd_limit(){
        
        
        $this->db->select('*');
        $this->db->from('commande');
        $this->db->order_by('com_id', 'DESC');
        $this->db->limit(20);
        $requete = $this->db->get()->result();
        return $requete;
    }

/**
 *  Methodes pour récupérer le total ttc des 20 dernieres commandes 
 */
    public function total_cmd_limit(){
        
        $this->db->select('sum(`com_total_ttc`) as total_ttc');
        $this->db->from('commande');
        $this->db->limit(20);
        $requete = $this->db->get()->result();
        return $requete;
    }


/**
 *  Methodes pour récupérer les commandes d'un utilisateur
 */
    public function fetch_all_cmd_by_id($id){
        
        $this->db->select('*');
        $this->db->from('commande');
        $this->db->where('user_id',$id['0']->user_id);
        $requete = $this->db->get()->result();
        return $requete;
    }
/**
 *  Methode pour récupérer la commande d'un utilisateur
 */
    public function find_cmd($id){
        
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->join ('ligne_de_commande' , 'ligne_de_commande.pro_id = produits.pro_id' );
        $this->db->where('com_id',$id);
        $requete = $this->db->get()->result();
        return $requete;
        
    }

/**
 * Methode qui récupère les article avec un stock <=5
 */
    public function get_min_stock(){
        
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->where('pro_stock<=',5);
        $requete = $this->db->get()->result();
        return $requete;  
        
    }
}