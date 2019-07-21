<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Produits extends CI_controller {
        /**
         * Liste des différentes choses charger automatiquement
         * 
         *  libraries: 'database','session','form_validation','pagination';
         *  helper: 'url','form';
         *  model: Produits_model','Users_model','Pagination_model';
         */

        public function accueil()
        {
 
            if(isset($_SESSION['user_panier'])){

                if(count($_SESSION['user_panier'])!=0){
                    $this->load->view('header');
                    $this->load->view('accueil');
                    $this->load->view('footer');
                    
                }else{
                    $this->load->view('header');
                    $this->load->view('accueil');
                    $this->load->view('footer');
                }

            } else {

                $_SESSION = array(
                    'user_name' => '',
                    'email' => '',
                    'user_droit' => '',
                    'user_panier' => array(),
                );
                $this->load->view('header');
                $this->load->view('accueil');
                $this->load->view('footer');
            } 
            
        }
        
        public function liste()
        {
            
            if ($this->session->user_droit=="admin") {

                // Charge la requete et le resultat dans le model 
                $requete = $this->Produits_model->get_data();

                // Charge le résultat de $requête dans le tableau liste_produit.
                $model["liste_produit"] = $requete;
                
                $this->load->view('header');
                // On appel la vue liste dans le dossier views et on passe en paramettre $model pour passer les infos de la database
                $this->load->view('liste', $model);
                $this->load->view('footer');

            }else{
                redirect(site_url("Users/connexion"));
            }
        }

        /**
         * Affiche le menu des catégories 
         */
        public function menu($id)
        {
            $requete = $this->Produits_model->getTree($id);
            $this->output->set_content_type('application/json');
            $this->output->set_header('Access-Control-Allow-Origin:*');
            $this->output->set_output(json_encode($requete));
        }

        
        public function ajout()
        {
            if ($this->session->user_droit=="admin") {
                // permet d'ajouter une div d'erreur
                $this->form_validation->set_error_delimiters('<div class="red">', '</div>'); 
                if ($this->form_validation->run('Produits/ajout') == FALSE)
                {
                    /**
                     * charge le model permettant d'afficher les catégories dans le 
                     * menu déroulant.
                     */
                    $categorie = $this->Produits_model->show_cat();
                    $model["liste_categorie"] = $categorie;
                    
                    // si le formulaire n'est pas envoyé on affiche les vues
                    $this->load->view('header');
                    $this->load->view('ajout', $model); 
                    $this->load->view('footer');

                }else{

                    
                    // récupère les données du formulaire
                    $data = $this->input->post();
                    
                    // Envoi les données au travers d'un variable
                    $succes = $this->Produits_model->push_data($data);

                    /*-------------------Photo------------------*/


                    if(($_FILES['fichier']['size'])!=0){
                        $requete = $this->Produits_model->last_id();
                
                        $this->Produits_model->photo($requete); 
                        /**
                         * récupération de l'extension du fichier upload en passant 
                         * par pathinfo.
                         */
                        $ext = pathinfo($_FILES['fichier']['name']);
                        $id = $requete->pro_id;

                        $data = array(
                            'pro_photo' => $ext['extension']
                        );

                        $this->Produits_model->upload_ext($id, $data);
                        }

                        if($succes){
                            // redirige le navigateur vers la methode liste du controleur produits
                            /* redirect( site_url( 'Produits/formsuccess')); */
                            $this->load->view('header');
                            $this->load->view('formsuccess');
                            $this->load->view('footer');
                        }else{
                            // redirige le navigateur vers la methode ajout du controleur produits
                             redirect( site_url( 'Produits/ajout'));

                             $this->users_model->log_out();
                    }
                }
            }
            else {
                redirect(site_url("Users/connexion"));
            }
        }

        public function detail()
        {
            if ($this->session->user_droit=="admin") {

                //récupération de l'id dans GET
                $params = $this->input->get();
                $id = $this->input->get('id');
                /**
                 * ou 
                 * 
                 * $id = $params['id'];
                 */

                // Appel de la méthode get-detail en avec $id en paramètre
                $requete = $this->Produits_model->get_detail($id);

                $this->load->view('header');
                // On appel la vue liste dans le dossier views et on passe en paramettre $model pour passer les infos de la database
                $this->load->view('detail', $requete);
                $this->load->view('footer');
            }else {
                redirect(site_url("Users/connexion"));
            }
        }

        public function supprime()
        {
            if ($this->session->user_droit=="admin") {
            
                $params = $this->input->get();
                $id = $this->input->get('pro_id');

                $this->Produits_model->delete($id);
                redirect(site_url('Produits/liste'));
            }else {
                redirect(site_url("Users/connexion"));
            }    
        }
 

         public function modif($id)
        {

            if ($this->session->user_droit=="admin") {

                if ($this->form_validation->run() == FALSE)
                {
                // appel sans données dans le post
        
                    $requete = $this->Produits_model->get_detail2($id);

        
                    $categorie = $this->Produits_model->show_cat();
                    $model["liste_categorie"] = $categorie;
                    $model['requete'] = $requete;

                    $this->load->view('header');
                    $this->load->view('modif',$model);
                    $this->load->view('footer');
            
                }else{

                    // récupère les données du formulaire
                    $data = $this->input->post();

                    // Envoi les données au travers d'un variable
                    $succes = $this->Produits_model->update_pro($data);
                    
                    if(($_FILES['fichier']['size'])!=0){
                        $requete = $this->Produits_model->last_id();
                
                        $this->Produits_model->photo($requete); 
                        /**
                         * récupération de l'extension du fichier upload en passant 
                         * par pathinfo.
                         */
                        $ext = pathinfo($_FILES['fichier']['name']);
                        $id = $requete->pro_id;

                        $data = array(
                            'pro_photo' => $ext['extension']
                        );

                        //$this->load->model('Produits_model');
                        $this->Produits_model->upload_ext($id, $data);
                        }

                        if($succes){
                            // redirige le navigateur vers la methode liste du controleur produits
                            /* redirect( site_url( 'Produits/formsuccess')); */
                            $this->load->view('header');
                            $this->load->view('formsuccess');
                            $this->load->view('footer');
                        }else{
                            // redirige le navigateur vers la methode ajout du controleur produits
                             redirect( site_url( 'Produits/modif'));

                             $this->users_model->log_out();
                    }

                }

            }else {
                redirect(site_url("Users/connexion"));
            }

        } 

       
        public function boutique()
        {
            /**
            * methode pour requete ajax renvoi tout les produits au chargement de la vue
            */
  
            $data['liste_produit'] = $this->Produits_model->get_data_boutique();
            $this->load->view('header');
            $this->load->view('boutique',$data);
            $this->load->view('footer');
            
        }

        /**
        * methode pour requete ajax renvoi tout les produits au chargement de la page
        */
        public function liste_boutique_complete()
        {
            $requete = $this->Produits_model->get_data_boutique();
            $this->output->set_content_type('application/json');
            $this->output->set_header('Access-Control-Allow-Origin:*');
            $this->output->set_output(json_encode($requete));

        }
        /**
        * methode pour requete ajax renvoi les produits selon la categorie
        */
        public function liste_boutique()
        {
            $id = $this->input->get("id");
            $requete = $this->Produits_model->get_data_boutique_categorie($id);
            $this->output->set_content_type('application/json');
            $this->output->set_header('Access-Control-Allow-Origin:*');
            $this->output->set_output(json_encode($requete));

        }

        public function menu_categories()
        {
            $this->load->getTree($id);
        }

        /**
        * methode de gestion du panier
        */
        public function add_panier()
        {
            
                $data = $this->input->post();
                // filtrage des données
                foreach ($data as $key =>$value) {
                    $value = htmlspecialchars($value);
                }
                //retourne les valeurs du $_SESSION['user_panier'] de l'index 'pro_id'. 
                $id = array_column($_SESSION['user_panier'], 'pro_id'); 
                
                if(in_array($data['pro_id'], $id)){ // check si le pro_id récupéré éxiste dans le tableau precédent.
                    $key = array_search($data['pro_id'], array_column($_SESSION['user_panier'],'pro_id')); // retourne le 1er index du user_panier
                    $_SESSION['user_panier'][$key]['nombre'] += $data['nombre']; // ajoute la quantité reçu sur un produit déja dans le panier
                }else{
                    array_push($_SESSION['user_panier'],$data); //ajout au panier
                }
                
                redirect(site_url("Produits/boutique"));
            
            
            
            
        }

        public function panier()
        {
            var_dump($_SESSION);
            if(!$this->session->user_name == '' ){
                
                $data2 = $_SESSION['user_panier'];
            
                if(count($_SESSION['user_panier'])){
                    foreach ($_SESSION['user_panier'] as $row) {
                        $requete = current($this->Produits_model->fetch_produit($row['pro_id']));
                        $tab[]=array(
                            'nombre' => (int) $row['nombre'] ,
                            'pro_prix' =>(float) $row['pro_prix'],
                            'pro_id' => $row['pro_id'],
                            'pro_name' => $requete->pro_libelle,
                            'pro_photo' => $requete->pro_id.'.'.$requete->pro_photo
                            ); 
                        }
                        $toto['panier'] = $tab;
                        
                        $this->load->view('header');
                        $this->load->view('panier',$toto);
                        $this->load->view('footer'); 
                }else{
                    $this->load->view('header');
                    $this->load->view('panier_vide');
                    $this->load->view('footer');
                }

            }else{
                $this->load->view('header');
                $this->load->view('connexion_require');
                $this->load->view('footer');
            } 
        }

        public function panier_plus()
        {
            
            
            
            $tab = array();
            $data = $this->input->post();
            $tab_ref = array(); // création d'un array pour transmettre en Ajax
            foreach ($_SESSION['user_panier'] as $row) {// on parcour le tab $_SESSION['user_panier'] pour checker les id
                if($data['id'] == $row['pro_id']){
                    /**
                     * si l'id correspond on créer un nouveau tableau avec les données mise à jour.
                     */
                    $new_quantite =  $row['nombre'] + $data['nombre'];// on crée une variable avec le nouveau nombre de produit
                    $tab[]=array(
                        'nombre' => $row['nombre'] + $data['nombre'],
                        'pro_prix' => $row['pro_prix'],
                        'pro_id' => $row['pro_id']
                    );
                    $tab_ref[]=array( // array envoyer en ajax
                        'nombre' => $row['nombre'] + $data['nombre'],
                        'pro_prix' => $row['pro_prix'],
                        'pro_id' => $row['pro_id']
                    );
                }else{
                    $tab[]=array(
                        'nombre' => (int) $row['nombre'],
                        'pro_prix' => $row['pro_prix'],
                        'pro_id' => $row['pro_id']
                    );
                }
            }
            $_SESSION['user_panier'] = $tab;
            // on envoi encodé en json le nouveau nbr de produit au fichier ajax 
            $this->output->set_output(json_encode(array('qte'=>$tab_ref)));
        }

         public function panier_moins()
        {
            

            $tab = array();
            $data = $this->input->post();
            $tab_ref = array();// création d'un array pour tranmettre en Ajax
            foreach ($_SESSION['user_panier'] as $row) { // on parcour le tab $_SESSION['user_panier'] pour checker les id
                if($data['id'] == $row['pro_id'] && $row['nombre']>1 ){
                    /**
                     * si l'id correspond on créer un nouveau tableau avec les données mise à jour.
                     */
                    $new_quantite =  $row['nombre'] - $data['nombre'];// on crée une variable avec le nouveau nombre de produit
                    $tab[]=array(
                        'nombre' => $row['nombre'] - $data['nombre'],
                        'pro_prix' => $row['pro_prix'],
                        'pro_id' => $row['pro_id']
                    );
                    $tab_ref[]=array(// array envoyer en ajax
                        'nombre' => $row['nombre'] - $data['nombre'],
                        'pro_prix' => $row['pro_prix'],
                        'pro_id' => $row['pro_id']
                    );
                }else{
                    $tab[]=array(
                        'nombre' => (int) $row['nombre'],
                        'pro_prix' => $row['pro_prix'],
                        'pro_id' => $row['pro_id']
                    );
                }
            }
            $_SESSION['user_panier'] = $tab;
            // on envoi encodé en json le nouveau nbr de produit au fichier ajax
            $this->output->set_output(json_encode(array('qte'=>$tab_ref)));  
        } 

        public function panier_delete($id)
        {
            $tab = array();
            foreach($_SESSION['user_panier'] as $row){// on parcour le tab $_SESSION['user_panier'] pour checker les id
                if ($row['pro_id'] != $id){
                    $tab[]=array(
                        'nombre' => $row['nombre'],
                        'pro_prix' => $row['pro_prix'],
                        'pro_id' => $row['pro_id']
                    );
                }
            }
            $_SESSION['user_panier'] = $tab;
            redirect(site_url("Produits/panier"));
        }
        
        public function modif_boutique($id){
            $requete = $this->Produits_model->boutique_fetch($id);
            $this->output->set_output(json_encode($requete)); 
            return $requete;
        }
        
        public function commander(){

            $requete = $this->Produits_model->ajout_commande();
            $this->load->view('header');
            $this->load->view('commande_valider');
            $this->load->view('footer');
            
        }
        
        public function all_commandes(){

            $id = $this->Users_model->get_id_user();
            $requete['commandes'] = $this->Produits_model->fetch_all_cmd_limit();
            $this->load->view('header');
            $this->load->view('mes_commandes', $requete);
            $this->load->view('footer');
          
        }

        public function all_commandes_by_id(){

            $id = $this->Users_model->get_id_user();
            $requete['commandes'] = $this->Produits_model->fetch_all_cmd_by_id($id);
            $this->load->view('header');
            $this->load->view('mes_commandes', $requete);
            $this->load->view('footer');
          
        }

        public function find_commande($id){
            
            $requete['details'] = $this->Produits_model->find_cmd($id);
            $this->load->view('header');
            $this->load->view('commande_details', $requete);
            $this->load->view('footer');
             
        }
}