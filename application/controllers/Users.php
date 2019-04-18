<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller{

        public function inscription()
        {
            // charge la bibliothèque lié au formulaire et le fichiers Errors.
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->model('Errors');
            $config = $this->Errors->chk_errors();
            $this->form_validation->set_rules($config);

            if($this->form_validation->run()== false)
            {
                $this->load->view('header');
                $this->load->view('inscription');
                $this->load->view('footer');

            }else{
                
                $data = $this->input->post();
                $this->load->model('Connexion');
                $this->Connexion->start($data);
            }

        }

        public function connexion()
        {
            $this->load->view('header');
            $this->load->view('connexion');
            $this->load->view('footer');
        }
    }