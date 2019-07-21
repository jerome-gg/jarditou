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

    public function delete($id){

        $this->db->where('user_id', $id);
        $this->db->delete('users');
        return true;
    }

    public function auth_user($data){

        if(isset($data)){
            $requete = $this->db->query('SELECT * FROM users WHERE user_mail =?',$data['user_mail'])->row();
            //$this->load->model('users_model');
            //$this->users_model->user_last_connexion($data);
            
            return $requete;
        }
    }

    public function user_last_connexion($data){
        /**
         * methode pour update la date de dernière connexion
         */
        if(isset($data)){
            $data['user_date_der_co'] = date('Y-m-d');
            $this->db->set('user_date_der_co',$data['user_date_der_co']);
            $this->db->where('user_mail', $data['user_mail']);
            $this->db->update('users');
        }
    }

    public function get_id_user(){
        $this->db->select('user_id');
        $this->db->from('users');
        $this->db->where_in('user_mail',$_SESSION['email']);
        $id = $this->db->get()->result();
        return $id;
    }

    public function log_out(){
        $this->session->sess_destroy();
    }

    public function fetch_all(){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id > 1');
        $requete= $this->db->get()->result();
        return $requete;
    }

    public function right($data){

        $this->db->set('user_droit', $data['user_droit']);
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('users');
        return "droit remplacé";
    }
}