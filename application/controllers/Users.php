<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller{
        
        public function inscription()
        {
            // charge la bibliothèque lié au formulaire et le fichiers Errors.
            $this->load->helper('form');
            $this->load->library('form_validation');

            if($this->form_validation->run('Users/inscription') == FALSE){
             // charge la page d'inscription car le formulaire n'est pas envoyé
                $this->load->view('header');
                $this->load->view('inscription');
                $this->load->view('footer');

            }else{
                // traitement des infos du form en les recupérant via post
                $data = $this->input->post();
                
                // échappement des caractères spéciaux
                /* foreach($data as $key => $value){
                    $key = htmlspecialchars($value);
                } */

                var_dump($data);
                // traitement des données si les 2 pass sont identiques
                /* if($data['user_pass'] == $data['user_pass2']){
                    $data['user_pass'] = password_hash($data['user_pass'],PASSWORD_DEFAULT);
                    $this->load->model('Add_user');
                    $success = $this->Add_user->add($data);
                    // si utilisateur entré en base redirection sur la page de connexion
                    if($succes){
                    $this->load->view('header');
                    $this->load->view('connexion');
                    $this->load->view('footer');
                    }
                    
                }else{
                    $this->load->view('defaut');
                } */
                
   
            }
        }


        public function connexion()
        {
            $this->load->view('header');
            $this->load->view('connexion');
            $this->load->view('footer');
        }
    }