<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Produits extends CI_controller {

        public function acceuil()
        {
            $this->load->view('header');
            $this->load->view('acceuil');
            $this->load->view('footer');
        }
        
        public function liste()
        {
            /**
            * Charge le module permettant d'utiliser la fonction redirect 
            * paramettre ajouter directementdans le fichier autoload.php
            */ 

            // Charge la requete et le resultat dans le model 
            $this->load->model('Liste');

            $requete = $this->Liste->get_data();

            // Charge le résultat de $requête dans le tableau liste_produit.
            $model["liste_produit"] = $requete;
            
            $this->load->view('header');
            // On appel la vue liste dans le dossier views et on passe en paramettre $model pour passer les infos de la database
            $this->load->view('liste', $model);
            $this->load->view('footer');

        }


        public function ajout()
        {
            // charge la librairie et le helper 
            $this->load->helper('form');
            $this->load->library('form_validation');
            

            // set_rules des champs de formulaire
            /* $this->form_validation->set_rules('pro_ref', 'reference', 'required|max_length[10]|regex_match[/^([A-za-z0-9]+)$/]');
            $this->form_validation->set_rules('pro_libelle', 'libelle', 'required|max_length[200]|regex_match[/^([A-za-z0-9]+)$/]');
            $this->form_validation->set_rules('pro_prix', 'prix', 'required|max_length[9]|regex_match[/^([0-9]+)([.]?[0-9]+)?$/]');
            $this->form_validation->set_rules('pro_stock', 'stock', 'required|regex_match[/^([0-9]+)$/]');
            $this->form_validation->set_rules('pro_couleur', 'couleur', 'regex_match[/^[A-Za-z]*$/]');
            $this->form_validation->set_rules('pro_description', 'description', 'max_length[1000]|regex_match[/^[[\'. A-Za-zéèàç]*$/]'); */

            if ($this->form_validation->run('Produits/ajout') == FALSE)
            {
                /**
                 * charge le model permettant d'afficher les catégories dans le 
                 * menu déroulant.
                 */
                $this->load->model('Ajout');
                $categorie = $this->Ajout->show_cat();
                $model["liste_categorie"] = $categorie;

                // si le formulaire n'est pas envoyé on affiche les vues
                $this->load->view('header');
                $this->load->view('ajout', $model); 
                $this->load->view('footer');

            }else{

                // récupère les données du formulaire
                $data = $this->input->post();

                //charge le model
                $this->load->model('Ajout');

                // Envoi les données au travers d'un variable
                $succes = $this->Ajout->push_data($data);

/*-------------------Photo------------------*/


                if(($_FILES['fichier']['size'])!=0){
                    $this->load->model('Query');
                    $requete = $this->Query->last_id();
                
                    $this->load->model('Upload');
                    $this->Upload->photo($requete); 
                     /**
                      * récupération de l'extension du fichier upload en passant 
                      * par pathinfo.
                      */
                    $ext = pathinfo($_FILES['fichier']['name']);
                    $id = $requete->pro_id;

                    $data = array(
                        'pro_photo' => $ext['extension']
                    );

                    $this->load->model('Modif');
                    $this->Modif->upload_ext($id, $data);
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
                }
            }
        }

        public function detail()
        {

            // Charge le module permettant d'utiliser la fonction redirect
            $this->load->helper("url");
            
            //récupération de l'id dans GET
            $params = $this->input->get();
            $id = $this->input->get('id');
            /**
             * ou 
             * 
             * $id = $params['id'];
             */

            // Charge la requete et le resultat dans le model 
            $this->load->model('Detail');

            // Appel de la méthode get-detail en avec $id en paramètre
            $requete = $this->Detail->get_detail($id);

            $this->load->view('header');
            // On appel la vue liste dans le dossier views et on passe en paramettre $model pour passer les infos de la database
            $this->load->view('detail', $requete);
            $this->load->view('footer');
            
        }

        public function supprime()
        {
            $params = $this->input->get();
            $id = $this->input->get('pro_id');

            $this->load->model('Supprime');
            $this->Supprime->delete($id);
            redirect(site_url('Produits/liste'));
        }
 

         public function modif_liste($id)
        {

            // charge la librairie et le helper
            $this->load->helper('form');
            $this->load->library('form_validation');

            if ($this->form_validation->run() == FALSE)
            {
                // appel sans données dans le post
                $this->load->model('Detail');
                $requete = $this->Detail->get_detail2($id);

                $this->load->model('Ajout');
                $categorie = $this->Ajout->show_cat();
                $model["liste_categorie"] = $categorie;
                $model['requete'] = $requete;

                $this->load->view('header');
                $this->load->view('modif',$model);
                $this->load->view('footer');
            
            }else{

                // récupère les données du formulaire
                $data = $this->input->post();

                /**
                * Charge le module permettant d'utiliser la fonction redirect 
                * paramettre ajouter directementdans le fichier autoload.php
                */ 

                //charge le model
                $this->load->model('Modif');

                // Envoi les données au travers d'un variable
                $succes = $this->Modif->update_pro($data);

                if($succes){
                    // redirige le navigateur vers la methode liste du controleur produits
                    
                    $this->load->view('header');
                    $this->load->view('formsuccess');
                    $this->load->view('footer');
                }else{
                    // redirige le navigateur vers la methode ajout du controleur produits
                    redirect( site_url( 'Produits/modif'));
                }

                // if($this->input->post()){ // 2e appel de la page : traitement du formulaire

            }      

        } 

       
}