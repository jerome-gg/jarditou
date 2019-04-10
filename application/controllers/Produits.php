<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Produits extends CI_controller {

        public function liste()
        {
            // Connection a la base
            $this->load->database();
            $this->load->helper("url");
            // Stockage du resultat de la requête sous forme de tableau dont chaque élément est un objet PHP
            $requete = $this->db->query('SELECT * FROM produits')->result();
            // Charge le reésultat de $requete dans le tableau liste_produit.
            $model["liste_produit"] = $requete;      
            // On appel la vue liste dans le dossier views et on passe en paramettre $model pour passer les infos de la database
            $this->load->view('liste', $model);
        }


        public function ajout()
        {
            if($this->input->post()){ // 2e appel de la page : traitement du formulaire

                // récupère les données du formulaire
                $data = $this->input->post();

                // permet de se connecter a la base de données
                $this->load->database();

                // génère et execute une requete insert, le tableau $data contient les infos sous forme de tableau. 
                $this->db->insert('produits', $data);

                // Charge le module permettant d'utiliser la fonction redirect
                $this->load->helper('url');

                // redirige le navigateur vers la methode liste du controleur produits
                redirect( site_url( 'produit/liste'));

            }else{
                $this->load->view('ajout'); //1er appel de la page :  affichage du formulaire
            }
            
        }
}