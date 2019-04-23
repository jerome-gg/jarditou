<?php

class Users_model extends CI_Model
{

    public function add($data)
    {   
        
        if(isset($data)){
            array_pop($data); // detruit la dernière ligne du tableau (user_pass2) venant du formulaire pour que la requete insert passe
            //$data['user_role']='visiteur';
            $data['user_date_ins'] = date('Y-m-d');
            
            if ($this->db->insert('users', $data)){
                return true;
            }else{
                return false;
            }
        }
    }

    public function auth_user($data){

        if(isset($data)){
            $requete = $this->db->query('SELECT * FROM users WHERE user_login =?',$data['user_login'])->row();
            $this->load->model('users_model');
            $this->users_model->user_last_connexion($data);
            
            return $requete;
        }
    }

    private function user_last_connexion($data){
        /**
         * methode pour update la derniere connexion
         */
        if(isset($data)){
            $data['user_date_der_co'] = date('Y-m-d');
            $this->db->set('user_date_der_co',$data['user_date_der_co']);
            $this->db->where('user_login', $data['user_login']);
            $this->db->update('users');
        }
    }

    public function session_destroy(){
        $this->session->sess_destroy();
    }
}