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
            
            // On appel la vue liste dans le dossier views et on passe en paramettre $model pour passer les infos de la database
            $this->load->view('liste', $model);

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

                $this->load->view('ajout'); //1er appel de la page :  affichage du formulaire
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
        
             /* if(isset($params)){
                redirect(site_url('Produits/detail'));
             }else{
                redirect(site_url('Produits/liste'));
             } */
            
            // Charge la requete et le resultat dans le model 
            $this->load->model('Detail');

            // Appel de la méthode get-detail en avec $id en paramètre
            $requete = $this->Detail->get_detail($id);
            
            // On appel la vue liste dans le dossier views et on passe en paramettre $model pour passer les infos de la database
            $this->load->view('detail', $requete);
        }

        /* public function modif($id)
        {
            //récupération de l'id dans GET
            $params = $this->input->get();
            $id = $this->input->get('id');
            /**
             * ou 
             * 
             * $id = $params['id'];
             */


        //} */
}