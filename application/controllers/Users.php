<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller{
        
        /**
         * Liste des différentes choses charger automatiquement
         * 
         *  libraries: 'database','session','form_validation';
         *  helper: 'url','form';
         *  model: Produits_model','Users_model','Pagination_model';
         */


        public function inscription()
        {

            if($this->form_validation->run() == FALSE){
             // charge la page d'inscription car le formulaire n'est pas envoyé
                $this->load->view('header');
                $this->load->view('inscription');
                $this->load->view('footer');

            }else{
                // traitement des infos du form en les recupérant via post
                $data = $this->input->post();
                
                // échappement des caractères spéciaux
                foreach($data as $key => $value){
                    $key = htmlspecialchars($value);
                }
                
                
               
                // traitement des données si les 2 pass sont identiques
                if($data['user_pass'] == $data['user_pass2']){
                    $data['user_pass'] = password_hash($data['user_pass'],PASSWORD_DEFAULT);
                    $success = $this->Users_model->add($data);
                    // si utilisateur entré en base redirection sur la page de connexion
                    if($success){
                    $this->load->view('header');
                    $this->load->view('connexion');
                    $this->load->view('footer');
                    }
                    
                }else{
                    $this->load->view('defaut');
                }
            }
        }

        public function delete_user($id){

            $requete = $this->Users_model->delete($id);
            $data['utilisateur'] = $this->Users_model->fetch_all();
            if($requete){
                $this->load->view('header');
                $this->load->view('users_control',$data);
                $this->load->view('footer');  
                
            }
        }

        public function connexion()
        {
            
            if($this->form_validation->run() == FALSE){
    
                $this->load->view('header');
                $this->load->view('connexion');
                $this->load->view('footer');

            }else{

                $data = $this->input->post();

                foreach($data as $key => $value){
                    $key = htmlspecialchars($value);
                    var_dump($value);
                }
                
                $requete = $this->Users_model->auth_user($data);

                if($requete){
                    if(($data['user_mail'] == $requete->user_mail) && (password_verify($data['user_pass'],$requete->user_pass))){
                        
                        $this->Users_model->user_last_connexion($data);
                       
                        $this->session->set_userdata('user_name', $requete->user_prenom);
                        $this->session->set_userdata('email', $requete->user_mail);
                        $this->session->set_userdata('user_droit', $requete->user_droit); 

                        redirect( site_url( 'Produits/boutique'));
                    }else{
                        /**
                         * connexion échoué pass erroné
                         */
                        $this->load->view('header');
                        $this->load->view('connexion_failed');
                        $this->load->view('connexion');
                        $this->load->view('footer');
                    }  
                }else{
                    /**
                     * connexion échoué
                     */
                    $this->load->view('header');
                    $this->load->view('connexion_failed');
                    $this->load->view('connexion');
                    $this->load->view('footer');
                }

            }
        }

        public function deconnexion(){

            $this->Users_model->log_out();
            redirect( site_url( 'produits/accueil'));
        }

        public function controle(){

            if($this->session->user_droit == "admin"){
                $requete['utilisateur'] = $this->Users_model->fetch_all();
                $requete['commandes'] = $this->Produits_model->fetch_all_cmd_limit();
                $requete['total_cmd'] = $this->Produits_model->total_cmd_limit();
                $requete['stock'] = $this->Produits_model->get_min_stock();
                
                $this->load->view('header');
                $this->load->view('user_control',$requete);
                $this->load->view('footer');

            }
        }

        public function right_change(){

            $data = $this->input->post();
            $requete = $this->Users_model->right($data);
            $this->output->set_output(json_encode($requete)); 
            return $requete;
        }
    }