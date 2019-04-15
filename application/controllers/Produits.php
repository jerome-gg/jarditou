<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Produits extends CI_controller {

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
            
            if($this->input->post()){ // 2e appel de la page : traitement du formulaire

                // récupère les données du formulaire
                $data = $this->input->post();

                 /**
                * Charge le module permettant d'utiliser la fonction redirect 
                * paramettre ajouter directementdans le fichier autoload.php
                */ 

                //charge le model
                $this->load->model('Ajout');

                // Envoi les données au travers d'un variable
                $succes = $this->Ajout->push_data($data);

/*-------------------Photo------------------*/

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

                
                if($succes){
                    // redirige le navigateur vers la methode liste du controleur produits
                    redirect( site_url( 'Produits/liste'));
                }else{
                    // redirige le navigateur vers la methode ajout du controleur produits
                    redirect( site_url( 'Produits/ajout'));
                }
            
            }else{

                /**
                * Charge le module permettant d'utiliser la fonction redirect 
                * paramettre ajouter directementdans le fichier autoload.php
                */ 
                
                /**
                 * charge le model permettant d'afficher les catégories dans le 
                 * menu déroulant.
                 */
                $this->load->model('Ajout');
                $categorie = $this->Ajout->show_cat();
                $model["liste_categorie"] = $categorie;

                $this->load->view('header');
                $this->load->view('ajout', $model); //1er appel de la page :  affichage du formulaire
                $this->load->view('footer');
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

        public function supprime(){

            $params = $this->input->get();
            $id = $this->input->get('pro_id');

            $this->load->model('Supprime');
            $this->Supprime->delete($id);
            redirect(site_url('Produits/liste'));
        }
 

        

         public function modif($id)
        {
            
            $this->load->model('Detail');
            $requete = $this->Detail->get_detail2($id);

            $this->load->model('Ajout');
            $categorie = $this->Ajout->show_cat();
            $model["liste_categorie"] = $categorie;
            $model['requete'] = $requete;

            /* $data = array(
                $model,$requete
            ) */
            $this->load->view('header');
            $this->load->view('modif',$model);
            $this->load->view('footer');
        } 
}